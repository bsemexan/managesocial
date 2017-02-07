
<nav class="large-3 medium-8 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Business') ?></li>
        <li><?= $this->Html->link(__('New Busines'), ['controller' =>'Business','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Business'), ['controller' => 'Business', 'action' => 'index']) ?></li>
    </ul>
    <ul class="side-nav">
        <li class="heading"><?= __('Social Media Platform') ?></li>
        <li><?= $this->Html->link(__('New Social Media Platform'), ['controller' =>'SocialMediaPlatform','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Social Media Platform '), ['controller' => 'SocialMediaPlatform', 'action' => 'index']) ?></li>
    </ul>
    <ul class="side-nav">
        <li class="heading"><?= __('Posts') ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Post','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Post'), ['controller' => 'Post', 'action' => 'index']) ?></li>
    </ul>
    <ul class="side-nav">
        <li class="heading"><?= __('Content') ?></li>
        <li><?= $this->Html->link(__('New Content'), ['controller' => 'Content', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Content'), ['controller' => 'Content', 'action' => 'index']) ?></li>
    </ul>
    <ul class="side-nav">
        <li class="heading"><?= __('Feedback') ?></li>
        <li><?= $this->Html->link(__('New Feedback'), ['controller'=>'Feedback','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Feedback'), ['controller' => 'Feedback', 'action' => 'index']) ?></li>
    </ul>    
</nav>


