<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pushymenu'), ['action' => 'edit', $pushymenu->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pushymenu'), ['action' => 'delete', $pushymenu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pushymenu->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pushymenus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pushymenu'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pushymenus Items'), ['controller' => 'PushymenusItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pushymenus Item'), ['controller' => 'PushymenusItems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pushymenus view large-9 medium-8 columns content">
    <h3><?= h($pushymenu->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($pushymenu->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Controller') ?></th>
            <td><?= h($pushymenu->controller) ?></td>
        </tr>
        <tr>
            <th><?= __('Action') ?></th>
            <td><?= h($pushymenu->action) ?></td>
        </tr>
        <tr>
            <th><?= __('Plugin') ?></th>
            <td><?= h($pushymenu->plugin) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pushymenu->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pushymenu->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pushymenus Items') ?></h4>
        <?php if (!empty($pushymenu->pushymenus_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Pushymenu Id') ?></th>
                <th><?= __('Controller') ?></th>
                <th><?= __('Action') ?></th>
                <th><?= __('Plugin') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pushymenu->pushymenus_items as $pushymenusItems): ?>
            <tr>
                <td><?= h($pushymenusItems->id) ?></td>
                <td><?= h($pushymenusItems->title) ?></td>
                <td><?= h($pushymenusItems->pushymenu_id) ?></td>
                <td><?= h($pushymenusItems->controller) ?></td>
                <td><?= h($pushymenusItems->action) ?></td>
                <td><?= h($pushymenusItems->plugin) ?></td>
                <td><?= h($pushymenusItems->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PushymenusItems', 'action' => 'view', $pushymenusItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PushymenusItems', 'action' => 'edit', $pushymenusItems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PushymenusItems', 'action' => 'delete', $pushymenusItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pushymenusItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
