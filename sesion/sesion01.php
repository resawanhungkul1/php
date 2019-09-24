<?php 
	/*
		Nama file : sesion 01.php
		Halaman ini merupakan halaman contoh penciptaan sesion pertama
		Perintah sesion_start() harus di taruh di perintah pertama
		tanpa spasi di depanya. Perintah sesion_start() harus ada
		pada setiap halaman yg berhubungan dengan sesion
	*/
		session_start();
			if (isset($_POST['Login'])) {
				$user= $_POST['user'];
				$pass =$_POST['pass'];
				//periksa login
				if ($user=="resawan" && $pass="123") {
					$_SESSION['login']=$user;
					//menuju ke halaman pemeriksaan session
						echo "<h1> anda berhasil LOGIN </h1>";
						echo "<h2>Klik <a href='sesion02.php'>di sini (session02.php)</a>    untuk menuju ke halaman pemeriksaan session";

				
			} else {
				die("user  name atau password anda salah 
					silahkan kembali login <a href =sesion01.php> Login</a>");
			}
			}elseif ($_SESSION['login']) {
				echo "<script>";
				echo "alert('anda sudah login'); window.location.href='sesion02.php'";
				echo "</script>";
			} else{
			?> 
			<html>
			  <head>
			     <title>Login here...</title>
			       </head>
			         <body>
			            <form action="" method="post">
			            <table>

			                <h2>Login Here...</h2>
			                <tr>
			                <td>
			                	
			                    Username : <input type="text" name="user"><br><br>
			                </td>
			                </tr>
			                <tr>
			                <td>
			                       Password : <input type="password" name="pass"><br>
			                     
			                </td>
			                </tr> 
			                <tr>
			                <td>
			                         <input type="submit" name="login" value="logIn">
			                </td>
			                </tr>         
			            </table>   
			            </form>  
			         </body> 
		    </html>
		     <?php } ?> 
 
