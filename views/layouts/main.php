<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" ng-app="myApp">
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

    <div class="container">
        <div  ng-controller="myCtrl">

            <button ng-click="myFunction()">Show currency</button>



            <table class="talbe table-bordered" width="50%">
                <thead>
                    <tr>
                        <th>Price</th>
                        <th>Currency</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="document in documents">
                        <td>{{document.price}}</td>
                        <td>{{document.currency}}</td>
                        <td>{{document.date_at}}</td>
                    </tr>
                </tbody>
             </table>
        </div>

        <div ng-view></div>
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
