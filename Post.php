<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $name_text
 * @property string $text
 * @property integer $data
 * @property string $keywords
 * @property string $discriptions
 * @property string $image
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_text', 'text', 'data', 'keywords', 'discriptions', 'image'], 'required'],
            [['text'], 'string'],
            [['data'], 'integer'],
            [['name_text', 'keywords', 'discriptions', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_text' => 'Name Text',
            'text' => 'Text',
            'data' => 'Data',
            'keywords' => 'Keywords',
            'discriptions' => 'Discriptions',
            'image' => 'Image',
        ];
    }
}
