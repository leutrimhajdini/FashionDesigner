<!DOCTYPE html>
<html lang="en">
  <style>
    a {
    font-size:14px;
    font-weight:700;
  }
  .superNav {
    font-size:13px;
  }
  .form-control {
    outline:none !important;
    box-shadow: none !important;
  }
  @media screen and (max-width:540px){
    .centerOnMobile {
      text-align:center
    }
  }
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-toggle {
    background-color: #fff;
    color: #000;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
  }
.dropdown a {
  color: #000;
  text-decoration: none;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  display: none;
  background-color: #fff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  padding: 10px;
}

.dropdown:hover .dropdown-menu {
  display: block;
}
  
.dropdown-item {
    color: #000;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
  
.dropdown-item:hover {
    background-color: #f2f2f2;
}


    #products_in_cart{
  border: 1px solid red;
  background-color: white;
  color: red;
  border-radius: 50%;
  position: absolute;
  margin-left: 30px;
  width: 20px;
  height: 20px;
  max-width: 40px;
  max-height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  
}
.page-link{
  border-radius: 50px;
  background-color: #F8FFF4;
  
}

.pagination{
  margin-left: -80px;
}



.product-price{
  margin-left: 2%;
}

#shporta{
  margin-left: 8px;
}
  </style>

<header>

    <div class="superNav border-bottom py-2 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
              <select  class="me-3 border-0 bg-light">
                <option value="en-us">AL</option>
              </select>
              <span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><strong>&#x2709; info@rrobaqepesejeta.com</strong></span>
              <span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i>&#x260E; <strong>383-49-403-024</strong></span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
              <span class="me-3"><i class="fa-solid fa-file  text-muted me-2"></i>&#x1F69A; <a class="text-muted" href="#">Transporti</a> </span>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="index.php"><i class="fa-solid fa-shop me-2"></i> <strong>Rrobaqepese Jeta</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
       
          <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
            <div class="input-group">
              <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
              <input type="text" class="form-control border-warning" style="color:#7a7a7a">
              <button class="btn btn-warning text-white">Search</button>
            </div>
          </div>
          <div class=" collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 text-uppercase" href="produktet.php">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 text-uppercase" href="permasat.php">Permasat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 text-uppercase" href="kontakt.php">Kontakt</a>
              </li>

            </ul>
            <ul class="navbar-nav ms-auto ">
              <li class="nav-item">
                <div id="products_in_cart">0</div>
                <a class="nav-link mx-2 text-uppercase" href="/html/cart.php">&#x1F6D2; <span id="shporta">0,00</span>€</a>
              </li>
              <li class="dropdown">
                <button class="dropdown-toggle">&#x1F469; Llogaria</button> 
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Profili</a>
                  <a class="dropdown-item" href="#">Porosite</a>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>

<script src="./js/produktet.js"></script>
