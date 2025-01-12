<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Message Templates';
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
								<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
								<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
							</ul>
					</div>
				</div>
				<div class="card-content collapse show">
					<div class="card-body card-dashboard">
						<div class="form-actions1" style="margin-top:0px">
							<?= (isset($rights->create)  && $rights->create) ? Html::a('<i class="ft-plus"></i> Add', ['create'], ['class' => 'btn btn-primary mr-1']) : '' ?>
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
								[
									'label'=>'Code',
									'headerOptions' => [ 'style'=>'color:black; text-align:left'],
									'format'=>'text',
									'value' => 'code',
									'contentOptions' => ['style' => 'text-align:left'],
								],
								[
									'label'=>'Description',
									'headerOptions' => [ 'style'=>'color:black; text-align:left'],
									'format'=>'text',
									'value' => 'description',
									'contentOptions' => ['style' => 'text-align:left'],
								],
								[
									'label'=>'Created Date',
									'headerOptions' => [ 'width' => '17%', 'style'=>'color:black; text-align:left'],
									'format'=>'datetime',
									'value' => 'createdTime',
									'contentOptions' => ['style' => 'text-align:left'],
								],
								[
									'label'=>'Created By',
									'headerOptions' => [ 'width' => '15%', 'style'=>'color:black; text-align:left'],
									'format'=>'text',
									'value' => 'user.fullName',
									'contentOptions' => ['style' => 'text-align:left'],
								],
								[
									'class' => 'yii\grid\ActionColumn',
									'headerOptions' => ['width' => '13%', 'style'=>'color:black; text-align:center'],
									'contentOptions' => ['style' => 'text-align:center'],
									'template' => '{view} {delete}',
									'buttons' => [

										'view' => function ($url, $model) use ($rights) {
											return (isset($rights->view) && $rights->view) ? Html::a('<i class="ft-eye"></i> View', ['view', 'id' => $model->templateId], ['class' => 'btn-sm btn-primary']) : '';
										},
										'delete' => function ($url, $model) use ($rights) {
											return (isset($rights->delete) && $rights->delete) ? Html::a('<i class="ft-trash"></i> Delete', ['delete', 'id' => $model->templateId], [
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
