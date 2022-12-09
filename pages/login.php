<?php
    
    $template = "depan";
    $judul    = "Login";
    
    if(isset($_POST['tombol'])) {
        $keterangan = login($_POST);
    }
    $konten = "
          <div class='login-box'>
              <h1>Login</h1>
              <form method='post' autocomplete='off'>
                <div class='textbox' for='name'>
                    <label for='name'><i class='fas fa-user'></i></label>
                    <input name='username' type='text' placeholder='Username' id='name' autofocus>
                </div>
                <div class='textbox'>
                    <label for='ps'><i class='fas fa-lock'></i></label>
                    <input name='password' type='password' placeholder='Password' id='ps'>
                </div>
                <button class='btn' name='tombol' type='submit'><strong>Login</strong></button>
              </form>
              <a href='?page=registrasi'><strong>Sign Up</strong></a>
          </div>
    ";
 
?>