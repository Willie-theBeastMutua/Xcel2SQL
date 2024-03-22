<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ArtPreTest */

$this->title = 'Create Art Pre Test';
$this->params['breadcrumbs'][] = ['label' => 'Art Pre Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="flexbox-container">

    <?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
