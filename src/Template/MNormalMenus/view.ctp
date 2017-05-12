<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('編集 M Normal Menu'), ['action' => 'edit', $mNormalMenu->menuId]) ?> </li>
        <li><?= $this->Form->postLink(__('削除 M Normal Menu'), ['action' => 'delete', $mNormalMenu->menuId], ['confirm' => __('Are you sure you want to delete # {0}?', $mNormalMenu->menuId)]) ?> </li>
        <li><?= $this->Html->link(__('List M Normal Menus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New M Normal Menu'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mNormalMenus view large-9 medium-8 columns content">
    <h3><?= h($mNormalMenu->menuId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('MenuName') ?></th>
            <td><?= h($mNormalMenu->menuName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RegistUserId') ?></th>
            <td><?= h($mNormalMenu->registUserId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UpdateUserId') ?></th>
            <td><?= h($mNormalMenu->updateUserId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MenuId') ?></th>
            <td><?= $this->Number->format($mNormalMenu->menuId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MenuType') ?></th>
            <td><?= $this->Number->format($mNormalMenu->menuType) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MenuGroupId') ?></th>
            <td><?= $this->Number->format($mNormalMenu->menuGroupId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RegistDate') ?></th>
            <td><?= h($mNormalMenu->registDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UpdateDate') ?></th>
            <td><?= h($mNormalMenu->updateDate) ?></td>
        </tr>
    </table>
</div>
