<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ficha Remissivas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fch-ficha-remissiva-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cadastrar Ficha Remissiva', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'assinatura',
            'nome_completo',
            'nome_mae',
            [
                'attribute' => 'data_nascimento',
                'value' => function ($model, $key, $index, $column)
                {
                    return $model->data_nascimento;
                },
                'format' => 'dd/MM/yyyy',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
