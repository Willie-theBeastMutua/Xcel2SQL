<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DdiuPreTest */

$this->title = 'Update Ddiu Pre Test: ' . $model->Email address;
$this->params['breadcrumbs'][] = ['label' => 'Ddiu Pre Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Email address, 'url' => ['view', 'id' => $model->Email address]];
$this->params['breadcrumbs'][] = 'Update';
?>
<section class="flexbox-container">

	<?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
