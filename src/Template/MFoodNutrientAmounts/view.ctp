<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('編集 M Food Nutrient Amount'), ['action' => 'edit', $mFoodNutrientAmount->foodId]) ?> </li>
        <li><?= $this->Form->postLink(__('削除 M Food Nutrient Amount'), ['action' => 'delete', $mFoodNutrientAmount->foodId], ['confirm' => __('Are you sure you want to delete # {0}?', $mFoodNutrientAmount->foodId)]) ?> </li>
        <li><?= $this->Html->link(__('List M Food Nutrient Amounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New M Food Nutrient Amount'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mFoodNutrientAmounts view large-9 medium-8 columns content">
    <h3><?= h($mFoodNutrientAmount->foodId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('FoodId') ?></th>
            <td><?= h($mFoodNutrientAmount->foodId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RegistUserId') ?></th>
            <td><?= h($mFoodNutrientAmount->registUserId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UpdateUserId') ?></th>
            <td><?= h($mFoodNutrientAmount->updateUserId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Refuse') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Refuse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EnercKcal') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->EnercKcal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enerc') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Enerc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Water') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Water) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Protein') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Protein) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Protcaa') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Protcaa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fat') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Fat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fatnlea') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Fatnlea) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fasat') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Fasat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fams') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Fams) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fapu') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Fapu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chole') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Chole) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carbohyd') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Carbohyd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Choavlm') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Choavlm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fibsol') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Fibsol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fibins') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Fibins) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fibtg') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Fibtg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ash') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Ash) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralNa') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralNa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralK') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralK) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralCa') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralCa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralMg') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralMg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralP') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralFe') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralFe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralZn') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralZn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralCu') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralCu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralMn') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralMn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralId') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralSe') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralSe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralCr') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralCr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MineralMo') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->MineralMo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Retol') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Retol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carta') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Carta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cartb') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Cartb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Crypxb') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Crypxb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cartbeq') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Cartbeq) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VitaRae') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->VitaRae) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vitd') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Vitd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tocpha') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Tocpha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tocphb') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Tocphb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tocphg') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Tocphg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tocphd') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Tocphd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vitk') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Vitk) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thiahcl') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Thiahcl) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ribf') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Ribf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nia') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Nia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vitb6A') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Vitb6A) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vitb12') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Vitb12) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fol') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Fol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pantac') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Pantac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Biot') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Biot) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vitc') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Vitc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NaclEq') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->NaclEq) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alc') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Alc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nitra') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Nitra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thebrn') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Thebrn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Caffn') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Caffn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tan') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Tan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Polyphent') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Polyphent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aceac') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Aceac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Oil') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Oil) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Oa') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Oa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fapun3') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Fapun3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fapun6') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->Fapun6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('WeightRate') ?></th>
            <td><?= $this->Number->format($mFoodNutrientAmount->WeightRate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RegistDate') ?></th>
            <td><?= h($mFoodNutrientAmount->registDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UpdateDate') ?></th>
            <td><?= h($mFoodNutrientAmount->updateDate) ?></td>
        </tr>
    </table>
</div>
