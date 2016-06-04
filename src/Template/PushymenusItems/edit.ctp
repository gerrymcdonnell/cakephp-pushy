<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pushymenusItem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pushymenusItem->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pushymenus Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pushymenus'), ['controller' => 'Pushymenus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pushymenu'), ['controller' => 'Pushymenus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pushymenusItems form large-9 medium-8 columns content">
    <?= $this->Form->create($pushymenusItem) ?>
    <fieldset>
        <legend><?= __('Edit Pushymenus Item') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('pushymenu_id', ['options' => $pushymenus]);
            echo $this->Form->input('controller');
            echo $this->Form->input('action');
            echo $this->Form->input('plugin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
