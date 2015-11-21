<?php
/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 21.11.2015
 * Time: 16:38
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model frontend\models\Product */
/* @var $form yii\widgets\ActiveForm */
/* @var $history frontend\models\HistoryMarket */
?>
<div>

    <ul>
        <li>Ваш товар в количестве <?echo $_GET['count']?> едениц находится на нашем складе забрать его можете в любое время , напоминаем за каждый день нахождения товара на складе взымается плата. Время работы с 10,00 до 17,00 .</li>
        <li>Менеджер по продажам Тел 89131001002</li>
        <li>Служба поддержки тел 900-900</li>
    </ul>
    <div class="form-group">
        <?$url= Yii::$app->urlManager->createUrl(['product/index']);?>
        <?= Html::a('Торговая площадка',$url) ?>
    </div>
    <!--    <button class="btn btn-success" type="button">Купить</button>-->

</div>
