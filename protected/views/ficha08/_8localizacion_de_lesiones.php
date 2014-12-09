<a href="#myModal8" role="button" class="btn btn-primary input-xxlarge" data-toggle="modal">8.- Localizacion de lesiones</a>
<div id="myModal8" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body" >
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
            <?php echo $form->labelEx($model, 'herina_penetrante', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'herina_penetrante', array('class' => 'checkbox-column',));
                echo $form->error($model, 'herina_penetrante', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'herda_cortante', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'herda_cortante', array('class' => 'checkbox-column',));
                echo $form->error($model, 'herda_cortante', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'fractura_expuesta', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'fractura_expuesta', array('class' => 'checkbox-column',));
                echo $form->error($model, 'fractura_expuesta', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'fractura_cerrada', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'fractura_cerrada', array('class' => 'checkbox-column',));
                echo $form->error($model, 'fractura_cerrada', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'cuerpo_extraño', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'cuerpo_extraño', array('class' => 'checkbox-column',));
                echo $form->error($model, 'cuerpo_extraño', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'hemorragia', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'hemorragia', array('class' => 'checkbox-column',));
                echo $form->error($model, 'hemorragia', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'mordedura', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'mordedura', array('class' => 'checkbox-column',));
                echo $form->error($model, 'mordedura', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'picadura', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'picadura', array('class' => 'checkbox-column',));
                echo $form->error($model, 'picadura', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'excoriacion', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'excoriacion', array('class' => 'checkbox-column',));
                echo $form->error($model, 'excoriacion', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'deformidad_masa', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'deformidad_masa', array('class' => 'checkbox-column',));
                echo $form->error($model, 'deformidad_masa', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'hematoma', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'hematoma', array('class' => 'checkbox-column',));
                echo $form->error($model, 'hematoma', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'eritema_inflacion', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'eritema_inflacion', array('class' => 'checkbox-column',));
                echo $form->error($model, 'eritema_inflacion', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'luxacion_esguince', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'luxacion_esguince', array('class' => 'checkbox-column',));
                echo $form->error($model, 'luxacion_esguince', array('class' => 'text-error'));
                ?>
            </div>
        </div>
        <div class="control-group">
            <?php echo $form->labelEx($model, 'quemadura', array('class' => 'control-label')); ?>
            <div class="controls">
                <?php
                echo $form->checkBox($model, 'quemadura', array('class' => 'checkbox-column',));
                echo $form->error($model, 'quemadura', array('class' => 'text-error'));
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
