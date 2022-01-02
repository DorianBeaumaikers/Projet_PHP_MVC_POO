<?php

namespace Core\Classes;

abstract class Template {
    public static function startZone() {
        ob_start();
    }

    public static function stopZone(string $type) {
        GLOBAL $$type;
        $$type = ob_get_clean();
    }
}