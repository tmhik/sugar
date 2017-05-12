<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('編集 M Food'), ['action' => 'edit', $mFood->foodId]) ?> </li>
        <li><?= $this->Form->postLink(__('削除 M Food'), ['action' => 'delete', $mFood->foodId], ['confirm' => __('Are you sure you want to delete # {0}?', $mFood->foodId)]) ?> </li>
        <li><?= $this->Html->link(__('List M Foods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New M Food'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mFoods view large-9 medium-8 columns content">
    <h3><?= h($mFood->foodId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('FoodNameKana') ?></th>
            <td><?= h($mFood->foodNameKana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FoodNameDisplay') ?></th>
            <td><?= h($mFood->foodNameDisplay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FoodNameOther') ?></th>
            <td><?= h($mFood->foodNameOther) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FoodId') ?></th>
            <td><?= h($mFood->foodId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FoodName') ?></th>
            <td><?= h($mFood->foodName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SubClass') ?></th>
            <td><?= h($mFood->subClass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('KindClass') ?></th>
            <td><?= h($mFood->kindClass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MajorClass') ?></th>
            <td><?= h($mFood->majorClass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MiddleClass') ?></th>
            <td><?= h($mFood->middleClass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SmallClass') ?></th>
            <td><?= h($mFood->smallClass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RegistUserId') ?></th>
            <td><?= h($mFood->registUserId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UpdateUserId') ?></th>
            <td><?= h($mFood->updateUserId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mFood->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MajorClassId') ?></th>
            <td><?= $this->Number->format($mFood->majorClassId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RegistDate') ?></th>
            <td><?= h($mFood->registDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UpdateDate') ?></th>
            <td><?= h($mFood->updateDate) ?></td>
        </tr>
    </table>
</div>
