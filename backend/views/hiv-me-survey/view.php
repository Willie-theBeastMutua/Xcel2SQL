<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\HivMeSurvey */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Hiv Me Surveys', 'url' => ['index']];
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
            					'Department',
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
            					'Q00_Residence',
            					'Q00_Cadre',
            					'Q00_Carder-other',
            					'Q00_Level of service support',
            					'Q00_Other levels HC support',
            					'Q00_County',
            					'Q00_More than one county',
            					'Q00_Sub county',
            					'Q00_Health facility',
            					'Q00_MFLCode',
            					'Q00_Facility section',
            					'Q00_Facility section support',
            					'Q00_Facility department/unit',
            					'Q00_Experience in health sector',
            					'Q00_Experience in HIV response',
            					'Q01_Done face to face training',
            					'Q02_eCourse registration',
            					'Q03_Face to face vz eLearning',
            					'Q04_Reasons preferring face-face->1',
            					'Q04_Reasons preferring face-face->2',
            					'Q04_Reasons preferring face-face->3',
            					'Q04_Reasons preferring face-face->4',
            					'Q04_Reasons preferring face-face->5',
            					'Q04_Reasons preferring face-face->6',
            					'Q04_Reasons preferring face-face->7',
            					'Q05_Reasons preferring eLearning->1',
            					'Q05_Reasons preferring eLearning->2',
            					'Q05_Reasons preferring eLearning->3',
            					'Q05_Reasons preferring eLearning->4',
            					'Q05_Reasons preferring eLearning->5',
            					'Q06_Elearning vz face other',
            					'Q07_Motivation for course->1',
            					'Q07_Motivation for course->2',
            					'Q07_Motivation for course->3',
            					'Q07_Motivation for course->4',
            					'Q08_Technology access->1',
            					'Q08_Technology access->2',
            					'Q08_Technology access->3',
            					'Q08_Technology access->4',
            					'Q08_Technology access->5',
            					'Q09_Level of Confidence in IT->1',
            					'Q09_Level of Confidence in IT->2',
            					'Q09_Level of Confidence in IT->3',
            					'Q09_Level of Confidence in IT->4',
            					'Q09_Level of Confidence in IT->5',
            					'Q10_Time in a day',
            					'Q11_Period preference',
            					'Q12_Difficulties for the course->1',
            					'Q12_Difficulties for the course->2',
            					'Q12_Difficulties for the course->3',
            					'Q12_Difficulties for the course->4',
            					'Q13_Support needed->1',
            					'Q13_Support needed->2',
            					'Q13_Support needed->3',
            					'Q13_Support needed->4',
            					'Q13_Support needed->5',
            					'Q14_Time of the day->1',
            					'Q14_Time of the day->2',
            					'Q14_Time of the day->3',
            					'Q14_Time of the day->4',
            					'Q14_Time of the day->5',
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
