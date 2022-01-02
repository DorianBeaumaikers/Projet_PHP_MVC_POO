<?php

?>

<?php \Core\Classes\Template::startZone(); ?>
    <?php echo ucfirst($post->getTitle()); ?>
<?php \Core\Classes\Template::stopZone("title"); ?>

<?php \Core\Classes\Template::startZone(); ?>

<div>
    <h5><?php echo $post->getTitle(); ?></h5>
    <p><?php echo $post->getContent(); ?></p>
</div>

<?php \Core\Classes\Template::stopZone("content"); ?>