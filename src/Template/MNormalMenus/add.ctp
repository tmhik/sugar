<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List M Normal Menus'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mNormalMenus form large-9 medium-8 columns content">
    <?= $this->Form->create($mNormalMenu) ?>
    <fieldset>
        <legend><?= __('Add M Normal Menu') ?></legend>
        <?php
            echo $this->Form->input('menuType');
            echo $this->Form->input('menuName');
            echo $this->Form->input('menuGroupId');
            echo $this->Form->input('registDate');
            echo $this->Form->input('registUserId');
            echo $this->Form->input('updateDate');
            echo $this->Form->input('updateUserId');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
