<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('編集 M User'), ['action' => 'edit', $mUser->userId]) ?> </li>
        <li><?= $this->Form->postLink(__('削除 M User'), ['action' => 'delete', $mUser->userId], ['confirm' => __('Are you sure you want to delete # {0}?', $mUser->userId)]) ?> </li>
        <li><?= $this->Html->link(__('List M Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New M User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mUsers view large-9 medium-8 columns content">
    <h3><?= h($mUser->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($mUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($mUser->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($mUser->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($mUser->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RegistUserId') ?></th>
            <td><?= h($mUser->registUserId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UpdateUserId') ?></th>
            <td><?= h($mUser->updateUserId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserId') ?></th>
            <td><?= $this->Number->format($mUser->userId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RegistDate') ?></th>
            <td><?= h($mUser->registDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UpdateDate') ?></th>
            <td><?= h($mUser->updateDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('削除Flg') ?></th>
            <td><?= $mUser->deleteFlg ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
