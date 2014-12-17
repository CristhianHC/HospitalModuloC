<?php

class PacienteController extends Controller {

    public function actionIndex() {
        $pacientes = Paciente::model()->findAll();
        $this->render('index', array('pacientes' => $pacientes,));
    }

}
