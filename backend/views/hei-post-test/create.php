<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HeiPostTest */

$this->title = 'Create Hei Post Test';
$this->params['breadcrumbs'][] = ['label' => 'Hei Post Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="flexbox-container">

    <?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
