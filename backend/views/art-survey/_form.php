<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArtSurvey */
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

                				<?= $form->field($model, 'Response')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Submitted on')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Institution')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Course')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Group')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'ID')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Full name')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Username')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Full name')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Email address')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Sex')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Education')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Age')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Country')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Other country')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Cadre')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Carder-other')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Level of service support')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Other levels HC support')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_County')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_More than one county')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Sub county')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Health facility')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_MFLCode')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Experience in health sector')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q00_Experience in HIV response')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q01_eCourse registration')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q02_Motivations for eLearning')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q03_Level of access->1')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q03_Level of access->2')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q03_Level of access->3')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q03_Level of access->4')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q03_Level of access->5')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q04_Level of Confidence in IT->1')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q04_Level of Confidence in IT->2')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q04_Level of Confidence in IT->3')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q04_Level of Confidence in IT->4')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q04_Level of Confidence in IT->5')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q05_Time in a day')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q06_Difficulties for the course->1')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q06_Difficulties for the course->2')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q06_Difficulties for the course->3')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q06_Difficulties for the course->4')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q07_Support needed->1')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q07_Support needed->2')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q07_Support needed->3')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q07_Support needed->4')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q07_Support needed->5')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q07_Support needed->6')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q08_Time of the day->1')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q08_Time of the day->2')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q08_Time of the day->3')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q08_Time of the day->4')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q08_Time of the day->5')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q08_Time of the day->6')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q08_Time of the day->7')->textInput(['maxlength' => true]) ?>

				<?= $form->field($model, 'Q08_Time of the day->8')->textInput(['maxlength' => true]) ?>

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
