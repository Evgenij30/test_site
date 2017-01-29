<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\MenuWidget;



AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
     <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="mothergrid">
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="/"> <img src="/image/icon/my_blog_logo.png" alt="Мой блог " height="60px"/> </a>
            </div>
            <span class="menu"> <img src="images/icon.png" alt=""/></span>
            <div class="clear"> </div>
            <div class="navg">
                <ul class="res">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="projects.html">PROJECTS</a></li>
                    <li><a class="active" href="blog.html">BLOG</a></li>
                    <li><a href="events.html">EVENTS</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="/index.php?r=admin/article">РЕдактор блог</a></li>
                </ul>
                 <script>
                                                             </script>
            </div>
        <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--header end here-->
<!--blog start here-->
<div class="blog">
    <div class="container">

   


        <div class="blog-main">
            <div class="blog-top">
            <h3> </h3>
            </div>
            <div class="col-md-8 blog-left">
       

          
            <?= $content ?>
          <a href=""> <img src="/image/icon/programist_gif.gif" alt="" width="160px"/> </a>

            </div>
            <div class="col-md-4 blog-right"> 
                <div class="sear">
                    <input type="text" value="SEARCH.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'SEARCH..';}"/>
                    <input type="submit" value="">
                </div>

                <h3> CATEGORIES</h3>
                 <?=MenuWidget::widget()?>
                
                <h3>POPULAR POSTS</h3>
                <ul class="popular">
                    <li><h5> Make a Type Specimen Book</h5><span class="g"> </span><a href="#">1280</a><span class="h"> </span><a href="#">Milk</a></li>
                    <li><h5>Most Popular Post</h5><span class="g"> </span><a href="#">1011</a><span class="h"> </span><a href="#">Elly</a></li>
                    <li><h5> Popularised Post</h5><span class="g"> </span><a href="#">956</a><span class="h"> </span><a href="#">Vall</a></li>
                </ul>
                <h3>POPULAR TAGS</h3>
                <ul class="popular-tag">
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Art</a></li>
                    <li><a href="#">Developing</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">Wordpress</a></li>
                    <li><a href="#">Photography</a></li>
                </ul>
                <h3>SUBSCRIBE FOR NEWSLETTER</h3>
                <div class="subscribe">
                    <p>Duis vitae velit mollis,Pellentesque lorem</p>
                <div class="sub">
                    <input type="text" value="YOUR EMAIL ADDRESS" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'YOUR EMAIL ADDRESS';}"/>
                    <input type="submit" value="SUBSCRIBE">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>


</div>
<!--blog end here-->
<!--footer start here-->
<div class="footer">
    <div class="container">
        <div class="footer-main">
            <div class="footer-navg">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="projects.html">PROJECTS</a></li>
                    <li><a class="active" href="blog.html">BLOG</a></li>
                    <li><a href="events.html">EVENTS</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                </ul>
            </div>
            <div class="footer-top">
                <div class="col-md-4 footer-left">
                    <h3>FOLLOW US</h3>
                <ul>
                    <li><a href="#"><span class="a"> </span></a></li>
                    <li><a href="#"><span class="b"> </span></a></li>
                    <li><a href="#"><span class="c"> </span></a></li>
                </ul>
                </div>
                <div class="col-md-4 footer-middle">
                    <h3>NEWS LETTER</h3>
                    <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}"/>
                    <input type="submit" value="Subscribe">
                </div>
                <div class="col-md-4 footer-right">
                    <h3>Contact us</h3>
                    <p>Address : Richard McClintock</p>
                    <p>New Street : Letraset sheets</p>
                    <p>ph :5240-2948-600</p>
                </div>
            <div class="clearfix"> </div>
            </div>
            <div class="footer-bottom">
               
            </div>
        <div class="clearfix"> </div>
        <script type="text/javascript">
                                        $(document).ready(function() {
                                            /*
                                            var defaults = {
                                                containerID: 'toTop', // fading element id
                                                containerHoverID: 'toTopHover', // fading element hover id
                                                scrollSpeed: 1200,
                                                easingType: 'linear' 
                                            };
                                            */
                                            
                                            $().UItoTop({ easingType: 'easeOutQuart' });
                                            
                                        });
                                    </script>
                        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>
    </div>
</div>
<!--/footer end here-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<!--
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
