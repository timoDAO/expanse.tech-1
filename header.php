<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $i8n['global_title']; ?></title>
    <link rel="stylesheet" href="/css/normalize.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel='stylesheet prefetch' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/animate.css"> 
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300,500,700' rel='stylesheet' type='text/css'> 
  </head>
  <body>
  <nav class="navbar navbar-default" role="navigation" id="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
        <span class="sr-only"><?php echo $i8n['nav_screenread']; ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img class="logo" alt="Brand" src="/images/expanse_logo.png" height="97" width="160"></a>
      <div class="slogan"><?php echo $i8n['nav_slogan']; ?></div>
    </div>
    <div class="collapse navbar-collapse" id="navbar1">
       <ul  id="nav" class="nav navbar-nav navbar-right navi-text-color">
        <li id="about_btn"><a class="navlink" href="/index.php#about"><?php echo $i8n['nav_about']; ?></a></li>
        <li id="downloads_btn"><a class="navlink" href="/index.php#downloads"><?php echo $i8n['nav_downloads']; ?></a></li>
		<li id="doc_btn"><a class="navlink" href="/index.php#documentation"><?php echo $i8n['nav_documentation']; ?></a></li>
       
        <li id="team_btn"><a class="navlink" href="/index.php#team"><?php echo $i8n['nav_team']; ?></a></li>
		<li id="com_btn"><a class="navlink" href="/index.php#community"><?php echo $i8n['nav_community']; ?></a></li>
        <li><a href="//www.expanse.tech/explorer/"><?php echo $i8n['nav_explorer']; ?></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>