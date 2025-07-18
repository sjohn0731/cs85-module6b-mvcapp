<?php
namespace App\Models;

class GuitarPractice {
    public function saveSession($date, $minutes, $song) {
        return "Practiced $song for $minutes minutes on $date!";
    }
}

?>