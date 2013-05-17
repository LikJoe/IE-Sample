<!-- File: /app/View/Events/index.ctp -->
<html>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
                <?php
                //$urlAdd = array('controller' => '/events/', 'action' => 'add');
                echo $this->Form->button('New Recipe', array('class' => 'btn btn-primary'));
                ?>
            </div>
            <!-- Tabbable Tab-->
            <div class="span11 offset1 tabbable">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">Recipe</a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">Ingredient</a>
                    </li>
                    <li>
                        <a href="#tab3" data-toggle="tab">Method</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <table class="table table-hover table-bordered">
                            <tr class="success">
                                <th>Recipe Name</th>
                                <th>More Information</th>
                            </tr>

                            <tr>
                                <td>Lime Juice</td>
                                <td>
                                    <?php echo $this->Form->button("Details", array('class' => 'btn')); ?>
                                    <?php
                                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
                                    ?>
                                    <?php echo $this->Form->button("Create Pack Table", array('class' => 'btn btn-primary')); ?>

                                </td>
                            </tr>
                        </table>
                        <!-- Others Tab Content-->
                    </div>
                    <div class="tab-pane" id="tab2">
                        <h2>In Progress</h2>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <h2>In Progress</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
</html>