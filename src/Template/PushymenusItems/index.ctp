<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pushymenus Item'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pushymenus'), ['controller' => 'Pushymenus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pushymenu'), ['controller' => 'Pushymenus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pushymenusItems index large-10 medium-8 columns content">
    <h3><?= __('Pushymenus Items') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('pushymenu_id') ?></th>
                <th><?= $this->Paginator->sort('controller') ?></th>
                <th><?= $this->Paginator->sort('action') ?></th>
                <th><?= $this->Paginator->sort('plugin') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pushymenusItems as $pushymenusItem): ?>
            <tr>
                <td><?= $this->Number->format($pushymenusItem->id) ?></td>
                <td><?= h($pushymenusItem->title) ?></td>
                <td><?= $pushymenusItem->has('pushymenu') ? $this->Html->link($pushymenusItem->pushymenu->title, ['controller' => 'Pushymenus', 'action' => 'view', $pushymenusItem->pushymenu->id]) : '' ?></td>
                <td><?= h($pushymenusItem->controller) ?></td>
                <td><?= h($pushymenusItem->action) ?></td>
                <td><?= h($pushymenusItem->plugin) ?></td>
                <td><?= h($pushymenusItem->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pushymenusItem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pushymenusItem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pushymenusItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pushymenusItem->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
