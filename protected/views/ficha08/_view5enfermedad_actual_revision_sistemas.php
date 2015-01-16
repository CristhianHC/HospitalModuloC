<?php if ($modelFicha08->idEaresiF08 !== NULL) { ?>
    <fieldset>
        <legend><h4>Enfermedad actual y revision de sistemas</h4></legend>

        <?php
        $this->widget('bootstrap.widgets.TbDetailView', array(
            'data' => $modelFicha08,
            'attributes' => array(
                array(
                    'value' => $modelFicha08->idEaresiF08->via_aerea_libre,
                    'name' => 'via_aerea_libre',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idEaresiF08->via_aerea_obstruida,
                    'name' => 'via_aerea_obstruida',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idEaresiF08->condicion_estable,
                    'name' => 'condicion_estable',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idEaresiF08->condicion_inestables,
                    'name' => 'condicion_inestables',
                    'type' => 'boolean'
                ),
                array(
                    'value' => $modelFicha08->idEaresiF08->observaciones,
                    'name' => 'observaciones',
                    'type' => 'text'
                ),
            ),
        ));
    }
    ?>
</fieldset>
