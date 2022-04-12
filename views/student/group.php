<?php
/** @var $groups // Fanga tegishli bo'lgan guruhlar ro'yxati */

use yii\helpers\Url;

?>

<section class="content">
    <div class="row">
        <?php foreach ($groups as $group) : ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                    <div class="info-box-content">
                        <a href="<?= Url::toRoute("/assessment/view?id=" . $group[0]['id']) ?>" class="text-white">
                            <span class="info-box-text"
                                  style="font-size: 20px !important; font-weight: 600 !important;"><?= $group[0]['name'] ?></span>
                            <span class="info-box-number"><?= $group[0]['id'] ?></span>
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
