<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DdiuSurvey */

$this->title = 'Create Ddiu Survey';
$this->params['breadcrumbs'][] = ['label' => 'Ddiu Surveys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="flexbox-container">

    <?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
