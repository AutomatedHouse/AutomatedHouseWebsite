@extends('layouts.authLayout')

@section('content')
<div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="{{route('register')}}">
              <h1>Create Account</h1>
              
      
               @if ($errors->register->has('f_name'))
	               <div>
					 <span class="text text-danger pull-left"> {{ $errors->register->first('f_name')}} </span>
					</div>
               @endif
              <div>
                <input type="text" class="form-control" name="f_name" placeholder="First Name" />
              </div>
              
              
              
               @if ($errors->register->has('l_name'))
	               <div>
					 <span class="text text-danger pull-left"> {{ $errors->register->first('l_name')}} </span>
					</div>
               @endif
              <div>
                <input type="text" class="form-control" name="l_name" placeholder="Last Name" />
              </div>
              
              
               @if ($errors->register->has('email'))
	               <div>
					 <span class="text text-danger pull-left"> {{ $errors->register->first('email')}} </span>
					</div>
               @endif
              <div>
                <input type="text" class="form-control" name="email" placeholder="Email" />
              </div>
              
              
              
               @if ($errors->register->has('password'))
	               <div>
					 <span class="text text-danger pull-left"> {{ $errors->register->first('password')}} </span>
					</div>
               @endif
              <div>
                <input type="password" class="form-control" name="password"  placeholder="Password" />
              </div>
              
              
              @if ($errors->register->has('confirm_password'))
	               <div>
					 <span class="text text-danger pull-left"> {{ $errors->register->first('confirm_password')}} </span>
					</div>
               @endif
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
                  <a href="{{route('login')}}" class="to_register"> Log in </a>
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
@endsection