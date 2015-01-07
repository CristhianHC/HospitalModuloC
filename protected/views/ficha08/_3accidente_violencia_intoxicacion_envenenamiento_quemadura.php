<div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body" >
    <?php
    /** @var AvieqF08Controller $this */
    /** @var AvieqF08 $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'avieq-f08-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> true,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($modelAvieq) ?>

                    <?php echo $form->textFieldRow($modelAvieq, 'id_avieq', array('class' => 'span5')) ?>
                        <?php echo $form->textAreaRow($modelAvieq,'lugar_evento',array('rows'=>6, 'cols'=>50, 'class'=>'span8')) ?>
                        <?php echo $form->textAreaRow($modelAvieq,'direccion_evento',array('rows'=>6, 'cols'=>50, 'class'=>'span8')) ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'custodia_policial') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'accidente_transito') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'caida') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'quemadura') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'mordedura') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'ahogamiento') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'cuerpo_extrano') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'aplastamiento') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'violencia_arma_fuego') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'violencia_arma_cpunzante') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'otro_accidente') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'violencia_rina') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'violencia_familiar') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'abuso_fisico') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'abuso_psicologico') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'abuso_sexual') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'otra_violencia') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'intoxicacion_alcoholica') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'intoxicacion_alimentaria') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'intoxicacion_drogas') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'inhalacion_de_gases') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'otra_intoxicacion') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'envenenamiento') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'picadura') ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'anafilaxia') ?>
                        <?php echo $form->textAreaRow($modelAvieq,'observaciones',array('rows'=>6, 'cols'=>50, 'class'=>'span8')) ?>
                        <?php echo $form->checkBoxRow($modelAvieq, 'aliento_etilico') ?>
                        <?php echo $form->textFieldRow($modelAvieq, 'valor_alcocheck', array('class' => 'span5')) ?>
                    <br>
                    <label>Fecha y Hora de evento</label>
                            <?php
                    Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
                    $this->widget('CJuiDateTimePicker', array(
                        'model' => $modelAvieq, //Model object
                        'attribute' => 'fecha_hora_evento', //attribute name
                        'mode' => 'datetime' //use "time","date" or "datetime" (default)
                    ));
                    ?>
        <div class="modal-footer">
        <div class="row buttons">
            <?php echo CHtml::submitButton($modelAvieq->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
    <?php $this->endWidget(); ?>
    </div>
    
</div>