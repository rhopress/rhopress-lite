<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link http://vistart.name/
 * @copyright Copyright (c) 2016 vistart
 * @license http://vistart.name/license/
 */
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model rhopress\models\LoginForm */
/* @var $homeUrl string */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Login');
?>
<section id="login">
    <div class="box">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="login-box-body">
                    <p class="login-box-msg"><?= Yii::t('app', 'Sign in to start your session') ?></p>
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <div class="form-group has-feedback">
                        <?= $form->field($model, 'username', ['template' => "{input}\n{hint}\n{error}"])->textInput(['class' => 'form-control', 'placeholder' => $model->getAttributeLabel('username')]) ?>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <?= $form->field($model, 'password', ['template' => "{input}\n{hint}\n{error}"])->passwordInput(['class' => 'form-control', 'placeholder' => $model->getAttributeLabel('password')]) ?>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">    
                            <div class="checkbox icheck">
                                <label>
                                    <?=
                                    $form->field($model, 'rememberMe', [
                                        'template' => "{input} " . $model->getAttributeLabel('rememberMe') . "\n{hint}\n{error}",
                                    ])->checkbox([], false)
                                    ?>
                                </label>
                            </div>                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <?= Html::submitButton(Yii::t('app', 'Sign In'), ['class' => 'btn btn-primary btn-block btn-flat', 'style' => 'margin-top: 6px;']) ?>
                        </div><!-- /.col -->
                    </div>
                    <?php ActiveForm::end(); ?>
                </div><!-- /.login-box-body -->
            </div><!-- /.login-box -->
        </div>
    </div>
</section>