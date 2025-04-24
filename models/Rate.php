<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rate".
 *
 * @property int $id
 * @property int $user_id
 * @property int $project_id
 * @property string $estim
 * @property string|null $txt
 *
 * @property Project $project
 * @property User $user
 */
class Rate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'project_id', 'estim'], 'required'],
            [['user_id', 'project_id'], 'integer'],
            [['estim', 'txt'], 'string'],
            [['user_id', 'project_id'], 'unique', 'targetAttribute' => ['user_id', 'project_id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::class, 'targetAttribute' => ['project_id' => 'id']],
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
            'user_id' => 'User ID',
            'project_id' => 'Project ID',
            'estim' => 'Estim',
            'txt' => 'Txt',
        ];
    }

    /**
     * Gets query for [[Project]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::class, ['id' => 'project_id']);
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
