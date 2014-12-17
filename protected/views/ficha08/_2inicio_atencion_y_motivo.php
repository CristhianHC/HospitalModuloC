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
        
        <div class="row-fluid">
		<?php echo $form->labelEx($model,'id_iam'); ?>
		<?php echo $form->textField($model,'id_iam'); ?>
		<?php echo $form->error($model,'id_iam'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora'); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'trauma'); ?>
		<?php echo $form->checkBox($model,'trauma'); ?>
		<?php echo $form->error($model,'trauma'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'causa_clinica'); ?>
		<?php echo $form->checkBox($model,'causa_clinica'); ?>
		<?php echo $form->error($model,'causa_clinica'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'causa_gobstetrica'); ?>
		<?php echo $form->checkBox($model,'causa_gobstetrica'); ?>
		<?php echo $form->error($model,'causa_gobstetrica'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'causa_quirurgica'); ?>
		<?php echo $form->checkBox($model,'causa_quirurgica'); ?>
		<?php echo $form->error($model,'causa_quirurgica'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'notificacion_policia'); ?>
		<?php echo $form->checkBox($model,'notificacion_policia'); ?>
		<?php echo $form->error($model,'notificacion_policia'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'otro_motivo'); ?>
		<?php echo $form->textArea($model,'otro_motivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'otro_motivo'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'grupo_sanguineo_factor_rh'); ?>
		<?php echo $form->textField($model,'grupo_sanguineo_factor_rh',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'grupo_sanguineo_factor_rh'); ?>
	</div>
</div>


<?php $this->endWidget(); ?>
    </div>
    <div class="modal-footer">
        <div class="row buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
    
</div>
</div>

