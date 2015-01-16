<?php if ($modelFicha08->idLocalizacionLesionesF08 !== NULL) { ?>
        <fieldset>
            <legend>Localizacion de Lesiones</legend>
    <?php
            $this->widget( 'bootstrap.widgets.TbDetailView', array(
                'data' => $modelFicha08,
                'attributes' => array(
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->id_localizacion_lesiones,
                        'name' => 'herida_penetrante',
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->herida_penetrante,
                        'name' => 'herida_penetrante',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->herida_cortante,
                        'name' => 'herida_cortante',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->fractura_expuesta,
                        'name' => 'fractura_expuesta',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->fractura_cerrada,
                        'name' => 'fractura_cerrada',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->cuerpo_extrano,
                        'name' => 'cuerpo_extrano',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->hemorragia,
                        'name' => 'hemorragia',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->mordedura,
                        'name' => 'mordedura',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->picadura,
                        'name' => 'picadura',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->excoriacion,
                        'name' => 'excoriacion',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->deformidad_masa,
                        'name' => 'deformidad_masa',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->hematoma,
                        'name' => 'hematoma',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->eritema_inflamacion,
                        'name' => 'eritema_inflamacion',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->luxacion_esguince,
                        'name' => 'luxacion_esguince',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->quemadura,
                        'name' => 'quemadura',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->otro,
                        'name' => 'otro',
                    'type' => 'boolean'
                    ),
                    array(
                        'value' => $modelFicha08->idLocalizacionLesionesF08->definicion_cuerpo,
                        'name' => 'definicion_cuerpo',
                ),
    ),
    ));
    }
    ?>
</fieldset>