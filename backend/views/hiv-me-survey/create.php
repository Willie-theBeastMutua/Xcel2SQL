<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HivMeSurvey */

$this->title = 'Create Hiv Me Survey';
$this->params['breadcrumbs'][] = ['label' => 'Hiv Me Surveys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="flexbox-container">

    <?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
