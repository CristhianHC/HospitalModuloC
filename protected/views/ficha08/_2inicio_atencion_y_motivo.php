
<div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body" >
       
        <?php
        $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
            'id' => 'inicio-atencion-motivo-f08-form',
            'enableAjaxValidation' => true,
            'enableClientValidation' => true,
        ));
        ?>

        <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

        <?php echo $form->errorSummary($model) ?>

        <br><label>Hora</label>
        <?php
        Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
        $this->widget('CJuiDateTimePicker', array(
            'model' => $model, //Model object
            'attribute' => 'hora', //attribute name
            'mode' => 'time', //use "time","date" or "datetime" (default)
        ));
        ?>
        <?php echo $form->checkBoxRow($model, 'trauma') ?>
        <?php echo $form->checkBoxRow($model, 'causa_clinica') ?>
        <?php echo $form->checkBoxRow($model, 'causa_gobstetrica') ?>
        <?php echo $form->checkBoxRow($model, 'causa_quirurgica') ?>
        <?php echo $form->checkBoxRow($model, 'notificacion_policia') ?>
<?php echo $form->textAreaRow($model, 'otro_motivo', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
<?php echo $form->textFieldRow($model, 'grupo_sanguineo_factor_rh', array('class' => 'span5', 'maxlength' => 4)) ?>

        <div class="modal-footer">
            <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
<?php $this->endWidget(); ?>
    </div>

</div>

