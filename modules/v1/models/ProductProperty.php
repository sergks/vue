<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "products_properties".
 *
 * @property int $id
 * @property int $productId Товар
 * @property int $propertyId Свойство
 * @property string $value Значение
 * @property string $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 *
 * @property Product $product
 * @property Property $property
 */
class ProductProperty extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products_properties';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productId', 'propertyId', 'value'], 'required'],
            [['productId', 'propertyId'], 'integer'],
            [['value'], 'string'],
            [['createdAt', 'updatedAt'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'productId' => 'Товар',
            'propertyId' => 'Свойство',
            'value' => 'Значение',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'productId']);
    }

    /**
     * Gets query for [[Property]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProperty()
    {
        return $this->hasOne(Property::className(), ['id' => 'propertyId']);
    }

    public function toArray(array $fields = [], array $expand = [], $recursive = true)
    {
        return [
            'id' => $this->id,
            'value' => $this->value,
            'property' => $this->property
        ];
    }
}
