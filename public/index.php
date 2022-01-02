<?php

require_once "../vendor/autoload.php";
require_once "../core/init.php";
\Core\Classes\App::start();
require_once "../app/routers/index.php";
require_once "../app/views/template/index.php";
\Core\Classes\App::close();