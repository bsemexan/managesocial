<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Social Media Platform'), ['action' => 'edit', $socialMediaPlatform->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Social Media Platform'), ['action' => 'delete', $socialMediaPlatform->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialMediaPlatform->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Social Media Platform'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Social Media Platform'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="socialMediaPlatform view large-9 medium-8 columns content">
    <h3><?= h($socialMediaPlatform->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($socialMediaPlatform->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($socialMediaPlatform->id) ?></td>
        </tr>
    </table>
</div>
