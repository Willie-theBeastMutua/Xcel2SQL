<?php

$baseUrl = Yii::$app->request->baseUrl;
$user = Yii::$app->user->identity;

use yii\helpers\ArrayHelper;

use backend\controllers\RightsController;

$currentPage = Yii::$app->controller->id;
$currentRoute = trim(Yii::$app->controller->module->requestedRoute);
$option = isset($_GET['option']) ? $_GET['option'] : '';
$cid = isset($_GET['cid']) ? $_GET['cid'] : '';

$rights = (array) RightsController::Permissions(0);

if (!empty($rights)) {
	foreach ($rights as $key => $right) {
		if (!isset($right['view']) || $right['view'] != 1) {
			unset($rights[$key]);
		}
	}
}
// print('<pre>');
// print_r($rights);
$rights = ArrayHelper::getColumn($rights, 'pageId');
// print_r($rights); exit;

?>

<!-- BEGIN: Main Menu-->

<div class="main-menu material-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
	<!-- <div class="user-profile1" style="padding: 5px; text-align: center; background-color: #F4F5FA;" >
		<img src="<?= $baseUrl; ?>/app-assets/images/logo/logo.png" width="60%">		
	</div> -->
	<div class="main-menu-content">
		<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
			<!-- <li <?= ($currentRoute == 'elearning') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/elearning"><i class="material-icons">data_usage</i><span data-i18n="nav.project.project_summary">ELearning Data</span></a> -->
			<li <?= ($currentRoute == 'elearning/upload') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/elearning/upload"><i class="material-icons">upload</i><span data-i18n="nav.project.project_summary">Upload Elearning Data</span></a></li>

			<?php if (count(array_intersect($rights, [20, 21, 22, 23])) > 0) { ?>
				<li class=" nav-item"><a href="#"><i class="material-icons">data_usage</i><span class="menu-title" data-i18n="nav.project.main">ART Course Data</span></a>
					<ul class="menu-content">
						<?php if (in_array(20, $rights)) { ?>
							<li <?= ($currentPage == 'art-pre-test') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/art-pre-test"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">ART Pre-Test Data</span></a>
							</li>
						<?php
						} ?>
						<?php if (in_array(21, $rights)) { ?>
							<li <?= ($currentPage == 'art-post-test') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/art-post-test"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">ART Post-Test Data</span></a>
							</li>
						<?php
						} ?>
						<?php if (in_array(22, $rights)) { ?>
							<li <?= ($currentPage == 'art-survey') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/art-survey"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">ART Course Evaluation</span></a>
							</li>
						<?php
						} ?>
						<?php if (in_array(23, $rights)) { ?>
							<li <?= ($currentPage == 'art-users') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/art-users"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">ART Users Data</span></a>
							</li>
						<?php
						} ?>
					</ul>
				</li>
			<?php
			} ?>
			<?php if (count(array_intersect($rights, [24, 25, 26, 27])) > 0) { ?>
				<li class=" nav-item"><a href="#"><i class="material-icons">data_usage</i><span class="menu-title" data-i18n="nav.project.main">DDIU Course Data</span></a>
					<ul class="menu-content">
						<?php if (in_array(24, $rights)) { ?>
							<li <?= ($currentPage == 'ddiu-pre-test') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/ddiu-pre-test"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">DDIU Pre-Test Data</span></a>
							</li>
						<?php
						} ?>
						<?php if (in_array(25, $rights)) { ?>
							<li <?= ($currentPage == 'ddiu-post-test') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/ddiu-post-test"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">DDIU Post-Test Data</span></a>
							</li>
						<?php
						} ?>
						<?php if (in_array(26, $rights)) { ?>
							<li <?= ($currentPage == 'ddiu-survey') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/ddiu-survey"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">DDIU Course-Evaluation</span></a>
							</li>
						<?php
						} ?>
						<?php if (in_array(27, $rights)) { ?>
							<li <?= ($currentPage == 'ddiu-users') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/ddiu-users"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">DDIU Users Data</span></a>
							</li>
						<?php
						} ?>
					</ul>
				</li>
			<?php
			} ?>

			<?php if (count(array_intersect($rights, [28, 29, 30, 31])) > 0) { ?>
				<li class=" nav-item"><a href="#"><i class="material-icons">data_usage</i><span class="menu-title" data-i18n="nav.project.main">HEI Course Data</span></a>
					<ul class="menu-content">
						<?php if (in_array(28, $rights)) { ?>
							<li <?= ($currentPage == 'hei-pre-test') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/hei-pre-test"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">HEI Pre-Test Data</span></a>
							</li>
						<?php
						} ?>
						<?php if (in_array(29, $rights)) { ?>
							<li <?= ($currentPage == 'hei-post-test') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/hei-post-test"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">HEI Post-Test Data</span></a>
							</li>
						<?php
						} ?>
						<?php if (in_array(30, $rights)) { ?>
							<li <?= ($currentPage == 'hei-survey') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/hei-survey"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">HEI Course-Evaluation</span></a>
							</li>
						<?php
						} ?>
						<?php if (in_array(31, $rights)) { ?>
							<li <?= ($currentPage == 'hei-users') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/hei-users"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">HEI Users Data</span></a>
							</li>
						<?php
						} ?>
					</ul>
				</li>
			<?php
			} ?>


			<?php if (count(array_intersect($rights, [35, 32, 33, 34])) > 0) { ?>
				<li class=" nav-item"><a href="#"><i class="material-icons">data_usage</i><span class="menu-title" data-i18n="nav.project.main">HIV M&E Course Data</span></a>
					<ul class="menu-content">
						<?php if (in_array(32, $rights)) { ?>
							<li <?= ($currentPage == 'hiv-me-pre-test') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/hiv-me-pre-test"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">HIV(M&E) Pre-Test Data</span></a>
							</li>
						<?php
						} ?>
						<?php if (in_array(33, $rights)) { ?>
							<li <?= ($currentPage == 'hiv-me-post-test') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/hiv-me-post-test"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">HIV(M&E) Post-Test Data</span></a>
							</li>
						<?php
						} ?>
						<?php if (in_array(34, $rights)) { ?>
							<li <?= ($currentPage == 'hiv-me-survey') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/hiv-me-survey"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">HIV(M&E) Course-Evaluation</span></a>
							</li>
						<?php
						} ?>
						<?php if (in_array(35, $rights)) { ?>
							<li <?= ($currentPage == 'hiv-me-users') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/hiv-me-users"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">HIV(M&E) Users Data</span></a>
							</li>
						<?php
						} ?>
					</ul>
				</li>
			<?php
			} ?>

			

			

			<?php if (count(array_intersect($rights, [1, 2, 3, 15])) > 0) { ?>
				<li class=" nav-item"><a href="#"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="nav.project.main">Security & Admin</span></a>
					<ul class="menu-content">
						<?php if (in_array(1, $rights)) { ?>
							<li <?= ($currentPage == 'users') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/users"><i class="material-icons"></i><span data-i18n="nav.project.project_summary">Users</span></a>
							</li>
						<?php
						}
						if (in_array(2, $rights)) { ?>
							<li <?= ($currentPage == 'user-status') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/user-status"><i class="material-icons"></i><span data-i18n="nav.project.project_tasks">User Status</span></a>
							</li>
						<?php
						}
						if (in_array(3, $rights)) { ?>
							<li <?= ($currentPage == 'user-groups') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/user-groups"><i class="material-icons"></i><span data-i18n="nav.project.project_bugs">User Groups</span></a>
							</li>
						<?php
						}
						if (in_array(15, $rights)) { ?>
							<li <?= ($currentPage == 'user-groups') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/pages"><i class="material-icons"></i><span data-i18n="nav.project.project_bugs">Pages</span></a>
							</li>
						<?php
						}

						?>
					</ul>
				</li>
			<?php } ?>

			<li <?= ($currentRoute == 'site/apis') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/site/apis"><i class="material-icons">api</i><span data-i18n="nav.project.project_summary">APIs</span></a>
			</li>
			<li <?= ($currentRoute == 'site/community') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/site/community"><i class="material-icons">local_library</i><span data-i18n="nav.project.project_summary">Community</span></a>
			</li>
			<li <?= ($currentRoute == 'site/about-us') ? 'class="active"' : ''; ?>><a class="menu-item" href="<?= $baseUrl; ?>/site/about-us"><i class="material-icons">info</i><span data-i18n="nav.project.project_summary">About Us</span></a>
			</li>
			<li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i class="material-icons nav-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Support">more_horiz</i>
			</li>
			<li class="<?= ($currentRoute == 'site/support') ? 'active' : ''; ?> nav-item"><a href="<?= $baseUrl; ?>/site/support"><i class="material-icons">local_offer</i><span class="menu-title" data-i18n="nav.support_raise_support.main">Raise Support</span></a>
			</li>

			<!-- <li class="<?= ($currentRoute == 'site/documentation') ? 'active' : ''; ?> nav-item" <?= ($currentRoute == 'site/documentation') ? 'class="active"' : ''; ?>><a href="<?= $baseUrl; ?>/site/documentation"><i class="material-icons">format_size</i><span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span></a>
				</li> -->
		</ul>
	</div>
</div>

<!-- END: Main Menu-->