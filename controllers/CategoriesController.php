<?php

namespace app\controllers;


use app\models\Post;
use app\models\Categories;

class CategoriesController extends \yii\web\Controller
{
    public function actionIndex($id=0)
    {
    	$postcat=Post::find()->where(['id_categoriya' => $id])->all();
        return $this->render('index', compact('postcat'));
    }

}
