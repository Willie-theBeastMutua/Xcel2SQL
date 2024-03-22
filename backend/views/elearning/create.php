<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Elearning */

$this->title = 'Create Elearning';
$this->params['breadcrumbs'][] = ['label' => 'Elearnings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="flexbox-container">

    <?= $this->render('_form', [
        'model' => $model,
        'rights' => $rights,
    ]) ?>

</section>
