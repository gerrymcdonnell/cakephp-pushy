<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pushymenu->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pushymenu->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pushymenus'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pushymenus Items'), ['controller' => 'PushymenusItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pushymenus Item'), ['controller' => 'PushymenusItems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pushymenus form large-9 medium-8 columns content">
    <?= $this->Form->create($pushymenu) ?>
    <fieldset>
        <legend><?= __('Edit Pushymenu') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('controller');
            echo $this->Form->input('action');
            echo $this->Form->input('plugin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
