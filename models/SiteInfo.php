<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "site_info".
 *
 * @property int $id
 * @property string|null $site_name
 * @property string|null $slogan
 * @property string|null $email
 * @property string|null $phone1
 * @property string|null $phone2
 * @property string|null $vk
 * @property string|null $tg
 * @property int|null $user_id
 *
 * @property User $user
 */
class SiteInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'site_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['slogan'], 'string'],
            [['site_name'], 'string', 'max' => 250],
            [['email', 'phone1', 'phone2', 'vk', 'tg'], 'string', 'max' => 150],
            [['id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_name' => 'Site Name',
            'slogan' => 'Slogan',
            'email' => 'Email',
            'phone1' => 'Phone1',
            'phone2' => 'Phone2',
            'vk' => 'Vk',
            'tg' => 'Tg',
            'user_id' => 'User ID',
        ];
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
}
