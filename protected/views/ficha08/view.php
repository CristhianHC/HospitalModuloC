    <?php $this->renderPartial('_2inicio_atencion_y_motivo', array('model' => $modelInicioAtencionMotivo)); ?>
    <?php $this->renderPartial('_3accidente_violencia_intoxicacion_envenenamiento_quemadura', array('modelAvieq' => $modelAvieq)); ?>
    <?php $this->renderPartial('_4antescendentes_personales_familiares', array('modelAPF' => $modelAPF)); ?>
    <?php $this->renderPartial('_5enfermedad_actual_y_revisicion_de_sistema', array('modelEARS'=>$modelEARS,)); ?>
    <?php $this->renderPartial('_6signos_vitales_mediciones_valores', array('model' => $modelSVM)); ?>
    <?php $this->renderPartial('_7examen_fisico_y_diagnostico', array('model' => $modelEFD)); ?>
    <?php $this->renderPartial('_8localizacion_de_lesiones', array('model' => $modelLL)); ?>
    <?php $this->renderPartial('_9emergencia_obstetrica', array('model' => $modelEO)); ?>
<fieldset>
    <legend><h3>Ficha 08</h3></legend>

    <?php
    $this->widget('bootstrap.widgets.TbDetailView', array(
        'data' => $modelFicha08,
        'attributes' => array(
            'id_f08',
            'fecha_emision',
        ),
    ));
    ?>
</fieldset>
<?php $this->renderPartial('_view2inicio_atencion_paciente', array('modelFicha08' => $modelFicha08)); ?>
<?php $this->renderPartial('_view3avieq', array('modelFicha08' => $modelFicha08)); ?>
<?php $this->renderPartial('_view4antescedentes_personales_familiares', array('modelFicha08' => $modelFicha08)); ?>
<?php $this->renderPartial('_view5enfermedad_actual_revision_sistemas', array('modelFicha08' => $modelFicha08)); ?>
<?php $this->renderPartial('_view6signos_vitales_mediciones_valores', array('modelFicha08' => $modelFicha08)); ?>
<?php $this->renderPartial('_view7examen_fisico_diagnostico', array('modelFicha08' => $modelFicha08)); ?>
<?php $this->renderPartial('_view8localizacion_lesiones', array('modelFicha08' => $modelFicha08)); ?>
<?php $this->renderPartial('_view9emergencia_obstetrica', array('modelFicha08' => $modelFicha08)); ?>




