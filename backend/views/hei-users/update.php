<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HeiUsers */

$this->title = 'Update Hei Users: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hei Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<section class="flexbox-container">

	<?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
