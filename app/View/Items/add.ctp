<h2>Add New Item</h2>
<h4 style="color: red">* = Mandatory Field</h4>

<div class="form-horizontal" style="padding: 2em">
    <?php echo $this->Form->create('Item',array('novalidate'=> true));?>

    <div class="control-group">
        <label class="control-label" for="inputText">* Name: </label>
        <div class="controls">
            <?php echo $this->Form->input('item_name', array('type' => 'text', 'id' => 'inputText', 'placeholder' => 'Cocktail', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputCode">* Code: </label>
        <div class="controls">
            <?php echo $this->Form->input('item_code', array('type' => 'text', 'id' => 'inputCode', 'placeholder' => 'CT1', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputSize">* Unit Size: </label>
        <div class="controls">
            <?php echo $this->Form->input('item_unit_size', array('type' => 'number', 'id' => 'inputSize','min' => 0 ,'placeholder' => '1000', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputText">* Measurement Type: </label>
        <div class="controls">
            <?php echo $this->Form->input('item_measure_type', array('type' => 'text', 'id' => 'inputText', 'placeholder' => 'ml', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputCarton">Carton Size: </label>
        <div class="controls">
            <?php echo $this->Form->input('item_carton_size', array('type' => 'text', 'id' => 'inputCarton', 'placeholder' => '12 x 1000ml', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputText">Interchange: </label>
        <div class="controls">
            <?php echo $this->Form->input('item_interchangeable', array('type' => 'text', 'id' => 'inputText', 'placeholder' => 'Martini', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputPrice">* Price: </label>
        <div class="controls">
            <?php echo $this->Form->input('item_sell_price', array('type' => 'text', 'id' => 'inputPrice','min' => 0, 'placeholder' => '35', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputText">* Category: </label>
        <div class="controls">
            <?php echo $this->Form->input('item_category', array('type' => 'text', 'id' => 'inputText', 'placeholder' => 'Liquor', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputText">Sub Category: </label>
        <div class="controls">
            <?php echo $this->Form->input('item_sub_category', array('type' => 'text', 'id' => 'inputText', 'placeholder' => 'Wine', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <?php echo $this->Form->button(__('Submit'), array('type' => 'submit', 'class' => 'btn btn-primary'));
            ?>
            <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
            ?>
            <?php echo $this->Html->link(__('List Items'), array('action' => 'index'), array('class' => 'btn')); ?>
        </div>
    </div>
</div>