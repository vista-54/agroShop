<?php
namespace common\widgets\vistaDev;

use yii\base\Widget;
use  frontend\models\Product;
use yii\helpers\Html;

/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 20.11.2015
 * Time: 0:42
 */
class byProduct extends Widget
{
    public $message;


    public function init()
    {
        $model=new Product();
        parent::init();



            $this->message ="User".$model->user_id;


    }
        public function run(){

        return Html::encode($this->message);

    }

}