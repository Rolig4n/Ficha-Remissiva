<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FchFichaRemissiva */

$this->title = 'Atualizando Ficha #' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ficha Remissivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome_completo, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fch-ficha-remissiva-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
