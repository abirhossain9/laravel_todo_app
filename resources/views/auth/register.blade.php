@extends('backend.template.authtemplate')

@section('body')

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>
         <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{ route('register') }}" method="POST">
            @csrf
        <div class="form-group">
        <label for="name">Enter Name</label>
        <input id="name" type="text"  name="name" class="form-control" placeholder="Enter your username" required autofocus>
        </div>

        <label for="email">Enter Email</label>
        <div class="form-group">
          <input id="email" type="email" class="form-control" name="email" placeholder="Enter your email" required>
        </div>

        <label for="password">Enter Password</label>
        <div class="form-group">
          <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Enter your password">
        </div>

         <label for="password_confirmation">Confirm Password</label>
        <div class="form-group">
          <input id="password_confirmation"  type="password" class="form-control" placeholder="Confirm your password" name="password_confirmation" required>
        </div>


        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>


        </form>



        <div class="mg-t-40 tx-center">Already a member? <a href="{{ route('login') }}" class="tx-info">Sign in</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

@endsection






