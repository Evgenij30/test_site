<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\categori */

$this->title = 'Create Categori';
$this->params['breadcrumbs'][] = ['label' => 'Categoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categori-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
