<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FchFichaRemissiva */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fch-ficha-remissiva-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'assinatura')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome_completo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome_mae')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'data_nascimento')->widget(\yii\jui\DatePicker::class, ['dateFormat' => 'yyyy-MM-dd']) ?>
    
    <?= $form->field($model, 'registro_matricula')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
