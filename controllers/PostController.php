<?php

namespace app\controllers;

use app\models\Post;


class PostController extends AppController
{
   public function actionIndex(){
    
    $query=Post::find();
    $pages= new \yii\data\Pagination(['totalCount'=> $query->count(),'pageSize'=>2, 'pageSizeParam' => false, 'forcePageParam'=>false ]);
    $posts=$query->offset($pages->offset)->limit($pages->limit)-> all();

     return $this->render('index',compact('posts','pages'));
   }

    public function actionView($id=0){
    
    $postid=Post::find()->where(['id' => $id])->all();

     return $this->render('view',compact('postid'));
   }
   
   
}
