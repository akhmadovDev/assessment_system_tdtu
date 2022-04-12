<?php

use app\models\Group;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php
    $cats = Group::find()->all();
    $data = ArrayHelper::map($cats, 'id', 'name');
    $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'group_id')->dropDownList(
        $data,
        [
            'maxlength' => true,
            'id' => 'group_id'
        ]); ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>










    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
