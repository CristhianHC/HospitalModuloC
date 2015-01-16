<?php if ($modelFicha08->idApyfF08 !== NULL) { ?>
    <fieldset>
        <legend><h4>Antescedentes Personales y Familiares</h4></legend>
        <?php
        $this->widget('bootstrap.widgets.TbDetailView', array(
            'data' => $modelFicha08,
            'attributes' => array(
                array(
                    'value' => $modelFicha08->idApyfF08->alergico,
                    'name' => 'alergico',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idApyfF08->clinico,
                    'name' => 'clinico',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idApyfF08->ginecologico,
                    'name' => 'ginecologico',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idApyfF08->traumatog,
                    'name' => 'traumatog',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idApyfF08->quirurgico,
                    'name' => 'quirurgico',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idApyfF08->farmacologo,
                    'name' => 'farmacologo',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idApyfF08->psiquiatrico,
                    'name' => 'psiquiatrico',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idApyfF08->otro,
                    'name' => 'otro',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idApyfF08->observacion,
                    'name' => 'observacion',
                    'type' => 'text'
                ),
            ),
        ));
    }
    ?>
</fieldset>
