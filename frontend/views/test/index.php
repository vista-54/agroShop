<?php
/**
 * Created by PhpStorm.
 * User: Виталий
 * Date: 13.11.2015
 * Time: 2:59
 */
use yii\bootstrap\Modal;
Modal::begin([
    'header' => '<h2>Hello world</h2>',
    'toggleButton' => ['label' => 'click me'],
]);

echo 'Say hello...';

Modal::end();