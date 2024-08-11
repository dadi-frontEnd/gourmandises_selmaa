<?php
 if(!isset($_SESSION)){
    //si non demarer la session
    session_start();
 }

 


 

?>


<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand logo" href="#home">
      <img src="images/logo.PNG" alt="gourmandise_selma" />
    </a>
    <button
      class="navbar-toggler"
      id="btn-toggle"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fa-solid fa-bars" id="bars"></i>
      <i class="fa-solid fa-xmark" id="xmark"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#categories"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Traditionel</a></li>
            <li><a class="dropdown-item" href="#">Prestige</a></li>
            <li><a class="dropdown-item" href="#">Wedding Cake</a></li>
            <li><a class="dropdown-item" href="#">Birthday Cake</a></li>
            <li><a class="dropdown-item" href="#">Mini Cake</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#product">Our Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#revious">Revious</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#blog">Blog</a>
        </li>
        <li class="nav-item  ml-3">
          <?php if (isset($_SESSION['login'])) {
    if($_SESSION['login']==='oui'){
        if (isset($_SESSION['isAdmin'])){
             if($_SESSION['isAdmin'] == "oui") {
      ?>
    
  <a href="../../admin" class='btn'>Accéder à l'administration du site</a>
    <?php }
    }
  }
}
    ?>
        </li>
      </ul>
      <ul class="navbar-nav right">
         <!-- Icône du panier -->
        <li class="nav-item">
          <a class="nav-link" href="panier.php" id="cart_nav">
            <i class="fa-solid fa-cart-shopping fa-lg" id="cart_icon"></i>
            <!-- <span class="badge bg-danger" id="cart_count">0</span> -->
          </a>
        </li>
         <li class="nav-item">
          <span class="user" style="color:red"><?= isset($_SESSION['user_c'])?  $_SESSION['user_c']:''  ?></span>
        </li>
           <!-- Icône d'utilisateur -->
        <li class="nav-item">
          <a class="nav-link" href="auth/register.php" id=user_nav>
            <i class="fa-solid fa-user fa-lg" id="user_icon"></i>
          </a>
        </li >
       
      </ul>

      </form>
    </div>
  </div>
</nav>
