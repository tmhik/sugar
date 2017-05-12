<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New M Normal Menu'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mNormalMenus index large-9 medium-8 columns content">
    <h3><?= __('M Normal Menus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('menuId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('menuType') ?></th>
                <th scope="col"><?= $this->Paginator->sort('menuName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('menuGroupId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updateDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updateUserId') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mNormalMenus as $mNormalMenu): ?>
            <tr>
                <td><?= $this->Number->format($mNormalMenu->menuId) ?></td>
                <td><?= $this->Number->format($mNormalMenu->menuType) ?></td>
                <td><?= h($mNormalMenu->menuName) ?></td>
                <td><?= $this->Number->format($mNormalMenu->menuGroupId) ?></td>
                <td><?= h($mNormalMenu->registDate) ?></td>
                <td><?= h($mNormalMenu->registUserId) ?></td>
                <td><?= h($mNormalMenu->updateDate) ?></td>
                <td><?= h($mNormalMenu->updateUserId) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('詳細'), ['action' => 'view', $mNormalMenu->menuId]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $mNormalMenu->menuId]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $mNormalMenu->menuId], ['confirm' => __('Are you sure you want to delete # {0}?', $mNormalMenu->menuId)]) ?>
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
