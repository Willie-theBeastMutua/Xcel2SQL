<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$baseUrl = Yii::$app->request->baseUrl;

/* @var $this yii\web\View */
/* @var $model app\models\MessageTemplates */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="<?= $baseUrl; ?>/ckeditor/ckeditor.js"></script>

<div class="card">
	<div class="card-header">
		<h4 class="form-section"><?= $this->title; ?></h4>
		
		<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
		<div class="heading-elements">
			<ul class="list-inline mb-0">
				<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
				<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
				<li><?=  Html::a('<i class="ft-x"></i>', ['index'], ['class' => '']) ?></li>
			</ul>
		</div>
	</div>
	<div class="card-content collapse show">
		<div class="card-body">
			<?php $form = ActiveForm::begin(); ?>

			<div class="row">
				<div class="col-md-6">
					<?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>
				</div>
				<div class="col-md-6">
					<?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
				</div>			
			</div>
	 
			<div class="row">
				<div class="col-md-6">
					<?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>
				</div>
				<div class="col-md-6">
						
				</div>			
			</div>

			<div class="row">
				<div class="col-md-12">
					<?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>
				</div>			
			</div>

			<div class="form-actions">
				<?= Html::a('<i class="ft-x"></i> Close', ['index'], ['class' => 'btn btn-warning mr-1']) ?>
				<?= (isset($rights->create)  && $rights->create || isset($rights->edit) && $rights->edit) ? Html::submitButton('<i class="la la-check-square-o"></i> Save', ['class' => 'btn btn-primary']) : '' ?>
			</div>

			<?php ActiveForm::end(); ?>

	 </div>
</div>
<script>
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	var editor = CKEDITOR.replace( 'MessageTemplates[message]' );
</script>
