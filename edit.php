<?php include('dbconnection.php');?>
<DOCTYPE html>
<head>
<meta charset=utf-8>
<title></title>
<link   href="css/bootstrap.min.css" rel="stylesheet">
<style>
</style>
</head>
<body>
<div class="container" style="margin:100px;">
<div class="col-sm-4">
<form method="post" action="update.php">
<input type="hidden" class="form-control" name="nid" value="<?php echo $_REQUEST['ids']?>">
<div class="form-group">
<label for="firstname"></label>
<input type="text" class="form-control" name="nfirstname" value="<?php echo $_REQUEST['firstnames']?>">
</div>
<div class="form-group">
<label for="firstname"></label>
<input type="text" class="form-control" name="nlastname" value="<?php echo$_REQUEST['lastnames']?>">
</div>
<div class="form-group">
<label for="firstname"></label>
<input type="text" class="form-control" name="nemail" value="<?php echo$_REQUEST['emails']?>">
</div>
<div class="form-group">
<label for="firstname"></label>
<input type="text" class="form-control" name="nphone" value="<?php echo$_REQUEST['phones']?>">
</div>
<div class="form-group">
<label for="firstname"></label>
<input type="text" class="form-control" name="naddress" value="<?php echo $_REQUEST['addresss']?>">
</div>

<input type="submit" class="btn btn-success" name="update" value="Update">
</form>

</div>


</div>
</body>
</html>