<?php

namespace app\controllers;

use app\models\Assessment;
use app\models\AssessmentSearch;
use app\models\Group;
use app\models\GroupSubject;
use app\models\Student;
use app\models\Subject;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AssessmentController implements the CRUD actions for Assessment model.
 */
class AssessmentController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Assessment models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AssessmentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Assessment model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Assessment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($id)
    {
        $model = new Assessment();
        $students = Student::find()
            ->asArray()
            ->where(['status' => true, 'group_id' => $id])
            ->all();



        if ($this->request->isPost) {
            echo '<pre>';
            print_r($this->request->post()['Assessment']['assessment']);
            exit();
            $i=0;
            foreach ($this->request->post()['Assessment']['assessment'] as  $item => $k) {

                if (++$i > 2) {
                    $model = new Assessment();
                    $model->student_id = $item;
                    $model->type = $item;
                    $model->date = $item;
                    $model->rating = $item;
                }

                echo '<br>';

                print_r($k);
            }


            if ($model->load($this->request->post())) {
            foreach ($this->request->post() as $item) {
//                    $model = new Assessment();
                $model->student_id =
                    $model->save();
                }
            }
//            if ($model->load($this->request->post()) && $model->save()) {
//                return $this->redirect(['view', 'id' => $model->id]);
//            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'students' => $students
        ]);
    }

    public function actionAssessSubject() {
        $subject = Subject::find()
            ->asArray()
            ->where(['status' => true])
            ->all();

        return $this->render('subject', [
            'subject' => $subject
        ]);
    }

    public function actionAssessGroup($id) {
        $group = GroupSubject::findone($id);
        $groups = $group->getGroup()
            ->asArray()
            ->where(['status' => true])
            ->all();

        return $this->render('group', [
            'group' => $groups
        ]);
    }

    /**
     * Updates an existing Assessment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Assessment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Assessment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Assessment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Assessment::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
