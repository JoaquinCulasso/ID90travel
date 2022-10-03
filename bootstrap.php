<?php

const ROOT_DIRECTORY = __DIR__;
const APP_DIRECTORY = ROOT_DIRECTORY . '/app';
const VIEW_PATH = ROOT_DIRECTORY . '/public';
define("FOLDER_PATH", dirname($_SERVER['SCRIPT_NAME']));

require ROOT_DIRECTORY . '/vendor/autoload.php';
