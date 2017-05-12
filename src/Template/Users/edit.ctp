<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('スタッフリスト'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('メニュー登録'), ['action' => '']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('スタッフ編集') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('role');
        ?>
    </fieldset>
    <div style="width: 250px; float: right;">
        <?= $this->Form->button(__('更新')) ?>
        <?= $this->Form->button('戻る', ['onclick' => 'history.back()', 'type' => 'button', 'class' => 'borderSolid']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
