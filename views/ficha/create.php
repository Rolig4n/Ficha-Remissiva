<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FchFichaRemissiva */

$this->title = 'Create Fch Ficha Remissiva';
$this->params['breadcrumbs'][] = ['label' => 'Fch Ficha Remissivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fch-ficha-remissiva-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
