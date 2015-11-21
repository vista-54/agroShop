<?php

namespace frontend\models;

use frontend\controllers\HistoryMarketController;
use Yii;

/**
 * This is the model class for table "history".
 *
 * @property integer $id
 * @property integer $seller_id
 * @property integer $buyer_id
 * @property string $product_name
 * @property integer $product_sum
 * @property double $total_price
 * @property string $date
 */
class HistoryMarket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seller_id', 'buyer_id', 'product_name', 'product_sum', 'total_price', 'date'], 'required'],
            [['seller_id', 'buyer_id', 'product_sum'], 'integer'],
            [['total_price'], 'number'],
            [['date'], 'safe'],
            [['product_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'seller_id' => 'Seller ID',
            'buyer_id' => 'Buyer ID',
            'product_name' => 'Product Name',
            'product_sum' => 'Product Sum',
            'total_price' => 'Total Price',
            'date' => 'Date',
        ];
    }
    public function getContent(){

    }
}
