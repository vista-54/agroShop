<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SearchProduct */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?   if(!Yii::$app->user->isGuest){
            echo Html::a('Добавить товар', ['create'], ['class' => 'btn btn-success']);
        } ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//             'image:image',
            // Второй вариант. Формирование изображения и его параметров через анонимную функцию
            [
                'label' => 'Картинка',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img($data->image,[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:100%;'
                    ]);
                },
            ],


//            'id',
            'user_id',
            'pr_name',
            'pr_sum',
            'pr_price',


            ['class' => 'yii\grid\ActionColumn','template'=>'{buy}','visible'=> !Yii::$app->user->isGuest,
                'buttons'=>[
                    'buy' =>function ($url, $model, $key)  {
                        $url= Yii::$app->urlManager->createUrl(['product/buy-product','id'=>$model->id,'model' => $model]);
                        $options = array_merge([
                            'title' => Yii::t('app', 'Купить товар'),
                        ]);
                        return Html::a('<span class="glyphicon glyphicon-shopping-cart"></span>', $url, $options);
                    },


                ]
            ],
        ],
    ]); ?>

</div>
