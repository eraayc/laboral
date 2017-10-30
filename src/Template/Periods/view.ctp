<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Period $period
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Period'), ['action' => 'edit', $period->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Period'), ['action' => 'delete', $period->id], ['confirm' => __('Are you sure you want to delete # {0}?', $period->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Periods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Period'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paychecks'), ['controller' => 'Paychecks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paycheck'), ['controller' => 'Paychecks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Settlements'), ['controller' => 'Settlements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Settlement'), ['controller' => 'Settlements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="periods view large-9 medium-8 columns content">
    <h3><?= h($period->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($period->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($period->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($period->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($period->end) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Paychecks') ?></h4>
        <?php if (!empty($period->paychecks)): ?>
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
            <?php foreach ($period->paychecks as $paychecks): ?>
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
    <div class="related">
        <h4><?= __('Related Settlements') ?></h4>
        <?php if (!empty($period->settlements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Period Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($period->settlements as $settlements): ?>
            <tr>
                <td><?= h($settlements->id) ?></td>
                <td><?= h($settlements->period_id) ?></td>
                <td><?= h($settlements->description) ?></td>
                <td><?= h($settlements->employer_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Settlements', 'action' => 'view', $settlements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Settlements', 'action' => 'edit', $settlements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Settlements', 'action' => 'delete', $settlements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $settlements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
