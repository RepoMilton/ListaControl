<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Responsive Sidebar Menu</title>
  
	<link rel="stylesheet" href="../css/styles.css">	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script>
    	$(document).ready(function(){
    		$(".hamburger .fas").click(function(){
		    	$(".wrapper").addClass("active");
			})

			$(".wrapper .sidebar .close").click(function(){
		    	$(".wrapper").removeClass("active");
			})
    	})
    </script>
</head>
<body>


<div class="wrapper">
    <div class="sidebar">
      <div class="bg_shadow"></div>
        <div class="sidebar__inner">
           <div class="close">
          <i class="fas fa-times"></i>
        </div>
        <div class="profile_info">
            <div class="profile_img">
              <img src="../images/User2.jpg" alt="profile_img">
            </div>
            <div class="profile_data">
                <p class="name">Milton C. Godinez</p>  
                <p class="role">Docente CBTis31</p>
 
            </div><hr style="color: #9999FF;" />
        </div>
        <ul class="siderbar_menu">
            <li class="nav-item icon icon">
      <a id="home" href="./home.php" class="nav-link text-dark font-italic" target="myFrame">
      <i class="fas fa-home mr-3 text-primary fa-fw"></i><div id="title">INICIO</div>
              
            </a>
    </li>
    <li class="nav-item icon">
      <a id="profile" href="./profile.php" class="nav-link text-dark font-italic" target="myFrame">
              <i class="fas fa-user mr-3 text-primary fa-fw"></i><div id="title">PERFIL</div>
            </a>
    </li>
    <li class="nav-item icon">
      <a id="assignments" href="./assignments.php" class="nav-link text-dark font-italic" target="myFrame">
      <i class="fas fa-book mr-3 text-primary fa-fw"></i><div id="title">ASIGNACIONES</div>
             
            </a>
    </li>
    <li class="nav-item icon">
      <a id="assistance" href="./estudiantes.php" class="nav-link text-dark font-italic" target="myFrame">
      <i class="fas fa-address-card mr-3 text-primary fa-fw"></i><div id="title">ASISTENCIA</div>
                
            </a>
    </li>
    <li class="nav-item icon">
    <a id="score" href="./score.php" class="nav-link text-dark font-italic" target="myFrame">
    <i class="fas fa-list-ol mr-3 text-primary fa-fw"></i><div id="title">PUNTUACION</div>
    </a>
    </li>
    <!--<li class="nav-item icon">
    <a id="contact" href="./contact.php" class="nav-link text-dark font-italic" target="myFrame">
    <i class="fas fa-address-book mr-3 text-primary fa-fw"></i><div id="title">CONTACTOS</div>
    </a>
    </li>-->
    <li class="nav-item icon">
    <a id="reports" href="./reports.php" class="nav-link text-dark font-italic" target="myFrame">
    <i class="fas fa-file-invoice mr-3 text-primary fa-fw"></i><div id="title">INFORMES</div>
    </a>
    <!--<li class="nav-item icon">
    <a id="settings" href="./settings.php" class="nav-link text-dark font-italic" target="myFrame">
    <i class="fas fa-user-cog mr-3 text-primary fa-fw"></i><div id="title">CONFIGURACIONES</div>
    </a>
    </li>--><br>
    <hr style="color: #0056b2;" />

<li class="nav-item">
      <a id="logout" href="#" class="nav-link text-dark font-italic">
      <i class="far fa-arrow-alt-circle-left mr-3 text-primary fa-fw"></i>
                CERRAR SESION
            </a>
    </li>
  </ul>

      </div>
    </div>
    <div class="main_container">
      <div class="top_navbar">
          <div class="hamburger">
              <div class="hamburger__inner">
                  <i class="fas fa-bars"></i>  
              </div>  
          </div>
         <!--<ul class="menu">
            <li><a href="#" class="active">Blogs</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
         </ul>-->
         <ul class="right_bar">
            <li><i class="fas fa-search"></i></li>
            <li><i class="fas fa-sign-out-alt"></i></li> 
         </ul>
      </div>
      
      <div class="container">
      <div class="info">
       
            <iframe id="framegeneral" name="myFrame" src="./home.php" style="height: 100%; width: 100%; border: none" frameborder="0" allowfull>
            </iframe>
 
        </div>
    

        <!--<div class="item">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo quaerat vel iure quam repudiandae tempora velit sed ducimus obcaecati eum hic dignissimos porro, accusantium at corrupti dolor aut non suscipit eveniet cumque quo culpa?
        </div>
        <div class="item">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo quaerat vel iure quam repudiandae tempora velit sed ducimus obcaecati eum hic dignissimos porro, accusantium at corrupti dolor aut non suscipit eveniet cumque quo culpa?
        </div>
        <div class="item">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo quaerat vel iure quam repudiandae tempora velit sed ducimus obcaecati eum hic dignissimos porro, accusantium at corrupti dolor aut non suscipit eveniet cumque quo culpa?
        </div>
        <div class="item">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo quaerat vel iure quam repudiandae tempora velit sed ducimus obcaecati eum hic dignissimos porro, accusantium at corrupti dolor aut non suscipit eveniet cumque quo culpa?
        </div>
        <div class="item">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo quaerat vel iure quam repudiandae tempora velit sed ducimus obcaecati eum hic dignissimos porro, accusantium at corrupti dolor aut non suscipit eveniet cumque quo culpa?
        </div>
        <div class="item">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo quaerat vel iure quam repudiandae tempora velit sed ducimus obcaecati eum hic dignissimos porro, accusantium at corrupti dolor aut non suscipit eveniet cumque quo culpa?
        </div>
        <div class="item">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo quaerat vel iure quam repudiandae tempora velit sed ducimus obcaecati eum hic dignissimos porro, accusantium at corrupti dolor aut non suscipit eveniet cumque quo culpa?
        </div>
        <div class="item">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque nemo quaerat vel iure quam repudiandae tempora velit sed ducimus obcaecati eum hic dignissimos porro, accusantium at corrupti dolor aut non suscipit eveniet cumque quo culpa?
        </div>-->
      </div>
      
    </div>
</div>
	<script src="../scripts/main.js"></script>
</body>
</html>