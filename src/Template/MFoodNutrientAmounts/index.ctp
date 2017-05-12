<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New M Food Nutrient Amount'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mFoodNutrientAmounts index large-9 medium-8 columns content">
    <h3><?= __('M Food Nutrient Amounts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('foodId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Refuse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('EnercKcal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Enerc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Water') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Protein') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Protcaa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fatnlea') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fasat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fams') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fapu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Chole') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Carbohyd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Choavlm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fibsol') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fibins') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fibtg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ash') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralNa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralK') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralCa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralMg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralFe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralZn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralCu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralMn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralSe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralCr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MineralMo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Retol') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Carta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cartb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Crypxb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cartbeq') ?></th>
                <th scope="col"><?= $this->Paginator->sort('VitaRae') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Vitd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tocpha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tocphb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tocphg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tocphd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Vitk') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Thiahcl') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ribf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Vitb6A') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Vitb12') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fol') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Pantac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Biot') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Vitc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NaclEq') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Alc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nitra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Thebrn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Caffn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Tan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Polyphent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Aceac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Oil') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Oa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fapun3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fapun6') ?></th>
                <th scope="col"><?= $this->Paginator->sort('WeightRate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registUserId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updateDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updateUserId') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mFoodNutrientAmounts as $mFoodNutrientAmount): ?>
            <tr>
                <td><?= h($mFoodNutrientAmount->foodId) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Refuse) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->EnercKcal) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Enerc) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Water) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Protein) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Protcaa) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Fat) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Fatnlea) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Fasat) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Fams) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Fapu) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Chole) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Carbohyd) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Choavlm) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Fibsol) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Fibins) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Fibtg) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Ash) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralNa) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralK) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralCa) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralMg) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralP) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralFe) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralZn) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralCu) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralMn) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralId) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralSe) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralCr) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->MineralMo) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Retol) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Carta) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Cartb) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Crypxb) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Cartbeq) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->VitaRae) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Vitd) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Tocpha) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Tocphb) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Tocphg) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Tocphd) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Vitk) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Thiahcl) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Ribf) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Nia) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Vitb6A) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Vitb12) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Fol) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Pantac) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Biot) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Vitc) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->NaclEq) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Alc) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Nitra) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Thebrn) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Caffn) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Tan) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Polyphent) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Aceac) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Oil) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Oa) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Fapun3) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->Fapun6) ?></td>
                <td><?= $this->Number->format($mFoodNutrientAmount->WeightRate) ?></td>
                <td><?= h($mFoodNutrientAmount->registDate) ?></td>
                <td><?= h($mFoodNutrientAmount->registUserId) ?></td>
                <td><?= h($mFoodNutrientAmount->updateDate) ?></td>
                <td><?= h($mFoodNutrientAmount->updateUserId) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('詳細'), ['action' => 'view', $mFoodNutrientAmount->foodId]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $mFoodNutrientAmount->foodId]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $mFoodNutrientAmount->foodId], ['confirm' => __('Are you sure you want to delete # {0}?', $mFoodNutrientAmount->foodId)]) ?>
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
