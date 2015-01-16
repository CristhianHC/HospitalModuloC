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
                $modelFicha08->attributes = $_POST['Ficha08'];
            if ($modelFicha08->save()) {
                
                $this->redirect(array('view', 'id' => $modelFicha08->id_f08));
            }
        }
        $this->render('create', array(
            'modelFicha08' => $modelFicha08,
        ));
    }

    public function actionView($id) {
        $model = new Paciente;
        $modelFicha08 = $this->loadModeFicha08($id);
        /*
         * Ingreso y edicion de Inicio Atencion Motivo
         */
        if ($modelFicha08->idIamF08===NULL) {
            $modelInicioAtencionMotivo = new InicioAtencionMotivoF08;
        } else {
            $modelInicioAtencionMotivo = $this->loadModelIAM($this->loadModeFicha08($id)->idIamF08->id_iam);
        }       
        
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
        if ($modelFicha08->idAvieqF08===NULL) {
            $modelAvieq = new AvieqF08;
        } else {
            $modelAvieq = $this->loadModelAvieq($this->loadModeFicha08($id)->idAvieqF08->id_avieq);
        }
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
        if ($modelFicha08->idApyfF08===NULL) {
            $modelAPF = new AntecedentesPersonalesFamiliaresF08;
        } else {
            $modelAPF = $this->loadModelAPF($this->loadModeFicha08($id)->idApyfF08->id_apyf);
        }
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
        /*
         * Enfermedad actual y revision de sistemas
         */
        if ($modelFicha08->idEaresiF08===NULL) {
            $modelEARS = new EnfermedadActualRevisionSistemasF08;
        } else {
            $modelEARS = $this->loadModelEARS($this->loadModeFicha08($id)->idEaresiF08->id_earesi);
        }    
        
        $this->performAjaxValidation($modelEARS, 'enfermedad-actual-revision-sistemas-f08-form');

        if (isset($_POST['EnfermedadActualRevisionSistemasF08'])) {
            $modelEARS->attributes = $_POST['EnfermedadActualRevisionSistemasF08'];
            if ($modelEARS->save()) {
                $conexion = Yii::app()->db;
                $consulta = "UPDATE archivo.ficha_08 SET id_earesi_f08=$modelEARS->id_earesi WHERE id_f08=$id;";
                $ejecutar = $conexion->createCommand($consulta);
                $ejecutar->query();
                $conexion->active = FALSE;
                $this->redirect(array('view', 'id' => $id));
            }
        }
        /*
         * Signos vitales, mediciones y valores
         */
        if ($modelFicha08->idSivimiF08===NULL) {
            $modelSVM = new SignosVitalesMedicinalesF08;
        } else {
            $modelSVM = $this->loadModelSVM($this->loadModeFicha08($id)->idSivimiF08->id_sivimi);
        }
        
        $this->performAjaxValidation($modelSVM, 'signos-vitales-medicinales-f08-form');

        if (isset($_POST['SignosVitalesMedicinalesF08'])) {
            $modelSVM->attributes = $_POST['SignosVitalesMedicinalesF08'];
            if ($modelSVM->save()) {
                $conexion = Yii::app()->db;
                $consulta = "UPDATE archivo.ficha_08 SET id_sivimi_f08=$modelSVM->id_sivimi WHERE id_f08=$id;";
                $ejecutar = $conexion->createCommand($consulta);
                $ejecutar->query();
                $conexion->active = FALSE;
                $this->redirect(array('view', 'id' => $id));
            }
        }
        /*
         * Examen Fisico y Diagnostico
         */
        if ($modelFicha08->idExfidiF08===NULL) {
            $modelEFD = new ExamenFisicoDiagnosticoF08;
        } else {
            $modelEFD = $this->loadModelEFD($this->loadModeFicha08($id)->idExfidiF08->id_exfidi);
        }      
        
        $this->performAjaxValidation($modelEFD, 'examen-fisico-diagnostico-f08-form');

        if (isset($_POST['ExamenFisicoDiagnosticoF08'])) {
            $modelEFD->attributes = $_POST['ExamenFisicoDiagnosticoF08'];
            if ($modelEFD->save()) {
                $conexion = Yii::app()->db;
                $consulta = "UPDATE archivo.ficha_08 SET id_exfidi_f08=$modelEFD->id_exfidi WHERE id_f08=$id;";
                $ejecutar = $conexion->createCommand($consulta);
                $ejecutar->query();
                $conexion->active = FALSE;
                $this->redirect(array('view', 'id' => $id));
            }
        }
        /*
         * Localizacion de lesiones
         */
        if ($modelFicha08->idLocalizacionLesionesF08===NULL) {
            $modelLL = new LocalizacionLesionesF08;
        } else {
            $modelLL = $this->loadModelLL($this->loadModeFicha08($id)->idLocalizacionLesionesF08->id_localizacion_lesiones);
        }      
        
        $this->performAjaxValidation($modelLL, 'localizacion-lesiones-f08-form');

        if (isset($_POST['LocalizacionLesionesF08'])) {
            $modelLL->attributes = $_POST['LocalizacionLesionesF08'];
            if ($modelLL->save()) {
                $conexion = Yii::app()->db;
                $consulta = "UPDATE archivo.ficha_08 SET id_localizacion_lesiones_f08=$modelLL->id_localizacion_lesiones WHERE id_f08=$id;";
                $ejecutar = $conexion->createCommand($consulta);
                $ejecutar->query();
                $conexion->active = FALSE;
                $this->redirect(array('view', 'id' => $id));
            }
        }
        /*
         * EmergenciaObstetrica
         */
        if ($modelFicha08->idEmergenciaObstetricaF08===NULL) {
            $modelEO = new EmergenciaObstetricaF08;
        } else {
            $modelEO = $this->loadModelEO($this->loadModeFicha08($id)->idEmergenciaObstetricaF08->id_emergencia_obstetrica);
        }      
        
        $this->performAjaxValidation($modelLL, 'emergencia-obstetrica-f08-form');

        if (isset($_POST['EmergenciaObstetricaF08'])) {
            $modelEO->attributes = $_POST['EmergenciaObstetricaF08'];
            if ($modelEO->save()) {
                $conexion = Yii::app()->db;
                $consulta = "UPDATE archivo.ficha_08 SET id_emergencia_obstetrica_f08=$modelEO->id_emergencia_obstetrica WHERE id_f08=$id;";
                $ejecutar = $conexion->createCommand($consulta);
                $ejecutar->query();
                $conexion->active = FALSE;
                $this->redirect(array('view', 'id' => $id));
            }
        }
        /*
         * SolicitudExamenes
         */
        if ($modelFicha08->idSolicitudExamenesF08===NULL) {
            $modelSE = new SolicitudExamenesF08;
        } else {
            $modelSE = $this->loadModelSE($this->loadModeFicha08($id)->idSolicitudExamenesF08->id_solicitud_examenes);
        }     
     
        $this->performAjaxValidation($modelLL, 'solicitud-examenes-f08-form');

        if (isset($_POST['SolicitudExamenesF08'])) {
            $modelSE->attributes = $_POST['SolicitudExamenesF08'];
            if ($modelSE->save()) {
                $conexion = Yii::app()->db;
                $consulta = "UPDATE archivo.ficha_08 SET id_solicitud_examenes_f08=$modelSE->id_solicitud_examenes WHERE id_f08=$id;";
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
            'modelEARS'=>$modelEARS,
            'modelSVM'=>$modelSVM,
            'modelEFD'=>$modelEFD,
            'modelLL'=>$modelLL,
            'modelEO'=>$modelEO,
            'model' => $model,
        ));
    }
    
    public function loadModelAlta($id, $modelClass = __CLASS__) {
        $model = AltaF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    public function loadModelPT($id, $modelClass = __CLASS__) {
        $model = PlanTratamientoF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    public function loadModelDA($id, $modelClass = __CLASS__) {
        $model = DiagnosticoAltaF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    public function loadModelDI($id, $modelClass = __CLASS__) {
        $model = DiagnosticoIngresoF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    public function loadModelSE($id, $modelClass = __CLASS__) {
        $model = SolicitudExamenesF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    public function loadModelEO($id, $modelClass = __CLASS__) {
        $model = EmergenciaObstetricaF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    public function loadModelLL($id, $modelClass = __CLASS__) {
        $model = LocalizacionLesionesF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    public function loadModelEFD($id, $modelClass = __CLASS__) {
        $model = ExamenFisicoDiagnosticoF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }
    public function loadModelSVM($id, $modelClass = __CLASS__) {
        $model = SignosVitalesMedicinalesF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function loadModelEARS($id, $modelClass = __CLASS__) {
        $model = EnfermedadActualRevisionSistemasF08::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
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