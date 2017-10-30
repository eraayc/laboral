<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hirings'), ['controller' => 'Hirings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hiring'), ['controller' => 'Hirings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paychecks'), ['controller' => 'Paychecks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paycheck'), ['controller' => 'Paychecks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employees form large-9 medium-8 columns content">
    <?= $this->Form->create($employee) ?>
    <fieldset>
        <legend><?= __('Add Employee') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('address');
            echo $this->Form->control('birthday', ['empty' => true]);
            echo $this->Form->control('dni');
            echo $this->Form->control('cuit');
            echo $this->Form->control('nationality');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
