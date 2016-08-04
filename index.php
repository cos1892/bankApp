<?php define('ROOT_DIR', dirname(__FILE__)); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Белагропромбанк</title>
	<link rel="stylesheet" type="text/css" href="../style/main.css">
	<link rel="stylesheet" type="text/css" href="../style/buttons.css">		
	<link rel="stylesheet" type="text/css" href="../style/demo.css" />
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
	<link rel="stylesheet" type="text/css" href="../style/custom.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="../js/slider.js"></script>
	<script type="text/javascript" src="../js/modernizr.custom.79639.js"></script> 
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/menu.js"></script>
	<script type="text/javascript" src="../js/menu-small.js"></script>
	<script type="text/javascript" src="../js/validation.js"></script>
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container">
		<?php
			require(ROOT_DIR.'/views/header.php');
		?>
		
		<?php
			require(ROOT_DIR.'/views/slider.php');
		?>
		
		<?php
			require(ROOT_DIR.'/views/main-menu.php');
		?>

		<div class="row">
			<?php
				require(ROOT_DIR.'/views/block-news.php');
			?>
			<?php
				if(strstr($_SERVER['REQUEST_URI'],'/o-kompanii/obshay-informaciya')==true && !$key1)
				   {
					   require(ROOT_DIR.'/views/o-kompanii/obshay-informaciya.php');
					   $key=1;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/o-kompanii/deyatelnost-banka')==true && !$key1)
				   {
					   require(ROOT_DIR.'/views/o-kompanii/deyatelnost-banka.php');
					   $key=1;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/o-kompanii/clients-o-banke')==true && !$key1)
				   {
					   require(ROOT_DIR.'/views/o-kompanii/clients-o-banke.php');
					   $key=1;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/contacts')==true && !$key1)
				   {
					   require(ROOT_DIR.'/views/contacts.php');
					   $key=1;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/offices')==true && !$key1)
				   {
					   require(ROOT_DIR.'/views/offices-and-ATMs.php');
					   $key=1;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/kurs/nalichnye')==true && !$key1)
				   {
					   require(ROOT_DIR.'/views/kurs/nalichnye.php');
					   $key=1;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/kurs/konversii')==true && !$key1)
				   {
					   require(ROOT_DIR.'/views/kurs/konversii.php');
					   $key=1;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/kurs/nbrb')==true && !$key1)
				   {
					   require(ROOT_DIR.'/views/kurs/nbrb.php');
					   $key=1;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/kurs/card')==true && !$key1)
				   {
					   require(ROOT_DIR.'/views/kurs/card.php');
					   $key=1;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/news/news1')==true)
				   {
					   require(ROOT_DIR.'/views/news/news1.php');
					   $key1=2;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/news/news2')==true)
				   {
					   require(ROOT_DIR.'/views/news/news2.php');
					   $key1=2;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/news/news3')==true)
				   {
					   require(ROOT_DIR.'/views/news/news3.php');
					   $key1=2;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/news/news4')==true)
				   {
					   require(ROOT_DIR.'/views/news/news4.php');
					   $key1=2;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/news/news5')==true)
				   {
					   require(ROOT_DIR.'/views/news/news5.php');
					   $key1=2;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/news/news6')==true)
				   {
					   require(ROOT_DIR.'/views/news/news6.php');
					   $key1=2;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/news/news7')==true)
				   {
					   require(ROOT_DIR.'/views/news/news7.php');
					   $key1=2;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/news/news8')==true)
				   {
					   require(ROOT_DIR.'/views/news/news8.php');
					   $key1=2;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/news/news9')==true)
				   {
					   require(ROOT_DIR.'/views/news/news9.php');
					   $key1=2;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/news/new10')==true)
				   {
					   require(ROOT_DIR.'/views/news/new10.php');
					   $key1=2;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/news')==true && !$key1)
				   {
					   require(ROOT_DIR.'/views/news.php');
					   $key=1;
				   }
				if(strstr($_SERVER['REQUEST_URI'],'/')==true && !$key && !$key1)
				   {
					   require(ROOT_DIR.'/views/content.php');
				   }   
			?>
			<?php
				require(ROOT_DIR.'/views/block-kurs.php');
			?>
		</div>
		<?php
			require(ROOT_DIR.'/views/footer.php');
		?>
	</div>

<div id="guestMail" style="display:none;">
  <div class="col-sm-6">

    <form id="feedback-form" action="../mail.php" method="post" name="form">

      <div class="form-group">
        <label for="Feedback_name" class="col-sm-3 control-label">Имя</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="Feedback[name]" id="Feedback_name" placeholder="Имя">                    
		</div>
		</div>

      <div class="form-group">
        <label for="Feedback_phone" class="col-sm-3 control-label">Телефон</label>
		<div class="col-sm-10">
		<input type="text" class="form-control" name="Feedback[phone]" id="Feedback_phone" placeholder="Телефон">                   
		</div>
		</div>

      <div class="form-group">
        <label for="Feedback_email" class="col-sm-3 control-label">Почта</label>
		<div class="col-sm-10">
		<input type="email" class="form-control" name="Feedback[email]" id="Feedback_email" placeholder="EMail">
		</div>
		</div>

      <div class="form-group">
        <label for="Feedback_comment" class="col-sm-3 control-label">Сообщение</label>
		<div class="col-sm-10">
		<textarea class="form-control" rows="6" cols="50" name="Feedback[comment]" id="Feedback_comment " placeholder="Текст сообщения"></textarea> 
		</div>
		</div>

      <div class="form-group">
		<div class="col-sm-6">
		<button type="submit" name="yt0" class="btn btn-success">Отправить сообщение</button>
		</div>
		<div class="col-sm-6">
		<button type="button" class="btn btn-danger" onclick="document.getElementById('guestMail').style.display='none';">Закрыть</button>
		</div>
		</div>
    </form>
  </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="../js/jquery.bookblock.js"></script>
		<script type="text/javascript" src="../js/slider_nagrad.js"></script>
</body>
</html>