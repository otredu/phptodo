<?php require('partials/head.php') ?>

<h1>Todos</h1>
<?php foreach ($tasks as $task): ?>
<li>
    <?php if($task->isComplete()) : ?>
        <strike>
    <?php endif ?>
<?= $task->getDescription() ?>
    <?php if($task->isComplete()) : ?>
        </strike>
    <?php endif ?>
</li>
<?php endforeach ?>

<?php require('partials/footer.php') ?>