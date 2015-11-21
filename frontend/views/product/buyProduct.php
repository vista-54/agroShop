<?php
/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 20.11.2015
 * Time: 1:05
 */
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Product */
use  frontend\models\Product;
use common\widgets\vistaDev\byProduct;
?>
<div><h1><?= $model->pr_name ?></h1>
<form >
   <label>Введите количество едениц: <input id="sum" type="number" onchange="getPrice(<?echo $model->pr_price?>)" min="1" max="<?echo $model->pr_sum?>"></label><br>
   <label>Суммарная цена: <input id="price" type="text" disabled ></label><br>
    <div class="form-group">
        <?= Html::submitButton('Купить', ['class' =>  'btn btn-success']) ?>
    </div>
<!--    <button class="btn btn-success" type="button">Купить</button>-->
</form>


</div>


