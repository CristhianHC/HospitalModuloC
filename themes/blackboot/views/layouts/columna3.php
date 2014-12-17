<?php $this->beginContent('//layouts/main'); ?>



<div class="row-fluid">
    <div class="span3">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Operations',
        ));
        ?>


        <style type="text/css">

            .color
            {
                /*height: 800px;*/
                background-color: #FFF;
                padding-top: 0px;
                padding-left: 15px;

            }


        </style>



        <div class="color">
            <br>

            <a href="#myModal1" class="" role="button"  data-toggle="modal">1.-Inicio Atencion y Motivo</a>
            <br>

            <a href="#myModal2" role="button"  data-toggle="modal">2.-Inicio Atencion y Motivo</a>
            <br>

            <a href="#myModal3" role="button"  data-toggle="modal">3.-Inicio Atencion y Motivo</a>
            <br>

            <a href="#myModal4" role="button"  data-toggle="modal">4.-Inicio Atencion y Motivo</a>
            <br>

            <a href="#myModal5" role="button"  data-toggle="modal">5.-Inicio Atencion y Motivo</a>
            <br>
            <a href="#myModal6" role="button"  data-toggle="modal">6.-Inicio Atencion y Motivo</a>
            <br>

        </div>

<?php
$this->widget('zii.widgets.CMenu', array(
    'items' => $this->menu,
    'htmlOptions' => array('class' => 'sidebar'),
));
$this->endWidget();
?>
    </div><!-- sidebar span3 -->

    <div class="span9">
        <div class="main">
        <?php echo $content; ?>
        </div><!-- content -->
    </div>
</div>
            <?php $this->endContent(); ?>
