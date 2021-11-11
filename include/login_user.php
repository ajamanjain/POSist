<div class="container">
 <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
     <div class="card border-0 shadow rounded-3 my-5" style="border-radius: 2.25rem;">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Student Login </h5>
            <form>
              <div class="form-floating mb-3">
                <label for="floatingInput">Email address</label>
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                
              </div>
              <label for="floatingPassword">Password</label>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label> &nbsp;&nbsp; &nbsp;&nbsp; 
                 <a href="forgot_password"> Forgot password ? </a>
              </div>
              <div class="d-grid" style="text-align: center;">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" style="width: 50%;">Login
                  </button>
              </div>
              <hr class="my-4">
              <center><a href="signup.php" style="color:black;"> Or Sign Up </a></center>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style type="text/css">
  body
  {
     background-color: #85FFBD;
background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);

      min-height: 320px;
      height: auto;
  }

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

.btn-google {
  color: white !important;
  background-color: #ea4335;
}

.btn-facebook {
  color: white !important;
  background-color: #3b5998;
}

</style>




