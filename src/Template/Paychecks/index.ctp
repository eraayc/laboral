<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paycheck[]|\Cake\Collection\CollectionInterface $paychecks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paycheck'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periods'), ['controller' => 'Periods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Period'), ['controller' => 'Periods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Settlements'), ['controller' => 'Settlements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Settlement'), ['controller' => 'Settlements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paychecks index large-9 medium-8 columns content">
    <h3><?= __('Paychecks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('period_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('settlement_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paychecks as $paycheck): ?>
            <tr>
                <td><?= $this->Number->format($paycheck->id) ?></td>
                <td><?= $paycheck->has('employee') ? $this->Html->link($paycheck->employee->name, ['controller' => 'Employees', 'action' => 'view', $paycheck->employee->id]) : '' ?></td>
                <td><?= $paycheck->has('employer') ? $this->Html->link($paycheck->employer->name, ['controller' => 'Employers', 'action' => 'view', $paycheck->employer->id]) : '' ?></td>
                <td><?= $paycheck->has('period') ? $this->Html->link($paycheck->period->name, ['controller' => 'Periods', 'action' => 'view', $paycheck->period->id]) : '' ?></td>
                <td><?= $paycheck->has('settlement') ? $this->Html->link($paycheck->settlement->id, ['controller' => 'Settlements', 'action' => 'view', $paycheck->settlement->id]) : '' ?></td>
                <td><?= h($paycheck->created) ?></td>
                <td><?= h($paycheck->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paycheck->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paycheck->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paycheck->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paycheck->id)]) ?>
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
