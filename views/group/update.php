<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Group */

$this->title = 'Guruh Nomini O\'zgartirish: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="group-update">
    <div class="container">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
