<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property int $id
 * @property int $item_id
 * @property int $order_id
 * @property int $amount
 * @property int|null $cost
 *
 * @property Item $item
 * @property Order $order
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'order_id'], 'required'],
            [['item_id', 'order_id', 'amount', 'cost'], 'integer'],
            [['item_id', 'order_id'], 'unique', 'targetAttribute' => ['item_id', 'order_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::class, 'targetAttribute' => ['item_id' => 'id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::class, 'targetAttribute' => ['order_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',
            'order_id' => 'Order ID',
            'amount' => 'Amount',
            'cost' => 'Cost',
        ];
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::class, ['id' => 'item_id']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::class, ['id' => 'order_id']);
    }

    public static function add($item_id, $user_id){
        $order = Order::find()->where(['user_id' => $user_id, 'status' => 'Корзина'])->one();
        $item = Item::findOne($item_id);
        if(!$order){
            $order = new Order();
            $order -> user_id = $user_id;
            $order -> cost = 0;
            $order -> save();
        }
        $order_id = $order -> id;
        $cart = self::find()->where(['order_id' => $order_id, 'item_id' => $item_id])->one();
        if(!$cart){
            $cart = new self;
            $cart -> order_id = $order_id;
            $cart -> item_id = $item_id;
            $cart -> cost = $item -> price;
            $cart -> save();
            $order -> cost += $item -> price;
            $order -> save();
        }else{
            $cart -> amount += 1;
            $cart -> cost += $item -> price;
            $cart -> save();
            $order -> cost += $item -> price;
            $order -> save();
        }
    }


    public static function del($item_id, $user_id){
        $order = Order::find()->where(['user_id' => $user_id, 'status' => 'Корзина'])->one();
        $item = Item::findOne($item_id);
        if(!$order){
            $order = new Order();
            $order -> cost = 0;
            $order -> user_id = $user_id;
            $order -> save();
        }
        $order_id = $order -> id;
        $cart = self::find()->where(['order_id' => $order_id, 'item_id' => $item_id])->one();

        if(!$cart){
            $cart = new self;
            $cart -> order_id = $order_id;
            $cart -> item_id = $item_id;
            $cart -> cost = $item -> price;
            $cart -> save();
        }else{
            if($cart -> amount == 1){
                $cart -> delete();
                $order -> cost -= $item -> price;
                $order -> save();
            }else{
                $cart -> amount -= 1;
                $cart -> cost -= $item -> price;
                $cart -> save();
                $order -> cost -= $item -> price;
                $order -> save();
            }
        }
    }

    public static function getCurrentCart($user_id){
        $order = Order::find()->where(['user_id' => $user_id, 'status' => 'Корзина'])->one();
        if(!$order){
            return null;
        }else{
            $cart = self::find()->where(['order_id' => $order -> id])->all();
            return $cart;
        }
    }
}
