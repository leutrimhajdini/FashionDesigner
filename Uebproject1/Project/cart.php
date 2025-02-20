<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./Fotot/rrj.png">

    <title>Permasat</title>
    
  </head>
  <header><?php include "header.php" ?></header>

<body>
  <div class="cart-items">
    <div id="shoppingPrice">
    <h2>Shopping cart</h2>
    <div>Price</div>
    </div>

    <div id="horizontalLine"></div>
      <div class="imageAndTitle">
        <img src="./Fotot/kapese.jpg" alt="Cart-Item #1">
        <div>Kapese per floke</div>
        <div style="margin-right: 1%">3.99</div>
      </div>
      <div id="horizontalLine" style="margin-bottom: 2%;"></div>

      <div class="subprice">
        <div>Subtotal <span id="totalItems">(2 items): </span><span id="totalPrice">3.99</span></div>
      </div>
      <div id="checkoutSection">
        <button id="checkout">Konfirmo porosinë</button>
      </div>
    </div>

      <div class="whiteBackground"></div>

      <div class="infos">Karroca është një vend i përkohshëm për të ruajtur një listë të artikujve tuaj dhe pasqyron çmimin më të fundit të secilit artikull. Çmimi dhe disponueshmëria e artikujve në mund të ndryshojnë. Pasi ta perfundoni porosinë, ekipi jonë do të ju kontaktoj në numrin e telefonit për të konfirmuar porosinë. Pagesa kryhet pasi ta keni marrë produktin.</div>



  <footer class="text-white text-center text-lg-start bg-dark">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Rreth nesh</h5>

          <p>
            Në Rrobaqepese Jeta, ne jemi të përkushtuar t'u ofrojmë klientëve tanë përvojën më të mirë të mundshme të blerjeve. 
          </p>

          <p>
            Nga përzgjedhja jonë e produkteve te angazhimi ynë për shërbimin e jashtëzakonshëm ndaj klientit, ne përpiqemi të shkojmë më lart dhe përtej për të përmbushur nevojat tuaja.
          </p>


        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5>Rrjetet sociale</h5>
          <div class="form-outline form-white mb-4">
              <ul class="fa-ul" style="margin-left: 1.65em;">
                  <li class="mb-3">
                    <span class="fa-li"><i class="fas fa-home"></i></span><a href="https://www.facebook.com/rrobaqepesejeta" target="_blank" style="font-weight:normal"><span class="ms-2">Facebook</span></a>
                  </li>
                  <li class="mb-3">
                      <span class="fa-li"><i class="fas fa-home"></i></span><a href="https://www.instagram.com/rrobaqepese_jeta/?hl=en" target="_blank" style="font-weight:normal"><span class="ms-2">Instagram</span></a>
                </ul>           
               </div>
          <h5>Detajet e kontaktit</h5>
          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Dëshmorët e Kombit, Mitrovica, Kosovo, 40060</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2"> info@rrobaqepesejeta.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+383 49 403 024</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Orari i punës</h5>

          <table class="table text-center text-white">
            <tbody class="fw-normal">
              <tr>
                <td>E hëne - E premte:</td>
                <td>10:00 - 18:00</td>
              </tr>
              <tr>
                <td>E shtune:</td>
                <td>12:00 - 18:00</td>
              </tr>
              <tr>
                <td>E diele:</td>
                <td>Pushim</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="index.html">rrobaqepesejeta.com</a>
    </div>
    <!-- Copyright -->
  

</footer>
</body>
</html>

<script src="/js/cart.js">
 </script>
