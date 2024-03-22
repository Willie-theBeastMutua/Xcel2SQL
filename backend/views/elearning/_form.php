<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Elearning */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
	<div class="card-header">
		<h4 class="form-section"> <?= $this->title; ?></h4>

		<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
		<div class="heading-elements">
			<ul class="list-inline mb-0">
				<!-- <li><a data-action="collapse"><i class="ft-minus"></i></a></li> -->
				<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
				<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
				<!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
				<li><a class="" href="/gii"><i class="ft-x"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="card-content collapse show">
		<div class="card-body">

			<?php $form = ActiveForm::begin(); ?>
			<div class="row">
				<div class="col-md-6">

				</div>
				<div class="col-md-6">

				</div>
			</div>

			<?= $form->field($model, 'ID')->textInput() ?>

			<?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'Email address')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'Phone')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'Department')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'Institution')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'City/town')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'DDIU Cert Activation')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'DDIU course Pretest Quiz')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'DDIU course Pretest Quiz - Completion date')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'DDIU PostTest Quiz')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'DDIU PostTest Quiz - Completion date')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'Course complete')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'createdTime')->textInput() ?>

			<?= $form->field($model, 'updatedTime')->textInput() ?>

			<?= $form->field($model, 'deletedTime')->textInput() ?>

			<?= $form->field($model, 'createdBy')->textInput() ?>

			<?= $form->field($model, 'deleted')->textInput() ?>

			<div class="form-group">
				<?= Html::a('<i class="ft-x"></i> Close', ['index'], ['class' => 'btn btn-warning mr-1']) ?>
				<?= ((isset($rights->create) && $rights->create == 1) || (isset($rights->edit) && $rights->edit == 1)) ? Html::submitButton('<i class="la la-check-square-o"></i> Save', ['class' => 'btn btn-primary']) : '' ?>
			</div>

			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>