<?php
    
    $template = "dasRegistrasi";
    $judul    = "sign up";
    
    if( isset($_POST['tombol']) ) {
        $keterangan = registrasi($_POST);
        unset($_POST);
    }


    $konten = "
          <div class='login-box'>
              <h1>Sign Up</h1>
              <form method='post' autocomplete='off'>
                <div class='textbox' for='nama'>
                    <label for='nama'><i class='fas fa-user'></i></label>
                    <input name='nama' type='text' placeholder='Nama' id='nama' autofocus>
                </div>
                <div class='textbox' for='nohp'>
                    <label for='nohp'><i class='fa-solid fa-phone'></i></label>
                    <input name='nohp' type='text' placeholder='Nomer Hp' id='nohp' autofocus>
                </div>
                <div class='textbox' for='name'>
                    <label for='username'><i class='fas fa-user'></i></label>
                    <input name='username' type='text' placeholder='Username' id='username' autofocus>
                </div>
                <div class='textbox'>
                    <label for='ps'><i class='fas fa-lock'></i></label>
                    <input name='password' type='password' placeholder='Password' id='ps'>
                </div>
                <div class='textbox'>
                    <label for='ps1'><i class='fas fa-lock'></i></label>
                    <input name='password2' type='password' placeholder='Konfirmasi Password' id='ps1'>
                </div>
                <button class='btn' name='tombol' type='submit'><strong>Sign Up</strong></button>
              </form>
          </div>
    ";
 
?>
    