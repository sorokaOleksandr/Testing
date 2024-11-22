
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Task Update';
?>

<h1>Оновлення задачі</h1><br>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($task, 'task_name')->label('Назва задачі')->input('text') ?>

<?php echo $form->field($task, 'task_description')->label('Опис задачі')->textarea(['rows' => 4]) ?>

<?php echo $form->field($task, 'task_type')->label('Тип задачі')->input('text') ?>

<?php echo $form->field($task, 'task_end')->label('Дата виконання')->input('date') ?>

<div class="form-group">
    <?= Html::submitButton('Зберегти', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
