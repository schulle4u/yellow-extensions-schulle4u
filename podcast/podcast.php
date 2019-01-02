<?php
// Podcast Plugin, https://github.com/schulle4u/yellow-plugins-schulle4u/tree/master/podcast
// Based on the yellow Feed plugin, https://github.com/datenstrom/yellow-plugins/tree/master/feed
// Copyright (c) 2013-2018 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowPodcast {
    const VERSION = "0.7.5";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->config->setDefault("podcastLocation", "/podcast/");
        $this->yellow->config->setDefault("podcastFileXml", "podcast.xml");
        $this->yellow->config->setDefault("podcastFilter", "blog");
        $this->yellow->config->setDefault("podcastPaginationLimit", "30");
        $this->yellow->config->setDefault("podcastMimeType", "audio/mpeg");
        $this->yellow->config->setDefault("podcastImageUrl", "");
        $this->yellow->config->setDefault("podcastImageWidth", "144");
        $this->yellow->config->setDefault("podcastImageHeight", "144");
        $this->yellow->config->setDefault("podcastKeywords", "");
        $this->yellow->config->setDefault("podcastExplicit", "no");
        $this->yellow->config->setDefault("podcastItunesBlock", "no");
        $this->yellow->config->setDefault("podcastCategory", "Music");
        $this->yellow->config->setDefault("podcastSubcategory", "");
    }

    // Handle page parsing
    public function onParsePage() {
        if ($this->yellow->page->get("template")=="podcast") {
            $pages = $this->yellow->pages->index(false, false);
            $pagesFilter = array();
            if ($_REQUEST["tag"]) {
                $pages->filter("tag", $_REQUEST["tag"]);
                array_push($pagesFilter, $pages->getFilter());
            }
            if ($_REQUEST["author"]) {
                $pages->filter("author", $_REQUEST["author"]);
                array_push($pagesFilter, $pages->getFilter());
            }
            $podcastFilter = $this->yellow->config->get("podcastFilter");
            if (!empty($podcastFilter)) $pages->filter("template", $podcastFilter);
            $chronologicalOrder = ($this->yellow->config->get("podcastFilter")!="blog");
            if ($this->isRequestXml()) {
                $pages->sort($chronologicalOrder ? "modified" : "published", false);
                $pages->limit($this->yellow->config->get("podcastPaginationLimit"));
                $title = !empty($pagesFilter) ? implode(' ', $pagesFilter)." - ".$this->yellow->page->get("sitename") : $this->yellow->page->get("sitename");
                $this->yellow->page->setLastModified($pages->getModified());
                $this->yellow->page->setHeader("Content-Type", "application/rss+xml; charset=utf-8");
                $output = "<?xml version=\"1.0\" encoding=\"utf-8\"\077>\r\n";
                $output .= "<rss version=\"2.0\" xmlns:content=\"http://purl.org/rss/1.0/modules/content/\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\" xmlns:atom=\"http://www.w3.org/2005/Atom\" xmlns:itunes=\"http://www.itunes.com/dtds/podcast-1.0.dtd\">\r\n";
                $output .= "<channel>\r\n";
                $output .= "<title>".htmlspecialchars($title)."</title>\r\n";
                $output .= "<link>".$this->yellow->page->scheme."://".$this->yellow->page->address.$this->yellow->page->base."/"."</link>\r\n";
                $output .= "<description>".$this->yellow->page->getHtml("tagline")."</description>\r\n";
                $output .= "<atom:link rel=\"self\" type=\"application/rss+xml\" title=\"".htmlspecialchars($title)."\" href=\"".$this->yellow->page->scheme."://".$this->yellow->page->address.$this->yellow->page->base."/"."\" />\r\n";
                if ($this->yellow->config->get("podcastImageUrl")) {
                    $output .= "<image>\r\n";
                    $output .= "<url>".$this->yellow->config->get("podcastImageUrl")."</url>\r\n";
                    $output .= "<title>".$this->yellow->page->getHtml("sitename")."</title>\r\n";
                    $output .= "<link>".$this->yellow->page->scheme."://".$this->yellow->page->address.$this->yellow->page->base."/"."</link>\r\n";
                    $output .= "<width>".$this->yellow->config->get("podcastImageWidth")."</width>\r\n";
                    $output .= "<height>".$this->yellow->config->get("podcastImageHeight")."</height>\r\n";
                    $output .= "</image>\r\n";
                }
                $output .= "<itunes:author>".$this->yellow->page->getHtml("author")."</itunes:author>\r\n";
                $output .= "<itunes:summary>".$this->yellow->page->getHtml("tagline")."</itunes:summary>\r\n";
                if ($this->yellow->config->get("podcastImageUrl")) $output .= "<itunes:image href=\"".$this->yellow->config->get("podcastImageUrl")."\" />\r\n";
                $output .= "<itunes:subtitle>".$this->yellow->page->getHtml("tagline")."</itunes:subtitle>\r\n";
                $output .= "<itunes:keywords>".$this->yellow->config->get("podcastKeywords")."</itunes:keywords>\r\n";
                $output .= "<itunes:explicit>".$this->yellow->config->get("podcastExplicit")."</itunes:explicit>\r\n";
                $output .= "<itunes:block>".$this->yellow->config->get("podcastItunesBlock")."</itunes:block>\r\n";
                $output .= "<itunes:owner>\r\n";
                $output .= "<itunes:email>".$this->yellow->config->get("email")."</itunes:email>\r\n";
                $output .= "<itunes:name>".$this->yellow->page->getHtml("author")."</itunes:name>\r\n";
                $output .= "</itunes:owner>\r\n";
                if ($this->yellow->config->get("podcastSubcategory")) {
                    $output .= "<itunes:category text=\"".$this->yellow->config->get("podcastCategory")."\"><itunes:category text=\"".$this->yellow->config->get("podcastSubcategory")."\"/></itunes:category>\r\n";
                } else {
                    $output .= "<itunes:category text=\"".$this->yellow->config->get("podcastCategory")."\" />\r\n";
                }
                $output .= "<language>".$this->yellow->page->getHtml("language")."</language>\r\n";
                foreach ($pages as $page) {
                    $timestamp = strtotime($page->get($chronologicalOrder ? "modified" : "published"));
                    $content = $this->yellow->toolbox->createTextDescription($page->getContent(), 0, false, "<!--more-->", " <a href=\"".$page->getUrl()."\">".$this->yellow->text->getHtml("blogMore")."</a>");
                    $output .= "<item>\r\n";
                    $output .= "<title>".$page->getHtml("title")."</title>\r\n";
                    $output .= "<link>".$page->getUrl()."</link>\r\n";
                    $output .= "<pubDate>".date(DATE_RSS, $timestamp)."</pubDate>\r\n";
                    $output .= "<guid isPermaLink=\"false\">".$page->getUrl()."?".$timestamp."</guid>\r\n";
                    $output .= "<dc:creator>".$page->getHtml("author")."</dc:creator>\r\n";
                    $output .= "<description>".$page->getHtml("description")."</description>\r\n";
                    $output .= "<content:encoded><![CDATA[".$content."]]></content:encoded>\r\n";
                    
                    if ($page->isExisting("mediafile")) $output .= "<enclosure url=\"".$this->parseUrl($page->getHtml("mediafile"))."\" length=\"0\" type=\"".$this->yellow->config->get("podcastMimeType")."\" />\r\n";
                    if ($page->isExisting("duration")) $output .= "<itunes:duration>".$page->getHtml("duration")."</itunes:duration>\r\n";
                    $output .= "<itunes:subtitle>".$page->getHtml("description")."</itunes:subtitle>\r\n";
                    $output .= "<itunes:summary><![CDATA[".$content."]]></itunes:summary>\r\n";
                    if ($page->isExisting("tag")) $output .= "<itunes:keywords>".$page->getHtml("tag")."</itunes:keywords>\r\n";
                    $output .= "<itunes:author>".$page->getHtml("author")."</itunes:author>\r\n";
                    $output .= "</item>\r\n";
                }
                $output .= "</channel>\r\n";
                $output .= "</rss>\r\n";
                $this->yellow->page->setOutput($output);
            } else {
                $pages->sort($chronologicalOrder ? "modified" : "published");
                $pages->pagination($this->yellow->config->get("podcastPaginationLimit"));
                if (!$pages->getPaginationNumber()) $this->yellow->page->error(404);
                if (!empty($pagesFilter)) {
                    $title = implode(' ', $pagesFilter);
                    $this->yellow->page->set("titleHeader", $title." - ".$this->yellow->page->get("sitename"));
                    $this->yellow->page->set("titleContent", $this->yellow->page->get("title").": ".$title);
                }
                $this->yellow->page->set("podcastChronologicalOrder", $chronologicalOrder);
                $this->yellow->page->setPages($pages);
                $this->yellow->page->setLastModified($pages->getModified());
            }
        }
    }
    
    // Handle page extra HTML data
    public function onExtra($name) {
        $output = NULL;
        if ($name=="header") {
            $pagination = $this->yellow->config->get("contentPagination");            
            $tag = $_REQUEST["tag"];
            $locationPodcast = $this->yellow->config->get("serverBase").$this->yellow->config->get("podcastLocation");
            if ($tag) $locationPodcast .= $this->yellow->toolbox->normaliseArgs("tag:$tag", true);
            $locationPodcast .= $this->yellow->toolbox->normaliseArgs("$pagination:".$this->yellow->config->get("podcastFileXml"), false);
            $output = "<link rel=\"alternate\" type=\"application/rss+xml\" href=\"$locationPodcast\" />\n";
        }
        return $output;
    }
    
    // Check if XML requested
    public function isRequestXml() {
        $pagination = $this->yellow->config->get("contentPagination");
        return $_REQUEST[$pagination]==$this->yellow->config->get("podcastFileXml");
    }
    
    // Parse URL
    public function parseUrl($url) {
        if ($this->yellow->config->isExisting("audioUrlPrefix")) $url = $this->yellow->config->get("audioUrlPrefix").$url;
        if (!preg_match("/^\w+:/", $url)) {
            $url = $this->yellow->config->get("serverBase").$url;
        } else {
            $url = $this->yellow->lookup->normaliseUrl("", "", "", $url);
        }
        
        return $url;
    }
}
