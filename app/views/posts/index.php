<?php

?>

<?php \Core\Classes\Template::startZone(); ?>
    <?php echo "Home"; ?>
<?php \Core\Classes\Template::stopZone("title"); ?>

<?php \Core\Classes\Template::startZone(); ?>

<?php foreach($posts as $post):?>
<div>
    <h5><?php echo $post->getTitle(); ?></h5>
    <p><?php echo $post->getResume(); ?></p>
    <a href="page/<?php echo $post->getID();?>">Read More</a>
    <hr>
</div>
<?php endforeach;?>

<?php \Core\Classes\Template::stopZone("content"); ?>