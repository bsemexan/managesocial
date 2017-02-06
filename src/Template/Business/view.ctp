<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Busines'), ['action' => 'edit', $busines->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Busines'), ['action' => 'delete', $busines->id], ['confirm' => __('Are you sure you want to delete {0}?', $busines->name)]) ?> </li>
        <li><?= $this->Html->link(__('List Business'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Busines'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="business view large-9 medium-8 columns content">
    <h3><?= h($busines->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($busines->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Field') ?></th>
            <td><?= h($busines->field) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($busines->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($busines->id) ?></td>
        </tr>
    </table>
</div>
