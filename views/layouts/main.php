<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\RespondAsset;
use app\assets\Html5shivAsset;
use app\assets\IsotopeAsset;
use app\assets\PrettyPhotoAsset;
use app\assets\FontAwesomeAsset;

AppAsset::register($this);
FontAwesomeAsset::register($this);
IsotopeAsset::register($this);
PrettyPhotoAsset::register($this);
Html5shivAsset::register($this);
RespondAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body data-spy="scroll" data-target="#navbar" data-offset="0">
        <?php $this->beginBody() ?>

        <header id="header" role="banner">
            <div class="container">
                <?php
                NavBar::begin([
                    'id' => 'navbar',
                    'brandLabel' => 'ρ.press lite',
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => 'navbar-default',
                    ],
                    'renderInnerContainer' => false,
                ]);
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav'],
                    'items' => [
                        //['label' => '', 'url' => ['/site/index']],
                        '<li><a href="' . Yii::$app->homeUrl . '"><i class="fa fa-home"></i></a></li>',
                        Yii::$app->user->isGuest ?
                            ['label' => 'Login', 'url' => ['/site/login']] :
                            [
                            'label' => 'Logout (' . Yii::$app->user->identity->profile->display_name . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']
                            ],
                        ['label' => 'New', 'url' => ['new']],
                    ],
                ]);
                NavBar::end();
                ?>
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
            </div>
        </header>
        <div style="margin-top: 144px;">

        </div>
        <?= $content ?>

        <div style="margin-top: 16px;">

        </div>
        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; vistart <?= date('Y') ?></p>

                <p class="pull-right"><?= 'Powered by rhopress.' ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
