<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
    &nbsp
    </div>
    <div class="container">
      <div class="alert alert-success" <?php if(!$sucess) echo'style="display:none" '; ?> role="alert">
        You have registered sucessfully !
      </div>
      <div class="alert alert-danger"<?php if(!$failed) echo'style="display:none" '; ?> role="alert">
        Opps, something went wrong !
      </div>
      <form method="post" action="Users/submitRegistration">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">User Name</label>
          <div class="col-sm-10">
            <input type="text" name="user_name" placeholder="" required <?php echo 'class="form-control'; if($invalid['user_name']){echo'is-invalid';} echo'"';?> >
            <div class="invalid-feedback">
              Please provide a valid User Name.
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">First Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="first_name" placeholder="" required  <?php echo 'class="form-control'; if($invalid['first_name']){echo'is-invalid';} echo'"';?> >
            <div class="invalid-feedback">
              Please provide a valid First Name.
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Last Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="last_name" placeholder="" required  <?php echo 'class="form-control'; if($invalid['last_name']){echo'is-invalid';} echo'"';?>>
            <div class="invalid-feedback">
              Please provide a valid Last Name.
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="" required  <?php echo 'class="form-control'; if($invalid['password']){echo'is-invalid';} echo'"';?>>
            <div class="invalid-feedback">
              Please provide a valid Password.
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Confirm Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="confirm_password" placeholder="" required  <?php echo 'class="form-control'; if($invalid['confirm_password']){echo'is-invalid';} echo'"';?> >
            <div class="invalid-feedback">
              Password miss matched.
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="" required  <?php echo 'class="form-control'; if($invalid['email']){echo'is-invalid';} echo'"';?> >
            <div class="invalid-feedback">
              Please provide a valid Email.
            </div>
          </div>
        </div>
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-legend col-sm-2">Gender</legend>
            <div class="col-sm-10">
              <div class="form-check form-check-inline"">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gender" value="male">
                  Male
                </label>
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gender" value="feamale">
                  Female
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        <div class="form-group row">
          <div class="col-sm-3">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="agreed" required> I accept Terms and Conditions
              </label>
            </div>
          </div>
          <div class="col-sm-9">
            <button type="submit" class="btn btn-primary"> Register </button>
          </div>
        </div>
      </form>            
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>