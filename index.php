<?php include "base.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Management System (Tom Cameron for NetTuts)</title>
<link rel="stylesheet" href="/core/css/style.css" type="text/css" />
<link rel="stylesheet"  href="/core/css/desktop.css"/>
<script src="/core/js/jquery/jquery.js"></script>
<script src="/core/js/jquery/plugins/masonry.js"></script>
<script src="/core/js/desktop.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script src="/core/js/jquery/plugins/jquery.jscrollpane.js">
    
</script>
<link rel="stylesheet" href="/core/css/jquery/plugins/jquery.jscrollpane.min.css">

</head>
<body>
<div id="main">
<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
	 ?>
    
    <h1>Member Area</h1>
  	 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



<div class="desktop">
  <div class="start-menu-fade"></div>
  <div class="start-menu">
    <div class="start-menu__list">
      <div class="media">
        <a class="user-info menu-toggle" href="#" data-menu="user">
        <img class="user-info__img media__img" src="http://i.imgur.com/KkCqvK9.png" alt="User image">
        <div class="user-info__name media__body">
          User Name
        </div>
        </a>
        <div class="menu" data-menu="user">
          <a href="#">Change account picture</a>
          <a href="#">Lock</a>
          <a href="#">Sign out</a>
        </div>
        <a class="user-info__power menu-toggle" href="#" data-menu="power">
          <i class="fa fa-power-off"></i>
          
        </a>
      </div>
      
      <div class="menu" data-menu="power">
            <a href="#">Sleep</a>
            <a href="#">Power off</a>
            <a href="#">Restart</a>
          </div>
      

      <ul class="start-menu__recent">
        <li class="start-menu__explorer">
          <a href="#" data-window="explorer">
            <i class="fa fa-folder"></i>
            File Explorer
          </a>
        </li>
        <li class="start-menu__mail">
          <a href="#" data-window="mail">
            <i class="fa fa-envelope"></i>
            Mail
          </a>
        </li>
        <li class="start-menu__notepad">
          <a href="#" data-window="notepad">
            <i class="fa fa-pencil"></i>
            Notepad
          </a>
        </li>
        <li class="start-menu__explorer">
          <a href="#">
            <i class="fa fa-folder"></i>
            File Explorer
          </a>
        </li>
        <li class="start-menu__mail">
          <a href="#">
            <i class="fa fa-envelope"></i>
            Mail
          </a>
        </li>
        <li class="start-menu__notepad">
          <a href="#">
            <i class="fa fa-pencil"></i>
            Notepad
          </a>
        </li>
      </ul>
      
      <a class="all-apps" href="#">
        All apps
        <i class="fa fa-arrow-right"></i>
      </a>
      <form class="search">
      <input type="text" class="search__input" placeholder="Ask me anything">
      <button class="search__btn">
        </button>
      </form>
    </div>
    <div class="start-screen-scroll">
    <div class="start-screen">
      <a class="start-screen__tile start-screen__tile--explorer masonry-item" href="#" data-window="explorer">
        <i class="fa fa-folder"></i>
        <span>File Explorer</span>
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--wide masonry-item" href="#"  data-ss-colspan="2">
      </a>
      <div class="start-screen__smallgroup masonry-item">
      <a class="start-screen__tile start-screen__tile--small" href="#"></a>
        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
      </div>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--notepad masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--large start-screen__tile--mail masonry-item" href="#" data-ss-colspan="2">
        <i class="fa fa-envelope"></i>
        <span>Mail</span>
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
    </div>
    </div>
  </div>
  
  <div class="taskbar">
    <a class="taskbar__item taskbar__item--start" id="start" href="#" data-window="start">
      <i class="fa fa-windows"></i>
    </a>
    <a class="taskbar__item taskbar__item--explorer" href="#" data-window="explorer">
      <i class="fa fa-folder"></i>
    </a>
 <a class="taskbar__item taskbar__item--gw" href="#" data-window="gw">
      <i class="fa fa-folder"></i>
    </a>
    <a class="taskbar__item taskbar__item--mail" href="#" data-window="mail">
      <i class="fa fa-envelope"></i>
    </a>
    <a class="taskbar__item taskbar__item--notepad" href="#" data-window="notepad">
      <i class="fa fa-pencil"></i>
    </a>
    
    <div class="taskbar__tray">
      <span class="time">
        <script>
          
         </script>
      </span>
    </div>
  </div>
  
  
  <div class="window window--explorer window--minimized" data-window="explorer" style="width:670px;height:400px;top:5%;left:10%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-folder"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
        File Explorer
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-search"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-plug"></i>
            Devices
          </a>
        </li>
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul>
    
    <div class="window__actions">
      <a class="window__back" href="#">
        <i class="fa fa-arrow-left"></i>
      </a>
      <a class="window__forward" href="#">
        <i class="fa fa-arrow-right"></i>
      </a>
      <div class="window__path">
        <a href="#">
        <i class="fa fa-desktop"></i>
        Desktop
        </a>
      </div>
      <form class="search">
        <input type="text" class="search__input" placeholder="Search files and folders">
        <button class="search__btn">
        </button>
      </form>
    </div>
    
    <div class="window__body">
      
      <div class="window__side">
        
        <ul class="side__list">
          <li><a href="#">Home</a></li>
          <li>
            <a href="#">Favorites</a>
            <ul>
              <li><a href="#">Desktop</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Recent Places</a></li>
          </ul>
        </li>
          <li>
            <a href="#">This Device</a>
            <ul style="display:none">
              <li><a href="#">Desktop</a>
                <ul style="display:none">
