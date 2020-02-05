
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instale WordPress com um clique.</title>

  <!-- jQuery -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Style -->
  <style>
    body{
      background: #F4F4F4;
      margin: 0;
      padding: 0;
      font-family: helvetica;
      font-size: 14px;
    }
    .wrap{
      width: 360px;
      padding: 4% 0px 0px;
      margin: auto;
    }
    .loginform{
      margin-top: 20px;
      margin-left: 0px;
      padding: 24px;
      font-weight: 400;
      overflow: hidden;
      background: #FFF none repeat scroll 0% 0%;
      box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.13);
    }
    .wrap p label{
      color: #777;
      clear: both;
      display: block;
    }
    .wrap p{
      margin-bottom: 20px;
    }
    input{
      font-size: 24px;
      width: 97%;
      padding: 3px;
      margin: 2px 6px 16px 0px;
      border: 1px solid #DDD;
      box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.07) inset;
      background-color: #FFF;
      color: #32373C;
      outline: 0px none;
      transition: border-color 0.05s ease-in-out 0s;
    }
    .install input{
      background: #0091CD none repeat scroll 0% 0%;
      border-color: #0073AA;
      box-shadow: 0px 1px 0px rgba(120, 200, 230, 0.6) inset;
      color: #FFF;
      text-align: center;
      margin: 0 auto;
      width: 200px;
      display: block;
      font-size: 20px;
      cursor: pointer;
    }
    .wrap .code-poetry{
      display: block;
      margin: 16px auto;
      width: 190px;
    }
    .wrap .code-poetry a{
      text-align: center;
      text-decoration: none;
      color: #777;
      display: block;
      padding-top: 5px;
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
  .circle {
    background-color: rgba(0,0,0,0);
    border: 5px solid rgba(0,183,229,0.9);
    opacity: .9;
    border-right: 5px solid #0073AA;
    border-left: 5px solid #0073AA;
    border-radius: 50px;
    box-shadow: 0 0 35px #2187e7;
    width: 50px;
    height: 50px;
    margin: 0 auto;
    -moz-animation: spinPulse 1s infinite ease-in-out;
    -webkit-animation: spinPulse 1s infinite linear;
}

.circle1 {
    background-color: rgba(0,0,0,0);
    border: 5px solid rgba(0,183,229,0.9);
    opacity: .9;
    border-left: 5px solid #0073AA;
    border-right: 5px solid #0073AA;
    border-radius: 50px;
    box-shadow: 0 0 15px #2187e7;
    width: 30px;
    height: 30px;
    margin: 0 auto;
    position: relative;
    top: -50px;
    -moz-animation: spinoffPulse 1s infinite linear;
    -webkit-animation: spinoffPulse 1s infinite linear;
}

@-moz-keyframes spinPulse {
    0% {
        -moz-transform: rotate(160deg);
        opacity: 0;
        box-shadow: 0 0 1px #2187e7;
    }

    50% {
        -moz-transform: rotate(145deg);
        opacity: 1;
    }

    100% {
        -moz-transform: rotate(-320deg);
        opacity: 0;
    };
}

@-moz-keyframes spinoffPulse {
    0% {
        -moz-transform: rotate(0deg);
    }

    100% {
        -moz-transform: rotate(360deg);
    };
}

@-webkit-keyframes spinPulse {
    0% {
        -webkit-transform: rotate(160deg);
        opacity: 0;
        box-shadow: 0 0 1px #2187e7;
    }

    50% {
        -webkit-transform: rotate(145deg);
        opacity: 1;
    }

    100% {
        -webkit-transform: rotate(-320deg);
        opacity: 0;
    };
}

@-webkit-keyframes spinoffPulse {
    0% {
        -webkit-transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
    };
}
.install_onclick{
  text-align: center;
  color: #777;
}


</style>


</head>
<body>

<!-- content -->
<div class="wrap">
     <span class="logo-wp">WordPress Install</span>
     <p class="install_onclick">Instale WordPress com um clique.</p>
     <!-- Form -->
    <form class="loginform" method="post" action="install.php">
        <p>
          <label>Name do projeto:</label>
          <input name="cliente_name" type="text" value="" />
        </p>
        <p>
          <label>Título do site:</label>
          <input name="title_wp" type="text" value="" />
        </p>
        <p>
          <label>Nome:</label>
          <input name="user_wp" type="text" value="" />
        </p>
        <p>
          <label>Senha:</label>
          <input name="senha_wp" type="password" value="" />
        </p>
        <p>
          <label>E-mail:</label>
          <input name="email_wp" type="text" value="" />
        </p>
        <p class="install">
          <input type="submit" class="button" title="On Click" value="Install WordPress" />
        </p>

        <div class="loadinstall" style="display: none;">
          <div class="circle"></div>
          <div class="circle1"></div>
        </div>
    </form><!-- end form -->

    <div class="code-poetry">
      <img src="https://s.w.org/style/images/codeispoetry.png?1">
      <a href="http://daviwp.com" title="WordPress Developer">by daviwp</a>
    </div><!-- end code-poetry -->

</div><!-- end wrap -->

<!-- Script Loading jQuery -->
<script>
  $(".install").click(function() {
      $(".loadinstall").css("display","block");
  });
</script>

</body>
</html>