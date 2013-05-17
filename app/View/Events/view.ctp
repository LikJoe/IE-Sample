<h2>Event Details</h2>

<table class="table table-hover table-bordered">
    <tr>
        <th width="30%">Order Number</th>
        <td><?php echo $event['Event']['e_order_num']; ?></td>
    </tr>
    <tr>
        <th>Event Category</th>
        <td><?php echo $event['EventCategory']['event_category_name']; ?></td>
    </tr>
    <tr>
        <th>Event Sub Category</th>
        <td><?php echo $event['Event']['e_sub_category']; ?></td>
    </tr>
    <tr>
        <th>Event Week</th>
        <td><?php echo $event['Event']['e_week']; ?></td>
    </tr>
    <tr>
        <th>Date</th>
        <td><?php echo $event['Event']['e_date']; ?></td>
    </tr>
    <tr>
        <th>Num of Male Attending</th>
        <td><?php echo $event['Event']['e_num_males_attend']; ?></td>
    </tr>
    <tr>
        <th>Num of Female Attending</th>
        <td><?php echo $event['Event']['e_num_females_attend']; ?></td>
    </tr>
    <tr>
        <th>Num of guests</th>
        <td>
            <?php
            $totalM = $event['Event']['e_num_males_attend'];
            $totalFM = $event['Event']['e_num_females_attend'];
            $totalG = $totalM + $totalFM;
            echo $totalG;
            ?></td>
    </tr>
    <tr>
        <th>Time arrive warehouse start</th>
        <td><?php echo $event['Event']['e_time_arrive_WH_start']; ?></td>
    </tr>
    <tr>
        <th>Time depart warehouse start</th>
        <td><?php echo $event['Event']['e_time_depart_WH_start']; ?></td>
    </tr>
    <tr>
        <th>Time arrive venue</th>
        <td><?php echo $event['Event']['e_time_arrive_venue']; ?></td>
    </tr>
    <tr>
        <th>Time depart venue</th>
        <td><?php echo $event['Event']['e_time_depart_venue']; ?></td>
    </tr>
    <tr>
        <th>Time start service</th>
        <td><?php echo $event['Event']['e_time_start_service']; ?></td>
    </tr>
    <tr>
        <th>Time end service</th>
        <td><?php echo $event['Event']['e_time_end_service']; ?></td>
    </tr>
    <tr>
        <th>Time arrive warehouse end</th>
        <td><?php echo $event['Event']['e_time_arrive_WH_end']; ?></td>
    </tr>
    <tr>
        <th>Time depart warehouse end</th>
        <td><?php echo $event['Event']['e_time_depart_WH_end']; ?></td>
    </tr>
    <tr>
        <th>Drinks package</th>
        <td><?php echo $event['Event']['e_drinks_package']; ?></td>
    </tr>
    <tr>
        <th>Bar facilities</th>
        <td><?php echo $event['Event']['e_bar_facilities']; ?></td>
    </tr>
    <tr>
        <th>Production notes</th>
        <td><?php echo $event['Event']['e_production_notes']; ?></td>
    </tr>
    <tr>
        <th>Event address</th>
        <td><?php echo $event['Event']['e_address']; ?></td>
    </tr>
    <tr>
        <th>Contact person</th>
        <td><?php echo $event['Event']['e_contact_person']; ?></td>
    </tr>
    <tr>
        <th>Contact phone</th>
        <td><?php echo $event['Event']['e_contact_phone']; ?></td>
    </tr>
    <tr>
        <th>Delivery notes</th>
        <td><?php echo $event['Event']['e_delivery_notes']; ?></td>
    </tr>
    <tr>
        <th>Customer name</th>
        <td><?php echo $event['Event']['e_invoice_name']; ?></td>
    </tr>
    <tr>
        <th>Customer Invoice address</th>
        <td><?php echo $event['Event']['e_invoice_address']; ?></td>
    </tr>
</table>

<?php
$urlEdit = array('controller' => '/events/', 'action' => 'edit', $event['Event']['id']);
echo $this->Form->button('Edit', array('class' => 'btn btn-primary', 'onclick' => "location.href='" . $this->Html->url($urlEdit) . "'"));

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";

$urlDel = array('controller' => 'events', 'action' => 'delete', $event['Event']['id']);
echo $this->Form->button('Delete', array('class' => 'btn btn-danger', 'onclick' => "if(confirm('Are you sure you want to delete this event?'))location.href='" . $this->Html->url($urlDel) . "'"));
?>
<?php
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";

echo $this->Html->link(__('Back'), array('action' => 'index'), array('class' => 'btn'));
?>