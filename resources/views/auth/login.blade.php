@extends('layouts.authLayout')

@section('content')
<div class="animate form login_form">
          
          
          <section class="login_content">
            <form method="post" action="{{route('login')}}">
              <h1>Login Form</h1>
              
               @if ($errors->login->has('email'))
	               <div>
					 <span class="text text-danger pull-left"> {{ $errors->login->first('email')}} </span>
					</div>
               @endif
              <div>
                <input type="email" class="form-control" name="email" placeholder="Email" />
              </div>
             
              
              @if ($errors->login->has('password'))
	               <div>
					 <span class="text text-danger pull-left"> {{ $errors->login->first('password')}} </span>
					</div>
               @endif
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" />
              </div>
              
              <div style="margin-bottom: 20px;">
                <input class="pull-left" type="checkbox" name="remember_me" checked="true"/>
                <label class="pull-left" style="margin-left: 5px;">remember me</label>
              </div>
              <br/>
              
              @if ($errors->login->has('invalid_email_password'))
	               <div class="alert alert-danger">
					 <strong>{{ $errors->login->first('invalid_email_password')}}</strong>
					</div>
               @endif
              
              <div >
                <button class="btn btn-default submit">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              
              {{csrf_field()}}

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="{{route('register')}}" class="to_register"> Create Account </a>
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
@endsection