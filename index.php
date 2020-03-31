<?php
  include "pages/partials/header.php";
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <?php
            if ( !isset($_GET["page"]) ) $page = "dashboard";
            else $page = $_GET["page"];
            include "pages/$page.php";
          ?>

        </div>
        <!-- /.container-fluid -->

      

  <?php
    include "pages/partials/scroll.php";
    include "pages/partials/modals/logoutModal.php";
    include "pages/partials/js.php";
    include "pages/partials/footer.php";
  ?>

      
