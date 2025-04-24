<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string|null $login
 * @property string|null $password_hash
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $middle_name
 * @property string|null $phone
 * @property string|null $email
 * @property int|null $role_id
 *
 * @property Order[] $orders
 * @property Project[] $projects
 * @property Rate[] $rates
 * @property UserRole $role
 * @property SiteInfo[] $siteInfos
 * @property UserInfo[] $userInfos
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['role_id'], 'integer'],
            [['login', 'password_hash', 'first_name', 'last_name', 'middle_name', 'phone', 'email'], 'string', 'max' => 250],
            [['email'], 'unique'],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserRole::class, 'targetAttribute' => ['role_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password_hash' => 'Password Hash',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'middle_name' => 'Middle Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'role_id' => 'Role ID',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::class, ['id' => 'project_id'])->viaTable('rate', ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Rates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRates()
    {
        return $this->hasMany(Rate::class, ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Role]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(UserRole::class, ['id' => 'role_id']);
    }

    /**
     * Gets query for [[SiteInfos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSiteInfos()
    {
        return $this->hasMany(SiteInfo::class, ['user_id' => 'id']);
    }

    /**
     * Gets query for [[UserInfos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserInfos()
    {
        return $this->hasMany(UserInfo::class, ['user_id' => 'id']);
    }

    public function getFullName()
    {   $name = '';
        if($this -> first_name){
            $name .= $this -> first_name;
        }
        if($this -> last_name){
            $name .= " {$this -> last_name}";
        }

        return $name;
    }
}
