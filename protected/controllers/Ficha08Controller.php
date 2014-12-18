<?php

class Ficha08Controller extends Controller {

    public $layout = '//layouts/columna3';

/*    public function actionIndex() {
        $model = new ValidacionesFicha08;
        $this->render('index', array('model' => $model,));
    }*/

    public function actionCreate($id) {
        $modelInicioAtencionMotivo = new InicioAtencionMotivoF08;
        $modelFicha08 = new Ficha08;
        $model = new Paciente;

        $this->performAjaxValidation($modelInicioAtencionMotivo, 'inicio-atencion-motivo-f08-form');
        $this->performAjaxValidation($modelFicha08, 'ficha08-form');
        
        if (isset($_POST['Ficha08'])) {
            if (isset($_POST['Ficha08']['idIamF08']))
                $modelFicha08->idIamF08 = $_POST['Ficha08']['idIamF08'];
            $modelFicha08->attributes = $_POST['Ficha08'];
            if ($modelFicha08->save()) {
                $this->redirect(array('view', 'id' => $modelFicha08->id_f08));
            }
        }



        $this->render('create', array(
            'modelFicha08' => $modelFicha08,
        ));
    }
    	public function actionView($id)
	{
                    $modelInicioAtencionMotivo = new InicioAtencionMotivoF08;
        $modelFicha08s = Ficha08::model()->findAll();
        $model = new Paciente;
        if (isset($_POST['InicioAtencionMotivoF08'])) {
            $modelInicioAtencionMotivo->attributes = $_POST['InicioAtencionMotivoF08'];
            if($modelInicioAtencionMotivo->save()){
        $conexion = Yii::app()->db;
        $consulta = "UPDATE archivo.ficha_08 SET id_iam_f08=$modelInicioAtencionMotivo->id_iam WHERE id_f08=$id;";
        $ejecutar = $conexion->createCommand($consulta);
        $ejecutar->query();
                 $this->redirect(array('view', 'id' => $id));
            }
        }
		$this->render('view', array(
			'modelFicha08' => $this->loadModeFicha08($id),
                    'modelFicha08s'=>$modelFicha08s,
                    'modelInicioAtencionMotivo' => $modelInicioAtencionMotivo,
                    'model' => $model,
		));
	}

    public function loadModeFicha08($id, $modelClass = __CLASS__) {
		$model = Ficha08::model()->findByPk($id);
		if($model === null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
    }

    public function loadModel($id, $modelClass = __CLASS__) {
        $model = Paciente::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'no existe este paciente');
        return $model;
    }

    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === $form) {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
