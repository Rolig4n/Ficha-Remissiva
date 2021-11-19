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
 *
 * @property UsrUsuario $createdBy
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
            [['registro_matricula', 'created_by'], 'integer'],
            //[['data_nascimento'],'trim'],
            [['assinatura'], 'string', 'max' => 100],
            [['nome_completo', 'nome_mae'], 'string', 'max' => 250],
            [['registro_matricula'], 'unique'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => UsrUsuario::className(), 'targetAttribute' => ['created_by' => 'id']],
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
            'registro_matricula' => 'Registro Matricula',
            'data_nascimento' => 'Data Nascimento',
            'created_by' => 'Criado Por',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(UsrUsuario::className(), ['id' => 'created_by']);
    }
}
