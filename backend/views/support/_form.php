<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Support */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
	<div class="card-header">
		<h4 class="form-section"><?= $this->title; ?></h4>
		
		<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
		<div class="heading-elements">
			<ul class="list-inline mb-0">
				<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
				<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
				<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
				<!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
			</ul>
		</div>
	</div>
	<div class="card-content collapse show">
		<div class="card-body">
			<?php $form = ActiveForm::begin(); ?>
	 
			<div class="row">
				<div class="col-md-6">
					<?= $form->field($model, 'fullName')->textInput(['maxlength' => true]) ?>
				</div>
				<div class="col-md-6">
					<?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>	
				</div>			
			</div>

			<div class="row">
				<div class="col-md-6">
					<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
				</div>
				<div class="col-md-6">
					<?= $form->field($model, 'supportSubjectId')->dropDownList($supportSubjects, ['prompt'=>'Select']); ?>
				</div>			
			</div>

			<div class="row">
				<div class="col-md-6">
					<?= $form->field($model, 'dateClosed')->textInput(['type' => 'date']) ?>
				</div>
				<div class="col-md-6">
					<?= $form->field($model, 'closedBy')->dropDownList($users, ['prompt'=>'Select']); ?>				
				</div>			
			</div>

			<div class="row">
				<div class="col-md-6">
					<?= $form->field($model, 'supportStatusId')->dropDownList($supportStatus, ['prompt'=>'Select']); ?>
				</div>
				<div class="col-md-6">					
				</div>			
			</div>

			<div class="row">
				<div class="col-md-6">
					<?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>
				</div>
				<div class="col-md-6">
					<?= $form->field($model, 'resolution')->textarea(['rows' => 3]) ?>	
				</div>			
			</div>

			<div class="form-group">
				<?= Html::a('<i class="ft-x"></i> Close', ['index'], ['class' => 'btn btn-warning mr-1']) ?>
				<?= (isset($rights->create)  && $rights->create || isset($rights->edit) && $rights->edit) ? Html::submitButton('<i class="la la-check-square-o"></i> Save', ['class' => 'btn btn-primary']) : '' ?>
			</div>

			<?php ActiveForm::end(); ?>

	 </div>
</div>
