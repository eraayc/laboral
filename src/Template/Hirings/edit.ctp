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
                ['action' => 'delete', $hiring->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hiring->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hirings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hirings form large-9 medium-8 columns content">
    <?= $this->Form->create($hiring) ?>
    <fieldset>
        <legend><?= __('Edit Hiring') ?></legend>
        <?php
            echo $this->Form->control('employer_id', ['options' => $employers]);
            echo $this->Form->control('employee_id', ['options' => $employees]);
            echo $this->Form->control('start');
            echo $this->Form->control('end', ['empty' => true]);
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
