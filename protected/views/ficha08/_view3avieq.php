<fieldset>
    <legend><h4>ACCIDENTE, VIOLENCIA, INTOXICACIÓN, ENVENENAMIENTO O QUEMADURA</h4></legend>
    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
        'data' => $modelFicha08,
        'attributes' => array(
            array(
                'name' => 'lugar_evento',
                'value' => $modelFicha08->idAvieqF08->lugar_evento,
            ),
            array(
                'name' => 'trauma',
                'value' => $modelFicha08->idAvieqF08->direccion_evento,
                'type' => 'boolean',
            ),
            array(
                'name' => 'custodia_policial',
                'value' => $modelFicha08->idAvieqF08->custodia_policial,
                'type' => 'boolean'
            ),
            array(
                'name' => 'accidente_transito',
                'value' => $modelFicha08->idAvieqF08->accidente_transito,
                'type' => 'boolean'
            ),
            array(
                'name' => 'caida',
                'value' => $modelFicha08->idAvieqF08->caida,
                'type' => 'boolean'
            ),
            array(
                'name' => 'quemadura',
                'value' => $modelFicha08->idAvieqF08->quemadura,
                'type' => 'boolean'
            ),
            array(
                'name' => 'mordedura',
                'value' => $modelFicha08->idAvieqF08->mordedura,
                'type' => 'boolean'
            ),
            array(
                'name' => 'ahogamiento',
                'value' => $modelFicha08->idAvieqF08->ahogamiento,
                'type' => 'boolean'
            ),
            array(
                'name' => 'cuerpo_extrano',
                'value' => $modelFicha08->idAvieqF08->cuerpo_extrano,
                'type' => 'boolean'
            ),
            array(
                'name' => 'aplastamiento',
                'value' => $modelFicha08->idAvieqF08->aplastamiento,
                'type' => 'boolean'
            ),
            array(
                'name' => 'violencia_arma_fuego',
                'value' => $modelFicha08->idAvieqF08->violencia_arma_fuego,
                'type' => 'boolean'
            ),
            array(
                'name' => 'violencia_arma_corto_punzante',
                'value' => $modelFicha08->idAvieqF08->violencia_arma_cpunzante,
                'type' => 'boolean'
            ),
            array(
                'name' => 'otro_accidente',
                'value' => $modelFicha08->idAvieqF08->otro_accidente,
                'type' => 'boolean'
            ),
            array(
                'name' => 'violencia_por_riña',
                'value' => $modelFicha08->idAvieqF08->violencia_rina,
                'type' => 'boolean'
            ),
            array(
                'name' => 'violencia_familiar',
                'value' => $modelFicha08->idAvieqF08->violencia_familiar,
                'type' => 'boolean'
            ),
            array(
                'name' => 'abuso_fisico',
                'value' => $modelFicha08->idAvieqF08->abuso_fisico,
                'type' => 'boolean'
            ),
            array(
                'name' => 'abuso_psicologico',
                'value' => $modelFicha08->idAvieqF08->abuso_psicologico,
                'type' => 'boolean'
            ),
            array(
                'name' => 'abuso_sexual',
                'value' => $modelFicha08->idAvieqF08->abuso_sexual,
                'type' => 'boolean'
            ),
            array(
                'name' => 'otra_violencia',
                'value' => $modelFicha08->idAvieqF08->otra_violencia,
                'type' => 'boolean'
            ),
            array(
                'name' => 'intoxicacion_alcoholica',
                'value' => $modelFicha08->idAvieqF08->intoxicacion_alcoholica,
                'type' => 'boolean'
            ),
            array(
                'name' => 'intoxicacion_alimentaria',
                'value' => $modelFicha08->idAvieqF08->intoxicacion_alimentaria,
                'type' => 'boolean'
            ),
            array(
                'name' => 'intoxicacion_drogas',
                'value' => $modelFicha08->idAvieqF08->intoxicacion_drogas,
                'type' => 'boolean'
            ),
            array(
                'name' => 'inhalacion_de_gases',
                'value' => $modelFicha08->idAvieqF08->inhalacion_de_gases,
                'type' => 'boolean'
            ),
            array(
                'name' => 'otra_intoxicacion',
                'value' => $modelFicha08->idAvieqF08->otra_intoxicacion,
                'type' => 'boolean'
            ),
            array(
                'name' => 'envenenamiento',
                'value' => $modelFicha08->idAvieqF08->envenenamiento,
                'type' => 'boolean'
            ),
            array(
                'name' => 'picadura',
                'value' => $modelFicha08->idAvieqF08->picadura,
                'type' => 'boolean'
            ),
            array(
                'name' => 'anafilaxia',
                'value' => $modelFicha08->idAvieqF08->anafilaxia,
                'type' => 'boolean'
            ),
            array(
                'name' => 'observaciones',
                'value' => $modelFicha08->idAvieqF08->observaciones,
                'type' => 'text'
            ),
            array(
                'name' => 'aliento_etilico',
                'value' => $modelFicha08->idAvieqF08->aliento_etilico,
                'type' => 'boolean'
            ),
            array(
                'name' => 'valor_alcocheck',
                'value' => $modelFicha08->idAvieqF08->valor_alcocheck,
                'type' => 'number'
            ),
            array(
                'name' => 'fecha_hora_evento',
                'value' => $modelFicha08->idAvieqF08->fecha_hora_evento,
                'type' => 'datetime'
            ),
        ),
    ));
    ?>
</fieldset>