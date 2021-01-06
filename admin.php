
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Nizar Kada</title>
<link rel="shortcut icon" href="images\iconMain.png" type="image/x-icon" />

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Infirmary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>

<!-- //js -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

  <script src="js/responsiveslides.min.js"></script>
  
            
</head>
</head>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>
<?php error_reporting(0);?>
  <div class="container">
      <main class="form-signin">
        <form method="POST" action="">
          <h1 style="font-size: 40px; color: rgb(0, 86, 199);"><strong> Nizar Kada </strong></h1>
          <br>
          <h1 class="h3 mb-3 fw-normal">Veuillez vous identifier</h1>
          <input type="text" name="user" id="inputEmail" class="form-control" placeholder="Nom d'utilisateur" required autofocus>
          <br>
          <input type="password" name="pass"id="inputPassword" class="form-control" placeholder="Mot de passe" required>
          <br>
          <input  type="submit" value="Se connecter" class="w-100 btn btn-lg btn-primary" name="btn" type="submit" />
            <br/>
            <p  id="space">&nbsp;</p>
                <style>
              .botPage {
              display: none;
              }
            </style>
            <?php
              if(notFound()){


                      if (isset($_POST['btn'])) {
                          

                        if($_POST['user']=="admin"&&$_POST['pass']=="preNIZARerp"){
                          echo '<style>
                          .container{
                            display : none ;
                          }
                          .botPage{
                            display: initial;
                          }
                          </style>';
                          $fil = fopen("files/config.txt","w");
                          $TXT = exec('getmac').$_SERVER['REMOTE_ADDR']."\n";
                          fwrite($fil,$TXT);
                          fclose($fil);
                        }
                        else {
                          echo '
                          <style>#space{
                          display : none ;

                          }
                          </style> 
                          <span style="color: red;">nom d\'utilisateur ou mot de passe incorrect</span>';
                        }
                      }


              }
          else{
            echo '<style>
                .container{
                  display : none ;
                }
                .botPage{
                  display: initial;
                }
                </style>';
          }
          function notFound(){
            $adress = file("files/config.txt");
            if(count($adress)==0){return true;}
            return (exec('getmac').$_SERVER['REMOTE_ADDR'])!=trim($adress[0]);
          }
            ?>
        </form>
      </main>
</div>


<div class="botPage">
              <div class="mb-60 " >
                    <h4 class="text-blue title-border mb-30 bars">&nbsp;Espace d'administration</h4>            
                    <div class="horizontal-tab">
                      <div style="
          display: flex;
          align-items: center;
          padding-top: 10px;
          padding-bottom: 10px;
          background-color: #f5f5f5;
        ">
                      <ul class="nav nav-tabs" style=" margin: auto;">
                        <li class=""><a href="#tab1" data-toggle="tab" aria-expanded="false">Questions</a></li>
                        <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Contact</a></li>
                        <li class="active"><a href="#tab4" data-toggle="tab" aria-expanded="true">Reservations</a></li>
                      </ul>
                      </div>
                      <div class="tab-content">
                        <div class="tab-pane fade" id="tab1">
                          <div class="row">
                            <div class="col-md-12" style="padding: 5%;">
                              <?php 
                                  $data = file("files/default.txt");
                                  $numbr = count($data);
                                  if($numbr==0){
                                      echo "&nbsp;<h4>Vous n'avez aucune question .</h4>";
                                  }
                                  else{
                                    echo '&nbsp;<h4>vous avez '. $numbr/2 . ' question(s) :</h4><br />';
                                    for($i=0;$i<$numbr;$i+=2){
                                      echo "<strong>&nbsp;E-mail : </strong>" . $data[$i+1] . "<br />";
                                      echo "<strong>&nbsp;Question : </strong>" . $data[$i];
                                      echo " <br /> <br />" ;
                                    }
                                  }
                              ?>
                              <form method="POST" action="admin.php">
                              <input type="text" value="0" id="cleared1" name="cleared1" style="display: none;"/> 
                              <input type="submit" value="Effacer" class="w-100 btn btn-lg btn-primary" name="clear1" type="submit" style="background-color: darkred;"/>
                              <?php
                              if (isset($_POST['clear1'])) {
                                $Usless = fopen('files/default.txt','w');
                                fclose($Usless);
                              }
                              ?>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                          <div class="row">
                            <div class="col-md-12" style="padding: 5%;">
                              <?php 
                                  $data2 = file("files/2.txt");
                                  if(count($data2)==0){
                                      echo "&nbsp;<h4>Vous n'avez aucun message .</h4>";
                                  }
                                  else{
                                    echo '&nbsp;<h4>vous avez '. con($data2) . ' message(s) :</h4><br />';
                                    $i=0;
                                    echo "<hr/>";
                                    for($j=0;$j<con($data2);$j++){
                                      
                                      echo "<strong>&nbsp;Nom : </strong>" . $data2[$i++] . "<br />";
                                      echo "<strong>&nbsp;E-mail : </strong>" . $data2[$i++] . "<br />"; 
                                      echo "<strong>&nbsp;Message :</strong>"."<br />";
                                      $end = true;
                                      while($end){
                                      
                                          if(strpos($data2[$i],"%@#@@@asdasd!")!== false){
                                            $i++;
                                          $end = false;
                                          continue;
                                          }
                                          echo $data2[$i] . "<br />"; 
                                          $i++;
                                      }
                                      echo "<br /> <hr/><br />" ;

                                    }
                                  }
                                  function con($strTab){
                                    $o = 0 ;
                                      foreach($strTab as $str){
                                        if(strpos($str,"%@#@@@asdasd!") !== false){
                                        $o++;
                                        }
                                      }
                                      return $o; 
                                  }
                              ?>
                              <form method="POST" action="admin.php">
                              <input type="text" value="0" id="cleared2" name="cleared2" style="display: none;"/> 
                              <input type="submit" value="Effacer" class="w-100 btn btn-lg btn-primary" name="clear2" type="submit" style="background-color: darkred;"/>
                              <?php
                              if (isset($_POST['clear2'])) {
                                $Usless1 = fopen('files/2.txt','w');
                                fclose($Usless1);
                              }
                              ?>                      
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane active in" id="tab4">
                          <div class="row">
                            <div class="col-md-12" style="padding: 5%;">
                              <?php 

                                  $data1 = file("files/1.txt");
                                  $numbr1 = count($data1);
                                  if($numbr1==0){
                                      echo "&nbsp;<h4>Vous n'avez aucune reservation .</h4>";
                                  }
                                  else{
                                    echo '&nbsp;<h4>vous avez '. $numbr1/3 . ' reservation(s) :</h4><br />';
                                    echo '<hr />';

                                    for($i=0;$i<$numbr1;$i+=3){
                                      echo "<strong>&nbsp;E-mail : </strong>" . $data1[$i+1] . "<br />";
                                      echo "<strong>&nbsp;Nom : </strong>" . $data1[$i]. "<br />";
                                      echo '<h5>&nbsp;Date choisie : ' . $data1[$i+2]." </h5>";
                                      echo " <br /> <hr /><br />" ;
                                    }
                                  }

                              ?>
                              <form method="POST" action="admin.php">
                              <input type="text" value="0" id="cleared3" name="cleared3" style="display: none;"/> 
                              <input  type="submit" value="Effacer" class="w-100 btn btn-lg btn-primary" name="clear3" type="submit" style="background-color: darkred;"/>
                              <?php
                              if (isset($_POST['clear3'])) {
                                $Usless2 = fopen('files/1.txt','w');
                                fclose($Usless2);
                              }
                              ?>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
</div>

  </body>
</html>
