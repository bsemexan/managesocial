<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Home Page'), ['controller' =>'Pages','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Social Media Platform'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="socialMediaPlatform index large-9 medium-8 columns content">
    <h3><?= __('Social Media Platform') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($socialMediaPlatform as $socialMediaPlatform): ?>
            <tr>
                <td><?= $this->Number->format($socialMediaPlatform->id) ?></td>
                <td><?= h($socialMediaPlatform->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $socialMediaPlatform->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socialMediaPlatform->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $socialMediaPlatform->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialMediaPlatform->id)]) ?>
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
