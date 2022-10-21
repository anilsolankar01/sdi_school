<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login:staff</title>


  <style>
                .login-page {
                width: 360px;
                padding: 8% 0 0;
                margin: 4% 1%;
                }
                .form {
                position: relative;
                z-index: 1;
                background: #FFFFFF;
                max-width: 360px;
                margin: 0 auto 100px;
                padding: 45px;
                text-align: center;
                box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
                }
                .form input {
                font-family: "Roboto", sans-serif;
                outline: 0;
                background: #f2f2f2;
                width: 100%;
                border: 0;
                margin: 0 0 15px;
                padding: 15px;
                box-sizing: border-box;
                font-size: 14px;
                }
                .form button {
                font-family: "Roboto", sans-serif;
                text-transform: uppercase;
                outline: 0;
                background: #4CAF50;
                width: 100%;
                border: 0;
                padding: 15px;
                color: #FFFFFF;
                font-size: 14px;
                -webkit-transition: all 0.3 ease;
                transition: all 0.3 ease;
                cursor: pointer;
                }
                .form button:hover,.form button:active,.form button:focus {
                background: #43A047;
                }
                .form .message {
                margin: 15px 0px ;
                color: #0d0101fe;
                font-size: 15px;
                text-align: left;
                }
                .form .message a {
                color: #4CAF50;
                text-decoration: none;
                }
                .form .register-form {
                
                }
                .container {
                position: relative;
                z-index: 1;
                max-width: 300px;
                margin: 0 auto;
                }
                .container:before, .container:after {
                content: "";
                display: block;
                clear: both;
                }
                .container .info {
                margin: 50px auto;
                text-align: center;
                }
                .container .info h1 {
                margin: 0 0 15px;
                padding: 0;
                font-size: 36px;
                font-weight: 300;
                color: #1a1a1a;
                }
                .container .info span {
                color: #4d4d4d;
                font-size: 12px;
                }
                .container .info span a {
                color: #000000;
                text-decoration: none;
                }
                .container .info span .fa {
                color: #EF3B3A;
                }
                body {
                background: #76b852; /* fallback for old browsers */
                background: -webkit-linear-gradient(right, #76b852, #8DC26F);
                background: -moz-linear-gradient(right, #76b852, #8DC26F);
                background: -o-linear-gradient(right, #76b852, #8DC26F);
                background: linear-gradient(to left, #76b852, #8DC26F);
                font-family: "Roboto", sans-serif;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;   
                background-image: url(img/bg_sc.jpg);
                background-size: cover;   
                }

                .topnav {
                overflow: hidden;
                background-color: #333;
                }

                .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
                }

                .topnav a:hover {
                background-color: #ddd;
                color: black;
                }

                .topnav a.active {
                background-color: #04AA6D;
                color: white;
                }
                
                *{
                    margin: 0px;
                }

  </style>

</head>
<body>
    <div class="topnav">
        <a  href="index.html">Home</a>
        <a href="#news">Notice</a>
        <a href="#contact">Guide</a>
        <div class="topnav-right " style="float: right">
          <a class="active" href="staff_login.php">Staff login</a>
          <a href="login.php">Incharge login</a>
          <a href="smc_login/index.php">SMC login</a>
          <a href="complaint/index.html">Complaint</a>
        </div>
      </div>

<!-- partial:index.partial.html -->
<div class="login-page">
    
    <div class="form">
        <form class="register-form" method="POST" action="staff_login_test.php">
          <p class="message">Welcome , staff login </p>
          <input type="text" name="user_name" placeholder="username"/>
          <input type="password" name="password" placeholder="password"/>
          <button>login</button>  
        </form>
       
      </div>


</div>
<!-- partial -->

</body>
</html>
