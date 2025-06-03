<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property string|null $Description
 * @property string|null $category
 * @property int|null $stock
 * @property string|null $ImageURL
 * @property string|null $createdAt
 * @property string|null $updatedAt
 */
class Products extends \yii\db\ActiveRecord
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
            [['Description', 'category', 'ImageURL'], 'default', 'value' => null],
            [['stock'], 'default', 'value' => 0],
            [['name', 'price'], 'required'],
            [['price'], 'number'],
            [['Description'], 'string'],
            [['stock'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name', 'ImageURL'], 'string', 'max' => 255],
            [['category'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'Description' => 'Description',
            'category' => 'Category',
            'stock' => 'Stock',
            'ImageURL' => 'Image Url',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    public static function getProducts()
    {
        return self::find()->all();
    }
    /**
     * Calculates the expected profit based on the products' price and stock.
     * The profit is calculated as (price * stock) - (stock * 0.1) - (stock * 0.16).
     *
     * @return float The total expected profit.
     */
    public static function getExpectedProfit()
    {
        $totalProfit = 0;
        foreach (self::getProducts() as $product) {
            $totalProfit += $product->price * $product->stock - $product->stock * 0.1 - $product->stock * 0.16;
        }
        return $totalProfit;
    }

    /**
     * Returns all products.
     * @return Products[]
     */
}
