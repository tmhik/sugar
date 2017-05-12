<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New M User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mUsers index large-9 medium-8 columns content">
    <h3><?= __('ユーザマスタ') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('userId', 'ユーザID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleteFlg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mUsers as $mUser): ?>
            <tr>
                <td><?= $this->Number->format($mUser->userId) ?></td>
                <td><?= h($mUser->id) ?></td>
                <td><?= h($mUser->name) ?></td>
                <td><?= h($mUser->password) ?></td>
                <td><?= h($mUser->token) ?></td>
                <td><?= h($mUser->deleteFlg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('表示'), ['action' => 'view', $mUser->userId]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $mUser->userId]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $mUser->userId], ['confirm' => __('Are you sure you want to delete # {0}?', $mUser->userId)]) ?>
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
