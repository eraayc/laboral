<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hiring[]|\Cake\Collection\CollectionInterface $hirings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hiring'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hirings index large-9 medium-8 columns content">
    <h3><?= __('Hirings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hirings as $hiring): ?>
            <tr>
                <td><?= $this->Number->format($hiring->id) ?></td>
                <td><?= $hiring->has('employer') ? $this->Html->link($hiring->employer->name, ['controller' => 'Employers', 'action' => 'view', $hiring->employer->id]) : '' ?></td>
                <td><?= $hiring->has('employee') ? $this->Html->link($hiring->employee->name, ['controller' => 'Employees', 'action' => 'view', $hiring->employee->id]) : '' ?></td>
                <td><?= h($hiring->start) ?></td>
                <td><?= h($hiring->end) ?></td>
                <td><?= h($hiring->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hiring->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hiring->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hiring->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hiring->id)]) ?>
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
