<div id="myModal9" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body" >
        <?php
        $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
            'id' => 'emergencia-obstetrica-f08-form',
            'enableAjaxValidation' => true,
            'enableClientValidation' => true,
        ));
        ?>

        <p class="note">
            <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

        <?php echo $form->errorSummary($model) ?>

        <?php echo $form->textFieldRow($model, 'gestas', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'partos', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'abortos', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'cesareas', array('class' => 'span5')) ?>
        <br>
        <label>Fecha Ultima Mestruacion</label>
        <?php
            Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker', array(
                'model' => $model, //Model object
                'attribute' => 'fecha_ultima_menstruacion', //attribute name
                'mode' => 'date' //use "time","date" or "datetime" (default)
            ));
            ?>
        <?php echo $form->textFieldRow($model, 'semanas_gestacion', array('class' => 'span5')) ?>
        <?php echo $form->checkBoxRow($model, 'movimiento_fetal') ?>
        <?php echo $form->textAreaRow($model, 'frecuencia_c_fetal', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
        <?php echo $form->checkBoxRow($model, 'membranas_rotas') ?>
        <?php echo $form->textFieldRow($model, 'tiempo', array('class' => 'span5')) ?>
        <?php echo $form->textFieldRow($model, 'altura_uterina', array('class' => 'span5')) ?>
        <?php echo $form->textAreaRow($model, 'presentacion', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
        <?php echo $form->textAreaRow($model, 'dilatacion', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
        <?php echo $form->textAreaRow($model, 'borramiento', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
        <?php echo $form->textAreaRow($model, 'plano', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
        <?php echo $form->checkBoxRow($model, 'pelvis_util') ?>
        <?php echo $form->checkBoxRow($model, 'sangrado_vaginal') ?>
        <?php echo $form->textAreaRow($model, 'contracciones', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
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