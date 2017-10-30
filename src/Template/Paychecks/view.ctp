<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paycheck $paycheck
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paycheck'), ['action' => 'edit', $paycheck->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paycheck'), ['action' => 'delete', $paycheck->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paycheck->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paychecks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paycheck'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periods'), ['controller' => 'Periods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Period'), ['controller' => 'Periods', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Settlements'), ['controller' => 'Settlements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Settlement'), ['controller' => 'Settlements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paychecks view large-9 medium-8 columns content">
    <h3><?= h($paycheck->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $paycheck->has('employee') ? $this->Html->link($paycheck->employee->name, ['controller' => 'Employees', 'action' => 'view', $paycheck->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $paycheck->has('employer') ? $this->Html->link($paycheck->employer->name, ['controller' => 'Employers', 'action' => 'view', $paycheck->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Period') ?></th>
            <td><?= $paycheck->has('period') ? $this->Html->link($paycheck->period->name, ['controller' => 'Periods', 'action' => 'view', $paycheck->period->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Settlement') ?></th>
            <td><?= $paycheck->has('settlement') ? $this->Html->link($paycheck->settlement->id, ['controller' => 'Settlements', 'action' => 'view', $paycheck->settlement->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paycheck->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($paycheck->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($paycheck->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Compensations') ?></h4>
        <?= $this->Text->autoParagraph(h($paycheck->compensations)); ?>
    </div>
    <div class="row">
        <h4><?= __('Reductions') ?></h4>
        <?= $this->Text->autoParagraph(h($paycheck->reductions)); ?>
    </div>
</div>
