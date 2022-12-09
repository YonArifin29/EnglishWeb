<?php
///nama
    function login($data) {
        global $koneksi;
        $password = $data['password'];
        $username = $data['username'];
        $sql = "SELECT * FROM pengguna WHERE username = '$username'";
        var_dump($username);
          $result = mysqli_query($koneksi,$sql);
          $row = mysqli_num_rows($result);
          if($row) { 
            $data=mysqli_fetch_assoc($result);
            if(password_verify($password, $data['password'])) {
                $_SESSION['Id']=$data['id_pengguna'];
                header("location:index.php");
            } else {
                return peringatan("info","Maaf Login Gagal","Periksa kemabli inputan");
            }
          } else {
              return peringatan("info","Maaf Login Gagal","Periksa kemabli inputan");
          }
    }
    
     function pengguna($key){
        global $koneksi;

        $query = "SELECT * FROM pengguna WHERE id_pengguna='$key'";

        $hasil = mysqli_query($koneksi,$query);
        return mysqli_fetch_assoc($hasil);
      }
      
    function registrasi($data) {
        global $koneksi;
        $nama = htmlspecialchars($data['nama']);
        $username = htmlspecialchars($data['username']);
        $password = htmlspecialchars($data['password']);
        $password2 = htmlspecialchars($data['password2']);
        $nohp = htmlspecialchars($data['nohp']);
        //cek konfirmasi password
        if($nama == '') {
            return peringatan2("info","masukan nama");
            return false;
        } elseif ($password && $password2 == '') {
            return peringatan2("info","masukan password");
            return false;
        } elseif($nohp == '') {
            return peringatan2("info","masukan nomor hp");
            return false;
        } elseif($username == '') {
            return peringatan2("info","masukan username");
            return false;
        }
        if($password !== $password2) {
          return peringatan2("info","Password tidak sama");
          return false;
        }
        //cek username
        $sql = "SELECT * FROM pengguna WHERE username = '$username'";
        $result = mysqli_query($koneksi, $sql);
        $row = mysqli_num_rows($result);
        if( $row ) {
          return peringatan2("info","maaf username sudah digunakan");
          return false;
        }
        //cek username
        $sql = "SELECT * FROM pengguna WHERE nohp = '$nohp'";
        $result = mysqli_query($koneksi, $sql);
        $row = mysqli_num_rows($result);
        if( $row ) {
          return peringatan2("info","maaf nomor anda sudah digunakan");
          return false;
        }
        $password = password_hash($password, PASSWORD_DEFAULT);
        //belum di enkripsi passwordnya
        $query = "INSERT INTO pengguna (nama, nohp, username, password)VALUES('$nama','$nohp', '$username', '$password');";
        $hasil = mysqli_query($koneksi,$query);
        if($hasil) {
          return peringatan2("success","registrasi berhasil");
        }
      }

    function tambah($table, $fields, $values) {
        global $koneksi;

        $query = "INSERT INTO $table ($fields) VALUES ($values);";
        $hasil = mysqli_query($koneksi, $query);
        if( $hasil > 0 ){

            return peringatan2("success","Data berhasil di simpan");
          
         }
         else{
            return peringatan2("error","Data gagal di simpan");
         }
         return mysqli_affected_rows($koneksi);
    }
    function createTableRow($col1, $col2, $col3) {
        return "
            <tr>
                <td>$col1<td>
                <td>$col2<td>
                <td>$col3<td>
            <tr>
        ";
    }
    function createTabl1($col1, $col2) {
        return "
        <table cellpadding='5'>
            <tr>
                <td>$col1<td>
                <td>$col2<td>
            <tr>
        </table>
        ";
    }

    function peringatan($jenis="",$peringatan="",$keterangan="") {
        return "
            <script>
                Swal.fire(
                    '".$peringatan."',
                    '".$keterangan."',
                    '".$jenis."'
                )
            </script>
        ";
      }
      function peringatan2($jenis="",$title=""){
  
          return "
                  <script>
                      Swal.fire({
                      position: 'top-end',
                      icon: '$jenis',
                      title: '$title',
                      showConfirmButton: false,
                      timer: 2000
                      })
                  </script>
                  ";
      }
?>