<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
    <link rel ="stylesheet" href="css/style.css"> 
</head>
<body>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
      <img src ="img/login.jpg">
        <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image"> -->
        
</div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success')}}
</div>
@endif
         
            <h2 class="mb-5 fs-1" align="center">Register</h2>
       
            <form action = "{{ route('register') }}" method="POST">
                @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example33">Your Name</label>
            <input type="name" id="form1Example33" name="name" class="form-control form-control-lg" />
            @error('name')
            {{ $message }}
            @enderror
            
          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Email address</label>
            <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" />
            @error('email')
            {{ $message }}
            @enderror
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example23">Password</label>
            <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" />
            @error('email')
            {{ $message }}
            @enderror
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
         
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
          <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login"
                    class="fw-bold text-body"><u>Login </u></a></p>

          </form>
      </div>
    </div>
  </div>
</section>

</body>
</html> 