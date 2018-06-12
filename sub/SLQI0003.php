

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>One Search Brisbane State Library</title>

        <!-- Bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/owl.carousel.min.css" rel="stylesheet">
        <link href="../css/owl.theme.default.min.css" rel="stylesheet">
        <link href="../css/bookdetails.css" rel="stylesheet">
        <script src="../js/owl.carousel.min.js"></script>
          <style>
            #RsBody table td{
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
          }

          </style>
             <?php
            include'PiwikTracking.php';
            session_start();
          ?>
    </head>
    <body>
      <?php
      include'../userHeaderMenu_nostyle.php';
      ?>

      <div id="frame">
        <div id="bookNavBar">
          <ul style="list-style-type:none;padding:0;margin:0;overflow:hidden;">
            <li style="float:left;"><a class="active" href="#home">Details</a></li>
            <!--
            <li style="float:left;"><a href="#">Add comments/tag</a></li>
            <li style="float:left;"><a href="#">More like this</a></li>
            -->
          </ul>
        </div>
        <div id="bookDetailsFrame">
          <div id="bookImageDiv">
               <a href='"/bookdetail?page=SLQI0001.php'><img src="http://www.weddingrelated.co.uk/Images/CompanyImages/Wedding%20Listing/Richard-Harris-Photography-1061242-4.jpeg" height="160px" width="160px"></img></a>
              </div>
              <div id="bookDetails">

                  <h4>Title : Arts on radio photography Richard Harris ; design Antart.</h4>
                  <h4>Author :  Richard Harris 1950- ; Australian Broadcasting Corporation ; ABC Radio (Australia) ; Australian Broadcasting Corporation. Radio National.</h4>
                  <h4>Date : 1994 </h4>
                  <h4>Description: 1 poster : turquoise and purple ; 36 x 51 cm.. </h4>
                  <h4>Notes : Poster promoting the range of programmes aired on ABC Radio National, with details of their frequencies. </h4>
                  <h4>Record number: 21106324660002061 </h4>

              </div>
            </div>

          </div>

        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/java.js"></script>
    </body>
</html>

<script>
    $(document).ready(function(){
      $("#owl-demo").owlCarousel({
                navigation : true, // Show next and prev buttons
              slideSpeed : 300,
              paginationSpeed : 400,
              items:1,
              singleItem:true

              });
    });
</script>
