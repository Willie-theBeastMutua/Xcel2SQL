<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HeiSurvey */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Hei Surveys', 'url' => ['index']];
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
                            <!-- <?= (isset($rights->edit) && $rights->edit == 1) ? Html::a('<i class="ft-edit"></i> Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) : '' ?>
							<?= (isset($rights->delete) && $rights->delete == 1) ? Html::a('<i class="ft-trash"></i> Delete', ['delete', 'id' => $model->ID], [
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
                                            					'Response',
            					'Submitted on',
            					'Institution',
            					'Course',
            					'Group',
            					'ID',
            					'Full name',
            					'Username',
            					'Q00_Full name',
            					'Q00_Email address:email',
            					'Q00',
            					'Q00_Sex',
            					'Q00_Education',
            					'Q00_Age',
            					'Q00_Country',
            					'Q00_Other country',
            					'Q00_Cadre',
            					'Q00_Carder-other',
            					'Q00_Level of service support',
            					'Q00_Other levels HC support',
            					'Q00_County',
            					'Q00_More than one county',
            					'Q00_Sub county',
            					'Q00_Health facility',
            					'Q00_MFLCode',
            					'Q00_Experience in health sector',
            					'Q00_Experience in HIV response',
            					'Q01_eCourse registration',
            					'Q02_Motivations for eLearning',
            					'Q03_Level of access->1',
            					'Q03_Level of access->2',
            					'Q03_Level of access->3',
            					'Q03_Level of access->4',
            					'Q03_Level of access->5',
            					'Q04_Level of Confidence in IT->1',
            					'Q04_Level of Confidence in IT->2',
            					'Q04_Level of Confidence in IT->3',
            					'Q04_Level of Confidence in IT->4',
            					'Q04_Level of Confidence in IT->5',
            					'Q05_Time in a day',
            					'Q06_Difficulties for the course->1',
            					'Q06_Difficulties for the course->2',
            					'Q06_Difficulties for the course->3',
            					'Q06_Difficulties for the course->4',
            					'Q07_Support needed->1',
            					'Q07_Support needed->2',
            					'Q07_Support needed->3',
            					'Q07_Support needed->4',
            					'Q07_Support needed->5',
            					'Q07_Support needed->6',
            					'Q08_Time of the day->1',
            					'Q08_Time of the day->2',
            					'Q08_Time of the day->3',
            					'Q08_Time of the day->4',
            					'Q08_Time of the day->5',
            					'Q08_Time of the day->6',
            					'Q08_Time of the day->7',
            					'Q08_Time of the day->8',
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
