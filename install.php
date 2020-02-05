<!-- Condicion -->
<?php if($_POST['cliente_name'] && $_POST['title_wp'] && $_POST['user_wp'] && $_POST['senha_wp'] && $_POST['email_wp']): ?>

<?php

 	 $shell_wp_core = shell_exec('
		# Local phpmyadmin
	  	/Applications/MAMP/Library/bin/mysql -uroot -proot -e "create database \`wp_'.$_POST['cliente_name'].'\`;";
		
		# Create file
	  	mkdir '.$_POST['cliente_name'].';
	  	
	  	# Local file
	  	cd '.$_POST['cliente_name'].'/

	  		#Download WordPress current version 
		  	curl -O https://wordpress.org/latest.zip

		  	#Extract
		  	tar -zxvf latest.zip

		  	#Move all files
		  	mv wordpress/* ./

		  	#edit online wp-config.php
		  	sed "s/database_name_here/wp_'.$_POST['cliente_name'].'/g" wp-config-sample.php > wp-config1.php
		  	rm -r wp-config-sample.php
		  	sed "s/username_here/root/g" wp-config1.php > wp-config2.php
		  	rm -r wp-config1.php
		  	sed "s/password_here/root/g" wp-config2.php > wp-config.php
		  	rm -r wp-config2.php


		  	# Install WP
		  	curl -d "weblog_title='.$_POST['title_wp'].'&user_name='.$_POST['user_wp'].'&admin_password='.$_POST['senha_wp'].'&admin_password2='.$_POST['senha_wp'].'&admin_email='.$_POST['email_wp'].'" http://localhost/'.$_POST['cliente_name'].'/wp-admin/install.php?step=2
		 	
		 	#Delete 
		 	rm -r latest.zip
		 	rm -r wordpress		 	
 	 ');	
?>

<!-- content mensage sucess -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WordPress Install</title>
	<style>
		body{
	      background: #F4F4F4;
	      margin: 0;
	      padding: 0;
	      font-family: helvetica;
	      font-size: 14px;
	    }
	    .wrap{
	      width: 460px;
	      padding: 4% 0px 0px;
	      margin: auto;
	    }
	    .wrap h1{
			font-size: 20px;
			color: #777;
			text-align: center;
	    }
	    .wrap h2{
			font-size: 18px;
			color: #777;
	    }
	     .wrap .code-poetry a{
	      text-align: center;
	      text-decoration: none;
	      color: #777;
	      display: block;
	      padding-top: 5px;
	    }
	    .mensagem a{
	    	color: #0073AA;
	    }
	    .mensagem{
		  margin-top: 20px;
	      margin-left: 0px;
	      padding: 24px;
	      font-weight: 400;
	      overflow: hidden;
	      background: #FFF none repeat scroll 0% 0%;
	      box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.13);
	    }
	    .logo-wp{
	      background-image: none, url("http://daviwp.com/wp-admin/images/wordpress-logo.svg?ver=20131107");
	      background-size: 84px auto;
	      background-position: center top;
	      background-repeat: no-repeat;
	      color: #999;
	      height: 84px;
	      font-size: 20px;
	      font-weight: 400;
	      line-height: 1.3em;
	      margin: 0px auto 25px;
	      padding: 0px;
	      text-decoration: none;
	      width: 84px;
	      text-indent: -9999px;
	      outline: 0px none;
	      overflow: hidden;
	      display: block;
	    }
	    .code-poetry{
	      display: block;
	      margin: 16px auto;
	      width: 190px;
	    }
	</style>
</head>
<body>

<div class="wrap">
	<span class="logo-wp">WordPress Install</span>
	<div class="mensagem">
		<?php  echo '
			<h1>Your WordPress has been successfully installed!</h1>
			<p>Access the site: <strong><a target="_blank" href="http://localhost/'. $_POST['cliente_name'].'"> http://localhost/'.$_POST['cliente_name'].' </a></strong></p>
			<p>Access wp-admin: <strong><a target="_blank" href="http://localhost/'. $_POST['cliente_name'].'/wp-admin/"> http://localhost/'.$_POST['cliente_name'].'/wp-admin </a></strong></p>
			<p>Login: <strong>'. $_POST['user_wp'].'</strong></p>
			<p>Password: <strong>'. $_POST['senha_wp'].'</strong></p>
		';?>
	</div>
	<div class="code-poetry">
      <img src="https://s.w.org/style/images/codeispoetry.png?1">
      <a href="http://daviwp.com" title="WordPress Developer">by daviwp</a>
    </div><!-- end code-poetry -->
</div>
</body>
</html>


<?php else: ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WordPress Install</title>
	<style>
		body{
	      background: #F4F4F4;
	      margin: 0;
	      padding: 0;
	      font-family: helvetica;
	      font-size: 14px;
	    }
	    .wrap{
	      width: 460px;
	      padding: 4% 0px 0px;
	      margin: auto;
	    }
	    .wrap h1{
			font-size: 20px;
			color: #DB4437;
	    }
	    .wrap h2{
			font-size: 18px;
			color: #777;
	    }
	     .wrap .code-poetry a{
	      text-align: center;
	      text-decoration: none;
	      color: #777;
	      display: block;
	      padding-top: 5px;
	    }
	    .mensagem a{
	    	color: #0073AA;
	    }
	    .mensagem{
		  margin-top: 20px;
	      margin-left: 0px;
	      padding: 24px;
	      font-weight: 400;
	      overflow: hidden;
	      background: #FFF none repeat scroll 0% 0%;
	      box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.13);
	    }
	    .logo-wp{
	      background-image: none, url("http://daviwp.com/wp-admin/images/wordpress-logo.svg?ver=20131107");
	      background-size: 84px auto;
	      background-position: center top;
	      background-repeat: no-repeat;
	      color: #999;
	      height: 84px;
	      font-size: 20px;
	      font-weight: 400;
	      line-height: 1.3em;
	      margin: 0px auto 25px;
	      padding: 0px;
	      text-decoration: none;
	      width: 84px;
	      text-indent: -9999px;
	      outline: 0px none;
	      overflow: hidden;
	      display: block;
	    }
	    .code-poetry{
	      display: block;
	      margin: 16px auto;
	      width: 190px;
	    }
	</style>
</head>
<body>

<div class="wrap">
	<span class="logo-wp">WordPress Install</span>
	<div class="mensagem">
		<?php  echo '
			<h1>Error when trying to install wordpress</h1>
			<p>Fill in all fields!</p>
			<p>Name Project: <strong>'. $_POST['cliente_name'].'</strong></p>
			<p>Title WebSite: <strong>'. $_POST['title_wp'].'</strong></p>
			<p>Login: <strong>'. $_POST['user_wp'].'</strong></p>
			<p>Password: <strong>'. $_POST['senha_wp'].'</strong></p>
			<p>Email: <strong>'. $_POST['email_wp'].'</strong></p>

			<a href="http://localhost">Back</a>
		';?>
	</div>
	<div class="code-poetry">
      <img src="https://s.w.org/style/images/codeispoetry.png?1">
      <a href="http://daviwp.com" title="WordPress Developer">by daviwp</a>
    </div><!-- end code-poetry -->
</div>
</body>
</html>
	
<?php endif; ?>