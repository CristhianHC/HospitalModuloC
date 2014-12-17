<?php $this->beginContent('//layouts/main'); ?>


<div class="container-fluid">
    <div class="row-fluid">
        <section class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
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
                </ul>
            </div>
        </section><!-- sidebar span3 -->

        <div class="span9">
            <div class="main">
                <?php echo $content; ?>
            </div><!-- content -->
        </div>
    </div>
    <?php $this->endContent(); ?>
</div>
