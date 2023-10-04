<html>

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <?php 
            $session = session();
            $login = $session->getFlashdata('login');
            $username = $session->getFlashdata('username');
            $password = $session->getFlashdata('password');
        ?>
        <?php if($username){ ?>
            <p style="color:red"><?php echo $username ?></p>
        <?php } ?>
        <?php if($password){ ?>
            <p style="color:red"><?php echo $password?></p>
        <?php } ?>
        <?php if($password){ ?>
            <p style="color:red"><?php echo $password ?></p>
        <?php } ?>
        <?php if($login){ ?>
            <p style="color:red"><?php echo $login ?></p>
        <?php } ?>

    <form action="/auth/valid_login" method="post">
        <!-- Email input -->

  <div class="form-outline mb-4">
    <input type="text" class="form-control" name="username"/>
    <label class="form-label" >Username</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password"  class="form-control" name="password"/>
    <label class="form-label" >Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->

  <!-- Submit button -->
  <button type="submit" name="login" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
 
  </form>
    </body>
  

</html>

