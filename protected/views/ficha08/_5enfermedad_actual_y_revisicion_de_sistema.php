<div id="myModal5" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body" >
        <?php
        $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
        'id' => 'enfermedad-actual-revision-sistemas-f08-form',
        'enableAjaxValidation' => true,
        'enableClientValidation'=> true,
        )); ?>

        <p class="note">
            <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
            <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

        <?php echo $form->errorSummary($modelEARS) ?>

        <?php echo $form->checkBoxRow($modelEARS, 'via_aerea_libre') ?>
        <?php echo $form->checkBoxRow($modelEARS, 'via_aerea_obstruida') ?>
        <?php echo $form->checkBoxRow($modelEARS, 'condicion_estable') ?>
        <?php echo $form->checkBoxRow($modelEARS, 'condicion_inestables') ?>
        <?php echo $form->textAreaRow($modelEARS, 'observaciones', array('rows' => 6, 'cols' => 50, 'class' => 'span8')) ?>
        <div class="modal-footer">
            <div class="row buttons">
                <?php echo CHtml::submitButton($modelEARS->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>