<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HeiSurvey */

$this->title = 'Create Hei Survey';
$this->params['breadcrumbs'][] = ['label' => 'Hei Surveys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="flexbox-container">

    <?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
