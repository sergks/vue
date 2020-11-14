<?php

namespace app\modules\v1\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name Название
 * @property string|null $image Изображение
 * @property float|null $price Стоимость
 * @property string $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 * @property string $url URL
 */
class Product extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['price'], 'number'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name', 'image', 'url'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'image' => 'Изображение',
            'price' => 'Стоимость',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
            'url' => 'URL'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors[] = [
            'class' => SluggableBehavior::class,
            'attribute' => 'name',
            'slugAttribute' => 'url'
        ];

        return $behaviors;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $fields = [], array $expand = [], $recursive = true)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->image,
            'price' => (double)$this->price,
            'formattedPrice' => number_format($this->price, 0, '.', ' ') . ' ₽',
            'url' => $this->url,
            'createdAt' => $this->createdAt
        ];
    }
}
