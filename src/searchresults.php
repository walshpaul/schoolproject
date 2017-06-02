<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MotorCycle Fault Data Store</title>

    <meta name="description" content="Web Site to Display Common Faults ">
    <meta name="author" content="PW enabled by bootstrap">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="\index.php">MCFDS</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Upload</a>
						</li>						
						<li>
							<a href="#">About</a>
						</li>
						<li>
							<a href="#">Contact</a>
						</li>
							<li class="divider">
						</li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input class="form-control" type="text">
						</div> 
						<button type="submit" class="btn btn-default">
							Search
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Login</a>
						</li>
						<li>
							<a href="#">Register</a>
						</li>
					</ul>
				</div>
				
			</nav>
			
			<img alt="MCFDS Logo" src="\images\Logo.jpg" >
			<h2 class="text-center">
				Search Results ....
			</h2>
			<table class="table table-striped table-hover table-condensed">
				<thead>
					<tr>
						<th>
							Make
						</th>
						<th>
							Model
						</th>
						<th>
							Fault Type
						</th>
						<th>
							Detailed Description
						</th>
						<th>
							Image
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Default
						</td>
						<td>
							Default
						</td>
					</tr>
					<tr class="active">
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Approved
						</td>
						<td>
							Default
						</td>
					</tr>
					<tr class="success">
						<td>
							2
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							02/04/2012
						</td>
						<td>
							Declined
						</td>
						<td>
							Default
						</td>
					</tr>
					<tr class="warning">
						<td>
							3
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							03/04/2012
						</td>
						<td>
							Pending
						</td>
						<td>
							Default
						</td>
					</tr>
					<tr class="danger">
						<td>
							4
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							04/04/2012
						</td>
						<td>
							Call in to confirm
						</td>
						<td>
							Default
						</td>
					</tr>
				</tbody>
			</table> 
			<button type="button" class="btn btn-primary">
				Next
			</button> 
			<button type="button" class="btn btn-primary">
				Back
			</button>
			<div class="row">
					<div class="col-md-12">
							<h3>MCFDS</h3>
							<p><strong>Motorcycle Fault Data Store</strong><br>
							<strong>E-mail :</strong> mcfds@motorcyclefds.epizy.com</p>				
					</div>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>