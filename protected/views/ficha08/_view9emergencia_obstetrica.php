<?php if ($modelFicha08->idSivimiF08 !== NULL) { ?>
    <fieldset>
        <legend>Emergencia Obstetrica</legend>
        <?php
        $this->widget('bootstrap.widgets.TbDetailView', array(
            'data' => $modelFicha08,
            'attributes' => array(
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->id_emergencia_obstetrica,
                    'name' => 'id_emergencia_obstetrica',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->gestas,
                    'name' => 'gestas',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->partos,
                    'name' => 'partos',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->abortos,
                    'name' => 'abortos',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->cesareas,
                    'name' => 'cesareas',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->fecha_ultima_menstruacion,
                    'name' => 'fecha_ultima_menstruacion',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->semanas_gestacion,
                    'name' => 'semanas_gestacion',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->movimiento_fetal,
                    'name' => 'movimiento_fetal',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->frecuencia_c_fetal,
                    'name' => 'frecuencia_c_fetal',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->membranas_rotas,
                    'name' => 'membranas_rotas',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->tiempo,
                    'name' => 'tiempo',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->altura_uterina,
                    'name' => 'altura_uterina',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->presentacion,
                    'name' => 'presentacion',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->dilatacion,
                    'name' => 'dilatacion',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->borramiento,
                    'name' => 'borramiento',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->plano,
                    'name' => 'plano',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->pelvis_util,
                    'name' => 'pelvis_util',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->sangrado_vaginal,
                    'name' => 'sangrado_vaginal',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->contracciones,
                    'name' => 'contracciones',
                ),
                array(
                    'value' => $modelFicha08->idEmergenciaObstetricaF08->observacion,
                    'name' => 'observacion',
                ),
            ),
        ));
    }
    ?>
</fieldset>