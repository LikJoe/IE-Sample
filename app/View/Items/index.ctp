<!-- File: /app/View/Items/index.ctp -->
<html>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
                <?php echo $this->Html->link(__('New Item'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
                
            </div>
            <div class="span11 offset1">
                <h2>Items</h2>
                <table class="table table-hover table-bordered">
                    <tr>
                        <th><?php echo $this->Paginator->sort('item_name', 'Name'); ?></th>
                        <th><?php echo $this->Paginator->sort('item_code', 'Code'); ?></th>
                        <th><?php echo $this->Paginator->sort('item_sell_price', 'Sell Price'); ?></th>
                        <th>More Information</th>
                    </tr>

                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td><?php echo h($item['Item']['item_name']); ?>&nbsp;</td>
                            <td><?php echo h($item['Item']['item_code']); ?>&nbsp;</td>
                            <td><?php echo h($item['Item']['item_sell_price']); ?>&nbsp;</td>
                            <td>
                                <?php echo $this->Html->link(__('Details'), array('action' => 'view', $item['Item']['item_id']), array('class' => 'btn')); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</html>