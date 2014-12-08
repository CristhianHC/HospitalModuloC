<?php

class ValidacionesFicha08 extends CFormModel{
    public $alergico;
    public $clinico;
    public $ginecologico;
    public $traumatologo;
    public $quirurgico;
    public $farmacologico;
    public $psiquiatrico;
    public $otro;
    public $ruc;
    
    public $via_area_libre;
    public $via_area_obstruida;
    public $condicion_estable;
    public $condicion_inestable;
    public $comentario5;
    
    public $presion_arterial;
    public $presion_cardiaca;
    public $f_respirat_min;
    public $temp_bucal;
    public $temp_axilar;
    public $peso;
    public $talla;
    public $ocular;
    public $verbal;
    public $motora;
    public $total;
    public $reaccion_pupila_der;
    public $reaccion_pupila_izq;
    public $t_llenado_capilar;
    public $satura_oxigeno;
    
    
    
     public function rules(){
        return array(
        );           
    }
}
