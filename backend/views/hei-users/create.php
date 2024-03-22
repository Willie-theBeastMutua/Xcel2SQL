<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HeiUsers */

$this->title = 'Create Hei Users';
$this->params['breadcrumbs'][] = ['label' => 'Hei Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="flexbox-container">

    <?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
