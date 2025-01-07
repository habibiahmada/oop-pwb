<?php
require_once "Animal.php";

// inisialisasi fungsi ape
class Ape extends Animal {
    public $legs = 2;
    public function yell() {
        return "auooo";
    }
}

?>