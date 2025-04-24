<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $user_info_id
 * @property string|null $status
 * @property string|null $dt_create
 * @property string|null $dt_update
 * @property int|null $cost
 * @property string|null $comment
 * @property string|null $pay_method
 *
 * @property Cart $cart
 * @property User $user
 * @property UserInfo $userInfo
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'user_info_id', 'cost'], 'integer'],
            [['status', 'comment', 'pay_method'], 'string'],
            [['dt_create', 'dt_update'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
            [['user_info_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserInfo::class, 'targetAttribute' => ['user_info_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Клиент',
            'user_info_id' => 'Адрес доставки',
            'status' => 'Статус',
            'dt_create' => 'Дата создания',
            'dt_update' => 'Дата изменения',
            'cost' => 'Цена',
            'comment' => 'Комментарий',
            'pay_method' => 'Метод оплаты',
        ];
    }

    /**
     * Gets query for [[Cart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasOne(Cart::class, ['order_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    /**
     * Gets query for [[UserInfo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserInfo()
    {
        return $this->hasOne(UserInfo::class, ['id' => 'user_info_id']);
    }
}
