<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700,300,600,400" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
    <body>
      <nav class="navbar navbar-default ">
      </nav>
      <div class="container">
	<div class="jumbotron">
	  <?php echo form_open('tests/update', 'role="form"'); ?>
	    <div id="datepicker" class="form-group">
	      <label for="date" class="col-sm-3 control-label">Date</label>
	      <div class="col-sm-9">
	      <input  type="date" class="form-control" id="date" name="date" value="<? echo $date; ?>" required>
	      <input type="hidden" name="id" value="<?php echo $id; ?>">
	      </div>
	    </div>
	    <button type="submit" class="btn btn-primary preview-add-button" style="margin-top: 2em; margin-left: 19.4em;"> Submit</button>
	  <?php form_close(); ?>
      </div>
      </div>
    </body>
</html>
