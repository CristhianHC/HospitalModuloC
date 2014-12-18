<div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Inicio Atencio y Motivo</h3>
    </div>
    <div class="form-horizontal">
    <div class="modal-body" >
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inicio-atencion-motivo-f08-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($modelInicioAtencionMotivo); ?>

	<div class="row-fluidw">
		<?php echo $form->labelEx($modelInicioAtencionMotivo,'id_iam'); ?>
		<?php echo $form->textField($modelInicioAtencionMotivo,'id_iam'); ?>
		<?php echo $form->error($modelInicioAtencionMotivo,'id_iam'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($modelInicioAtencionMotivo,'hora'); ?>
		<?php echo $form->textField($modelInicioAtencionMotivo,'hora'); ?>
		<?php echo $form->error($modelInicioAtencionMotivo,'hora'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($modelInicioAtencionMotivo,'trauma'); ?>
		<?php echo $form->checkBox($modelInicioAtencionMotivo,'trauma'); ?>
		<?php echo $form->error($modelInicioAtencionMotivo,'trauma'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($modelInicioAtencionMotivo,'causa_clinica'); ?>
		<?php echo $form->checkBox($modelInicioAtencionMotivo,'causa_clinica'); ?>
		<?php echo $form->error($modelInicioAtencionMotivo,'causa_clinica'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($modelInicioAtencionMotivo,'causa_gobstetrica'); ?>
		<?php echo $form->checkBox($modelInicioAtencionMotivo,'causa_gobstetrica'); ?>
		<?php echo $form->error($modelInicioAtencionMotivo,'causa_gobstetrica'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($modelInicioAtencionMotivo,'causa_quirurgica'); ?>
		<?php echo $form->checkBox($modelInicioAtencionMotivo,'causa_quirurgica'); ?>
		<?php echo $form->error($modelInicioAtencionMotivo,'causa_quirurgica'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($modelInicioAtencionMotivo,'notificacion_policia'); ?>
		<?php echo $form->checkBox($modelInicioAtencionMotivo,'notificacion_policia'); ?>
		<?php echo $form->error($modelInicioAtencionMotivo,'notificacion_policia'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($modelInicioAtencionMotivo,'otro_motivo'); ?>
		<?php echo $form->textArea($modelInicioAtencionMotivo,'otro_motivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($modelInicioAtencionMotivo,'otro_motivo'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($modelInicioAtencionMotivo,'grupo_sanguineo_factor_rh'); ?>
		<?php echo $form->textField($modelInicioAtencionMotivo,'grupo_sanguineo_factor_rh',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($modelInicioAtencionMotivo,'grupo_sanguineo_factor_rh'); ?>
	</div>

    </div>
    <div class="modal-footer">
        <div class="row buttons">
            <?php echo CHtml::submitButton($modelInicioAtencionMotivo->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
</div>

