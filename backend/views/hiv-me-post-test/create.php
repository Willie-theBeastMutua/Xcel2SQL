<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HivMepostTest */

$this->title = 'Create Hiv Mepost Test';
$this->params['breadcrumbs'][] = ['label' => 'Hiv Mepost Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="flexbox-container">

    <?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
