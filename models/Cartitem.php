<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cartitem".
 *
 * @property int $id
 * @property int $CartID
 * @property int $ProductID
 * @property int $Quantity
 * @property float $Price
 * @property string|null $AddedAt
 *
 * @property Cart $cart
 * @property Products $product
 */
class Cartitem extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cartitem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Quantity'], 'default', 'value' => 1],
            [['CartID', 'ProductID', 'Price'], 'required'],
            [['CartID', 'ProductID', 'Quantity'], 'integer'],
            [['Price'], 'number'],
            [['AddedAt'], 'safe'],
            [['CartID'], 'exist', 'skipOnError' => true, 'targetClass' => Cart::class, 'targetAttribute' => ['CartID' => 'CartID']],
            [['ProductID'], 'exist', 'skipOnError' => true, 'targetClass' => Products::class, 'targetAttribute' => ['ProductID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'CartID' => 'Cart ID',
            'ProductID' => 'Product ID',
            'Quantity' => 'Quantity',
            'Price' => 'Price',
            'AddedAt' => 'Added At',
        ];
    }

    /**
     * Gets query for [[Cart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasOne(Cart::class, ['CartID' => 'CartID']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::class, ['id' => 'ProductID']);
    }

}
