<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List M Foods'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mFoods form large-9 medium-8 columns content">
    <?= $this->Form->create($mFood) ?>
    <fieldset>
        <legend><?= __('Add M Food') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('foodNameKana');
            echo $this->Form->input('foodNameDisplay');
            echo $this->Form->input('foodNameOther');
            echo $this->Form->input('foodName');
            echo $this->Form->input('subClass');
            echo $this->Form->input('kindClass');
            echo $this->Form->input('majorClassId');
            echo $this->Form->input('majorClass');
            echo $this->Form->input('middleClass');
            echo $this->Form->input('smallClass');
            echo $this->Form->input('registDate');
            echo $this->Form->input('registUserId');
            echo $this->Form->input('updateDate');
            echo $this->Form->input('updateUserId');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
