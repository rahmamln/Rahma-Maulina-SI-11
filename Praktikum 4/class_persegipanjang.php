<?php
class persegipanjang {
    private $panjang;
    Private $lebar;
    function __construct ($p, $l) {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    function getKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }

    function getLuas() {
        return $this->panjang * $this->lebar;
    }
}
?>