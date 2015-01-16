<div id="myModal6" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body" >
        <?php
        $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
            'id' => 'signos-vitales-medicinales-f08-form',
            'enableAjaxValidation' => true,
            'enableClientValidation' => true,
        ));
        ?>

        <p class="note">
            <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

        <?php echo $form->errorSummary($model) ?>

        <?php echo $form->textAreaRow($model, 'presion_arterial', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
        <?php echo $form->textFieldRow($model, 'frecuencia_cardiaca', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'frecuencia_respiratoria', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'temperatura_bucal', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'temperatura_axilar', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'peso_kg', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'talla_metro', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'ocular_glasgow', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'verbal_glasgow', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'motora_glasgow', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'total_glasgow', array('class' => 'span5')) ?>
        <?php echo $form->textAreaRow($model, 'reaccion_pupila_derecha', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
        <?php echo $form->textAreaRow($model, 'reaccion_pupila_izquierda', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
        <?php echo $form->textAreaRow($model, 'total_llenado_capilar', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
<?php echo $form->textAreaRow($model, 'satura_oxigeno', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
        <div class="modal-footer">
            <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>

<?php $this->endWidget(); ?>
    </div>
</div>