<?php
/**
 * @var $subject
 */

use yii\helpers\Url;

?>
<section class="content">
    <div class="row">
        <?php foreach ($subject as $s) : ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                    <div class="info-box-content">
                        <a href="<?= Url::toRoute("/assessment/assess-group?id=" . $s['id']) ?>" class="text-white">
                            <span class="info-box-text"
                                  style="font-size: 20px !important; font-weight: 600 !important;"><?= $s['name'] ?></span>
                            <span class="info-box-number"><?= $s['type'] ?></span>
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