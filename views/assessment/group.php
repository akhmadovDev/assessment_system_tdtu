<?php
/**
 * @var $group
 */

use yii\helpers\Url;

?>
<section class="content">
    <div class="row">
        <?php foreach ($group as $g) : ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                    <div class="info-box-content">
                        <a href="<?= Url::toRoute("/assessment/create?id=" . $g['id']) ?>" class="text-white">
                            <span class="info-box-text"
                                  style="font-size: 20px !important; font-weight: 600 !important;"><?= $g['name'] ?></span>
                            <span class="info-box-number"><?= $g['id'] ?></span>
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