<h1>Databaseサンプル</h1>
<?=$this->Form->create($entity,['url'=>['action'=>'index']]) ?>
<fieldset>
    <?=$this->Form->text("name") ?>
</fieldset>
<?=$this->Form->button("送信") ?>
<?=$this->Form->end() ?>

<hr>

<p>COUNT: <?=$count?></p>
<p>first: <?php print_r($first); ?></p>
<p>min: <?=$min ?></p>
<p>max: <?=$max ?></p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>TITLE</th>
            <th>CONTENT</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $arr = $data->toArray();
        for ($i = 0;$i < count($arr);$i++){
            echo $this->Html->tableCells(
                $arr[$i]->toArray(),
                ['style'=>'background-color:#f0f0f0'],
                ['style'=>'font-weight:bold'],
                true
            );
        }

        ?>
    </tbody>
</table>