<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List M Menu Food Lists'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mMenuFoodLists form large-9 medium-8 columns content">
    <?= $this->Form->create($mMenuFoodList) ?>
    <fieldset>
        <legend><?= __('Add M Menu Food List') ?></legend>
        <?php
            echo $this->Form->input('menuId');
            echo $this->Form->input('foodId');
            echo $this->Form->input('number');
            echo $this->Form->input('unitId');
            echo $this->Form->input('registDate');
            echo $this->Form->input('registUserId');
            echo $this->Form->input('updateDate');
            echo $this->Form->input('updateUserId');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
