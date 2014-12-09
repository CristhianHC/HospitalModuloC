<a href="#myModal7" role="button" class="btn btn-primary input-xxlarge" data-toggle="modal">7.- Examen fisico y Diagnostico</a>
<div id="myModal7" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body table-bordered" >
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'alumnos-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'via_area_obstruida', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'via_area_obstruida', array('class' => 'checkbox-column',));
                echo $form->error($model, 'via_area_obstruida', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'cabeza', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->textField($model, 'cabeza', array('class' => 'input-xlarge',));
                echo $form->error($model, 'cabeza', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'cuello', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->textField($model, 'cuello', array('class' => 'input-xlarge',));
                echo $form->error($model, 'cuello', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'torax', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->textField($model, 'torax', array('class' => 'input-xlarge',));
                echo $form->error($model, 'torax', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'abdomen', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->textField($model, 'abdomen', array('class' => 'input-xlarge',));
                echo $form->error($model, 'abdomen', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'columna', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->textField($model, 'columna', array('class' => 'input-xlarge',));
                echo $form->error($model, 'columna', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'pelvis', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->textField($model, 'pelvis', array('class' => 'input-xlarge',));
                echo $form->error($model, 'pelvis', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'extremidad', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->textField($model, 'extremidad', array('class' => 'input-xlarge',));
                echo $form->error($model, 'extremidad', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="modal-footer">

            <div class="row buttons">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>

            <?php $this->endWidget(); ?>

        </div>
    </div>
</div>
