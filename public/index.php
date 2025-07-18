<?php
require __DIR__ . 'module6a_mvc_project\vendor\autoload.php';
use App\Controllers\PracticeController;

$controller = new PracticeController();
$controller->logPractice();

?>