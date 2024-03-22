<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DdiuPostTest */

$this->title = 'Create Ddiu Post Test';
$this->params['breadcrumbs'][] = ['label' => 'Ddiu Post Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="flexbox-container">

    <?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
