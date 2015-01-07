<div id="myModal4" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body" >
        <?php
       $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'antecedentes-personales-familiares-f08-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> true,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($modelAPF) ?>

                    <?php echo $form->textFieldRow($modelAPF, 'id_apyf', array('class' => 'span5')) ?>
                        <?php echo $form->checkBoxRow($modelAPF, 'alergico') ?>
                        <?php echo $form->checkBoxRow($modelAPF, 'clinico') ?>
                        <?php echo $form->checkBoxRow($modelAPF, 'ginecologico') ?>
                        <?php echo $form->checkBoxRow($modelAPF, 'traumatog') ?>
                        <?php echo $form->checkBoxRow($modelAPF, 'quirurgico') ?>
                        <?php echo $form->checkBoxRow($modelAPF, 'farmacologo') ?>
                        <?php echo $form->checkBoxRow($modelAPF, 'psiquiatrico') ?>
                        <?php echo $form->checkBoxRow($modelAPF, 'otro') ?>
                        <?php echo $form->textAreaRow($modelAPF,'observacion',array('rows'=>6, 'cols'=>50, 'class'=>'span8')) ?>
                <div class="modal-footer">
        <div class="row buttons">
            <?php echo CHtml::submitButton($modelAPF->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
    <?php $this->endWidget(); ?>
    </div>
    
</div>