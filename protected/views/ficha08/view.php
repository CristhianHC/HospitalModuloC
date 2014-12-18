    <?php $this->renderPartial('_1registro_admision', array('modelFicha08' => $modelFicha08)); ?>
    <?php $this->renderPartial('_2inicio_atencion_y_motivo', array('modelInicioAtencionMotivo' => $modelInicioAtencionMotivo)); ?>
    <?php $this->renderPartial('_3accidente_violencia_intoxicacion_envenenamiento_quemadura', array('model' => $model)); ?>
    <?php $this->renderPartial('_4antescendentes_personales_familiares', array('model' => $model)); ?>
    <?php $this->renderPartial('_5enfermedad_actual_y_revisicion_de_sistema', array('model' => $model)); ?>
    <?php $this->renderPartial('_6signos_vitales_mediciones_valores', array('model' => $model)); ?>
    <?php $this->renderPartial('_7examen_fisico_y_diagnostico', array('model' => $model)); ?>
    <?php $this->renderPartial('_8localizacion_de_lesiones', array('model' => $model)); ?>
    <?php $this->renderPartial('_9emergencia_obstetrica', array('model' => $model)); ?>
<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Ficha08::label(); ?> <?php echo CHtml::encode($modelFicha08) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $modelFicha08,
	'attributes' => array(
        'id_f08',
        'fecha_emision',
        array(
			'name'=>'Trauma',
			'value'=> $modelFicha08->idIamF08 ,
			'type'=>'html',
		),
        array(
			'name'=>'id_avieq_f08',
			'value'=>($modelFicha08->idAvieqF08 !== null) ? CHtml::link($modelFicha08->idAvieqF08, array('/avieqF08/view', 'id_avieq' => $modelFicha08->idAvieqF08->id_avieq)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_apyf_f08',
			'value'=>($modelFicha08->idApyfF08 !== null) ? CHtml::link($modelFicha08->idApyfF08, array('/antecedentesPersonalesFamiliaresF08/view', 'id_apyf' => $modelFicha08->idApyfF08->id_apyf)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_earesi_f08',
			'value'=>($modelFicha08->idEaresiF08 !== null) ? CHtml::link($modelFicha08->idEaresiF08, array('/enfermedadActualRevisionSistemasF08/view', 'id_earesi' => $modelFicha08->idEaresiF08->id_earesi)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_sivimi_f08',
			'value'=>($modelFicha08->idSivimiF08 !== null) ? CHtml::link($modelFicha08->idSivimiF08, array('/signosVitalesMedicinalesF08/view', 'id_sivimi' => $modelFicha08->idSivimiF08->id_sivimi)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_exfidi_f08',
			'value'=>($modelFicha08->idExfidiF08 !== null) ? CHtml::link($modelFicha08->idExfidiF08, array('/examenFisicoDiagnosticoF08/view', 'id_exfidi' => $modelFicha08->idExfidiF08->id_exfidi)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_localizacion_lesiones_f08',
			'value'=>($modelFicha08->idLocalizacionLesionesF08 !== null) ? CHtml::link($modelFicha08->idLocalizacionLesionesF08, array('/localizacionLesionesF08/view', 'id_localizacion_lesiones' => $modelFicha08->idLocalizacionLesionesF08->id_localizacion_lesiones)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_emergencia_obstetrica_f08',
			'value'=>($modelFicha08->idEmergenciaObstetricaF08 !== null) ? CHtml::link($modelFicha08->idEmergenciaObstetricaF08, array('/emergenciaObstetricaF08/view', 'id_emergencia_obstetrica' => $modelFicha08->idEmergenciaObstetricaF08->id_emergencia_obstetrica)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_solicitud_examenes_f08',
			'value'=>($modelFicha08->idSolicitudExamenesF08 !== null) ? CHtml::link($modelFicha08->idSolicitudExamenesF08, array('/solicitudExamenesF08/view', 'id_solicitud_examenes' => $modelFicha08->idSolicitudExamenesF08->id_solicitud_examenes)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_diagnostico_ingreso_f08',
			'value'=>($modelFicha08->idDiagnosticoIngresoF08 !== null) ? CHtml::link($modelFicha08->idDiagnosticoIngresoF08, array('/diagnosticoIngresoF08/view', 'id_diagnostico_ingreso' => $modelFicha08->idDiagnosticoIngresoF08->id_diagnostico_ingreso)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_plan_tratamiento_f08',
			'value'=>($modelFicha08->idPlanTratamientoF08 !== null) ? CHtml::link($modelFicha08->idPlanTratamientoF08, array('/planTratamientoF08/view', 'id_plan_tratamiento' => $modelFicha08->idPlanTratamientoF08->id_plan_tratamiento)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_diagnostico_alta_f08',
			'value'=>($modelFicha08->idDiagnosticoAltaF08 !== null) ? CHtml::link($modelFicha08->idDiagnosticoAltaF08, array('/diagnosticoAltaF08/view', 'id_diagnostico_alta' => $modelFicha08->idDiagnosticoAltaF08->id_diagnostico_alta)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'id_alta_f08',
			'value'=>($modelFicha08->idAltaF08 !== null) ? CHtml::link($modelFicha08->idAltaF08, array('/altaF08/view', 'id_alta' => $model->idAltaF08->id_alta)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>
