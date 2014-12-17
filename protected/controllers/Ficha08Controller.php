<?php

class Ficha08Controller extends Controller {

    public $layout = '//layouts/columna3';

    public function actionIndex() {
        $model = new ValidacionesFicha08;
        $this->render('index', array('model' => $model,));
    }

    public function actionCreate($id) {
        $model = new InicioAtencionMotivoF08;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model, "inicioatencionmotivof08-create-form");
        if (Yii::app()->request->isAjaxRequest) {
            if (isset($_POST['InicioAtencionMotivoF08'])) {
                $model->attributes = $_POST['InicioAtencionMotivoF08'];
                if ($model->save()) {
                    echo $model->id_iam;
                } else {
                    echo "false";
                }
                return;
            }
        } else {
            if (isset($_POST['InicioAtencionMotivoF08'])) {
                $model->attributes = $_POST['InicioAtencionMotivoF08'];
                if ($model->save())
                    $this->redirect(array('view', 'id' => $model->id_iam));
            }

            $this->render('create', array(
                'model' => $model,'paciente' => $this->loadModel($id),
            ));
        }
    }

    public function loadModel($id, $modelClass = __CLASS__) {
        $model = Paciente::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'no existe este paciente');
        return $model;
    }

    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'inicio-atencion-motivo-f08-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
