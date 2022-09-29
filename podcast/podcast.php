<?php
// Podcast extension, https://github.com/schulle4u/yellow-extensions-schulle4u/tree/main/podcast
// Based on the yellow Feed extension, https://github.com/datenstrom/yellow-extensions/tree/main/source/feed

class YellowPodcast {
    const VERSION = "0.8.14";
    public $yellow;            //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("podcastLocation", "/podcast/");
        $this->yellow->system->setDefault("podcastFileXml", "podcast.xml");
        $this->yellow->system->setDefault("podcastFilterLayout", "blog");
        $this->yellow->system->setDefault("podcastPaginationLimit", "30");
        $this->yellow->system->setDefault("podcastMimeType", "audio/mpeg");
        $this->yellow->system->setDefault("podcastImageUrl", "");
        $this->yellow->system->setDefault("podcastImageWidth", "144");
        $this->yellow->system->setDefault("podcastImageHeight", "144");
        $this->yellow->system->setDefault("podcastExplicit", "no");
        $this->yellow->system->setDefault("podcastItunesBlock", "no");
        $this->yellow->system->setDefault("podcastCategory", "Music");
        $this->yellow->system->setDefault("podcastSubcategory", "");
    }

    // Handle page parsing
    public function onParsePageLayout($page, $name) {
        if ($name=="podcast") {
            $pages = $this->yellow->content->index(false, false);
            $pagesFilter = array();
            if ($page->isRequest("tag")) {
                $pages->filter("tag", $page->getRequest("tag"));
                array_push($pagesFilter, $pages->getFilter());
            }
            if ($page->isRequest("author")) {
                $pages->filter("author", $page->getRequest("author"));
                array_push($pagesFilter, $pages->getFilter());
            }
            if ($page->isRequest("language")) {
                $pages->filter("language", $page->getRequest("language"));
                array_push($pagesFilter, $pages->getFilter());
            }
            if ($page->isRequest("folder")) {
                $pages->match("#".$page->getRequest("folder")."#i", false);
                array_push($pagesFilter, ucfirst($page->getRequest("folder")));
            }
            $podcastFilterLayout = $this->yellow->system->get("podcastFilterLayout");
            if ($podcastFilterLayout!="none") $pages->filter("layout", $podcastFilterLayout);
            $chronologicalOrder = ($this->yellow->system->get("podcastFilterLayout")!="blog");
            if ($this->isRequestXml($page)) {
                $pages->sort($chronologicalOrder ? "modified" : "published", false);
                $entriesMax = $this->yellow->system->get("podcastPaginationLimit");
                if ($entriesMax==0 || $entriesMax>100) $entriesMax = 100;
                $pages->limit($entriesMax);
                $title = !empty($pagesFilter) ? implode(' ', $pagesFilter)." - ".$this->yellow->page->get("sitename") : $this->yellow->page->get("sitename");
                $this->yellow->page->setLastModified($pages->getModified());
                $this->yellow->page->setHeader("Content-Type", "application/rss+xml; charset=utf-8");
                $output = "<?xml version=\"1.0\" encoding=\"utf-8\"\077>\r\n";
                $output .= "<rss version=\"2.0\" xmlns:content=\"http://purl.org/rss/1.0/modules/content/\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\" xmlns:atom=\"http://www.w3.org/2005/Atom\" xmlns:itunes=\"http://www.itunes.com/dtds/podcast-1.0.dtd\">\r\n";
                $output .= "<channel>\r\n";
                $output .= "<title>".htmlspecialchars($title)."</title>\r\n";
                $output .= "<link>".$this->yellow->page->scheme."://".$this->yellow->page->address.$this->yellow->page->base."/"."</link>\r\n";
                $output .= "<description>".$this->yellow->page->getHtml("description")."</description>\r\n";
                $output .= "<atom:link rel=\"self\" type=\"application/rss+xml\" title=\"".htmlspecialchars($title)."\" href=\"".$this->yellow->page->scheme."://".$this->yellow->page->address.$this->yellow->page->base."/"."\" />\r\n";
                if ($this->yellow->system->get("podcastImageUrl")) {
                    $output .= "<image>\r\n";
                    $output .= "<url>".$this->yellow->system->get("podcastImageUrl")."</url>\r\n";
                    $output .= "<title>".$this->yellow->page->getHtml("sitename")."</title>\r\n";
                    $output .= "<link>".$this->yellow->page->scheme."://".$this->yellow->page->address.$this->yellow->page->base."/"."</link>\r\n";
                    $output .= "<width>".$this->yellow->system->get("podcastImageWidth")."</width>\r\n";
                    $output .= "<height>".$this->yellow->system->get("podcastImageHeight")."</height>\r\n";
                    $output .= "</image>\r\n";
                }
                $output .= "<itunes:author>".$this->yellow->page->getHtml("author")."</itunes:author>\r\n";
                $output .= "<itunes:summary>".$this->yellow->page->getHtml("description")."</itunes:summary>\r\n";
                if ($this->yellow->system->get("podcastImageUrl")) $output .= "<itunes:image href=\"".$this->yellow->system->get("podcastImageUrl")."\" />\r\n";
                $output .= "<itunes:subtitle>".$this->yellow->page->getHtml("description")."</itunes:subtitle>\r\n";
                $output .= "<itunes:keywords>".$this->yellow->page->getHtml("tag")."</itunes:keywords>\r\n";
                $output .= "<itunes:explicit>".$this->yellow->system->get("podcastExplicit")."</itunes:explicit>\r\n";
                $output .= "<itunes:block>".$this->yellow->system->get("podcastItunesBlock")."</itunes:block>\r\n";
                $output .= "<itunes:owner>\r\n";
                $output .= "<itunes:email>".$this->yellow->system->get("email")."</itunes:email>\r\n";
                $output .= "<itunes:name>".$this->yellow->page->getHtml("author")."</itunes:name>\r\n";
                $output .= "</itunes:owner>\r\n";
                if ($this->yellow->system->get("podcastSubcategory")) {
                    $output .= "<itunes:category text=\"".$this->yellow->system->get("podcastCategory")."\"><itunes:category text=\"".$this->yellow->system->get("podcastSubcategory")."\"/></itunes:category>\r\n";
                } else {
                    $output .= "<itunes:category text=\"".$this->yellow->system->get("podcastCategory")."\" />\r\n";
                }
                $output .= "<language>".$this->yellow->page->getHtml("language")."</language>\r\n";
                foreach ($pages as $pagePodcast) {
                    $timestamp = strtotime($pagePodcast->get($chronologicalOrder ? "modified" : "published"));
                    $content = $this->yellow->toolbox->createTextDescription($pagePodcast->getContent(), 0, false, "<!--more-->", " <a href=\"".$page->getUrl()."\">".$this->yellow->language->getTextHtml("blogMore")."</a>");
                    $output .= "<item>\r\n";
                    $output .= "<title>".$pagePodcast->getHtml("title")."</title>\r\n";
                    $output .= "<link>".$pagePodcast->getUrl()."</link>\r\n";
                    $output .= "<pubDate>".date(DATE_RSS, $timestamp)."</pubDate>\r\n";
                    $output .= "<guid isPermaLink=\"false\">".$pagePodcast->getUrl()."?".$timestamp."</guid>\r\n";
                    $output .= "<dc:creator>".$pagePodcast->getHtml("author")."</dc:creator>\r\n";
                    $output .= "<description>".$pagePodcast->getHtml("description")."</description>\r\n";
                    $output .= "<content:encoded><![CDATA[".$content."]]></content:encoded>\r\n";
                    if ($pagePodcast->isExisting("mediafile")) $output .= "<enclosure url=\"".$this->parseUrl($pagePodcast->getHtml("mediafile"))."\" length=\"0\" type=\"".$this->yellow->system->get("podcastMimeType")."\" />\r\n";
                    if ($pagePodcast->isExisting("duration")) $output .= "<itunes:duration>".$pagePodcast->getHtml("duration")."</itunes:duration>\r\n";
                    $output .= "<itunes:subtitle>".$pagePodcast->getHtml("description")."</itunes:subtitle>\r\n";
                    $output .= "<itunes:summary><![CDATA[".$content."]]></itunes:summary>\r\n";
                    if ($pagePodcast->isExisting("tag")) $output .= "<itunes:keywords>".$pagePodcast->getHtml("tag")."</itunes:keywords>\r\n";
                    $output .= "<itunes:author>".$pagePodcast->getHtml("author")."</itunes:author>\r\n";
                    $output .= "</item>\r\n";
                }
                $output .= "</channel>\r\n";
                $output .= "</rss>\r\n";
                $this->yellow->page->setOutput($output);
            } else {
                $pages->sort($chronologicalOrder ? "modified" : "published", false);
                if (!empty($pagesFilter)) {
                    $text = implode(' ', $pagesFilter);
                    $this->yellow->page->set("titleHeader", $text." - ".$this->yellow->page->get("sitename"));
                    $this->yellow->page->set("titleContent", $this->yellow->page->get("title").": ".$text);
                    $this->yellow->page->set("title", $this->yellow->page->get("title").": ".$text);
                }
                $this->yellow->page->set("podcastChronologicalOrder", $chronologicalOrder);
                $this->yellow->page->setPages("podcast", $pages);
                $this->yellow->page->setLastModified($pages->getModified());
            }
        }
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $locationPodcast = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("podcastLocation");
            $locationPodcast .= $this->yellow->toolbox->normaliseArguments("page:".$this->yellow->system->get("podcastFileXml"), false);
            $output = "<link rel=\"alternate\" type=\"application/rss+xml\" href=\"$locationPodcast\" />\n";
        }
        return $output;
    }
    
    // Check if XML requested
    public function isRequestXml($page) {
        return $page->getRequest("page")==$this->yellow->system->get("podcastFileXml");
    }
    
    // Parse URL
    public function parseUrl($url) {
        if ($this->yellow->system->isExisting("audioUrlPrefix")) $url = $this->yellow->system->get("audioUrlPrefix").$url;
        if (!preg_match("/^\w+:/", $url)) {
            $url = $this->yellow->system->get("coreServerBase").$url;
        } else {
            $url = $this->yellow->lookup->normaliseUrl("", "", "", $url);
        }
        
        return $url;
    }
}
