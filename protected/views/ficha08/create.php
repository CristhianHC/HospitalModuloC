<?php
$this->breadcrumbs = array(
    'Index',
);
?>


<div class="row-fluid">                



    <?php $this->renderPartial('_1registro_admision', array('model' => $model)); ?>
    <?php $this->renderPartial('_2inicio_atencion_y_motivo', array('model' => $model)); ?>
    <?php $this->renderPartial('_3accidente_violencia_intoxicacion_envenenamiento_quemadura', array('model' => $model)); ?>
    <?php $this->renderPartial('_4antescendentes_personales_familiares', array('model' => $model)); ?>
    <?php $this->renderPartial('_5enfermedad_actual_y_revisicion_de_sistema', array('model' => $model)); ?>
    <?php $this->renderPartial('_6signos_vitales_mediciones_valores', array('model' => $model)); ?>
    <?php $this->renderPartial('_7examen_fisico_y_diagnostico', array('model' => $model)); ?>
    <?php $this->renderPartial('_8localizacion_de_lesiones', array('model' => $model)); ?>
    <?php $this->renderPartial('_9emergencia_obstetrica', array('model' => $model)); ?>


    <h2>Ficha 08</h2>


    <!-- Aqui va el contenido de las vistas -->
</div>


