<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GroupSubject */

$this->title = 'Update Group Subject: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Group Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="group-subject-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
