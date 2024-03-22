<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DdiuPostTest */
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

                				<?= $form->field($model, 'Last name')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'First name')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Email address')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'City')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Country')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'State')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Started on')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Completed')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Time taken')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Grade/100')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q1')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q2')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q3')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q4')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q5')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q6')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q7')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q8')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q9')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q10')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q11')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q12')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q13')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q14')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q15')->textInput(['maxlength' => true]) ?>

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
