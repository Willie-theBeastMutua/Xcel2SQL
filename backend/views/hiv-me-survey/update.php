<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HivMeSurvey */

$this->title = 'Update Hiv Me Survey: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Hiv Me Surveys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<section class="flexbox-container">

	<?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>