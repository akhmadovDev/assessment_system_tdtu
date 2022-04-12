<?php

use app\models\Group;
use app\models\Subject;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GroupSubject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-subject-form">

    <?php
    $cats = Group::find()->all();
    $data = ArrayHelper::map($cats, 'id', 'name');
    $subject = Subject::find()->all();
    $data_subject = ArrayHelper::map($subject, 'id', 'name');
    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'group_id')->dropDownList(
        $data,
        [
            'maxlength' => true,
            'id' => 's_group_id',
            'prompt' => 'Guruh...',
            'required' => true
        ],
    ); ?>

    <?= $form->field($model, 'subject_id')->dropDownList(
        $data_subject,
        [
            'maxlength' => true,
            'id' => 's_subject_id',
            'prompt' => 'Fan...',
            'required' => true
        ]); ?>


    <?= $form->field($model, 'semester')->dropDownList(
        [
            '1' => 1,
            '2' => 2
        ],
        [
            'maxlength' => true,
            'prompt' => 'Semester...',
            'required' => true
        ]); ?>

    <?= $form->field($model, 'academic_year')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
