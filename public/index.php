<?php
ini_set('display_errors', 1); // TODO remove

require_once('../vendor/autoload.php');

(new \ToDo\Controllers\ToDo(\ToDo\Helpers\Container::getInstance()))->getTasksList();