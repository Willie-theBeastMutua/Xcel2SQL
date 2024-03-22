<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Url;



$this->title = 'KONGOI MPESA CALCULATOR';
$this->registerCssFile('@web/app-assets/css/pages/upload.css');

// backend\web\app-assets\css\pages\upload.css
?>
<div class="styled-div" >
    <div class="div-index">
        
            <p class = "text-muted"> Please Upload E-Learning  Excel data File </p> 
            <a href="<?= Url::to('\templates\Template.xlsx') ?>" download="template.xlsx">
    Download Template
</a>
<p> </p>
            <?php $form= ActiveForm::begin([
                'options' => [
                    'enctype'=>'multipart/form-data',
                    'method'=>'POST'
                ]
            ])?>
            <?= $form->field($model, 'excel')->fileInput() ?>
            <button>Upload</button>
            <?php ActiveForm::end()?>        
    </div>

</div>

