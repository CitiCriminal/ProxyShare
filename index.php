<?php
require_once("./includes/configuration.php");
?>
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <meta name="description" content="Free checked proxies uploaded here daily!">
    <meta name="keywords" content="Free proxies, high proxy cpm, proxy good cpm, proxies scrape, scraped proxies, proxy free for checking, account checking proxies, proxies for attacks">
    <meta property="og:title" content="Proxied.Club">
    <meta property="og:description" content="Free checked proxies uploaded daily.">
    <meta property="og:url" content="https://proxied.club/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://38.media.tumblr.com/899825bff265b35580dc87ac51b118ac/tumblr_nvlgicbeWH1r3lrt6o1_250.gif">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="assets/boxicons-2.1.1/css/boxicons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="script" href="script.js">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <title>Proxied.Club - Free Proxies</title>
  </head>
  <body><canvas class="background d-none d-xl-block d-none d-md-block d-lg-none d-none d-lg-block d-md-block"></canvas>
    <div class="nav " style="position: fixed; z-index: 5"><input type="checkbox" id="nav-check">
      <div class="nav-btn"><label for="nav-check"><span></span><span></span><span></span></label></div>
      <div class="nav-links container" style=" align-self: center; text-align: center;">
        <div class="dropdown"><button style="width:180px;" class="dropbtn">Other Sites</button>
          <div class="dropdown-content"><a href="https://1337.bond">Portfolio</a><a href="https://intery.wtf">Intery</a><a href="https://pasa.ovh">Pasa</a></div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container">
        <h1 style=" font-size: 35px; color: rgba(255, 255, 255, 0.63);" class="mb-5 ">Welcome to Proxied.Club</h1>
        <h2 style=" font-size: 20px; margin-top: -3%; opacity: 50%;" class="mb-5 ">We try uploading Proxies Daily!</h2>
        <div class="grey-bg container-fluid">
          <section id="minimal-statistics">
            <div style="position:relative; bottom:200px;"  class="row" style=" color: rgba(255, 255, 255, 0.63); ">
            <h2 style=" font-size: 20px; margin-top: 5%; opacity: 50%;">Recent Uploads </h2>
            <div class="table-responsive custom-table-responsive">
              <table class="table custom-table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">date</th>
                    <th scope="col">Category</th>
                    <th scope="col">Lines</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr scope="row">
                    <?php
                      $sql = "SELECT * FROM proxy";
                      $stmt = $pdo->prepare($sql);
                      $stmt->execute();
                      while($proxy = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $id = $proxy['id'];
                        $title = $proxy['title'];
                        $category = $proxy['category'];
                        $date = $proxy['date'];
                        $lines = $proxy['lines'];
                        $link = $proxy['link'];
                        ?>

                      <th scope="row"></th>
                        <td> <?php echo $id; ?> </td>
                        <td><a href="#"><?php echo $title; ?></a></td>
                        <td><?php echo $date; ?></td>
                        <td class="gaming"><?php echo $category; ?> </td>
                        <td><?php echo $lines; ?></td>
                        <td><a href="<?php echo $link; ?>" class="btn">Download</a></td>
                        </tr>
                        <tr class="spacer">
                        <td colspan="100"></td>
                      </tr>

                      <?php }
                    ?>
                </tbody>
              </table>
            </div>
        </div>
      </div>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
  </body>
  <script src="assets/particles.js-master//src/particles.js"></script>
</html>
<script>
  window.onload = function() {
    Particles.init({
      selector: '.background'
    });
  };
  var particles = Particles.init({
    selector: '.background',
    connectParticles: true
  });
</script>