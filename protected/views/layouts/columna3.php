<?php $this->beginContent('//layouts/main'); ?>


<div class="container-fluid">
    <div class="row-fluid">
        <section class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <a href="#myModal1" class="" role="button"  data-toggle="modal">1.-Registro de admision</a>
                    <br>
                    <a href="#myModal2" role="button"  data-toggle="modal">2.-Inicio atencion y motivo</a>
                    <br>
                    <a href="#myModal3" role="button"  data-toggle="modal">3.-Accidente,violencia, intoxicacion, envenenamiento o quemadura</a>
                    <br>
                    <a href="#myModal4" role="button"  data-toggle="modal">4.-Antescedentes personales y familiares</a>
                    <br>
                    <a href="#myModal5" role="button"  data-toggle="modal">5.-Enfermedad actual y revision de sistemas</a>
                    <br>
                    <a href="#myModal6" role="button"  data-toggle="modal">6.-Signos vitales, mediciones y valores</a>
                    <br>
                    <a href="#myModal7" role="button"  data-toggle="modal">7.-Examen Fisico y diagnostico</a>
                    <br>
                    <a href="#myModal8" role="button"  data-toggle="modal">8.-Localizacion de lesiones</a>
                    <br>
                    <a href="#myModal9" role="button"  data-toggle="modal">9.-Emergencia Obstetrica</a>
                    <br>
                    <a href="#myModal10" role="button"  data-toggle="modal">#.-Solicitud de examenes</a>
                    <br>
                    <a href="#myModal11" role="button"  data-toggle="modal">#.-Diagnostico de ingreso</a>
                    <br>
                    <a href="#myModal12" role="button"  data-toggle="modal">#.-Diagnostico de Alta</a>
                    <br>
                    <a href="#myModal13" role="button"  data-toggle="modal">#.-Plan de tratamiento</a>
                    <br>
                    <a href="#myModal14" role="button"  data-toggle="modal">#.-Alta</a>
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
