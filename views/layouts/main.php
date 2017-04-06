<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    $items = [
        ['label' => 'Inicio', 'url' => ['/site/index']],
        ['label' => 'Sobre Animas', 'url' => ['/site/about']],
        ['label' => 'Contacta con nosotros', 'url' => ['/site/contact']],
        Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'items' =>[['label' => 'Loguearse',
                                        'url' => ['/user/security/login']],
                                        ['label' => 'Registrarse',
                                        'url' => ['/user/registration/register']]]]
        ) : (
            '<li>'
            . Html::beginForm(['/user/security/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>'
        )];
    if (!(Yii::$app->user->isGuest)) {

         array_unshift($items, ['label' => 'Mi Perfil', 'url' => ['/user/profile'/* . Yii::$app->user->id*/]]);
         array_unshift($items, ['label' => 'Configuración',  'url' => ['/user/settings/profile']]);
         array_unshift($items, ['label' => 'Publicar',  'url' => ['/publicaciones/create']]);
    }

    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $items,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
