<?php
/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 20.11.2015
 * Time: 1:05
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Product */
/* @var $form yii\widgets\ActiveForm */
/* @var $history frontend\models\HistoryMarket */

use  frontend\models\Product;
use common\widgets\vistaDev\byProduct;
?>
<div><h1><?= $model->pr_name ?></h1>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'totalCount')->input('number',['min'=>1,'max'=>$model->pr_sum,'onchange'=>'getPrice('.$model->pr_price.')'])->label('Количество едениц '.$model->pr_sum.' всего') ?>

    <?= $form->field($model, 'totalSum')->textInput(['readonly' => true,'value'=>$model->pr_sum*$model->pr_price]) ?>

    <?= $form->field($model, 'pr_sum')->textInput(['readonly' => true,'value'=>0])->hiddenInput()->label(false)?>


    <div class="form-group">
        <?= Html::submitButton('Купить', ['class' =>  'btn btn-success']) ?>
    </div>
<!--    <button class="btn btn-success" type="button">Купить</button>-->
    <?php ActiveForm::end(); ?>


</div>


