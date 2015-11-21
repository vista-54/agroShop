<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Product */

//$this->title = $model->image;
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Товар', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="product-view">

    <h1><?= Html::img($model->image,[
            'alt'=>'Изображение товара',
            'style' => 'width:100%;'
        ]);

        ?></h1>

    <p>

<!--        --><?//= Html::a('Купить', ['buy-product', 'id' => $model->id], ['class' => 'btn btn-success']) ?>

        <?
        if(Yii::$app->getUser()->getId()===$model->user_id){
        echo Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']); }?>

        <?if(Yii::$app->getUser()->getId()===$model->user_id){
        echo Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить товар?',
                'method' => 'post',
            ],
        ]);} ?>
    </p>
    <h2>Поздравляем! Ваш товар успешно выставлен на продажу</h2>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
//            'user_id',
            'pr_name',
            'pr_sum',
            'pr_price',
//            'image',

        ],
    ]) ?>
    <h2>
        <center><strong>Договор купли продажи </strong></center>
        <br><strong>Внимание :</strong> сделка совершится в  автоматическом режиме, деньги от продажи будут зачислены на ваш счёт, в любой момент до совершения сделки вы можете отозвать заявку .
    </h2>

</div>
