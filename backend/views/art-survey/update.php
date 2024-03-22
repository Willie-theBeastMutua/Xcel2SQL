<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ArtSurvey */

$this->title = 'Update Art Survey: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Art Surveys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<section class="flexbox-container">

	<?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
