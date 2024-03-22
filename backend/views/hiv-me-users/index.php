<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hiv Me Users';
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
                                'firstname',
                                'lastname',
                                //  'id',
                                //  'username',
                                'email:email',

                                //'idnumber',
                                //'institution',
                                //'department',
                                //'phone1',
                                //'phone2',
                                //'city',
                                //'country',
                                //'profile_field_countykenya',
                                //'profile_field_orgname',
                                //'profile_field_designation',
                                //'profile_field_academicnew',
                                //'profile_field_academicbackground',
                                //'profile_field_fullname',
                                //'profile_field_gender',
                                //'profile_field_dob',
                                //'profile_field_NationalID',
                                //'profile_field_passportNo',
                                //'profile_field_mobile',
                                //'profile_field_expectations',
                                //'profile_field_fileUpload',
                                //'profile_field_icq',
                                //'profile_field_skype',
                                //'profile_field_aim',
                                //'profile_field_yahoo',
                                //'profile_field_msn',
                                //'profile_field_url:url',
                                //'createdTime',
                                //'updatedTime',
                                //'deletedTime',
                                //'createdBy',
                                //'deleted',
                                // [
                                //     'attribute' => 'createdTime',
                                //     'format' => ['date', 'php:d/m/Y h:i a'],
                                //     'headerOptions' => ['width' => '17%'],
                                // ],
                                // [
                                //     'label' => 'Created By',
                                //     'attribute' => 'user.fullName',
                                //     'headerOptions' => ['width' => '15%'],
                                // ],

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'headerOptions' => ['width' => '13%', 'style' => 'color:black; text-align:center'],
                                    'template' => '{view}',
                                    'buttons' => [
                                        'view' => function ($url, $model) use ($rights) {
                                            return (isset($rights->view) && $rights->view == 1) ? Html::a('<i class="ft-eye"></i> View', ['view', 'id' => $model->id], ['class' => 'btn-sm btn-primary']) : '';
                                        },
                                        'delete' => function ($url, $model) use ($rights) {
                                            return (isset($rights->delete) && $rights->delete == 1) ? Html::a('<i class="ft-trash"></i> Delete', ['delete', 'id' => $model->id], [
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