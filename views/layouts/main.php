<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="header">
  <div class="container">
    <div class="header__top">
      <ul class="top__info">
        <li class="info-item">Телефон: (499) 340-94-71</li>
        <li class="info-item">Email: <span class="text-underline">info-future-group.ru</span></li>
      </ul>
      <div class="top__logo">
        <img src="images/logo.png" alt="logo">
      </div>
    </div>
    <div class="header__bot">
      <p>Комментарии</p>
      <div class="bot__logo">
        <h2>Future</h2>
        <p>internet agency</p>
      </div>
    </div>
  </div>
</header>

<div class="wrapper">
    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
  <div class="container">
    <div class="footer__fot">
      <div class="footer__logo">
        <div class="logo__img">
          <img src="images/logo.png" alt="">
        </div>
        <h2>Future</h2>
        <p>internet agency</p>
      </div>
      <div class="footer__info">
        <ul class="top__info">
          <li class="info-item">Телефон: (499) 340-94-71</li>
          <li class="info-item">Email: <span class="text-underline">info-future-group.ru</span></li>
          <li class="info-item">Адрес: <span class="text-underline">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</span></li>
        </ul>
        <p class="copyr">&copy; 2010-2014 Future. Все права защищены.<p>
      </div>
    </div>
  </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
