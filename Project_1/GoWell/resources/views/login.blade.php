<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login: GoWell</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' 
    rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <script src="js/login.js"></script>
    <div class="login-page">
        <div class="form">
          <div class="close-btn">
            <a href="index.html">&#10006;</a>
          </div>
            <div class="GoWell">
                <span style="color: #1F4F70;">Go</span><span style="color: #57B9D4;">Well</span>
            </div>
          <form class="login-form">
            <input type="text" placeholder="username" id="name"/>
            <input type="password" placeholder="password" id="pass"/>
            <button type="button" onclick="validate()">login</button>
            <p class="message">Not registered? <a href="/register">Create an account</a></p>
          </form>
        </div>
      </div>
    
</body>
</html>