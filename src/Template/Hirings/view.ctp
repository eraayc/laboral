<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hiring $hiring
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hiring'), ['action' => 'edit', $hiring->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hiring'), ['action' => 'delete', $hiring->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hiring->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hirings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hiring'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hirings view large-9 medium-8 columns content">
    <h3><?= h($hiring->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $hiring->has('employer') ? $this->Html->link($hiring->employer->name, ['controller' => 'Employers', 'action' => 'view', $hiring->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $hiring->has('employee') ? $this->Html->link($hiring->employee->name, ['controller' => 'Employees', 'action' => 'view', $hiring->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($hiring->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hiring->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($hiring->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($hiring->end) ?></td>
        </tr>
    </table>
</div>
