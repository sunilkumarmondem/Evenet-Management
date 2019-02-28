<?php include_once('header.php'); ?>


<div class="row">
  <div class="col-lg-3">
  </div>
  <div class="col-lg-5">
    <br>
    <h1>Register Page:</h1>
<p>Fill in the details to register on our website!!</p>
<?php $msg=$this->session->flashdata('msg')?>
  <div class="col-md-12 well">
    <?php if($msg): ?>
      <div class="col-md-12  alert alert-info">
        <?php echo $msg ?>
      </div>
      <div>
       <?php echo anchor('auth/login','Login',['class'=>'btn btn-success smallbutton']); ?>
      </div>
    <?php endif ; ?>
  </div>
<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
<form action="" method="POST">
  <div class="form-group">
    <label for="username" class="label-default">UserName:</label>
    <input class="form-control" name="username" id="username" type="text">
  </div>

  <div class="form-group">
    <label for="email" class="label-default">Email:</label>
    <input class="form-control" name="email" id="email" type="email">
  </div>

  <div class="form-group">
    <label for="password" class="label-default">Password:</label>
    <input class="form-control" name="password" id="password" type="password">
  </div>

  <div class="form-group">
    <label for="password2" class="label-default">Confirm Password:</label>
    <input class="form-control" name="password2" id="password" type="password">
  </div>

  <div class="form-group">
    <label for="gender" class="label-default">Gender:</label>
    <select class="form-control" name="gender" id="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>

  <div class="form-group">
    <label for="phone" class="label-default">PhoneNumber:</label>
    <input class="form-control" name="phone" id="phone" type="text">
  </div>

  <div class="text-center">
    <button class="btn btn-success" name="register">Register</button>
  </div>
</form>
</div>

</div>



<?php include_once('footer.php'); ?>