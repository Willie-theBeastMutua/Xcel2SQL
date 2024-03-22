<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DdiuUsers */

$this->title = 'Create Ddiu Users';
$this->params['breadcrumbs'][] = ['label' => 'Ddiu Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="flexbox-container">

    <?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
