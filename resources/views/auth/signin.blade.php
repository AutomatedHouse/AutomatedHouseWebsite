<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Signin </title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
      
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="{{route('signin')}}">
              <h1>Login Form</h1>
              <div>
                <input type="email" class="form-control" name="email" placeholder="Email" />
              </div>
             
              
              
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" />
              </div>
              
              <div>
                <input type="checkbox" name="remember_me" checked="true"/>
                <label>remember me</label>
              </div>
              <br/>
              
              <div>
                <button class="btn btn-default submit">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              
              {{csrf_field()}}

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i>GP Team</h1>
                  <p>©2016 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="{{route('signup')}}">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" name="f_name" placeholder="First Name" />
              </div>
              
              <div>
                <input type="text" class="form-control" name="l_name" placeholder="Last Name" />
              </div>
              
              <div>
                <input type="text" class="form-control" name="email" placeholder="Email" />
              </div>
              
               @if (isset($errors))
			    <div class="alert alert-danger">
			       <?php print_r($errors->all()) ?>
			   </div>
			@endif
              
          
              
              <div>
                <input type="password" class="form-control" name="password"  placeholder="Password" />
              </div>
              
              <div>
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" />
              </div>
              
              <div>
                <button class="btn btn-default submit">Submit</button>
              </div>

              {{csrf_field()}}
              
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i>GP team</h1>
                  <p>©2017 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>