<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Settlement $settlement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Settlement'), ['action' => 'edit', $settlement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Settlement'), ['action' => 'delete', $settlement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $settlement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Settlements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Settlement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periods'), ['controller' => 'Periods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Period'), ['controller' => 'Periods', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paychecks'), ['controller' => 'Paychecks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paycheck'), ['controller' => 'Paychecks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="settlements view large-9 medium-8 columns content">
    <h3><?= h($settlement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Period') ?></th>
            <td><?= $settlement->has('period') ? $this->Html->link($settlement->period->name, ['controller' => 'Periods', 'action' => 'view', $settlement->period->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($settlement->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $settlement->has('employer') ? $this->Html->link($settlement->employer->name, ['controller' => 'Employers', 'action' => 'view', $settlement->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($settlement->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Paychecks') ?></h4>
        <?php if (!empty($settlement->paychecks)): ?>
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
            <?php foreach ($settlement->paychecks as $paychecks): ?>
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
