<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp: GoWell</title>
    <link rel="stylesheet" href="css/signup.css">
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' 
    rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <script src="js/signup.js"></script>
    <div class="SignUp-page">
        <div class="form">
          <div class="close-btn">
            <a href="/login">&#10006;</a>
          </div>
            <div class="GoWell">
                <span style="color: #1F4F70;">Sign</span><span style="color: #57B9D4;">Up</span>
            </div>
          <form class="SignUp-form" action="/register" method="post" >
            @csrf
            <input type="text" name="fullname" placeholder="Full Name" id="name"/>
            <input type="text" name="username" placeholder="Username" id="user"/>
            <input type="text" name="email"placeholder="Email" id="email"/>
            <input type="password" name="password" placeholder="Password" id="pass"/>
            <input type="password" placeholder="Confirm Password" id="repass"/>
            <button type="submit" onclick="validate()">Sign Up</button>
          </form>
        </div>
      </div>
</body>
</html>