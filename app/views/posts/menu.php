<?php

?>

<ul class="right hide-on-med-and-down">
    <?php foreach ($posts as $post) : ?>
        <li><a href="page/<?php echo $post->getID();?>">Page <?php echo $post->getID();?></a></li>
    <?php endforeach; ?>
</ul>

<ul id="nav-mobile" class="sidenav">
    <?php foreach ($posts as $post) : ?>
        <li><a href="page/<?php echo $post->getID();?>">Page <?php echo $post->getID();?></a></li>
    <?php endforeach; ?>
</ul>