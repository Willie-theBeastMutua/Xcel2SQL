<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HivMePreTest */

$this->title = 'Create Hiv Me Pre Test';
$this->params['breadcrumbs'][] = ['label' => 'Hiv Me Pre Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="flexbox-container">

    <?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
