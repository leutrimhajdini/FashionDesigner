<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/kontakt.css">
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./Fotot/rrj.png">

    <title>Kontakt</title>
    
  </head>

  <header><?php include "header.php"?>
  </header>

<body>
    <div id = "kontaktiText">
      <h1>Na kontaktoni</h1><br>
    <p>Nëse keni ndonjë pyetje apo shqetësim, ju lutemi mos hezitoni të na kontaktoni. Ekipi ynë është i disponueshëm nga e hëna deri të premten nga ora 08:00 deri në orën 20:00 për t'ju ndihmuar. Mund të na kontaktoni me telefon në +(383)49 40 30 24, ose me email në info@rrobaqepesejeta.com. Mezi presim të dëgjojmë nga ju!</p>
    </div>
    <div class="customer-support">
        <h2>Customer Support</h2><br>
        <form action="/php/contact.php" method="post">
        <div class="contact-form">
            <form action="send_form.php" method="post">
            <div id="nameEmail">
              <div id="nameDiv">
            <label for="name">Emri *</label>
              <input type="text" id="name" name="name" required>
              </div>
              <div id="emailDiv">
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" required>
              </div>
            </div>

              <label for="subject">Titulli *</label><br>
              <input type="text" id="subject" name="subject" required>
      
              <label for="message">Mesazhi *</label><br>
              <textarea id="message" name="message" rows="5" required></textarea>
                <br><br>
              <input type="submit" value="Submit">
            </form>
          </div>
        <div>Ju lutem perfshini sa më shumë detaje në mesazh që të kemi më të lehtë për të ju ndihmuar</div>  
      </div>
      <br><br><br><br><br>

      <div class="faq-section">
        <h1 style="text-align: center;">FAQ</h1>
        <div id="horizontalLine"></div>
        <div id="questionExtendAnswer">
          <div id="question">Si mund të porosisë?</div>
          <div id="extendAnswer">+</div>
        </div>
        <div id="answer">Pasi të keni zgjedhur produktin e dëshiruar, shtoni në shportë dhe zgjedheni adresën dhe mënyren e pageses</div>
      </div>










<footer class="text-white text-center text-lg-start bg-dark">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row mt-4">
            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase mb-4">Rreth nesh</h5>
    
              <p>
                  Tek rrobaqepese Jeta, ne jemi të pasionuar për krijimin e produkteve që kanë një ndikim pozitiv në jetën e njerëzve.
              </p>
    
              <p>
                  Përkushtimi ynë ndaj cilësisë dhe inovacionit na shtyn të shtyjmë vazhdimisht kufijtë e asaj që është e mundur.
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
          <a class="text-white" href="index.php">rrobaqepesejeta.com</a>
        </div>
        <!-- Copyright -->
      
    
</footer>
<script src="./js/sherbimet.js">

</script>

</body>

</html>