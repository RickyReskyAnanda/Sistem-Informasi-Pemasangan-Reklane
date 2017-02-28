<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?=base_url()?>monarch/css/login.css">
</head>
<body>
    <div id="wrapper">
        <div class="login-page">
          <div class="form">
          <center>Admin Pelayanan Reklame  <br><b>Silahkan Login</b></center>
            <hr>
            <form method="post" action="<?=base_url('admin/login/proses')?>" class="login-form">
              <input type="email" name="email" placeholder="Email"/>
              <input type="password" name="kuncinya" placeholder="password"/>
              <button>login</button>
            </form>
            <?php if($this->session->flashdata('a_pesan')!=''){ ?>
            <p><?=$this->session->flashdata('a_pesan');?></p>
            <?php } ?>
          </div>
        </div>
    </div>
</body>
</html>
