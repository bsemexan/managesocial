<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $content->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $content->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Content'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Post'), ['controller' => 'Post', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Post', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="content form large-9 medium-8 columns content">
    <?= $this->Form->create($content) ?>
    <fieldset>
        <legend><?= __('Edit Content') ?></legend>
        <?php
            echo $this->Form->input('type');
            echo $this->Form->input('post._ids', ['options' => $post]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
