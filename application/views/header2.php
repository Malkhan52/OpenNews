					<form class="navbar-form navbar-left">
						<div class="form-group">
							<?php
    echo form_open('search/execute_search');

    echo form_input(array('name'=>'search'));

    echo form_submit('','Submit');


?>
							<!--<input type="text" class="form-control" placeholder="Search here">-->
						</div>
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
								</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><?php echo anchor('copennews/registration','Register');?></li>
						<li><?php echo anchor('copennews/login','Login');?></li>
					</ul>
				</div>
				</div>
			</nav>