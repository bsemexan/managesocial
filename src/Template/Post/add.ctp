<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Post'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Content'), ['controller' => 'Content', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Content'), ['controller' => 'Content', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Feedback'), ['controller' => 'Feedback', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feedback'), ['controller' => 'Feedback', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="post form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Add Post') ?></legend>
        <?php
            echo $this->Form->input('time_posted');
            echo $this->Form->input('character_length');
            echo $this->Form->input('business');
            echo $this->Form->input('content._ids', ['options' => $content]);
            echo $this->Form->input('feedback._ids', ['options' => $feedback]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
