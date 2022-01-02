<?php

if(isset($_GET["pageID"])){
    $postCTRL = new \App\Controllers\PostsController();
    $postCTRL->show($_GET["pageID"]);
}
else{
    $postCTRL = new \App\Controllers\PostsController();
    $postCTRL->index();
}

