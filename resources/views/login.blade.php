


@extends('layouts.app')

@section('title', 'Login')

@section('content')
<!--Login start-->
<div class="container">
    <div class="c1">
       <div class="c11">
          <h1 class="mainhead">Library Login</h1>
          <p class="mainp">Just click the buttons below to toggle between SignIn & SignUp</p>
       </div>
       <div id="left"><h1 class="s1class"><span>SIGN</span><span class="su">IN</span>
       </h1></div>
       <div id="right"><h1 class="s2class"><span>SIGN</span><span class="su">UP</span></h1></div>
    </div>
    <div class="c2">
       <form class="signup">
          <h1 class="signup1">SIGN UP</h1>
          <br><br><br><br>
       <input name="username" type="text" placeholder="Username*" class="username"/>

       <input name="email" type="text" placeholder="Email*" class="username"/>

       <input name="password" type="password" placeholder="Password*" class="username"/>



          <button class="btn1">Sign Up</button>
       </form>
       <form class="signin">

          <h1 class="signup1">SIGN IN</h1>
          <br><br><br><br>
          <input name="username" type="text" placeholder="Username*" class="username"/>

       <input name="password" type="password" placeholder="Password*" class="username"/>

          <button class="btn1">Get Started</button>

          <br><br><br><br>

       </form>

    </div>
 </div>
  <!--Login end -->

@endsection
