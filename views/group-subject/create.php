<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GroupSubject */

$this->title = 'Create Group Subject';
$this->params['breadcrumbs'][] = ['label' => 'Group Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-subject-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
