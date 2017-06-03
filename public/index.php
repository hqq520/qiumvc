<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-06-02
 * Time: 23:16
 */
define('DS',DIRECTORY_SEPARATOR);
defined('ROOT_DIR') or define('ROOT_DIR', __DIR__.DS.'../');

require_once ROOT_DIR.'vendor\autoload.php';

core\qiumvc::run();