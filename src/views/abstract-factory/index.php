<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/** @var $model app\models\UploadForm */
/** @var $data array|null */
/** @var $error string|null */
?>

    <h1>Загрузка JSON / XML / CSV</h1>

<?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
]); ?>

<?= $form->field($model, 'file')->fileInput() ?>

<?= Html::submitButton('Загрузить', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>

    <hr>

<?php if ($error): ?>
    <div class="alert alert-danger"><?= Html::encode($error) ?></div>
<?php endif; ?>

<?php if ($data): ?>
    <h3>Результат парсинга</h3>
    <pre><?= print_r($data, true) ?></pre>
<?php endif; ?>