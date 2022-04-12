<?php

use app\models\Student;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Assessment */
/* @var $form yii\widgets\ActiveForm */
/** @var $students */

?>

<div class="assessment-form">

    <?php
    $cats = Student::find()->all();
    $data = ArrayHelper::map($cats, 'id', 'full_name');
    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->dropDownList([
        '0' => 'Kunlik dars',
        'oraliq_1' => 'Oraliq Nazorat - 1',
        'oraliq_2' => 'Oraliq Nazorat - 2',
        'joriy_1' => 'Joriy Nazorat - 1',
        'joriy_2' => 'Joriy Nazorat - 2',
        'yakuniy' => 'Yakuniy Nazorat'
    ],
        [
            'name' => "Assessment[
            ][t][type]",
            'prompt' => 'Fan turini tanlang...'
        ]) ?>


    <?= $form->field($model, 'date')->textInput(['name' => "Assessment[d][date]"]) ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th class="text-center">Ism Familiya</th>
                            <th class="text-center">
                                <span style="margin-left: -80px;" >
                                1
                                </span><span style="margin-left: 30px">
                                2
                                </span><span style="margin-left: 25px">
                                3
                                </span><span style="margin-left: 20px">
                                4
                                </span><span style="margin-left: 20px">
                                5
                                </span><span style="margin-left: 20px; margin-right: 10px">
                                nb
                                </span>
                            </th>
                        </tr>

                        <?php foreach ($students as $student) : ?>
                            <?php global $id;
                            $id = $student['id'] ?>
                            <tr>
                                <td>
                                    <h4 class="inline" style="margin-left: 50px"><?= $student['full_name'] ?></h4>
                                </td>
                                <td>
                                    <div style="width: 800px; float: right" class="container">
                                        <?=
                                        $form->field($model, 'rating')->radioList([
                                            '0' => '',
                                            '1' => '',
                                            '2' => '',
                                            '3' => '',
                                            '5' => '',
                                            '6' => '',
                                            '7' => '',
                                        ],
                                            [
                                                'item' => function ($index, $label, $name, $checked, $value) {
                                                    if ($checked) {
                                                        $checkedText = 'checked="checked"';
                                                    } else {
                                                        $checkedText = '';
                                                    }
                                                    return ' <input style="margin:2px; width:30px; height:30px;" id="workpermit-wp_spost1_' . $index . '" type="radio" name="Assessment[assessment][' . $GLOBALS['id'] . '][rating]" value="' . $value . '" ' . $checkedText . '>';
                                                },
                                                'class' => 'inline',
                                            ])->label(false);
                                        ?>
                                    </div>
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

    <!--   -->


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
