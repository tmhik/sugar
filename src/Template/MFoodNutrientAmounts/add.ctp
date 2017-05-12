<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List M Food Nutrient Amounts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mFoodNutrientAmounts form large-9 medium-8 columns content">
    <?= $this->Form->create($mFoodNutrientAmount) ?>
    <fieldset>
        <legend><?= __('Add M Food Nutrient Amount') ?></legend>
        <?php
            echo $this->Form->input('Refuse');
            echo $this->Form->input('EnercKcal');
            echo $this->Form->input('Enerc');
            echo $this->Form->input('Water');
            echo $this->Form->input('Protein');
            echo $this->Form->input('Protcaa');
            echo $this->Form->input('Fat');
            echo $this->Form->input('Fatnlea');
            echo $this->Form->input('Fasat');
            echo $this->Form->input('Fams');
            echo $this->Form->input('Fapu');
            echo $this->Form->input('Chole');
            echo $this->Form->input('Carbohyd');
            echo $this->Form->input('Choavlm');
            echo $this->Form->input('Fibsol');
            echo $this->Form->input('Fibins');
            echo $this->Form->input('Fibtg');
            echo $this->Form->input('Ash');
            echo $this->Form->input('MineralNa');
            echo $this->Form->input('MineralK');
            echo $this->Form->input('MineralCa');
            echo $this->Form->input('MineralMg');
            echo $this->Form->input('MineralP');
            echo $this->Form->input('MineralFe');
            echo $this->Form->input('MineralZn');
            echo $this->Form->input('MineralCu');
            echo $this->Form->input('MineralMn');
            echo $this->Form->input('MineralId');
            echo $this->Form->input('MineralSe');
            echo $this->Form->input('MineralCr');
            echo $this->Form->input('MineralMo');
            echo $this->Form->input('Retol');
            echo $this->Form->input('Carta');
            echo $this->Form->input('Cartb');
            echo $this->Form->input('Crypxb');
            echo $this->Form->input('Cartbeq');
            echo $this->Form->input('VitaRae');
            echo $this->Form->input('Vitd');
            echo $this->Form->input('Tocpha');
            echo $this->Form->input('Tocphb');
            echo $this->Form->input('Tocphg');
            echo $this->Form->input('Tocphd');
            echo $this->Form->input('Vitk');
            echo $this->Form->input('Thiahcl');
            echo $this->Form->input('Ribf');
            echo $this->Form->input('Nia');
            echo $this->Form->input('Vitb6A');
            echo $this->Form->input('Vitb12');
            echo $this->Form->input('Fol');
            echo $this->Form->input('Pantac');
            echo $this->Form->input('Biot');
            echo $this->Form->input('Vitc');
            echo $this->Form->input('NaclEq');
            echo $this->Form->input('Alc');
            echo $this->Form->input('Nitra');
            echo $this->Form->input('Thebrn');
            echo $this->Form->input('Caffn');
            echo $this->Form->input('Tan');
            echo $this->Form->input('Polyphent');
            echo $this->Form->input('Aceac');
            echo $this->Form->input('Oil');
            echo $this->Form->input('Oa');
            echo $this->Form->input('Fapun3');
            echo $this->Form->input('Fapun6');
            echo $this->Form->input('WeightRate');
            echo $this->Form->input('registDate');
            echo $this->Form->input('registUserId');
            echo $this->Form->input('updateDate');
            echo $this->Form->input('updateUserId');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
