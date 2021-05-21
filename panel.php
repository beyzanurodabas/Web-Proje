<!DOCTYPE html>
<html lange="tr">
<head>

 <meta charset="UTF-8"/>
 <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
 <title>Beyzanur Odabaş'ın Web Sitesi</title>
 
 
 <link rel="icon" href="resim/favicon.ico" type="image/x-icon"/>
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <!--BOOTSTRAP CSS-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
 integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="bootstrap.css" >




</head>

<body>

<nav class="navbar navbar-expand-md  bg-dark navbar-dark ">
     <div class="container">
		
        <a href="index.html" class="navbar-brand text-white">
            <i class="fas fa-grin-wink"></i>
                            |      
          </a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ">

              <li class="nav-item">
                <a href="index.html"class="nav-link active" >Anasayfa    </a>
              </li>
              <li class="nav-item">
                <a href="ozgecmis.html" class="nav-link active  text-white">Özgeçmiş  </a>
              </li>

              <li class="nav-item">
                <a href="sehrim.html" class="nav-link active  text-white">ŞEHRİM   </a>
             </li>	

            <li class="nav-item">
                <a href="mirasimiz.html" class="nav-link active  text-white">Mirasımız  </a>
            </li>

              <li class="nav-item">
                <a href="iletisim.html" class="nav-link active  text-white">İletişim    </a>
            </li>

              <li class="nav-item">
                <a href="ilgialanlarim.html" class="nav-link active  text-white">İlgi Alanlarım </a>
                  
              </li>	
             
              <li class="nav-item">
                <a href="login.php" class="nav-link active  text-white">GİRİŞ YAP</a>
                  
              </li>

        
            </ul>
        </div> 
     </div> 
        
    </nav>


	<br><br><br>
	
	<main>

<!--BASLİK-->
<center>
<h1 id="lobaslik" > Panel </h1><br><br>
</center>

		<div class="container">
			
			<?php 

				include("kisiler.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
				  
			       echo(" HOŞGELDİNİZ ' $user ' ");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış !<br>";
			            echo " TEKRAR DENE ! ";
			            header("Refresh: 2; url=login.php");
			    }
			
			?>
			
		</div>

	</main>