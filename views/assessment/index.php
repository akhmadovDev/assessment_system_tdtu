<?php

use app\models\Assessment;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AssessmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Assessments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assessment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Assessment', ['assess-subject'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'student_id',
            'type',
            'rating',
            'date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Assessment $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
