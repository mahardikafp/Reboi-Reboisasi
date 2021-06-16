<style>
      form {border: 1px;}
      input[type=text], input[type=password] {
        width: 20%;
        padding: 15px 25px;
        margin: 10px 2;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
    </style>
    </head>
<body class="text-center mt-5">
    <br><br><br>
    <form class="form-login" method="post" action="<?= BASEURL; ?>/login2/setLogin">
        <h1 class="h3 mb-3 font-weight-normal">Please Log In</h1><br>
        <label for="username" class="sr-only">Username</label><br>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username" required ><br>
        <label for="password" class="sr-only">Password</label><br>
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
        <br>
        <button type="submit" class="btn btn-primary" name="login">Log in</button>
        <!-- <a href="register.php" class="btn btn-success">Register</a> -->
    </form>
</body>