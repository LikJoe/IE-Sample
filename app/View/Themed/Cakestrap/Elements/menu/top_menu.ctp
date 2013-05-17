<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"><?php echo $this->Html->link(__('Home'), array('controller' => 'Pages', 'action' => 'display'), array('class' => 'brand')); ?></span>
			</a>
			<div class="nav-collapse">
				<ul class="nav">
					<li>
                        <?php echo $this->Html->link(__('Event'), array('controller' => 'Events', 'action' => 'index'), array('class' => 'btn btn-link')); ?></li>
                                        <li>
                        <?php echo $this->Html->link(__('Item'), array('controller' => 'Items', 'action' => 'index'), array('class' => 'btn btn-link')); ?></li>
                                        <li>
                        <?php echo $this->Html->link(__('Recipe'), array('controller' => 'Recipes', 'action' => 'index'), array('class' => 'btn btn-link')); ?></li>
                                        <li>
                        <?php echo $this->Html->link(__('Inventory'), array('controller' => 'Inventory', 'action' => 'index'), array('class' => 'btn btn-link')); ?></li>
                                        <li>
                        <?php echo $this->Html->link(__('Schedule'), array('controller' => 'Schedules', 'action' => 'index'), array('class' => 'btn btn-link')); ?></li>
                        <form class="navbar-search pull-left">
                                            <input type="text" class="search-query" placeholder="Search">
                                        </form>
				</ul>
			</div>
		</div>
	</div>
</div>