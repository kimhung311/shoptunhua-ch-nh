<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="icon" href="{{ asset('shop/img/core-img/favicon.ico') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <style>
            body{
            margin:0;
            color:#6a6f8c;
            background-image: url('https://3.bp.blogspot.com/-RfrtBCqOYNQ/WjpTfxsju2I/AAAAAAAAtUw/uitlBiCcG9A8--RFWcI9X0FalfRLyoUaQCLcBGAs/s1600/hinh-nen-cuc-dep-cho-may-tinh.jpg');
            background-size: 100%;
            background-attachment: fixed; 
            font:600 16px/18px 'Open Sans',sans-serif;
            }
            *,:after,:before{box-sizing:border-box}
            .clearfix:after,.clearfix:before{content:'';display:table}
            .clearfix:after{clear:both;display:block}
            a{color:inherit;text-decoration:none}

            .login-wrap{
                width:100%;
                margin:auto;
                max-width:525px;
                min-height:670px;
                position:relative;
                background:url(http://3.bp.blogspot.com/-IzYETuZ48C8/T7MQmHucwCI/AAAAAAAABEQ/jBTkIk7ObKY/s1600/hinh-nen-dep-31.jpg) no-repeat center;
                box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
            }
            .login-html{
                width:100%;
                height:100%;
                position:absolute;
                padding:90px 70px 50px 70px;
                background:rgba(40,57,101,.9);
            }
            .login-html .sign-in-htm,
            .login-html .sign-up-htm{
                top:0;
                left:0;
                right:0;
                bottom:0;
                position:absolute;
                transform:rotateY(180deg);
                backface-visibility:hidden;
                transition:all .4s linear;
            }
            .login-html .sign-in,
            .login-html .sign-up,
            .login-form .group .check{
                display:none;
            }
            .login-html .tab,
            .login-form .group .label,
            .login-form .group .button{
                text-transform:uppercase;
            }
            .login-html .tab{
                font-size:22px;
                margin-right:15px;
                padding-bottom:5px;
                margin:0 15px 10px 0;
                display:inline-block;
                border-bottom:2px solid transparent;
            }
            .login-html .sign-in:checked + .tab,
            .login-html .sign-up:checked + .tab{
                color:#fff;
                border-color:#1161ee;
            }
            .login-form{
                min-height:345px;
                position:relative;
                perspective:1000px;
                transform-style:preserve-3d;
            }
            .login-form .group{
                margin-bottom:15px;
            }
            .login-form .group .label,
            .login-form .group .input,
            .login-form .group .button{
                width:100%;
                color:#fff;
                display:block;
            }
            .login-form .group .input,
            .login-form .group .button{
                border:none;
                padding:15px 20px;
                border-radius:25px;
                background:rgba(255,255,255,.1);
            }
            .login-form .group input[data-type="password"]{
                text-security:circle;
                -webkit-text-security:circle;
            }
            .login-form .group .label{
                color:#aaa;
                font-size:12px;
            }
            .login-form .group .button{
                background:#1161ee;
            }
            .login-form .group label .icon{
                width:15px;
                height:15px;
                border-radius:2px;
                position:relative;
                display:inline-block;
                background:rgba(255,255,255,.1);
            }
            .login-form .group label .icon:before,
            .login-form .group label .icon:after{
                content:'';
                width:10px;
                height:2px;
                background:#fff;
                position:absolute;
                transition:all .2s ease-in-out 0s;
            }
            .login-form .group label .icon:before{
                left:3px;
                width:5px;
                bottom:6px;
                transform:scale(0) rotate(0);
            }
            .login-form .group label .icon:after{
                top:6px;
                right:0;
                transform:scale(0) rotate(0);
            }
            .login-form .group .check:checked + label{
                color:#fff;
            }
            .login-form .group .check:checked + label .icon{
                background:#1161ee;
            }
            .login-form .group .check:checked + label .icon:before{
                transform:scale(1) rotate(45deg);
            }
            .login-form .group .check:checked + label .icon:after{
                transform:scale(1) rotate(-45deg);
            }
            .login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
                transform:rotate(0);
            }
            .login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
                transform:rotate(0);
            }

            .hr{
                height:2px;
                margin:60px 0 50px 0;
                background:rgba(255,255,255,.2);
            }
            .foot-lnk{
                text-align:center;
            }
          
    </style>
</head>
<body >
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            {{-- @if(\Session::get('success'))
            @endif --}}
            @if(\Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ \Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            @endif
           
            {{ \Session::forget('success') }}
            @if(\Session::get('error'))
            
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ \Session::get('error') }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
         
            @endif    
            <div class="login-form">
                
                <form action="{{ route('admin.login.handle') }}" method="post">
                    {!! csrf_field() !!}
                  

                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="email" class="label">Email</label>
                            <input id="user" type="text" name="email" class="input" required="required">
                            <br>
                            @if ($errors->has('email'))
               
                            <span class="help-block font-red-mint">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" name="password" class="input" data-type="password" required="required">
                            @if ($errors->has('password'))
               
                            <span class="help-block font-red-mint">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div>
                   
                         <div class="group">
                            <input type="submit" class="button" value="Sign Up">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <div class="container">

        {{ route('admin.login.handle') }}
    <div class="login-form">
        <form action="" method="post">
            {!! csrf_field() !!}
            <h2 class="text-center">LOG IN NOW</h2>
            @if(\Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ \Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            @endif
            {{ \Session::forget('success') }}
            @if(\Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ \Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            @endif       
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                @if ($errors->has('email'))
                <span class="help-block font-red-mint">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                @if ($errors->has('password'))
               
                <span class="help-block font-red-mint">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            {{-- <span><input type="checkbox" />Remember Me</span> --}}
                {{-- <h6><a href="#">Forgot Password?</a></h6> --}}
            {{-- <div class="form-group">
                <button type="submit" class="btn btn-dark">Log in</button>
            </div>       --}}
            {{-- <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p> --}}
    
        </form>
       
    </div>
    </div> 
</body>
</html>