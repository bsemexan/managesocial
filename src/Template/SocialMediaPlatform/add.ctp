<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Social Media Platform'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="socialMediaPlatform form large-9 medium-8 columns content">
    <?= $this->Form->create($socialMediaPlatform) ?>
    <fieldset>
        <legend><?= __('Add Social Media Platform') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
