<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New M Food'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mFoods index large-9 medium-8 columns content">
    <h3><?= __('M Foods') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foodNameKana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foodNameDisplay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foodNameOther') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foodId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foodName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subClass') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kindClass') ?></th>
                <th scope="col"><?= $this->Paginator->sort('majorClassId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('majorClass') ?></th>
                <th scope="col"><?= $this->Paginator->sort('middleClass') ?></th>
                <th scope="col"><?= $this->Paginator->sort('smallClass') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registUserId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updateDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updateUserId') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mFoods as $mFood): ?>
            <tr>
                <td><?= $this->Number->format($mFood->id) ?></td>
                <td><?= h($mFood->foodNameKana) ?></td>
                <td><?= h($mFood->foodNameDisplay) ?></td>
                <td><?= h($mFood->foodNameOther) ?></td>
                <td><?= h($mFood->foodId) ?></td>
                <td><?= h($mFood->foodName) ?></td>
                <td><?= h($mFood->subClass) ?></td>
                <td><?= h($mFood->kindClass) ?></td>
                <td><?= $this->Number->format($mFood->majorClassId) ?></td>
                <td><?= h($mFood->majorClass) ?></td>
                <td><?= h($mFood->middleClass) ?></td>
                <td><?= h($mFood->smallClass) ?></td>
                <td><?= h($mFood->registDate) ?></td>
                <td><?= h($mFood->registUserId) ?></td>
                <td><?= h($mFood->updateDate) ?></td>
                <td><?= h($mFood->updateUserId) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('詳細'), ['action' => 'view', $mFood->foodId]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $mFood->foodId]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $mFood->foodId], ['confirm' => __('Are you sure you want to delete # {0}?', $mFood->foodId)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <table cellpadding="0" cellspacing="0">
        <tbody>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= h($task->water) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('表示'), ['action' => 'view', $task->foodId]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $task['foodId']]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $task['foodId']], ['confirm' => __('Are you sure you want to delete # {0}?', $task['foodId'])]) ?>
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
