<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "properties".
 *
 * @property int $id
 * @property string $name Наименование
 * @property string $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 *
 * @property ProductProperty[] $productsProperties
 */
class Property extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'properties';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }

    /**
     * Gets query for [[ProductsProperties]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductsProperties()
    {
        return $this->hasMany(ProductProperty::className(), ['propertyId' => 'id']);
    }
}
