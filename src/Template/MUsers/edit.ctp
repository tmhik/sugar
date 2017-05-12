<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('削除'),
                ['action' => 'delete', $mUser->userId],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mUser->userId)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List M Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($mUser) ?>
    <fieldset>
        <legend><?= __('編集 M User') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
            echo $this->Form->input('password');
            echo $this->Form->input('token');
            echo $this->Form->input('registDate');
            echo $this->Form->input('registUserId');
            echo $this->Form->input('updateDate');
            echo $this->Form->input('updateUserId');
            echo $this->Form->input('deleteFlg');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
