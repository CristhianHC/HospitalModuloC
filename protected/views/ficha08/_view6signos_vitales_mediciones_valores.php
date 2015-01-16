<?php if ($modelFicha08->idSivimiF08 !== NULL) { ?>
        <fieldset>
            <legend>Signos Vitales mediciones y valores</legend>

    <?php
            $this->widget( 'bootstrap.widgets.TbDetailView', array(
        'data' => $modelFicha08,
        'attributes' => array(
            array(
                'value' => $modelFicha08->idSivimiF08->id_sivimi,
            'name' => 'id_sivimi',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->presion_arterial,
                'name' => 'presion_arterial',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->frecuencia_cardiaca,
                'name' => 'frecuencia_cardiaca',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->frecuencia_respiratoria,
                'name' => 'frecuencia_respiratoria',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->temperatura_bucal,
                'name' => 'temperatura_bucal',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->temperatura_axilar,
                'name' => 'temperatura_axilar',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->peso_kg,
            'name' => 'peso_kg',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->talla_metro,
                'name' => 'talla_metro',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->ocular_glasgow,
                'name' => 'ocular_glasgow',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->verbal_glasgow,
                'name' => 'verbal_glasgow',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->motora_glasgow,
                'name' => 'motora_glasgow',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->total_glasgow,
                'name' => 'total_glasgow',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->reaccion_pupila_derecha,
                'name' => 'reaccion_pupila_derecha',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->reaccion_pupila_izquierda,
                'name' => 'reaccion_pupila_izquierda',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->total_llenado_capilar,
                'name' => 'total_llenado_capilar',
            ),
            array(
                'value' => $modelFicha08->idSivimiF08->satura_oxigeno,
                'name' => 'satura_oxigeno',
            ),
    ),
    ));
    }
    ?>
</fieldset>