<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Home Page'), ['controller' => 'Pages','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Content'), ['controller' => 'Content', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Content'), ['controller' => 'Content', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Feedback'), ['controller' => 'Feedback', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feedback'), ['controller' => 'Feedback', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="post index large-9 medium-8 columns content">
    <h3><?= __('Post') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time_posted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('character_length') ?></th>
                <th scope="col"><?= $this->Paginator->sort('business') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($post as $post): ?>
            <tr>
                <td><?= $this->Number->format($post->id) ?></td>
                <td><?= h($post->time_posted) ?></td>
                <td><?= $this->Number->format($post->character_length) ?></td>
                <td><?= $this->Number->format($post->business) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $post->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
