<code><?_FILE_?></code>
<? $this->title = 'Главная страница';?>
<? foreach ($posts as $articles) {?>
<div class="blog-grid">
               <div class="grid-left">
                  <span class="e"> </span>
                  <h3><?=date("d",$articles->data) ?></h3>
                  <p><?=date("M",$articles->data) ?></p>
               </div>
               <div class="grid-right">
                 <a href="<?= yii\helpers\Url::to(['post/view', 'id'=>$articles->id])?>"><h3><?=$articles->name_text?></h3></a>
                   <ul class="blog-list">
                      <li><span class="mike"> </span><a href="#">Mike</a></li>
                      <li><span class="box"> </span><a href="#">Web design</a></li>
                       <li><span class="comm"> </span><a href="#">0 comment</a></li>
                   </ul>
                   <p><?=$articles->text?></p>
                   <a class="bwn" href="<?= yii\helpers\Url::to(['post/view', 'id'=>$articles->id])?>">READ MORE</a>
               </div>
             <div class="clearfix"> </div>
             </div>
      <? }?>    
  

             <div class="pag-nations">
                    <ul class="p_n-list">
                       <?= \yii\widgets\LinkPager::widget(['pagination'=>$pages])?>
                        
                    </ul>
                </div>

<!--

<?foreach ($posts as $post) {?>
	

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="<?= yii\helpers\Url::to(['post/view', 'id'=>$post->id])?>"><?=$post->name_text?></a></h3>
  </div>
  <div class="panel-body">
   <?=$post->text ?>
  </div>
</div>
<?}?>
<?= \yii\widgets\LinkPager::widget(['pagination'=>$pages])?>

-->