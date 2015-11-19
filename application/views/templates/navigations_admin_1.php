<nav class="navbar navbar-inverse" role="navigation">
<div class="container">
	<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Menus</a>
	</div>
	
	<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="<?php echo base_url().'index.php/home/index' ?>">Home</a></li>
			<li><a href="">Users</a></li>
			<li><a href="">Accounts</a></li>		
		  	<li><a href="<?php echo base_url().'index.php/location/locationsList';?>">Location</a></li>
		  	<li><a href="<?php echo base_url().'index.php/sale/addSale_1'; ?>">Add Sale</a></li>
		  	<li><a href="<?php echo base_url().'index.php/commission/addcommission_1'; ?>">Add Commission</a></li>
		  	<li><a href="<?php echo base_url().'index.php/expense/addexpense_1'; ?>">Add Expenses</a></li>
		  	<li><a href="<?php echo base_url().'index.php/deposit/adddeposit_1'; ?>">Add Deposit</a></li>
		  	<li><a href="<?php echo base_url().'index.php/report/index'; ?>">Reports</a></li>
		  	<li><a href="<?php echo base_url().'index.php/sale/translog'; ?>">Trans Log</a></li>
		</ul>
	</div>	
</div>
</nav>