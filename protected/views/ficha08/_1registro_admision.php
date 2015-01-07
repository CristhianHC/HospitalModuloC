<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header1</h3>
    </div>
    <div class="modal-body" >
        <div >
            <?php
            /** @var Ficha08Controller $this */
            /** @var Ficha08 $model */
            /** @var AweActiveForm $form */
            $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
                'id' => 'ficha08-form',
                'enableAjaxValidation' => true,
                'enableClientValidation' => true,
            ));
            ?>

            <p class="note">
                <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
                <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

            <?php echo $form->errorSummary($modelFicha08) ?>

            <?php echo $form->textFieldRow($modelFicha08, 'id_f08', array('class' => 'span5')) ?><br>

            <?php
            Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker', array(
                'model' => $modelFicha08, //Model object
                'attribute' => 'fecha_emision', //attribute name
                'mode' => 'datetime' //use "time","date" or "datetime" (default)
            ));
            ?>
        </div>
<div class="modal-footer">
        <div class="row buttons">
            <?php echo CHtml::submitButton($modelFicha08->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
<?php $this->endWidget(); ?>
        </div>
    </div>
</div>