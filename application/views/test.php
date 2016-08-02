<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700,300,600,400" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" tyoe="text/css">
	</head>
	<body>
		<nav class="navbar navbar-default ">
		</nav>
		<div class="container">
			<div class="jumbotron">
				<?php echo form_open('tests/save', 'role="form"'); ?>
					<div id="datepicker" class="form-group">
						<label for="date" class="col-sm-3 control-label">Date</label>
						<div class="col-sm-9">
							<input  type="date" class="form-control" id="date" name="date" required>
						</div>
					</div>
					<button type="submit" class="btn btn-primary preview-add-button" style="margin-top: 2em; margin-left: 19.4em;"> Submit</button>
				<?php form_close(); ?>
			</div>
			<div class="jumbotron">
				<table class="table table-bordered">
					<thead>
						<td>Id</td>
						<td>Fecha</td>
						<td>Opcion</td>
					</thead>
					<tbody>	
						<?php foreach($date as $d): ?>	
							<tr>
							<td><?php echo $d->id; ?></td>
							<td><?php echo $d->date; ?></td>		
							<td>
								<a href="<?php echo base_url('index.php/tests/remove/'.$d->id); ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
								<a href="<?php echo base_url('index.php/tests/edit/'.$d->id); ?>" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
