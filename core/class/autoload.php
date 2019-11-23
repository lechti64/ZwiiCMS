<?php

class autoload {
    public static function autoloader () {
        require 'core/class/helper.class.php';
        require 'core/class/template.class.php';
        require 'core/class/SitemapGenerator.class.php';
        require 'core/class/phpmailer/phpmailer.class.php';
        require 'core/class/phpmailer/exception.class.php';
    }
}