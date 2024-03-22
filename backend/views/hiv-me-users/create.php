<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HivMeUsers */

$this->title = 'Create Hiv Me Users';
$this->params['breadcrumbs'][] = ['label' => 'Hiv Me Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="flexbox-container">

    <?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
