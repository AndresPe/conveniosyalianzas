<?php
class ConveniosNac
{
    public $id;
    public $detalle;
    public $publico;
    public $ciudad;
    public $universidad;
    public $tipo;
    public $duracion;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}
?>