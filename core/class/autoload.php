<?php

class autoload {
    public static function autoloader () {
        require_once 'core/class/helper.class.php';
        require_once 'core/class/template.class.php';
        require_once 'core/class/SitemapGenerator.class.php';
        require_once 'core/class/phpmailer/phpmailer.class.php';
        require_once 'core/class/phpmailer/exception.class.php';
        require_once "core/vendor/jsondb/Dot.php";
        require_once "core/vendor/jsondb/JsonDb.php";
    }
}