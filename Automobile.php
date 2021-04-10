<?php
class Automobile{
    public $licensePplate;
    public $brand;
    public $model;
    public $modelYear;
    public $color;

    public function __constructor($licensePlate,$brand,$model,$modelYear,$color){
        $this->licensePlate=$licensePlate;
        $this->brand=$brand;
        $this->model=$model;
        $this->modelYear=$modelYear;
        $this->color=$color;
    }
    function __toString(){
        return $this->licensePlate. ", ".
                $this->brand.", ".
                $this->model.", ".
                $this->modelYear.", ".
                $this->color;
    }
}
?>