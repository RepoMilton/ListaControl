<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/principal.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>JSP Page</title>
 
        <style>
            
        </style>
    </head>
    <body>

  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<!--<div class="wrapper">
    <div class="sidebar">
        <h4>School Online</h4>
        <ul>
            <li><a href="#"><i class="fas fa-home" target="myFrame"></i>Home</a></li>
            <li><a href="./infouser.php" target="myFrame"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="#"><i class="fas fa-book"></i>Assignments</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Assistance</a></li>
            <li><a href="#"><i class="fas fa-list-ol"></i>Score</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="#"><i class="fas fa-file-invoice"></i>Reports</a></li>
            <li><a href="#"><i class="fas fa-user-cog"></i>Settings</a></li>
        </ul> 
       <!-- <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>-->
    <!--</div>
    <div class="main_content">
        <div class="header">
        <button id="btnlogouser"><img id="logouser" src="../images/User2.png"></button>
        </div>  
    <center><div class="info">
       
            <iframe name="myFrame" src="" style="height: 100%; width: 100%; border: none">
            </iframe>
 
        </div></center>
      </div>
    </div>
</div>-->
<!-- Vertical navbar -->
<div id="padre">
<div class="vertical-nav bg-white" id="sidebar"><center><button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-3"><i class="fa fa-bars mr-2"></i><!--<small class="text-uppercase font-weight-bold"></small>--></button></center>
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center"><img src="https://i0.pngocean.com/files/646/234/563/computer-icons-user-clip-art-sign-up-button.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0">Juan Sanchez</h4>
        <p class="font-weight-light text-muted mb-0">Docente</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Principal</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a id="home" href="./home.php" class="nav-link text-dark font-italic" target="myFrame">
      <i class="fas fa-home mr-3 text-primary fa-fw"></i>Home
              
            </a>
    </li>
    <li class="nav-item">
      <a id="profile" href="./profile.php" class="nav-link text-dark font-italic" target="myFrame">
              <i class="fas fa-user mr-3 text-primary fa-fw"></i>Profile
            </a>
    </li>
    <li class="nav-item">
      <a id="assignments" href="./assignments.php" class="nav-link text-dark font-italic" target="myFrame">
      <i class="fas fa-book mr-3 text-primary fa-fw"></i>Assignments
             
            </a>
    </li>
    <li class="nav-item">
      <a id="assistance" href="./assistance.php" class="nav-link text-dark font-italic" target="myFrame">
      <i class="fas fa-address-card mr-3 text-primary fa-fw"></i>Assistance
                
            </a>
    </li>
    <li class="nav-item">
    <a id="score" href="./score.php" class="nav-link text-dark font-italic" target="myFrame">
    <i class="fas fa-list-ol mr-3 text-primary fa-fw"></i>Scores
    </a>
    </li>
    <li class="nav-item">
    <a id="contact" href="./contact.php" class="nav-link text-dark font-italic" target="myFrame">
    <i class="fas fa-address-book mr-3 text-primary fa-fw"></i>Contact
    </a>
    </li>
    <li class="nav-item">
    <a id="reports" href="./reports.php" class="nav-link text-dark font-italic" target="myFrame">
    <i class="fas fa-file-invoice mr-3 text-primary fa-fw"></i>Reports
    </a>
    <li class="nav-item">
    <a id="settings" href="./settings.php" class="nav-link text-dark font-italic" target="myFrame">
    <i class="fas fa-user-cog mr-3 text-primary fa-fw"></i>Settings
    </a>
    </li>
  </ul>

  <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Gráficos</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a id="areag" href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                Area Graphic
            </a>
    </li>
    <li class="nav-item">
      <a id="barg" href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                Bar Graphic
            </a>
    </li>
    <li class="nav-item">
      <a id="pieg" href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                Pie Graphic
            </a>
    </li>
    <li class="nav-item">
      <a id="lineg" href="#" class="nav-link text-dark font-italic">
                <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                Line Graphic
            </a>
    </li>
  </ul><hr style="color: #0056b2;" />
  <ul class="nav flex-column bg-white mb-0">
<li class="nav-item">
      <a id="logout" href="#" class="nav-link text-dark font-italic">
      <i class="far fa-arrow-alt-circle-left mr-3 text-primary fa-fw"></i>
                Logout
            </a>
    </li>
    
</ul>
</div>

<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->
  

  <!-- Demo content -->
  <!--<h2 class="display-4 text-black">Bootstrap vertical nav</h2>
  <p class="lead text-white mb-0">Build a fixed sidebar using Bootstrap 4 vertical navigation and media objects.</p>
  <p class="lead text-white">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white">
        <u>Bootstrapious</u></a>
  </p>
  <div class="separator"></div>
  <div class="row text-white">
    <div class="col-lg-7">
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
      <div class="bg-white p-5 rounded my-5 shadow-sm">
        <p class="lead font-italic mb-0 text-muted">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      </div>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
    </div>
    <div class="col-lg-5">
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
    </div>
  </div>

</div>-->
<div class="info">
       
            <iframe name="myFrame" src="" style="height: 100%; width: 100%; border: none">
            </iframe>
 
        </div>
        </div></div>
<!-- End demo content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="../scripts/principal.js"></script>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>