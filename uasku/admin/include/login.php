<body class="hold-transition login-page" style ="margin-bottom: 0px;
    padding: 0px;
    background: url(img/bg4.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
    height: 75vh;
">
<div class="login-box">
  <div class="login-logo">
  
  <b style="color:black;">WELCOME to</b>
  <div class="logo-mobile">
				<a>	<img src="images/icons/mynews1.png" style="width:250px;height:40px;" alt="IMG-LOGO"></a>
				</div>
 
    
  </div>
  <!-- /.login-logo -->


      <p class="login-box-msg">Sign in to start your session</p>
      <?php if(!empty($_GET['gagal'])){?>
      <?php if($_GET['gagal']=="userKosong"){?>
          <span class="text-danger">
           Maaf Username Tidak Boleh Kosong
          </span>
        <?php } else if($_GET['gagal']=="passKosong"){?>
          <span class="text-danger">
          Maaf Password Tidak Boleh Kosong
         </span>
        <?php } else {?>
          <span class="text-danger">
          Maaf Username dan Password Anda Salah
        </span>
        <?php }?>
<?php }?>
      <form action="index.php?include=konfirmasi-login" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
            <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/dqxvvqzi.json"
    trigger="hover"
    style="width:20px;height:20px">
</lord-icon>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
            <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/dykrlspk.json"
    trigger="hover"
    style="width:20px;height:20px">
</lord-icon>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
          <div class="card-tools">
                  <a href="register.php" class="btn btn-sm btn-info float-right"><i class="fas fa-">
                  </i> register </a>
                </div>
             
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit"  name="login" value="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
     
               
                </div>
                </div>
          <!-- /.col -->
      
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<!-- /.login-box -->

<?php include("includes/script.php") ?>

</body>