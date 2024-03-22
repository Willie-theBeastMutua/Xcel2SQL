<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ddiu Surveys';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="form-section" style="margin-bottom: 0px"><?= $this->title; ?></h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <!-- <li><a data-action="collapse"><i class="ft-minus"></i></a></li> -->
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <div>
                            <!-- <?= (isset($rights->create) && $rights->create == 1) ? Html::a('<i class="ft-plus"></i> Add', ['create'], ['class' => 'btn btn-primary mr-1']) : '' ?> -->
                        </div>


                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'layout' => '{items}',
                            'tableOptions' => [
                                'class' => 'custom-table table-striped table-bordered zero-configuration',
                            ],
                            'columns' => [
                                [
                                    'class' => 'yii\grid\SerialColumn',
                                    'headerOptions' => ['width' => '5%'],
                                ],
                                'Full name',
                                //  'Response',
                                'Submitted on',
                                'Institution',
                                'Department',
                                'Course',
                                //'Group',
                                //'ID',

                                //'Username',
                                //'Q00_Full name',
                                //'Q00_Email address:email',
                                //'Q00_Phone number',
                                //'Q00_Sex',
                                //'Q00_Education',
                                //'Q00_Age',
                                //'Q00_Country',
                                //'Q00_Other country',
                                //'Q00_Residence',
                                //'Q00_Cadre',
                                //'Q00_Carder student',
                                //'Q00_Pre-service school',
                                //'Q00_Student-year of study',
                                //'Q00_Cadre-non-health',
                                //'Q00_Level of service support',
                                //'Q00_County',
                                //'Q00_More than one county',
                                //'Q00_Working outside kenya',
                                //'Q00_Sub county',
                                //'Q01_Facilty MFL',
                                //'Q02_Facility without MFL',
                                //'Q03_Experience in health sector',
                                //'Q04_Experience in HIV response',
                                //'Q05_eCourse registration',
                                //'Q06_Online courses',
                                //'Q07_Motivation for eLearning->1',
                                //'Q07_Motivation for eLearning->2',
                                //'Q07_Motivation for eLearning->3',
                                //'Q07_Motivation for eLearning->4',
                                //'Q07_Motivation for eLearning->5',
                                //'Q07_Motivation for eLearning->6',
                                //'Q07_Motivation for eLearning->7',
                                //'Q07_Motivation for eLearning->8',
                                //'Q07_Motivation for eLearning->9',
                                //'Q07_Motivation for eLearning->10',
                                //'Q07_Motivation for eLearning->11',
                                //'Q07_Motivation for eLearning->12',
                                //'Q08_Technology access->1',
                                //'Q08_Technology access->2',
                                //'Q08_Technology access->3',
                                //'Q08_Technology access->4',
                                //'Q08_Technology access->5',
                                //'Q09_Level of Confidence in IT->1',
                                //'Q09_Level of Confidence in IT->2',
                                //'Q09_Level of Confidence in IT->3',
                                //'Q09_Level of Confidence in IT->4',
                                //'Q09_Level of Confidence in IT->5',
                                //'Q10_Time in a day',
                                //'Q11_Time of the day->1',
                                //'Q11_Time of the day->2',
                                //'Q11_Time of the day->3',
                                //'Q11_Time of the day->4',
                                //'Q11_Time of the day->5',
                                //'Q11_Time of the day->6',
                                //'Q11_Time of the day->7',
                                //'Q11_Time of the day->8',
                                //'Q12_Difficulties for the course->1',
                                //'Q12_Difficulties for the course->2',
                                //'Q12_Difficulties for the course->3',
                                //'Q12_Difficulties for the course->4',
                                //'Q13_Support needed->1',
                                //'Q13_Support needed->2',
                                //'Q13_Support needed->3',
                                //'Q13_Support needed->4',
                                //'Q13_Support needed->5',
                                //'Q13_Support needed->6',
                                //'Q14_Distractions',
                                //'Q15_Attention',
                                //'createdTime',
                                //'updatedTime',
                                //'deletedTime',
                                //'createdBy',
                                //'deleted',
                                // [
                                // 	'attribute' => 'createdTime',
                                // 	'format' => ['date', 'php:d/m/Y h:i a'],
                                // 	'headerOptions' => ['width' => '17%'],
                                // ],
                                // [
                                // 	'label' => 'Created By',
                                // 	'attribute' => 'user.fullName',
                                // 	'headerOptions' => ['width' => '15%'],
                                // ],

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'headerOptions' => ['width' => '13%', 'style' => 'color:black; text-align:center'],
                                    'template' => '{view}',
                                    'buttons' => [
                                        'view' => function ($url, $model) use ($rights) {
                                            return (isset($rights->view) && $rights->view == 1) ? Html::a('<i class="ft-eye"></i> View', ['view', 'id' => $model->ID], ['class' => 'btn-sm btn-primary']) : '';
                                        },
                                        'delete' => function ($url, $model) use ($rights) {
                                            return (isset($rights->delete) && $rights->delete == 1) ? Html::a('<i class="ft-trash"></i> Delete', ['delete', 'id' => $model->ID], [
                                                'class' => 'btn-sm btn-danger btn-xs',
                                                'data' => [
                                                    'confirm' => 'Are you absolutely sure ? You will lose all the information with this action.',
                                                    'method' => 'post',
                                                ],
                                            ]) : '';
                                        },
                                    ],
                                ],
                            ],
                        ]); ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>