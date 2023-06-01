<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean One</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="assets/logo/Logo.png">
</head>
<body>

  <!-- Section 1 -->
  <div class="container full-height">
    <nav id="header" class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
              <img src="assets/logo/Logo-OceanOne-white.png" height="30px">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="headerbg()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="#" class="nav-link text-white">Action</a>
                    <a href="#" class="nav-link text-white">Resources</a>
                    <a href="#" class="nav-link text-white">Projects</a>
                    <a href="#" class="nav-link text-white">Explore</a>
                </div>
            </div>
        </div>
    </nav>
  </div>
  <div class="container">
    <div class="text-white text-center position-absolute top-50 start-50 translate-middle">
        <h1 class="title" style="font-size: 50px;">
          Empowering communities, saving the seas
        </h1>
        <p style="margin: 30px 0;">
          Ocean One empowers Pacific communities to reduce plastic waste 
          and protect the ocean through education and support
        </p>
        <button type="button" id="btn" onclick="alert('I am taking an action!')">TAKE ACTION</button>
    </div>
  </div>

  <!-- Section 2 -->
  <div class="container-md section-margin-top">
    <h2 class="title">OFFSET YOUR<br>PLASTIC FOOTPRINT</h2>
    <div class="row justify-content-between">
      <?php
        include 'koneksi.php';
        $part = mysqli_query($conn, "SELECT * FROM section2");
        foreach ($part as $row)
        echo '
        <div class="col-md-3">
          <div class="container-section-2">
            <h4 class="title">'.$row["title"].'</h4>
            <hr>
            <p>
            '.$row["content"].'
            </p>
          </div>
          <button type="button" class="section-2-btn">'.$row["button"].'</button>
        </div>
        ';
      ?>
    </div>
  </div>

  <!-- Section 3 -->
  <div class="container-fluid section-margin-top section-3-bg text-center">
    <h2 class="text-white text-center title">MAKE YOUR IMPACT</h2>
    <div class="container">
      <div class="row">
        <div class="text-center col-md-3">
          <div class="icon container align-items-center">
            <img class="svg" src="assets/icon/trash-fill.svg">
          </div>
          <h6 class="text-white">COMMIT TO REMOVING<br>A SPECIFIC AMOUNT</h6>
        </div>
        <div class="text-center col-md-3 ms-md-auto">
          <div class="icon container align-items-center">
            <img class="svg" src="assets/icon/clipboard-data-fill.svg">
          </div>
          <h6 class="text-white">TIE REMOVAL TO<br>PRODUCT SALES</h6>
        </div>
        <div class="text-center col-md-3 ms-md-auto">
          <div class="icon container align-items-center">
            <img class="svg" src="assets/icon/coin.svg">
          </div>
          <h6 class="text-white">INCENTIVIZE<br>COMMUNITY ACTION</h6>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 4 -->
  <div class="container-fluid">
    <div class="container section-margin-top">
        <hr>
        <p style="margin-bottom: 0;">PROJECT 1:</p>
        <h1 class="title">OCEANBOUND CLEAN UP</h1>
      </div>
    <div class="row align-items-center row-1">
        <div class="col-md-6 col-img">
            <img src="assets/img/seagull.jpg" width="100%">
        </div>
        <div class="col-md-6 col-text">
            <h5 class="title">PROBLEMS</h5>
            <p>
              Plastic recycling generates plastic waste effluent as a standard part of the process. 
              This dirty discharge known as "Mud" is at risk of being discharged into the wastewater 
              and, in the best-case, is usually taken to the nearest landfill.
            </p>
        </div>
    </div>
    <div class="row align-items-center text-end row-2">
        <div class="col-md-6 col-text">
            <h5 class="title">SOLUTION</h5>
            <p>
              Repurposes the “Mud” into useful building materials. It's composition is perfect for 
              producing bricks! Unfortunately, these recycled plastic compound bricks are slightly 
              more expensive than standard building bricks, so Impac+ program incentivizes the reuse 
              of the “Mud” in the bricks by making them competitive on the open market.
            </p>
        </div>
        <div class="col-md-6 col-img">
            <img src="assets/img/bricks.jpg" width="100%">
        </div>
    </div>
    <div class="container section-margin-top">
        <hr width="100%">
        <p style="margin-bottom: 0;">PROJECT 2:</p>
        <h1 class="title">FISHING NET RECOVERY</h1>
      </div>
    <div class="row align-items-center row-2">
        <div class="col-md-6 col-img">
            <img src="assets/img/net.jpg" width="100%">
        </div>
        <div class="col-md-6 col-text">
            <h5 class="title">PROBLEMS</h5>
            <p>
              Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the 
              ocean. Unfortunately, incentives do not exist to recover this gear so at the end of its 
              life, most gets landfilled or simply cut away at sea. It's a huge reason for why fishing 
              nets are the largest ocean plastic polluter.
            </p>
        </div>
    </div>
    <div class="row align-items-center text-end row-1">
        <div class="col-md-6 col-text">
            <h5 class="title">SOLUTION</h5>
            <p>
              We provides the funds needed to incentivize collection and recycling of this gear. This 
              program creates a pathway for the reclamation of end of life fishing gear.
            </p>
        </div>
        <div class="col-md-6 col-img">
            <img src="assets/img/fishing-gear.jpg" width="100%">
        </div>
    </div>
  </div>

  <!-- Plastic waste calculator -->
  <div class="container section-margin-top" id="container">
    <div class="text-center">
        <h1 class="title">ITEMS YOU CONSUME DAILY</h1>
        <h4>Please enter the quantity for <b>each day:</b></h4>
    </div>
    <table class="table table-borderless">
        <tr>
            <td></td>
            <td><h5><b>DAY</b></h5></td>
            <td><h5><b>YEAR</b></h5></td>
        </tr>
        <tr>
            <td><b>Plastic Bottles</b></td>
            <td><input class="input" type="number" oninput="total()"></td>
            <td class="output"></td>
        </tr>
        <tr>
            <td><b>Plastic Cups</b></td>
            <td><input class="input" type="number" oninput="total()"></td>
            <td class="output"></td>
        </tr>
        <tr>
            <td><b>Straws</b></td>
            <td><input class="input" type="number" oninput="total()"></td>
            <td class="output"></td>
        </tr>
        <tr>
            <td><b>Cotton Swabs</b></td>
            <td><input class="input" type="number" oninput="total()"></td>
            <td class="output"></td>
        </tr>
        <tr>
            <td><b>Cigarette Butts</b></td>
            <td><input class="input" type="number" oninput="total()"></td>
            <td class="output"></td>
        </tr>
        <tr>
            <td><b>Plastic Resealable Bags</b></td>
            <td><input class="input" type="number" oninput="total()"></td>
            <td class="output"></td>
        </tr>
        <tr>
            <td><b>Plastic Cling Wrap</b></td>
            <td><input class="input" type="number" oninput="total()"></td>
            <td class="output"></td>
        </tr>
        <tr>
            <td><b>Plastic Silverware</b></td>
            <td><input class="input" type="number" oninput="total()"></td>
            <td class="output"></td>
        </tr>
        <tr>
            <td><b>Plastic Stirrers</b></td>
            <td><input class="input" type="number" oninput="total()"></td>
            <td class="output"></td>
        </tr>
        <tr>
            <td><b>Food Container</b></td>
            <td><input class="input" type="number" oninput="total()"></td>
            <td class="output"></td>
        </tr>
    </table>
    <div class="container-fluid text-center" id="bottom">
        <div class="row">
            <h5>Current Yearly Consumption</h5>
        </div>
        <div class="row" id="result"></div>
    </div>
  </div>

  <!-- Section 5 -->
  <div class="container section-margin-top">
    <h1 class="section-margin-top text-center title">GET IN TOUCH</h1>
    <div class="row">
      <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60483268.673821345!2d36.19090419999994!3d22.292919299999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34040161f4460bb1%3A0xac9661f39722a25!2sOcean%20One!5e0!3m2!1sen!2sid!4v1683293503773!5m2!1sen!2sid" 
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-md-6">
        <form action="@" method="none" enctype="text/plain">
          <input id="name" type="text" size="25" placeholder="Name" required>
          <input id="email" type="text" size="25" placeholder="Email" required>
          <input id="message" class="text-area" type="textarea" rows="4" cols="50" placeholder="Write your message here" required><br>
          <button id="showButton" class="button" type="button" onclick="show()">SEND</button>
          <div id="hiddenElement">
            <h5 id="thanks"></h5>
            <p id="hello"></p>
            <p id="contact"></p>
            <p id="messages"></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <table style="width: 100%;">
        <tr>
          <td>
            <img src="assets/logo/Logo-OceanOne-black.png" height="30px">
          </td>
          <td class="text-end">
            <a class="footer-a" href="#">Newsletter</a>
            <a class="footer-a" href="#">Privacy policy</a>
            <a class="footer-a" href="#">FAQs</a>
          </td>
        </tr>
      </table>
    </div>
  </footer>
  
  <script src="assets/OceanOne.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>