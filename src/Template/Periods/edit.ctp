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
                ['action' => 'delete', $period->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $period->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Periods'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paychecks'), ['controller' => 'Paychecks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paycheck'), ['controller' => 'Paychecks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Settlements'), ['controller' => 'Settlements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Settlement'), ['controller' => 'Settlements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="periods form large-9 medium-8 columns content">
    <?= $this->Form->create($period) ?>
    <fieldset>
        <legend><?= __('Edit Period') ?></legend>
        <?php
            echo $this->Form->control('start');
            echo $this->Form->control('end');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
