<fieldset>
    <legend><h4>Inicio atencion y motivo</h4></legend>
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
        'data' => $modelFicha08,
        'attributes' => array(
            array(
                'name' => 'hora',
                'value' => $modelFicha08->idIamF08->hora,
                'type' => 'html',
            ),
            array(
                'name' => 'trauma',
                'value' => $modelFicha08->idIamF08->trauma,
                'type' => 'boolean',
            ),
            array(
                'name' => 'causa_clinica',
                'value' => $modelFicha08->idIamF08->causa_clinica,
                'type' => 'boolean',
            ),
            array(
                'name' => 'causa_gobstetrica',
                'value' => $modelFicha08->idIamF08->causa_gobstetrica,
                'type' => 'boolean',
            ),
            array(
                'name' => 'causa_quirurgica',
                'value' => $modelFicha08->idIamF08->causa_quirurgica,
                'type' => 'boolean',
            ),
            array(
                'name' => 'notificacion_policia',
                'value' => $modelFicha08->idIamF08->notificacion_policia,
                'type' => 'boolean',
            ),
            array(
                'name' => 'otro_motivo',
                'value' => $modelFicha08->idIamF08->otro_motivo,
            ),
            array(
                'name' => 'grupo_sanguineo_factor_rh',
                'value' => $modelFicha08->idIamF08->grupo_sanguineo_factor_rh,
            ),
        ),
    ));
    ?>
</fieldset>
