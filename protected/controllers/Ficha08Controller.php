<?php

class Ficha08Controller extends Controller {

    public $layout = '//layouts/columna3';

    /*    public function actionIndex() {
      $model = new ValidacionesFicha08;
      $this->render('index', array('model' => $model,));
      } */

    public function actionCreate($id) {
        $modelFicha08 = new Ficha08;
        $model = new Paciente;

        $this->performAjaxValidation($modelFicha08, 'ficha08-form');

        if (isset($_POST['Ficha08'])) {
            if (isset($_POST['Ficha08']))
                $modelFicha08->attributes = $_POST['Ficha08'];
            if ($modelFicha08->save()) {
                $conexion = Yii::app()->db;
                $consulta = "UPDATE archivo.ficha_08 SET id_iam_f08=1, id_avieq_f08=1, id_apyf_f08=1
       WHERE id_f08=$modelFicha08->id_f08;";
                $ejecutar = $conexion->createCommand($consulta);
                $ejecutar->query();
                $conexion->active = FALSE;
                $this->redirect(array('view', 'id' => $modelFicha08->id_f08));
            }
        }
        $this->render('create', array(
            'modelFicha08' => $modelFicha08,
        ));
    }

    public function actionView($id) {
        $modelInicioAtencionMotivo = new InicioAtencionMotivoF08;
        $modelInicioAtencionMotivo = $this->loadModelIAM($this->loadModeFicha08($id)->idIamF08->id_iam);

        $model = new Paciente;
        /*
         * Ingreso y edicion de Inicio Atencion Motivo
         */
        $this->performAjaxValidation($modelInicioAtencionMotivo, 'inicio-atencion-motivo-f08-form');
        if (isset($_POST['InicioAtencionMotivoF08'])) {
            $modelInicioAtencionMotivo->attributes = $_POST['InicioAtencionMotivoF08'];
            if ($modelInicioAtencionMotivo->save()) {
                $conexion = Yii::app()->db;
                $consulta = "UPDATE archivo.ficha_08 SET id_iam_f08=$modelInicioAtencionMotivo->id_iam WHERE id_f08=$id;";
                $ejecutar = $conexion->createCommand($consulta);
                $ejecutar->query();
                $conexion->active = FALSE;
                $this->redirect(array('view', 'id' => $id));
            }
        }

        /*
         * Ingreso y edicion de AVIEQ 
         */
        $modelAvieq = new AvieqF08;
        $modelAvieq = $this->loadModelAvieq($this->loadModeFicha08($id)->idAvieqF08->id_avieq);
        $this->performAjaxValidation($modelAvieq, 'avieq-f08-form');

        if (isset($_POST['AvieqF08'])) {
            $modelAvieq->attributes = $_POST['AvieqF08'];
            if ($modelAvieq->save()) {
                $conexion = Yii::app()->db;
                $consulta = "UPDATE archivo.ficha_08 SET id_avieq_f08=$modelAvieq->id_avieq WHERE id_f08=$id;";
                $ejecutar = $conexion->createCommand($consulta);
                $ejecutar->query();
                $conexion->active = FALSE;
                $this->redirect(array('view', 'id' => $id));
            }
        }
        /*
         * Ingreso y edicion de Antescendentes personales y familiares
         */
        $modelAPF = new AntecedentesPersonalesFamiliaresF08;
        $modelAPF = $this->loadModelAPF($this->loadModeFicha08($id)->idApyfF08->id_apyf);
        $this->performAjaxValidation($modelAPF, 'antecedentes-personales-familiares-f08-form');

        if (isset($_POST['AntecedentesPersonalesFamiliaresF08'])) {
            $modelAPF->attributes = $_POST['AntecedentesPersonalesFamiliaresF08'];
            if ($modelAPF->save()) {
                $conexion = Yii::app()->db;
                $consulta = "UPDATE archivo.ficha_08 SET id_apyf_f08=$modelAPF->id_apyf WHERE id_f08=$id;";
                $ejecutar = $conexion->createCommand($consulta);
                $ejecutar->query();
                $conexion->active = FALSE;
                $this->redirect(array('view', 'id' => $id));
            }
        }

        $this->render('view', array(
            'modelFicha08' => $this->loadModeFicha08($id),
            'modelInicioAtencionMotivo' => $modelInicioAtencionMotivo,
            'modelAvieq' => $modelAvieq,
            'modelAPF' => $modelAPF,
            'model' => $model,
        ));
    }

    public function loadModelAPF($id, $modelClass = __CLASS__) {
        $model = AntecedentesPersonalesFamiliaresF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function loadModelAvieq($id, $modelClass = __CLASS__) {
        $model = AvieqF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function loadModelIAM($id, $modelClass = __CLASS__) {
        $model = InicioAtencionMotivoF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function loadModeFicha08($id, $modelClass = __CLASS__) {
        $model = Ficha08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function loadModel($id, $modelClass = __CLASS__) {
        $model = Paciente::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'no existe este paciente');
        return $model;
    }

    protected function performAjaxValidation($model, $form) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === $form) {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}