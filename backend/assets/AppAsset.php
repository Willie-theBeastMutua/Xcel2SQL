<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // BEGIN: Vendor CSS
        'app-assets/vendors/css/material-vendors.min.css',
        // END: Vendor CSS
        // BEGIN: Theme CSS
        'app-assets/css/material.css',
        'app-assets/css/components.css',
        'app-assets/css/bootstrap-extended.css',
        'app-assets/css/material-extended.css',
        'app-assets/css/material-colors.css',
        // END: Theme CSS
        // BEGIN: Page CSS
        'app-assets/css/core/menu/menu-types/material-vertical-menu-modern.css',
        'app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css',
        'app-assets/vendors/css/charts/morris.css',
        'app-assets/fonts/simple-line-icons/style.css',
        'app-assets/css/core/colors/material-palette-gradient.css',
        'app-assets/vendors/css/tables/datatable/datatables.min.css',
        'app-assets/css/plugins/forms/checkboxes-radios.css',
        'app-assets/vendors/css/forms/selects/select2.min.css',
        'app-assets/css/core/colors/palette-gradient.css',
        // BEGIN: Custom CSS
        // 'assets/css/style.css',
        'css/site.css',
            // END: Custom CSS
    ];
    public $js = [
        // BEGIN: Vendor JS-->
        'app-assets/vendors/js/material-vendors.min.js',
        // BEGIN Vendor JS-->
        // BEGIN: Page Vendor JS-->
        // 'app-assets/vendors/js/charts/chart.min.js',
        // 'app-assets/vendors/js/charts/raphael-min.js',
        // 'app-assets/vendors/js/charts/morris.min.js',
        /* 'app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js',
          'app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js',
          'app-assets/data/jvector/visitor-data.js', */
        // END: Page Vendor JS-->
        // BEGIN: Theme JS-->
        'app-assets/js/core/app-menu.js',
        'app-assets/js/core/app.js',
        // END: Theme JS-->
        // BEGIN: Page JS-->
        'app-assets/js/scripts/pages/material-app.js',
        // 'app-assets/js/scripts/pages/dashboard-sales.js',
        'app-assets/js/scripts/forms/form-login-register.js',
        'app-assets/js/scripts/tables/datatables/datatable-basic.js',
        'app-assets/vendors/js/ui/headroom.min.js',
        'app-assets/vendors/js/tables/datatable/datatables.min.js',
        'app-assets/vendors/js/forms/icheck/icheck.min.js',
        'app-assets/js/scripts/forms/checkbox-radio.js',
        'app-assets/js/scripts/scripts.js',
        'Highcharts-9.2.2/highcharts.js',
        'Highcharts-9.2.2/highcharts-more.js',
        'Highcharts-9.2.2/modules/exporting.js',
        'Highcharts-9.2.2/modules/accessibility.js',
        'app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js',
        'app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js',
        'app-assets/data/jvector/visitor-data.js',
            // END: Page JS-->
    ];
    public $depends = [
        'yii\web\YiiAsset',
            // 'yii\bootstrap\BootstrapAsset',
    ];

}
