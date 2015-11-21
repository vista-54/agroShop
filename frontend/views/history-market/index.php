<?php
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
?>

<h1>history-market/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
<? Modal::begin([
    'header' => '<h2>Hello world</h2>',
    'toggleButton' => ['label' => 'clock'],
]);
echo 'Say hello...';

Modal::end();