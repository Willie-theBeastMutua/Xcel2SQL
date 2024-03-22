<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Elearning */

$this->title = 'Update Elearning: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Elearnings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<section class="flexbox-container">

	<?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
