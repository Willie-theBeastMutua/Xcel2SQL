<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HivMeUsers */
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

                				<?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'idnumber')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'institution')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'phone1')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'phone2')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_countykenya')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_orgname')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_designation')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_academicnew')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_academicbackground')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_fullname')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_gender')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_dob')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_NationalID')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_passportNo')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_mobile')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_expectations')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_fileUpload')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_icq')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_skype')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_aim')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_yahoo')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_msn')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'profile_field_url')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'createdTime')->textInput() ?>

				<?= $form->field($model, 'updatedTime')->textInput() ?>

				<?= $form->field($model, 'deletedTime')->textInput() ?>

				<?= $form->field($model, 'createdBy')->textInput() ?>

				<?= $form->field($model, 'deleted')->textInput() ?>

				<div class="form-group">
                    <?=  Html::a('<i class="ft-x"></i> Close', ['index'], ['class' => 'btn btn-warning mr-1']) ?>
                    <?= ((isset($rights->create) && $rights->create == 1) || (isset($rights->edit) && $rights->edit == 1)) ? Html::submitButton('<i class="la la-check-square-o"></i> Save', ['class' => 'btn btn-primary']) : '' ?>
				</div>

                <?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
