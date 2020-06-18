<?php
    if (isset($_GET["content"])){
        $active = $_GET["content"];
    }else{
        $active = "";
    }
?>

<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" 
          type="button" 
          data-toggle="collapse" 
          data-target="#navbarNavAltMarkup" 
          aria-controls="navbarNavAltMarkup" 
          aria-expanded="false" 
          aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 <!-- search bar -->
    <nav class="">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
                <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg>
            </button>
        </form>
    </nav>

 <!-- nav paginas  -->
  <div class=" collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto lg-0" id="navItems">
            <ul class="navbar-centered navbar-nav mr-auto lg-0">
                <?php 
                if (isset($_SESSION["id"])) {
                    switch ($_SESSION["userrole"]) {
                        case 'admin':
                            echo '<li class="nav-item '; echo (in_array($active, ["a-home", ""])) ? "active": ""; echo'">
                                    <a class="nav-link" id="navText" href="./index.php?content=a-home">home</a>
                                 </li>';
                        break;
                        case 'root':
                            echo '<li class="nav-item '; echo (in_array($active, ["r-home", ""])) ? "active": ""; echo'">
                                    <a class="nav-link" id="navText" href="./index.php?content=r-home">home</a>
                                 </li>';
                        break;
                        case 'customer':
                            echo '<li class="nav-item '; echo (in_array($active, ["c-home", ""])) ? "active": ""; echo'">
                                    <a class="nav-link" id="navText" href="./index.php?content=c-home">home</a>
                                 </li>';
                        break;
                        default:
                            echo '<li class="nav-item '; echo (in_array($active, ["home", ""])) ? "active": ""; echo'">
                                    <a class="nav-link" id="navText" href="./index.php?content=home">home</a>
                                 </li>';
                        break;
                    }
                } else{
                    echo '<li class="nav-item '; echo (in_array($active, ["home", ""])) ? "active": ""; echo'">
                                    <a class="nav-link" id="navText" href="./index.php?content=home">home</a>
                                 </li>';
                }
                ?>
                <li class="nav-item <?php if ($active == "home") {echo "active";} ?>">
                    <a class="nav-link" id="navText" href="./index.php?content=products">Ewatches</a>
                </li>
                <li class="nav-item <?php if ($active == "home") {echo "active";} ?>">
                    <a class="nav-link" id="navText" href="./index.php?content=informatie">Informatie</a>
                </li>
                <li class="nav-item <?php if ($active == "home") {echo "active";} ?>">
                    <a class="nav-link" id="navText" href="./index.php?content=contact">Contact</a>
                </li>
                <li class="nav-item <?php if ($active == "home") {echo "active";} ?>">
                    <a class="nav-link" id="navText" href="./index.php?content=bmi">BMI</a>
                </li>
                <li class="nav-item <?php if ($active == "home") {echo "active";} ?>">
                    <a class="nav-link" href="./index.php?content=home"></a>
                </li>
            </ul>              
        </div>    
  </div>
   
  <!-- registreer en login button -->
  <div class="navbar">
    <ul class="nav navbar-nav navbar-right mr-auto lg-0">
        <?php
            if (isset($_SESSION["id"])) {
                switch($_SESSION["userrole"]) {
                    case 'admin':
                        echo '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle '; echo (in_array($active, ["users", "users_bmi"])) ? "active" : ""; echo '" href="#" id="navbarDropdownMenuLinkRight" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          admin workbench
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                          <a class="dropdown-item '; echo ($active == "users") ? "active" : ""; echo '" href="./index.php?content=users">users</a>
                          <a class="dropdown-item '; echo ($active == "users_bmi") ? "active" : ""; echo '" href="./index.php?content=users_bmi">users_bmi</a>
                        </div>
                      </li>';
                    break;
                    case 'root':
                        echo '<li class="nav-item '; echo ($active == "r-rootpage") ? "active" : ""; echo '">
                        <a class="nav-link" href="./index.php?content=r-rootpage">rootpage</a>
                        </li>';

                    break;
                    case 'customer':


                    break;
                    default:
                break;
                }
                echo '<li class="nav-item '; echo ($active == "logout") ? "active" : ""; echo '">
                            <a class="nav-link" href="./index.php?content=logout">uitloggen</a>
                      </li>';
            } else {
                   echo '<li class="nav-item '; echo ($active == "register") ? "active" : ""; echo '">
                            <a class="nav-link" href="index.php?content=register" id="navText"> 
                                <svg class="bi bi-box-arrow-in-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z"/>
                                    <path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z"/>
                                </svg>Registreren
                            </a>
                        </li>
                        <li class="nav-item '; echo ($active == "login") ? "active" : ""; echo '">
                            <a class="nav-link" href="./index.php?content=login" id="navText">
                                <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                </svg>Inloggen
                            </a>
                        </li>';
            }
        ?>



        </ul>     
  </div>  
</nav>