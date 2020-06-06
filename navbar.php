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

  <div class=" collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto lg-0" id="navItems">
            <ul class="navbar-centered navbar-nav mr-auto lg-0">
                <li class="nav-item <?php if ($active == "home") {echo "active";} ?>">
                    <a class="nav-link" id="navText" href="./index.php?content=home">Home</a>
                </li>
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
                    <a class="nav-link" href="./index.php?content=home"></a>
                </li>
            </ul>              
        </div>    
  </div>
   
  
  <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="#"> Sign Up</a>
        </li>
        <li>
            <a href="#">Login</a>
        </li>
    </ul>     

  
</nav>