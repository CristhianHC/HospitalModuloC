<?php

class ValidacionesFicha08 extends CFormModel {

    public $herina_penetrante, $herda_cortante, $fractura_expuesta, $fractura_cerrada, $cuerpo_extraño, $hemorragia, $mordedura,
            $picadura, $excoriacion, $deformidad_masa, $hematoma, $eritema_inflacion, $luxacion_esguince, $quemadura;
    public $via_area_obstruida, $cabeza, $cuello, $torax, $abdomen, $columna, $pelvis, $extremidad;
    public $gestas;

    public function rules() {
        return array(
        );
    }

}
