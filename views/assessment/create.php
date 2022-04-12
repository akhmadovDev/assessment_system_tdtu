<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Assessment */

$this->title = 'Baholash bo\'limi';
$this->params['breadcrumbs'][] = ['label' => 'Assessments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assessment-create">


    <?= $this->render('_form', [
        'model' => $model,
        'students' => $students
    ]) ?>

</div>
