<?php

/**
 * FlexiBee Tools  - Jasper Project to Report XML packer
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2020 Vitex Software
 */
$destFile = "/home/vitex/Projects/Dativery/VinozArchivu/faktura-blue.xml";
$loadFrom = '/tmp/';

$loaderPath = realpath(__DIR__ . "/../../../autoload.php");
if (file_exists($loaderPath)) {
    require $loaderPath;
} else {
    require __DIR__ . '/../vendor/autoload.php';
}

define('EASE_APPNAME', 'JasperProjectToFlexiBeeXML');
define('EASE_LOGGER', 'syslog|console');


