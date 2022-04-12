<?php

use app\models\GroupSubject;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GroupSubjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Group Subjects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-subject-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Group Subject', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'group_id',
            'subject_id',
            'semester',
            'academic_year',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, GroupSubject $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
