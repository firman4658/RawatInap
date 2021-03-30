<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link href="build/css/bootstrap.min.css" rel="stylesheet">
     <link href="build/css/loginku.css" rel="stylesheet">
</head>
<body>
 
  <div class="kotak_login">
    <img class="img" src="build/images/lo.png">
    <p class="tulisan_login"><b>Silahkan login</b></p>
 
    <form action="cek_login.php" method="post">
      <label>Username</label>
      <input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
      <label>Password</label>
      <input type="password" name="password" class="form_login" placeholder="Password .." required="required">
          <div class="form-group">
            <select name="level" class="form-control" required>             
              <option value="">Pilih Level Akses</option>
              <option value="admin">Admin</option>
              <option value="dokter">Dokter</option>
            </select>
          </td>
        </tr>

        <br></br>
 
      <input type="submit" class="tombol_login" value="LOGIN">
 
      <br/>
      <br/>
    </form>
    
  </div>
 
 
</body>
</html>