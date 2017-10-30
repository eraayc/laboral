<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hirings'), ['controller' => 'Hirings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hiring'), ['controller' => 'Hirings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paychecks'), ['controller' => 'Paychecks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paycheck'), ['controller' => 'Paychecks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Settlements'), ['controller' => 'Settlements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Settlement'), ['controller' => 'Settlements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employers form large-9 medium-8 columns content">
    <?= $this->Form->create($employer) ?>
    <fieldset>
        <legend><?= __('Add Employer') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('cuit');
            echo $this->Form->control('description');
            echo $this->Form->control('address');
            echo $this->Form->control('address_actual');
            echo $this->Form->control('initiation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
