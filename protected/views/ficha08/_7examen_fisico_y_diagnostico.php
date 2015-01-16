<div id="myModal7" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body" >
        <?php
        /** @var ExamenFisicoDiagnosticoF08Controller $this */
        /** @var ExamenFisicoDiagnosticoF08 $model */
        /** @var AweActiveForm $form */
        $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
            'id' => 'examen-fisico-diagnostico-f08-form',
            'enableAjaxValidation' => true,
            'enableClientValidation' => true,
        ));
        ?>

        <p class="note">
            <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

        <?php echo $form->errorSummary($model) ?>

        <?php echo $form->checkBoxRow($model, 'via_aerea_destruida') ?>
        <?php echo $form->textFieldRow($model, 'cabeza', array('class' => 'span5', 'maxlength' => 2)) ?>
        <?php echo $form->textFieldRow($model, 'cuello', array('class' => 'span5', 'maxlength' => 2)) ?>
        <?php echo $form->textFieldRow($model, 'torax', array('class' => 'span5', 'maxlength' => 2)) ?>
        <?php echo $form->textFieldRow($model, 'abdomen', array('class' => 'span5', 'maxlength' => 2)) ?>
        <?php echo $form->textFieldRow($model, 'columna', array('class' => 'span5', 'maxlength' => 2)) ?>
        <?php echo $form->textFieldRow($model, 'pelvis', array('class' => 'span5', 'maxlength' => 2)) ?>
        <?php echo $form->textFieldRow($model, 'extremidad', array('class' => 'span5', 'maxlength' => 2)) ?>
<?php echo $form->textAreaRow($model, 'observacion', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
        <div class="modal-footer">
            <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
<?php $this->endWidget(); ?>
    </div>
</div>