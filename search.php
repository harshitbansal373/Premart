<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

    <!-- Page Content -->
    <div id="container">

      <div class="row">

        <!-- Sidebar Widgets Column -->
        <div class="col-md-3">
          <h3 class="ml-2">Filter</h3>
          <img class="img-fluid" src="images/filterimage.png" alt="...">
        </div>

        <!-- Blog Entries Column -->
        <div class="col-md-6" style="margin-bottom:5%">
            <?php
            if(isset($_POST['submit'])){
                $search = $_POST['search'];

                echo '<h3 class="mb-4">Showing Result for "'.$search.'"</h3>';
            
                $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' OR post_title LIKE '%$search%' ORDER BY post_id DESC";
                $search_query = mysqli_query($connection,$query);
                confirm_query($search_query);
                $count = mysqli_num_rows($search_query);

                if($count == 0){
                    echo '<div class="p-4 webview" style="margin-top:20%">
                            <h1 class="text-center">NO Result Found<img class="img-fluid ml-3" src="icon/search-engine.png" alt=".."></h1>
                          </div>
                          <div class="p-4 mobileview" style="margin-top:5%">
                            <h1 class="text-center" style="font-size:22px">NO Result Found<img class="img-fluid ml-3" src="icon/search-engine-mobile.png" alt=".."></h1>
                          </div>';
                }
                else{
                    while($row = mysqli_fetch_assoc($search_query)){
                        $post_id = $row['post_id'];
                        $post_title = $row['post_title'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
            ?>
 
            <!-- <h3 class="mb-4">Showing Result for "<?php echo $search; ?>"</h3> -->
            <div class="media" style="margin-top:4%">
              <img src="images/<?php echo imagePlaceholder($post_image);?>" width="100" class="img-fluid webview align-self-center mr-3" alt="...">
              <img src="images/<?php echo imagePlaceholder($post_image);?>" width="80" class="img-fluid mobileview align-self-center mr-3" alt="...">
              <!-- <img src="http://placehold.it/200x270" class="img-fluid webview align-self-center mr-3" alt="..."> -->
              <!-- <img src="http://placehold.it/120x180" class="img-fluid mobileview align-self-center mr-3" alt="..."> -->
              <div class="media-body">
                <h5 class="mt-0"><b><?php echo $post_title; ?></b></h5>
                <p><?php echo $post_content; ?></p>
                <button type="button" class="btn btn-primary" id="showdeal">More Deals From</button>
              </div>
            </div>
              <div id="moredeal">
                <table class="table table-hover text-center" style="color:black;font-weight:bold">
                  <thead>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Amazon</td>
                      <td>9999₹/-</td>
                    </tr>
                    <tr>
                      <td>Flipkart</td>
                      <td>9999₹/-</td>
                    </tr>
                    <tr>
                      <td>Snapdeal</td>
                      <td>9999₹/-</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            <?php   } 
                }
            }
            ?>

            <br>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-3">
            <img class="paidads" src="ads/pepsi-black-ad-bangalore-times-13-6-17.jpg" width="300" alt="">
            <img class="paidads" src="ads/20110530125343_Capture.jpg" width="300" alt="">
            <img class="paidads" src="ads/web.ae_.feministads.courtesy.picB_.jpg" width="300" height="200" alt="">
        </div>


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->


<?php include "includes/footer.php";?>