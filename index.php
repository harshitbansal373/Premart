<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<div id="container">

    <div class="mb-3 mobileview">
      <form action="search.php" method="POST">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Search" required>
          <span class="input-group-btn">
            <button name="submit" class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
          </span>
        </div>
      </form>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/Mobile-Accessories.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/slide1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/winters.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="mt-4 py-3" style="background-color: white;">
        <div style="margin-left:4%;font-weight: bold;font-size: 20px;">Deals of the Day</div>
        <div class="row text-center mt-2">
            <div class="col-sm-2 ml-4 mr-2">
              <div style="height:100px">
                <img class="img-fluid ad" src="images/PicsArt_03-11-01.59.27.jpg" width="100" alt="...">
              </div>
              <div class="mt-2">
                <p class="addiscription">REEBOK <br>
                AST WALK LP Walking Shoe <br> For Men  (Olive, Purple) <br>
                ₹2,222 <s>₹3,899</s> 43% off
                </p>
              </div>
            </div>
            <div class="col-sm-2 mr-2">
              <div style="height:100px">
                <img class="img-fluid ad" src="images/PicsArt_03-11-01.54.35.jpg" width="100" alt="...">
              </div>
              <div class="mt-2">
                <p class="addiscription">Cello H2O 1000 ml Bottle <br>
                (Pack of 3, Multicolor)
                ₹394 <s>₹504</s> 21% off
                </p>
              </div>
            </div>
            <div class="col-sm-2 mr-2">
              <div style="height:100px">
                <img class="img-fluid ad" src="images/PicsArt_03-11-01.56.18.jpg" width="100" alt="...">
              </div>
              <div class="mt-2">
                <p class="addiscription">Sony XB650BT Bluetooth Headset with Mic <br>
                Red, Over the Ear <br>
                ₹5,900 <s>₹7,490</s> 21% off
                </p>
              </div>
            </div>
            <div class="col-sm-2 mr-2">
              <div style="height:100px">
                <img class="img-fluid ad" src="images/PicsArt_03-11-01.57.01.jpg" width="100" alt="...">
              </div>
              <div class="mt-2">
                <p class="addiscription">Sandisk Cruzer Blade 32 GB <br>
                    Multicolor <br>
                    ₹439 <s>₹548</s> 19% off
                </p>
              </div>
            </div>
            <div class="col-sm-2 mr-4">
              <div style="height:100px">
                <img class="img-fluid ad" src="images/PicsArt_03-11-01.57.42.jpg" width="100" alt="...">
              </div>
              <div class="mt-2">
                <p class="addiscription">YAMAMA Modern HB ROCK CRAWLER (Original) <br>
                4x4 RALLY CAR <br>
                ₹979 <s>₹2,999</s> 67% off
                </p>
              </div>
            </div>
            <div style="background-color:blue;width:150px" class="text-center webview">
              <a href="deal.php">
                <p style="color:white;margin-top:60%;font-family: 'Sniglet', cursive;font-size:24px">view more</p>
              </a>
            </div>
        </div>
            <div class="text-center mobileview">
              <a href="deal.php">
                <p style="color:blue;font-family: 'Sniglet', cursive;font-size:24px">view more</p>
              </a>
            </div>
    </div>

    <div class="row text-center mt-4" style="background-color: white;">
        <div class="col-sm-3">
          <img class="img-fluid" src="images/6f1e0e2a-fcb6-4fff-9574-3203aadcbd581551872368607-USPA_AHPMB_AR3.jpg" width="70%" alt="">
        </div>
        <div class="col-sm-3">
          <img class="img-fluid" src="images/58dc17ce-87a4-4392-8268-1d2c74e0ec3b1552052714359-M-H-Justin-785-x-1030-px.jpg" width="70%" alt="">
        </div>
        <div class="col-sm-3">
          <img class="img-fluid" src="images/a5413e17-9fea-4b03-94a4-c34c03aaf6561551869855051-DP-Mango-Next_AHPMB_AR1.jpg" width="70%" alt="">
        </div>
        <div class="col-sm-3">
          <img class="img-fluid" src="images/e21cd5be-27cf-4f6c-bfcd-6bf28a0ae2a01552026611931-Wildcraft-Nov_aks-_AHPMB_BF3.jpg" width="70%" alt="">
        </div>
    </div>

    <div class="text-center mt-4" style="background-color: white;">
        <img class="img-fluid" src="images/Home-Products._CB454409463_.jpg" alt="">
    </div>

    <div class="row text-center mt-4 mb-5" style="background-color:antiquewhite;margin-bottom:10%;">
        <div class="col-sm-4">
          <img class="img-fluid" src="images/smallbusi_BB._UX440_SX440_CB453846969_.jpg" alt="">
        </div>
        <div class="col-sm-4">
          <img class="img-fluid" src="images/WA-PCBB-440x2001._CB454299065_.jpg" alt="">
        </div>
        <div class="col-sm-4">
          <img class="img-fluid" src="images/amznjaco.jpg" alt="">
        </div>
    </div>

</div>

<!-- Footer -->
<footer class="py-3 bg-dark">
      <div class="container">
        <p class="text-center text-white">
          <a style="color:white" href="https://github.com/harshitbansal373"><i class="fab fa-github fa-2x mr-3"></i></a>
          <a style="color:white" href="https://www.linkedin.com/in/harshit-bansal"><i class="fab fa-linkedin fa-2x mr-3"></i></a>
          <a style="color:white" href="https://www.instagram.com/harshitbansal981"><i class="fab fa-instagram fa-2x mr-3"></i></a>
          <a style="color:white" href="https://www.facebook.com/harshit.bansal.7505"><i class="fab fa-facebook fa-2x mr-3"></i></a>
          <br><br>&copy; <?php echo date("Y");?> |
          Design By <a href="https://github.com/harshitbansal373" style="color:yellow">Harshit Bansal</a>
        </p>
      </div>
      <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="js/homescript.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
