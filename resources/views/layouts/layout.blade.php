<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lightslider.css"/>
    <script src="jquery.js"></script>
    <script src="lightslider.js"></script>


    <link rel="shortcut icon" href="./images/logo/1.png">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
 

</head>
<body>
    <nav>
        <div class="navigation">
            <a href="#" class="logo">
                <img src="./images/logo/1.png" alt="">
            </a>

            <div class="toggle">

            </div>



            <ul class="menu">
                <li><a href="/home">Home</a></li>
                <li><a href="#">Poster</a>
                    <span class="sale-lable">Sale</span>

                </li>

                <li><a href="#">Sticker</a></li>
                <li><a href="#">Jacket</a></li>
                <li><a href="#">Tshirt</a>
                    <span class="sale-lable">Sale</span>
                </li>
                <li><a href="/shop">Shop</a></li>
            </ul>

            <div class="right-menu">
                <a href="javascript:void(0);" class="search">
                    <i class='bx bx-search'></i>
                </a>
                <a href="javascript:void(0);" class="user">
                    <i class='bx bxs-user'></i>
                </a>
                <a href="#">
                    <i class='bx bxs-cart' >
                    <span class="num-cart">0</span>
                </i>
                </a>
            </div>
        </div>
    </nav>

    <div class="search-bar">
        <div class="search-input">
            <input type="text" placeholder="Search For Merch..."/>
            <a href="javascript:void(0);" class="search-cancel">
                <i class='bx bxs-x-circle'></i>
            </a>
        </div>
    </div>

            <div class="form">
                
                {{--REGISTER PAGE--}}
                @guest
                <div class="signup-form">

                    <a href="javascript:void(0);" class="form-cancel">
                        <i class='bx bx-x'></i>
                    </a>

                    @if (Route::has('register'))
                    <strong>Sign Up</strong>
                    <img src="./images/logo/1.png" alt="">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <label>Name</label>
                        <input id="name" type="text" placeholder="name" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                

                          <label>Email</label>
                          <input id="email" type="email" placeholder="email"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                          
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        <label>Password</label>            
                        <input id="password" type="password" placeholder="password"  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        <label>Confirm Password</label>
                        <input id="password-confirm" type="password" placeholder="confirm password"  name="password_confirmation" required autocomplete="new-password">      

                        <button type="submit">
                                    {{ __('Register') }}
                                </button>
                    </form>
                    
                    <div class="form-btn">
                        <a href="javascript:void(0);" class="already-acc">Already Have Account?</a>
                   
                    </div> 
                    @endif 
                </div>




                {{--LOGIN PAGE--}}
                <div class="login-form">

                    <a href="javascript:void(0);" class="form-cancel">
                        <i class='bx bx-x'></i>
                    </a>
                    
                    <strong>Log In</strong>
                    <img src="./images/logo/1.png" alt="">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <label>Email</label>
                        <input id="email" type="email"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        <label>Password</label>
                        <input id="password" type="password"  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                       <button type="submit">
                                    {{ __('Login') }}
                                </button>
                    </form>

                    <div class="form-btn">
                        @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        <a href="javascript:void(0);" class="sign-up">Create Account</a>
                    </div>  
                </div>



        
            </div>

        {{--USER LOGIN--}}
            
        <div class="login-form">
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </div>


            @yield('header-feature')

          
    @yield('content')
    <footer>
        <span class="copyright">
            Copyright 2021
        </span>
        
        <div class="subscribe">
            <form>
                <input type="email" placeholder="Example@gmail.com" required/>
                <input type="submit" value="Subscribe">
            </form>
        </div>
        </footer>

 <script type="text/javascript">
    $(document).on('click','.search',function(){
        $('.search-bar').addClass('search-bar-active')
    });

    $(document).on('click','.search-cancel',function(){
        $('.search-bar').removeClass('search-bar-active')
    });

    $(document).on('click','.user,.already-acc',function(){
        $('.form').addClass('login-active').removeClass('signup-active')
    });

    $(document).on('click','.sign-up',function(){
        $('.form').addClass('signup-active').removeClass('login-active')
    });

    $(document).on('click','.form-cancel',function(){
        $('.form').removeClass('login-active').removeClass('signup-active')
    });
    

    $(document).ready(function(){
        $('#adaptive').lightSlider({
            adaptiveHeight:true,
            auto:true,
            item:1,
            slideMargin:0,
            loop:true

        });
    });


    $(document).ready(function(){
        $('#autoWidth').lightSlider({
            autoWidth:true,
            loop:true,
            onSliderLoad:function(){
                $('#.autoWidth').removeClass('cS-hidden');
            }
        });
    });

    $(window).scroll(function(){
        if($(document).scrollTop() > 50 ){
            $('.navigation').addClass('fix-nav');
        }
        else{
            $('.navigation').removeClass('fix-nav');
        }
    });

    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.toggle').toggleClass('active')
            $('.navigation').toggleClass('active')
        })
    })

    </script>
</body>
</html>