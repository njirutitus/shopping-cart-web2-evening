<?php
  require_once './includes/header.php';
?>

    <div class="container">
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Email address</label
          >
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
          />
        </div>

        <div class="row">
          <div class="col-6">
            <div class="mb-3">
              <label for="name" class="form-label">First Name</label>
              <input type="text" class="form-control" id="name" />
            </div>
          </div>
          <div class="col-6">
            <div class="mb-3">
              <label for="name" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="name" />
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
          />
        </div>
        <div class="mb-3">
          <label for="confirmpassword" class="form-label"
            >Confirm Password</label
          >
          <input type="password" class="form-control" id="confirmpassword" />
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" />
          <label class="form-check-label" for="exampleCheck1"
            >I agree to terms and conditions</label
          >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <?php 
  require_once './includes/footer.php';
?>
