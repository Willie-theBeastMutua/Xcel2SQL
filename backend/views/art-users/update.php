<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ArtUsers */

$this->title = 'Update Art Users: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Art Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<section class="flexbox-container">

	<?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
