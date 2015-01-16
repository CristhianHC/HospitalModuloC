<div id="myModal8" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body" >
        <?php
        $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
            'id' => 'localizacion-lesiones-f08-form',
            'enableAjaxValidation' => true,
            'enableClientValidation' => true,
        ));
        ?>

        <p class="note">
            <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

        <?php echo $form->errorSummary($model) ?>

        <?php echo $form->checkBoxRow($model, 'herida_penetrante') ?>
        <?php echo $form->checkBoxRow($model, 'herida_cortante') ?>
        <?php echo $form->checkBoxRow($model, 'fractura_expuesta') ?>
        <?php echo $form->checkBoxRow($model, 'fractura_cerrada') ?>
        <?php echo $form->checkBoxRow($model, 'cuerpo_extrano') ?>
        <?php echo $form->checkBoxRow($model, 'hemorragia') ?>
        <?php echo $form->checkBoxRow($model, 'mordedura') ?>
        <?php echo $form->checkBoxRow($model, 'picadura') ?>
        <?php echo $form->checkBoxRow($model, 'excoriacion') ?>
        <?php echo $form->checkBoxRow($model, 'deformidad_masa') ?>
        <?php echo $form->checkBoxRow($model, 'hematoma') ?>
        <?php echo $form->checkBoxRow($model, 'eritema_inflamacion') ?>
        <?php echo $form->checkBoxRow($model, 'luxacion_esguince') ?>
        <?php echo $form->checkBoxRow($model, 'quemadura') ?>
        <?php echo $form->checkBoxRow($model, 'otro') ?>
<?php echo $form->textAreaRow($model, 'definicion_cuerpo', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>

        <div class="modal-footer">
            <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>

<?php $this->endWidget(); ?>
    </div>
</div>