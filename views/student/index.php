<?php

use app\models\Student;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/** @var $subjects */

$this->title = 'Talabalar bo\'limi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1>Talaba Baholarini Ko'rish uchun Guruhni Tanlang</h1>
    <div class="container">
        <p style="float: right">
            <?= Html::a('Talaba Qo\'shish', ['create'], ['class' => 'btn btn-lg btn-success']) ?>
        </p>
    </div>
    <section class="content">
        <div class="row">
            <?php foreach ($subjects as $subject) : ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                        <div class="info-box-content">
                            <a href="<?= Url::toRoute("/student/group?id=" . $subject['id']) ?>"
                               class="text-white">
                            <span class="info-box-text"
                                  style="font-size: 20px !important; font-weight: 600 !important;"><?= $subject['name'] ?></span>
                                <span class="info-box-number"><?= $subject['type'] ?></span>
                            </a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            <?php endforeach; ?>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'full_name',
            'group_id',
            'description:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Student $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
