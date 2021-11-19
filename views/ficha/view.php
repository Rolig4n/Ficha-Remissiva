<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FchFichaRemissiva */

$this->title = 'Ficha #'.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ficha Remissivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fch-ficha-remissiva-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'registro_matricula',
            'assinatura',
            'nome_completo',
            'nome_mae',
            [
                'attribute' => 'data_nascimento',
                'value' => function ($model)
                {
                    $date = new DateTime();
                    $date->setTimestamp($model->data_nascimento);
                    return $date->format('d/m/Y');
                }
            ],
            [
                'attribute' => 'created_by',
                'value' => function($model)
                {
                    return $model->createdBy->nome;
                }
            ]
        ],
    ]) ?>

</div>
