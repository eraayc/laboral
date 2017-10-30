<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $settlement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $settlement->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Settlements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Periods'), ['controller' => 'Periods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Period'), ['controller' => 'Periods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paychecks'), ['controller' => 'Paychecks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paycheck'), ['controller' => 'Paychecks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="settlements form large-9 medium-8 columns content">
    <?= $this->Form->create($settlement) ?>
    <fieldset>
        <legend><?= __('Edit Settlement') ?></legend>
        <?php
            echo $this->Form->control('period_id', ['options' => $periods]);
            echo $this->Form->control('description');
            echo $this->Form->control('employer_id', ['options' => $employers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