<?php
            foreach(ftp_nlist($conn,'.') as $fileitem){
               if(is_dir($fileitem)){
           ?>
                  <li>
                    <a href="#"><?php echo $fileitem; ?></a>
                  </li>
<?php
 }
}
         ?>
                </ul>
              </li>
              <li><a href="#">Documents</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Local Disk  (C:)</a></li>
        </ul>
      </div>
      <div class="window__main">
        <div class="folders">
            <?php
            foreach(ftp_nlist($conn,'.') as $fileitem){
               if(is_dir($fileitem)){
           ?>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span><?php echo $fileitem; ?></span>
          </a>
         <?php
         }else{
             
         }
         ?>
          <a href="#">
            <i class="fa fa-file"></i>
            <span><?php echo $fileitem; ?></span>
          </a>
          
          <?php
            }
            ?>
        </div>
      </div>
    </div>
    
  </div>
      <div class="window window--gw" data-window="gw" style="display:none;width:400px;height:300px;top:40%;left:40%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-envelope"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
        Ensoora Groupware
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-search"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-plug"></i>
            Devices
          </a>
        </li>
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul>
    
    <div class="window__body">
      <div class="window__side">
        
      </div>
      <div class="window__main">
        <iframe width="100%" height="800" src="/osutil/WebDAV/groupware.php"></iframe>
      </div>
    </div>
    
     <div class="window window--mail" data-window="mail" style="display:none;width:400px;height:300px;top:40%;left:40%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-envelope"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
      Mail
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-search"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-plug"></i>
            Devices
          </a>
        </li>
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul>
    
    <div class="window__body">
      <div class="window__side">
        
      </div>
      <div class="window__main">
        
      </div>
    </div>
    
  </div>
    
    
 <div class="window window--notepad" data-window="notepad" style="display:none;width:600px;height:300px;top:10%;left:30%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-pencil"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
        Notepad
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-download"></i>
            Save
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-folder-open"></i>
            Open
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-print"></i>
            Print
          </a>
        </li>
      <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
      
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-file"></i>
            Format
          </a>
          <a href="logout.php">Logout.</a>
      </li>
      
      <li>
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
        </a>
      </li>
   </ul>
    
    <div class="window__body">
      <div class="window__main">
        <textarea class="full-textarea"></textarea>
      </div>
    </div>
    
  </div>

    
    
</div>


  
    
   
    
    <?php
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
	 $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    
	 $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
    
    if(mysql_num_rows($checklogin) == 1)
    {
    	 $row = mysql_fetch_array($checklogin);
        $email = $row['EmailAddress'];
        
        $_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
        
    	 echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;index.php' />";
    }
    else
    {
    	 echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
    }
}
else
{
	?>
    
   <h1>Member Login</h1>
    
   <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p>
    
	<form method="post" action="index.php" name="loginform" id="loginform">
	<fieldset>
		<label for="username">Username:</label><input type="text" name="username" id="username" /><br />
		<label for="password">Password:</label><input type="password" name="password" id="password" /><br />
		<input type="submit" name="login" id="login" value="Login" />
	</fieldset>
	</form>
    
   <?php
}
?>
</div>
</body>
</html>