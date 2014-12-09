<?php

class Ficha08Controller extends Controller {
    public $layout='//layouts/column2';

    public function actionIndex() {
        $this->render('index');
    }

    public function actionCreate() {
        $model = new ValidacionesFicha08;
        $this->render('create', array('model' => $model,));
    }

}