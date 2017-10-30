<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Settlement[]|\Cake\Collection\CollectionInterface $settlements
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Settlement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periods'), ['controller' => 'Periods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Period'), ['controller' => 'Periods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paychecks'), ['controller' => 'Paychecks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paycheck'), ['controller' => 'Paychecks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="settlements index large-9 medium-8 columns content">
    <h3><?= __('Settlements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('period_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employer_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($settlements as $settlement): ?>
            <tr>
                <td><?= $this->Number->format($settlement->id) ?></td>
                <td><?= $settlement->has('period') ? $this->Html->link($settlement->period->name, ['controller' => 'Periods', 'action' => 'view', $settlement->period->id]) : '' ?></td>
                <td><?= h($settlement->description) ?></td>
                <td><?= $settlement->has('employer') ? $this->Html->link($settlement->employer->name, ['controller' => 'Employers', 'action' => 'view', $settlement->employer->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $settlement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $settlement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $settlement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $settlement->id)]) ?>
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
