<?php
namespace App\Controllers;
use App\Models\GuitarPractice;

class PracticeController {
    public function logPractice() {
        $date = "2025-07-15";
        $minutes = 54;
        $song = "No One Knows - Queens of the Stone Age";

        $practice = new GuitarPractice();
        $result = $practice->saveSession($date, $minutes, $song);

        include __DIR__ . 'module6a_mvc_project\views\practice_log.php';
    }
}
?>