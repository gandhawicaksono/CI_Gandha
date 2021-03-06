<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GANDHA WICAKSONO</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-primary text-dark mb-4">
      <a class="navbar-brand" href="#">GANDHA'S</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/Blog") ?>">Blog</a>
          </li>
        </ul>
      </div>
    </nav>

					<div class="container">
				  <div class="col-md-6">
				    <h1>Biodata Saya dari array</h1>
				    <table class="table">
				     
				      <tbody>
				        <?php foreach ($biodata_array as $key) { ?>
				        <tr>
				          <td><?php echo $key['nama'] ?></td>
				        </tr>
				        <tr>
				          <td><?php echo $key['nim'] ?></td>
				        </tr>
				        <tr>
				          <td><?php echo $key['alamat'] ?></td>
				        </tr>
				        <?php } ?>
				      </tbody>
				    </table>
				</div>
				<div class="col-md-6">
				    <h1>Biodata Saya dari object</h1>
				    <table class="table">
				     
				      <tbody>
				        <?php foreach ($biodata_object as $key) { ?>
				        <tr>
				          <td><?php echo $key->nama ?></td>
				        </tr>
				        <tr>
				          <td><?php echo $key->nim ?></td>
				        </tr>
				        <tr>
				          <td><?php echo $key->alamat ?></td>
				        </tr>
				        <?php } ?>
				      </tbody>
				    </table>
				</div>
			<div class="col-md-6">
			    <h1>Biodata Saya dari Builder array</h1>
			    <table class="table">
			     
			      <tbody>
			        <?php foreach ($biodata_builder_array as $key) { ?>
			        <tr>
			          <td><?php echo $key['nama'] ?></td>
			        </tr>
			        <tr>
			          <td><?php echo $key['nim'] ?></td>
			        </tr>
			        <tr>
			          <td><?php echo $key['alamat'] ?></td>
			        </tr>
			        <?php } ?>
			      </tbody>
			    </table>
			</div>
			<div class="col-md-6">
			    <h1>Biodata Saya dari Builder object</h1>
			    <table class="table">
			     
			      <tbody>
			        <?php foreach ($biodata_builder_object as $key) { ?>
			        <tr>
			          <td><?php echo $key->nama ?></td>
			        </tr>
			        <tr>
			          <td><?php echo $key->nim ?></td>
			        </tr>
			        <tr>
			          <td><?php echo $key->alamat ?></td>
			        </tr>
			        <?php } ?>
			      </tbody>
			    </table>
			</div>
			</div>
			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->			
		</body>
	</html>