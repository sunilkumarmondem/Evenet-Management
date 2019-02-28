<?php include_once('header.php'); ?>


<div class="row">
  <div class="col-lg-3">
  </div>
  <div class="col-lg-4">
    <br>
    <h1>Login Page:</h1>
    <p>Fill in the details to login on our website!!</p>

<?php $msg=$this->session->flashdata('msg')?>
  <div class="col-md-12 well">
    <?php if($msg): ?>
      <div class="col-md-12  alert alert-info">
        <?php echo $msg ?>
      </div>
      
    <?php endif ; ?>
  </div>
<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
<form action="" method="POST">
 

  <div class="form-group">
    <label for="username" class="label-default">Username:</label>
    <input class="form-control" name="username" id="username" type="text">
  </div>

  <div class="form-group">
    <label for="password" class="label-default">Password:</label>
    <input class="form-control" name="password" id="password" type="password">
  </div>
  <br>

   <div class="text-center">
    <button class="btn btn-success" name="login">Login</button>
  </div>
</form>
</div>

</div>



<?php include_once('footer.php'); ?>