

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
                <a href="/bookdetail?page=ICB0003.php"><img src="https://i.imgur.com/cSUMetj.jpg" height="160px" width="160px"></img></a>
              </div>
              <div id="bookDetails">

                  <h4>Title : Computer methods and advances in geomechanics / edited by G.Beer, J.R.Booker & P.J.Carter</h4>
                  <h4>Author : International Conference on Computer Methods and Advances in Geomechanics (7th : 1991 : Cairns, Qld.)</h4>
                  <h4>Subjects : Computer-aided engineering;
Rock mechanics -- Congresses;
Soil mechanics -- Data processing;
Engineering geology -- Data processing -- Congresses;
Rock mechanics -- Data processing -- Congresses</h4>
                  <h4>Date : 1991</h4>
                  <h4>Description: 3 v. ; 25 cm.. </h4>
                  <h4>Notes : Proceedings of the seventh international conference on computer methods and advances in geomechanics, Cairns, 6-10 May 1991.
Includes bibliographies and index. </h4>
                  <h4>Record number: 21116073620002061</h4>

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
ICB0003
