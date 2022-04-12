<?php

use app\models\Group;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/** @var $students */

$this->title = 'Talabalar ro\'yxati';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => 1], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => 1], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Responsive Hover Table</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Guruh</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        <?php foreach ($students as $student) : ?>
                            <tr>
                                <td>#</td>
                                <td><?= $student['full_name'] ?></td>
                                <td><?= Group::findOne("{$student['group_id']}")->name ?></td>
                                <td><span class="label label-success">active</span></td>
                                <td>
                                    <?php if ($student['status'] === 1) : ?>
                                        <a class="btn btn-danger btn-xs" href="/student/delete?id=<?=$student['status']?>"
                                           title="O'chirish" data-method="post"><span
                                                    class="glyphicon glyphicon-trash"></span></a>
                                    <?php else : ?>
                                        <a class="btn btn-info btn-xs" href="/catalog-item/delete?id=1"
                                           title="Qatarish" data-method="post"><span
                                                    class="glyphicon glyphicon-refresh"></span></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

</div>
