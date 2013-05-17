<h2>Item Details</h2>

<table class="table table-hover table-bordered">
    <tr><th width="30%"><?php echo __('Name'); ?></th>
        <td>
            <?php echo h($item['Item']['item_name']); ?>
        </td></tr>

    <tr><th><?php echo __('Code'); ?></th>
        <td>
            <?php echo h($item['Item']['item_code']); ?>
        </td></tr>

    <tr><th><?php echo __('Unit Size'); ?></th>
        <td>
            <?php echo h($item['Item']['item_unit_size']); ?>
        </td></tr>

    <tr><th><?php echo __('Measure Type'); ?></th>
        <td>
            <?php echo h($item['Item']['item_measure_type']); ?>
        </td></tr>

    <tr><th><?php echo __('Carton Size'); ?></th>
        <td>
            <?php echo h($item['Item']['item_carton_size']); ?>
        </td></tr>

    <tr><th><?php echo __('Interchangeable With'); ?></th>
        <td>
            <?php echo h($item['Item']['item_interchangeable']); ?>
        </td></tr>

    <tr><th><?php echo __('Sell Price'); ?></th>
        <td>
            <?php echo h($item['Item']['item_sell_price']); ?>
        </td></tr>

    <tr><th><?php echo __('Category'); ?></th>
        <td>
            <?php echo h($item['Item']['item_category']); ?>
        </td></tr>

    <tr><th><?php echo __('Sub Category'); ?></th>
        <td>
            <?php echo h($item['Item']['item_sub_category']); ?>
        </td></tr>
</table>
<?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['item_id']), array('class' => 'btn btn-primary')); ?> 
<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['item_id']), array('class' => 'btn btn-danger', 'escape' => false), __('Are you sure you want to delete this?')); ?>
<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
echo $this->Html->link(__('Back'), array('action' => 'index'), array('class' => 'btn'));
?> 