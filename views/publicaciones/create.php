<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Publicacion */

$this->title = 'Nueva Publicación';
$this->params['breadcrumbs'][] = ['label' => 'Publicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publicacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'tipos' => $tipos,
        'categorias' => $categorias,
    ]) ?>

</div>
