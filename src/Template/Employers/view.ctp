<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employer $employer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employer'), ['action' => 'edit', $employer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employer'), ['action' => 'delete', $employer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hirings'), ['controller' => 'Hirings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hiring'), ['controller' => 'Hirings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paychecks'), ['controller' => 'Paychecks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paycheck'), ['controller' => 'Paychecks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Settlements'), ['controller' => 'Settlements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Settlement'), ['controller' => 'Settlements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employers view large-9 medium-8 columns content">
    <h3><?= h($employer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($employer->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($employer->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($employer->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Actual') ?></th>
            <td><?= h($employer->address_actual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cuit') ?></th>
            <td><?= $this->Number->format($employer->cuit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Initiation') ?></th>
            <td><?= h($employer->initiation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($employer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($employer->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Hirings') ?></h4>
        <?php if (!empty($employer->hirings)): ?>
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
            <?php foreach ($employer->hirings as $hirings): ?>
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
        <?php if (!empty($employer->paychecks)): ?>
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
            <?php foreach ($employer->paychecks as $paychecks): ?>
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
        <?php if (!empty($employer->settlements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Period Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employer->settlements as $settlements): ?>
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
