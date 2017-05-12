<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New M Menu Food List'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mMenuFoodLists index large-9 medium-8 columns content">
    <h3><?= __('M Menu Food Lists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('menuFoodListId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('menuId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foodId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unitId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registUserId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updateDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updateUserId') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mMenuFoodLists as $mMenuFoodList): ?>
            <tr>
                <td><?= $this->Number->format($mMenuFoodList->menuFoodListId) ?></td>
                <td><?= $this->Number->format($mMenuFoodList->menuId) ?></td>
                <td><?= $this->Number->format($mMenuFoodList->foodId) ?></td>
                <td><?= $this->Number->format($mMenuFoodList->number) ?></td>
                <td><?= $this->Number->format($mMenuFoodList->unitId) ?></td>
                <td><?= h($mMenuFoodList->registDate) ?></td>
                <td><?= h($mMenuFoodList->registUserId) ?></td>
                <td><?= h($mMenuFoodList->updateDate) ?></td>
                <td><?= h($mMenuFoodList->updateUserId) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('詳細'), ['action' => 'view', $mMenuFoodList->menuFoodListId]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $mMenuFoodList->menuFoodListId]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $mMenuFoodList->menuFoodListId], ['confirm' => __('Are you sure you want to delete # {0}?', $mMenuFoodList->menuFoodListId)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('前へ')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('次へ') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
