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
 * @property string $created_at
 * @property string $updated_at
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
            [['assinatura', 'nome_completo', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
