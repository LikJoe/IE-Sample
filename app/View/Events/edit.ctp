<h2>Edit Event</h2>
<h4 style="color: red">* = Mandatory Field</h4>

<div class="form-horizontal" style="padding: 2em">
    <?php echo $this->Form->create('Event', array('novalidate' => true)); ?>

    <div class="control-group">
        <div class="controls">
            <?php echo $this->Form->input('id', array('id' => 'id', 'type' => 'hidden'));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputOrder">* Order Number: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_order_num', array('type' => 'number', 'id' => 'inputOrder', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputCat">* Category: </label>
        <div class="controls">
            <?php echo $this->Form->input('event_category_id', array('type' => 'select', 'id' => 'inputCat', 'options' => array($event_categories), 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputSubCat">Sub Category: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_sub_category', array('type' => 'text', 'id' => 'inputSubCat', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputWeek">Week: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_week', array('type' => 'week', 'id' => 'inputWeek', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputDate">* Date: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_date', array('type' => 'date', 'dateFormat' => 'DMY', 'id' => 'inputDate', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputMale">* Num of Male Guest: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_num_males_attend', array('type' => 'number', 'id' => 'inputMale', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputFemale">* Num of Female Guest: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_num_females_attend', array('type' => 'number', 'id' => 'inputFemale', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputTAWHS">Arrive Warehouse: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_time_arrive_WH_start', array('type' => 'time', 'id' => 'inputTAWHS', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputTDWHS">Depart Warehouse: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_time_depart_WH_start', array('type' => 'time', 'id' => 'inputTDWHS', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputTAV">Arrive Venue: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_time_arrive_venue', array('type' => 'time', 'id' => 'inputTAV', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputTDV">Depart Venue: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_time_depart_venue', array('type' => 'time', 'id' => 'inputTDV', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputTSS">Start Event: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_time_start_service', array('type' => 'time', 'id' => 'inputTSS', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputTES">End Event: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_time_end_service', array('type' => 'time', 'id' => 'inputTES', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputTAWHE">Arrive Warehouse End: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_time_arrive_WH_end', array('type' => 'time', 'id' => 'inputTAWHE', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputTDWHE">Depart Warehouse End: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_time_depart_WH_end', array('type' => 'time', 'id' => 'inputTDWHE', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputPack">Package: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_drinks_package', array('type' => 'text', 'id' => 'inputPack', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputBar">Bar Facilities: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_bar_facilities', array('type' => 'text', 'id' => 'inputBar', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputNotes">Production Notes: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_production_notes', array('type' => 'textarea', 'id' => 'inputNotes', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputAdd">Address: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_address', array('type' => 'textarea', 'id' => 'inputAdd', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputCP">* Contact Person: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_contact_person', array('type' => 'text', 'id' => 'inputCP', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputCN">* Contact Number: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_contact_phone', array('type' => 'tel', 'id' => 'inputCN', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputDNotes">Delivery Notes: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_delivery_notes', array('type' => 'textarea', 'id' => 'inputDNotes', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputIN">Customer Name: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_invoice_name', array('type' => 'text', 'id' => 'inputIN', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="inputIADD">Customer Invoice Address: </label>
        <div class="controls">
            <?php echo $this->Form->input('e_invoice_address', array('type' => 'textarea', 'id' => 'inputIADD', 'label' => FALSE));
            ?>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <?php echo $this->Form->button('Save Changes', array('class' => 'btn btn-primary'));
            ?>
            <?php
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
            ?>
            <?php echo $this->Html->link(__('Back'), array('action' => 'index'), array('class' => 'btn')); ?>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>

</div>