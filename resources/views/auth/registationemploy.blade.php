<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('auth/style.css')}}">
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">


          <form
           action="{{route('loginemploy')}}"
          method="post" class="sign-in-form">


            @csrf
            <h2 class="title">Sign in</h2>
            @if(Session::has('msg'))
            <p class="invaild">{{ Session('msg') }}</p>
              @endif


            @csrf

            <div class="input-field">

              <i class="fas fa-user"></i>

              <input name="email" value="{{old('email')}}" type="text" placeholder="Email"  />

            </div>
            <span class="invaild">
                @error('email')
                {{$message}}

                @enderror
              </span>
            <div class="input-field">


              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Password" />

            </div>
            <span class="invaild">
                @error('password')
                {{$message}}

                @enderror
              </span>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

          <form action="{{route('addemploy')}}" method="post" class="sign-up-form">

            <h2 class="title">Sign up</h2>
            @if(Session::has('msg'))
            <p class="text txt-danger">{{ Session('msg') }}</p>
              @endif

            @csrf
            <div class="input-field">

              <i class="fas fa-user"></i>
              <input name="companyname" type="text" placeholder="Username" required/>
            </div>
            <span class="name">
                @error('password')
                {{$message}}

                @enderror
              </span>
            <div class="input-field">

              <i class="fas fa-envelope"></i>
              <input name="email" type="email" placeholder="Email" required />
            </div>
            <span class="invaild">
                @error('email')
                {{$message}}

                @enderror
              </span>
            <div class="input-field">

              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Password"  required/>
            </div>
            <span class="invaild">
                @error('password')
                {{$message}}

                @enderror
              </span>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>


          <img src="{{asset('auth/img/log.svg')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="{{asset('auth/img/register.svg')}}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('auth/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('auth/app.js')}}">
  </body>
</html>
