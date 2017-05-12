<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('編集 M Menu Food List'), ['action' => 'edit', $mMenuFoodList->menuFoodListId]) ?> </li>
        <li><?= $this->Form->postLink(__('削除 M Menu Food List'), ['action' => 'delete', $mMenuFoodList->menuFoodListId], ['confirm' => __('Are you sure you want to delete # {0}?', $mMenuFoodList->menuFoodListId)]) ?> </li>
        <li><?= $this->Html->link(__('List M Menu Food Lists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New M Menu Food List'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mMenuFoodLists view large-9 medium-8 columns content">
    <h3><?= h($mMenuFoodList->menuFoodListId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('RegistUserId') ?></th>
            <td><?= h($mMenuFoodList->registUserId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UpdateUserId') ?></th>
            <td><?= h($mMenuFoodList->updateUserId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MenuFoodListId') ?></th>
            <td><?= $this->Number->format($mMenuFoodList->menuFoodListId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MenuId') ?></th>
            <td><?= $this->Number->format($mMenuFoodList->menuId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FoodId') ?></th>
            <td><?= $this->Number->format($mMenuFoodList->foodId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($mMenuFoodList->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UnitId') ?></th>
            <td><?= $this->Number->format($mMenuFoodList->unitId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RegistDate') ?></th>
            <td><?= h($mMenuFoodList->registDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UpdateDate') ?></th>
            <td><?= h($mMenuFoodList->updateDate) ?></td>
        </tr>
    </table>
</div>
