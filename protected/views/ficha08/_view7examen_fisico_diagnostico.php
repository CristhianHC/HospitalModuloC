<?php if ($modelFicha08->idSivimiF08 !== NULL) { ?>
    <fieldset>
        <legend> Examen Fisico y Diagnostico</legend>
        <?php
        $this->widget('bootstrap.widgets.TbDetailView', array(
            'data' => $modelFicha08,
            'attributes' => array(
                array(
                    'value' => $modelFicha08->idExfidiF08->id_exfidi,
                    'name' => 'id_exfidi',
                ),
                array(
                    'value' => $modelFicha08->idExfidiF08->via_aerea_destruida,
                    'name' => 'via_aerea_destruida',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idExfidiF08->cabeza,
                    'name' => 'cabeza',
                ),
                array(
                    'value' => $modelFicha08->idExfidiF08->cuello,
                    'name' => 'cuello',
                ),
                array(
                    'value' => $modelFicha08->idExfidiF08->torax,
                    'name' => 'torax',
                ),
                array(
                    'value' => $modelFicha08->idExfidiF08->abdomen,
                    'name' => 'abdomen',
                ),
                array(
                    'value' => $modelFicha08->idExfidiF08->columna,
                    'name' => 'columna',
                ),
                array(
                    'value' => $modelFicha08->idExfidiF08->pelvis,
                    'name' => 'pelvis',
                ),
                array(
                    'value' => $modelFicha08->idExfidiF08->extremidad,
                    'name' => 'extremidad',
                ),
                array(
                    'value' => $modelFicha08->idExfidiF08->observacion,
                    'name' => 'observacion',
                ),
            ),
        ));
    }
    ?>
</fieldset>