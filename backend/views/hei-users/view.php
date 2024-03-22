<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HeiUsers */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hei Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<section id="configuration">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="form-section" style="margin-bottom: 0px"><?=  $this->title; ?></h4>
					
					<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<!-- <li><a data-action="collapse"><i class="ft-minus"></i></a></li> -->
							<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
							<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
							<!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
							<li><?=  Html::a('<i class="ft-x"></i>', ['index'], ['class' => '']) ?></li>
						</ul>
					</div>
				</div>
				<div class="card-content collapse show">
					<div class="card-body">	

						<p>
                            <?= Html::a('<i class="ft-x"></i> Close', ['index'], ['class' => 'btn btn-warning mr-1']) ?>
                            <!-- <?= (isset($rights->edit) && $rights->edit == 1) ? Html::a('<i class="ft-edit"></i> Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) : '' ?>
							<?= (isset($rights->delete) && $rights->delete == 1) ? Html::a('<i class="ft-trash"></i> Delete', ['delete', 'id' => $model->id], [
									'class' => 'btn btn-danger',
									'data' => [
										'confirm' => 'Are you sure you want to delete this item?',
										'method' => 'post',
									],
							]) : '' ?> -->
						</p>

                        <?= DetailView::widget([
                            'model' => $model,
                            'options' => [
                                'class' => 'custom-table table-striped table-bordered zero-configuration',
                            ],
                            'attributes' => [
                                            					'id',
            					'username',
            					'email:email',
            					'firstname',
            					'lastname',
            					'idnumber',
            					'institution',
            					'department',
            					'phone1',
            					'phone2',
            					'city',
            					'country',
            					'profile_field_countykenya',
            					'profile_field_orgname',
            					'profile_field_designation',
            					'profile_field_academicnew',
            					'profile_field_academicbackground',
            					'profile_field_fullname',
            					'profile_field_gender',
            					'profile_field_dob',
            					'profile_field_NationalID',
            					'profile_field_passportNo',
            					'profile_field_mobile',
            					'profile_field_expectations',
            					'profile_field_fileUpload',
            					'profile_field_icq',
            					'profile_field_skype',
            					'profile_field_aim',
            					'profile_field_yahoo',
            					'profile_field_msn',
            					'profile_field_url:url',
            					'createdTime',
            					'updatedTime',
            					'deletedTime',
            					'createdBy',
            					'deleted',
                                [
									'attribute' => 'createdTime',
									'format' => ['date', 'php:d/m/Y h:i a'],
								],
								[
									'attribute' => 'updatedTime',
									'format' => ['date', 'php:d/m/Y h:i a'],
								],
								[
									'label' => 'Created By',
									'attribute' => 'user.fullName',
								],
                            ],
                        ]) ?>

                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
