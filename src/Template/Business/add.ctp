<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Business'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="business form large-9 medium-8 columns content">
    <?= $this->Form->create($busines) ?>
    <fieldset>
        <legend><?= __('Add Busines') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('field');
            echo $this->Form->input('location');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
