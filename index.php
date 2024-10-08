<?php
/**
 * APP: Laika
 * Author: Showket Ahmed
 * APP Link: https://cloudbillmaster.com
 * Email: riyadtayf@gmail.com
 * Version: 1.0.0
 * Provider: Cloud Bill Master Ltd.
 */

define('ROOTPATH', __DIR__);

require_once(ROOTPATH.'/app/Init.php');

// Run Application
$app = new CBM\app\App;
echo $app->cons->webhost();
$app->run();
