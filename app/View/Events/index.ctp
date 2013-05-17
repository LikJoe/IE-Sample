<!-- File: /app/View/Events/index.ctp -->
<html>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
                <?php
                $urlAdd = array('controller' => '/events/', 'action' => 'add');
                echo $this->Form->button('New Event', array('class' => 'btn btn-primary', 'onclick' => "location.href='" . $this->Html->url($urlAdd) . "'"));
                ?>
            </div>

            <!-- Tabbable Tab-->
            <div class="span11 offset1 tabbable">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">Events</a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">Customer</a>
                    </li>
                    <li>
                        <a href="#tab3" data-toggle="tab">Drink Package</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <table class="table table-hover table-bordered">
                            <tr class="success">
                                <th>Order Number</th>
                                <th>Event Category</th>
                                <th>Customer ID</th>
                                <th>More Information</th>
                            </tr>

                            <?php
                            foreach ($events as $event) {
                                ?>
                                <tr>
                                    <td><?php echo $event['Event']['e_order_num']; ?></td>
                                    <td><?php echo $event['EventCategory']['event_category_name']; ?></td>
                                    <td><?php echo $event['Event']['c_id']; ?></td>
                                    <td>
                                        <?php echo $this->Html->link("Details", array("controller" => "events", "action" => "view", $event["Event"]["id"]), array('class' => 'btn')); ?>
                                        <?php
                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
                                        ?>
                                        <?php echo $this->Form->button("Create Pack Table", array('class' => 'btn btn-primary')); ?>

                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                        <!-- Others Tab Content-->
                    </div>
                    <div class="tab-pane" id="tab2">
                        <h1>Please show the customer information here.</h1>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <table class="table table-hover table-bordered">
                            <tr class="success">
                                <th>Package Name</th>
                                <th>More Information</th>
                            </tr>
                            <tr>
                                <td>Champagne</td>
                                <td><?php echo $this->Html->link('Details', array('controller' => 'events', 'action', 'view'), array('class' => 'btn')) ?></td>
                            </tr>
                            <tr>
                                <td>Cocktails</td>
                                <td><?php echo $this->Html->link('Details', array('controller' => 'events', 'action', 'view'), array('class' => 'btn')) ?></td>
                            </tr>


                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</html>