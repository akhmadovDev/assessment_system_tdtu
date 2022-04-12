<?php
/**
 * @var $directoryAsset string
 */
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Admin</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menyular', 'options' => ['class' => 'header']],
                    ['label' => 'Bosh sahifa', 'icon' => 'file-code-o', 'url' => ['/']],
                    ['label' => 'Talabalar', 'icon' => 'file-code-o', 'url' => ['/student']],
                    ['label' => 'Guruhlar', 'icon' => 'dashboard', 'url' => ['/group']],
                    ['label' => 'Fanlar', 'icon' => 'dashboard', 'url' => ['/subject']],
                    ['label' => 'Guruhlar Fanlar', 'icon' => 'dashboard', 'url' => ['/group-subject']],
                    ['label' => 'Baholar', 'icon' => 'dashboard', 'url' => ['/assessment']],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
