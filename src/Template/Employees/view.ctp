<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hirings'), ['controller' => 'Hirings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hiring'), ['controller' => 'Hirings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paychecks'), ['controller' => 'Paychecks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paycheck'), ['controller' => 'Paychecks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($employee->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($employee->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nationality') ?></th>
            <td><?= h($employee->nationality) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= $this->Number->format($employee->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cuit') ?></th>
            <td><?= $this->Number->format($employee->cuit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($employee->birthday) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Hirings') ?></h4>
        <?php if (!empty($employee->hirings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->hirings as $hirings): ?>
            <tr>
                <td><?= h($hirings->id) ?></td>
                <td><?= h($hirings->employer_id) ?></td>
                <td><?= h($hirings->employee_id) ?></td>
                <td><?= h($hirings->start) ?></td>
                <td><?= h($hirings->end) ?></td>
                <td><?= h($hirings->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Hirings', 'action' => 'view', $hirings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Hirings', 'action' => 'edit', $hirings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hirings', 'action' => 'delete', $hirings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hirings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Paychecks') ?></h4>
        <?php if (!empty($employee->paychecks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('Period Id') ?></th>
                <th scope="col"><?= __('Settlement Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Compensations') ?></th>
                <th scope="col"><?= __('Reductions') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->paychecks as $paychecks): ?>
            <tr>
                <td><?= h($paychecks->id) ?></td>
                <td><?= h($paychecks->employee_id) ?></td>
                <td><?= h($paychecks->employer_id) ?></td>
                <td><?= h($paychecks->period_id) ?></td>
                <td><?= h($paychecks->settlement_id) ?></td>
                <td><?= h($paychecks->created) ?></td>
                <td><?= h($paychecks->modified) ?></td>
                <td><?= h($paychecks->compensations) ?></td>
                <td><?= h($paychecks->reductions) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Paychecks', 'action' => 'view', $paychecks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Paychecks', 'action' => 'edit', $paychecks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paychecks', 'action' => 'delete', $paychecks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paychecks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
