<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Group */

$this->title = 'Yangi Guruh Yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-create">
    <div class="container">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
