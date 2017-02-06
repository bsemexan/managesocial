<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Post'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Content'), ['controller' => 'Content', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Content'), ['controller' => 'Content', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Feedback'), ['controller' => 'Feedback', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feedback'), ['controller' => 'Feedback', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="post view large-9 medium-8 columns content">
    <h3><?= h($post->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($post->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Character Length') ?></th>
            <td><?= $this->Number->format($post->character_length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Business') ?></th>
            <td><?= $this->Number->format($post->business) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time Posted') ?></th>
            <td><?= h($post->time_posted) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Content') ?></h4>
        <?php if (!empty($post->content)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($post->content as $content): ?>
            <tr>
                <td><?= h($content->id) ?></td>
                <td><?= h($content->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Content', 'action' => 'view', $content->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Content', 'action' => 'edit', $content->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Content', 'action' => 'delete', $content->id], ['confirm' => __('Are you sure you want to delete # {0}?', $content->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Feedback') ?></h4>
        <?php if (!empty($post->feedback)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($post->feedback as $feedback): ?>
            <tr>
                <td><?= h($feedback->id) ?></td>
                <td><?= h($feedback->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Feedback', 'action' => 'view', $feedback->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Feedback', 'action' => 'edit', $feedback->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Feedback', 'action' => 'delete', $feedback->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
