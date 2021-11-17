<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fch_ficha_remissiva".
 *
 * @property int $id
 * @property string $assinatura
 * @property string $nome_completo
 * @property string|null $nome_mae
 * @property int $registro_matricula
 * @property int $data_nascimento
 * @property int $created_by
 */
class FchFichaRemissiva extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fch_ficha_remissiva';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['assinatura', 'nome_completo', 'registro_matricula', 'data_nascimento', 'created_by'], 'required'],
            [['assinatura'], 'string', 'max' => 100],
            [['nome_completo', 'nome_mae'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'assinatura' => 'Assinatura',
            'nome_completo' => 'Nome Completo',
            'nome_mae' => 'Nome Mae',
            'registro_matricula' => 'Registro de Matricula',
            'data_nascimento' => 'Data de Nascimento',
            'created_by' => 'Criado por',
        ];
    }
}
