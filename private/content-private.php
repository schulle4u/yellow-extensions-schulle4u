<div class="content">
<?php $yellow->snippet("sidebar") ?>
<div class="main" role="main">
<h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
<?php if(trim($_REQUEST["password"])!==$yellow->page->get("password")): ?>
<p class="private-message"><?php echo $yellow->page->getHtml("description") ?></p>
<form class="private-form" action="<?php echo $yellow->page->getLocation(true) ?>" method="post">
<p class="private-password"><label for="password"><?php echo $yellow->text->getHtml("editLoginPassword") ?></label><br /><input type="password" class="form-control" name="password" id="password" value="<?php echo htmlspecialchars($_REQUEST["password"]) ?>" /></p>
<input type="submit" value="<?php echo $yellow->text->getHtml("EditLoginButton") ?>" class="btn login-btn" />
</form>
<?php else: ?>
<?php echo $yellow->page->getContent() ?>
<?php endif ?>
</div>
</div>
