<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('panel/style.css') }}" rel="stylesheet">  
       
        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
   
    <body class="antialiased">
    
        <div class="global-container">
        
            <div class="card login-form">
            
                <div class="card-body">
                
                    <h5 class="card-title text-center">LOGIN - LARAVEL(VueJS)</h5>
                    <div class="card-text">
                    
                        <!--
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                        <form action="{{ url('login') }}" method="post">
                        
                            {{ @csrf_field() }}
                            <!-- to error: add class "has-danger" -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email </label>
                                <input type="email" name="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <!-- <a href="#" style="float:right;font-size:12px;">Forgot password?</a> -->
                                <input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            
                            <div class="sign-up">
                                Develop By : Fazil
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('sweetalert::alert')
    </body>
</html>
