<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "categori".
 *
 * @property integer $id
 * @property integer $id_parent
 * @property string $name
 * @property string $text
 */
class Categori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_parent'], 'integer'],
            [['name', 'text'], 'required'],
            [['text'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_parent' => 'Id Parent',
            'name' => 'Name',
            'text' => 'Text',
        ];
    }
}
