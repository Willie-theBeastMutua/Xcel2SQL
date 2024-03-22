<?php

/** @var yii\web\View $this */

use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'ELearning Data Dump';
$this->registerCssFile('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
$this->registerCssFile('@web/app-assets/css/pages/upload.css');

?>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-lg p-2 ">
                <h2 class="text-info d-flex justify-content-center mb-1">E-Learning Data Dump</h2>

                <!-- Dropdown and File Input Section -->
                <?php $form = ActiveForm::begin([
                    'options' => [
                        'enctype' => 'multipart/form-data',
                        'method' => 'POST',
                        'id' => 'upload-form',
                    ]
                ]); ?>

                <div class="form-row mb-1">
                    <div class="form-group col-md-6">
                        <label for="dropdown1" class="text-muted">Course:</label>
                        <?= Html::dropDownList('Elearning[course]', $model->course, $courseOptions, ['class' => 'form-control']) ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="dropdown2" class="text-muted">Data Type:</label>
                        <?= Html::dropDownList('Elearning[courseType]', $model->course, $dataOptions, ['class' => 'form-control']) ?>
                    </div>
                </div>


                <!-- End Dropdown Section -->

                <p class="text-muted mb-2 d-flex justify-content-center">Please Upload E-Learning Excel Data File</p>

                <div class="d-flex justify-content-center mb-2">
                    <?= Html::a(
                        'Download Template ' . Html::tag('i', '', ['class' => 'fas fa-download']),
                        Url::to('/templates/Template.zip'),
                        ['download' => 'Template.zip', 'class' => 'btn btn-outline-info']
                    ) ?>
                </div>

                <!-- File input section -->
                <div class="custom-file mb-3">
                    <?= $form->field($model, 'excel', ['template' => '{input}'])->fileInput([
                        'class' => 'custom-file-input',
                        'id' => 'upload-input',
                    ])->label(Html::tag('i', '', ['class' => 'fas fa-upload custom-file-label-icon']) . ' Choose File', ['class' => 'custom-file-label']) ?>
                    <label class="custom-file-label" for="upload-input" id="file-name-label">Choose file</label>
                </div>

                <!-- Submit button -->
                <div class="d-flex justify-content-center">
                    <?= Html::submitButton('Upload ' . Html::tag('i', '', ['class' => 'fas fa-upload']), ['class' => 'btn btn-success mx-auto']) ?>
                </div>
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>

<!-- JavaScript to update the file name label -->
<?php
$this->registerJs('
    document.getElementById("upload-input").addEventListener("change", function() {
        var fileName = this.files[0].name;
        document.getElementById("file-name-label").innerText = fileName;
    });
');
?>