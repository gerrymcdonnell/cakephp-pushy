<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pushymenus Item'), ['action' => 'edit', $pushymenusItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pushymenus Item'), ['action' => 'delete', $pushymenusItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pushymenusItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pushymenus Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pushymenus Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pushymenus'), ['controller' => 'Pushymenus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pushymenu'), ['controller' => 'Pushymenus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pushymenusItems view large-9 medium-8 columns content">
    <h3><?= h($pushymenusItem->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($pushymenusItem->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Pushymenu') ?></th>
            <td><?= $pushymenusItem->has('pushymenu') ? $this->Html->link($pushymenusItem->pushymenu->title, ['controller' => 'Pushymenus', 'action' => 'view', $pushymenusItem->pushymenu->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Controller') ?></th>
            <td><?= h($pushymenusItem->controller) ?></td>
        </tr>
        <tr>
            <th><?= __('Action') ?></th>
            <td><?= h($pushymenusItem->action) ?></td>
        </tr>
        <tr>
            <th><?= __('Plugin') ?></th>
            <td><?= h($pushymenusItem->plugin) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pushymenusItem->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pushymenusItem->created) ?></td>
        </tr>
    </table>
</div>
