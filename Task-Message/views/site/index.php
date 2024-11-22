<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Test Message';
?>

<a href="create"><button type="button" class="btn btn-primary btn-lg btn-block">Додати задачу</button></a>

<h1>Список всіх задач</h1>
<?php foreach ($task_message as $message): ?>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading"><?= Html::encode($message-> task_name) ?></h4>
        <p><?= Html::encode($message-> task_description) ?></p>
        <hr>
        <p class="mb-0"><?= Html::encode( 'Тип: '. $message-> task_type ) ?> </p>
        <p> <?= Html::encode(' Створена: '.$message-> task_create) ?></p>
            <?php if ($message -> task_status !== '0'): ?>
               <p style="color: #32CD32">Виконана</p>
            <?php else:  ?>
               <p style="color: red">Не виконана</p>
            <?php endif ?>
        <p> <?= Html::encode('Дата виконання: '.$message-> task_end) ?></p>
        <a href="show/<?= $message->id ?>"><button type="button" class="btn btn-primary">Перегляд</button></a>
        <a href="update/<?= $message->id ?>"><button type="button" class="btn btn-warning">Редагувати</button></a>
        <a href="delete/<?= $message->id ?>"><button type="button" class="btn btn-danger">Видалити</button></a>
        <a href="completed/<?= $message->id ?>"><button type="button" class="btn btn-success"">Виконати</button></a>

    </div>
<?php endforeach; ?>

<?= LinkPager::widget(['pagination' => $pagination])  ?>


