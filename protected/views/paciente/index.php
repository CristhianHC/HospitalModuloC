<?php
/** @var PacienteController $this */
/** @var Paciente $model */
$this->breadcrumbs = array(
	'Pacientes',
);

?>
<table class="table table-striped table-condensed">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Ruc</th>
        <th>Fichas</th>
    </tr>
    </thead>
    
    <tbody>
<?php  foreach($pacientes as $p): ?>
                <tr>
                <td> <?php echo $p->idpaciente; ?></td>
                <td> <?php echo $p->cedula; ?></td>
                <td> <?php echo $p->primernombre; ?></td>
                <td>
                        <?php
                        $this->widget('bootstrap.widgets.TbMenu', array(
                            'items' => array(
                                array('label' => 'Panel Control',
                                    'items' => array(
                                        array('label' => 'Subir Imagenes', 'url' => array('/ficha08/create/' . $p->idpaciente . '')),
                                        array('label' => 'Editar Imagenes', 'url' => array('/panelUsuario/editfolder')),
                                        array('label' => 'Configuracion', 'url' => array('/panelUsuario/configuracion')),
                                    )
                                ),
                            ),
                            'htmlOptions' => array('class' => 'nav navbar-nav')
                        ));
                        ?>
                </td>

    </tr>
    <?php endforeach; ?>
</tbody>
</table>