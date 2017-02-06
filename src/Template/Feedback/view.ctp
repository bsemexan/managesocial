<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Feedback'), ['action' => 'edit', $feedback->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feedback'), ['action' => 'delete', $feedback->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Feedback'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feedback'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Post'), ['controller' => 'Post', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Post', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="feedback view large-9 medium-8 columns content">
    <h3><?= h($feedback->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($feedback->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($feedback->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Post') ?></h4>
        <?php if (!empty($feedback->post)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Time Posted') ?></th>
                <th scope="col"><?= __('Character Length') ?></th>
                <th scope="col"><?= __('Business') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($feedback->post as $post): ?>
            <tr>
                <td><?= h($post->id) ?></td>
                <td><?= h($post->time_posted) ?></td>
                <td><?= h($post->character_length) ?></td>
                <td><?= h($post->business) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Post', 'action' => 'view', $post->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Post', 'action' => 'edit', $post->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Post', 'action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
