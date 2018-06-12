

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
                <a href="/bookdetail?page=ICB0001.php"><img src="http://catalogimages.johnwiley.com.au/Cover/300W/97807303/9780730314141.jpg" height="160px" width="160px"></img></a>
              </div>
              <div id="bookDetails">

                  <h4>Title :State portraits of Australian business : a report based on the 1995 business longitudinal survey / Small Business Research Program</h4>
                  <h4>Author : Small Business Research Program (Australia)
Australia. Office of Small Business ; Aquatech Pty. Ltd.</h4>
                  <h4>Subjects : Small business -- Australia -- Statistics;
Small business -- Australia -- Longitudinal studies;
Business enterprises -- Australia -- Longitudinal studies;
Business enterprises -- Australia -- Statistics</h4>
                  <h4>Date : 1998</h4>
                  <h4>Description: xii, 139 p. ; 25 cm.. </h4>
                  <h4>Notes : 'Prepared by Aquatech Pty Ltd for the Office of Small Business, Department of Workplace Relations and Small Business' -- Verso t.p.
Chiefly tables.
AGPS cat. no. 9801853.
Includes bibliographical references (p. 120) </h4>
                  <h4>Record number: 21129203210002061 </h4>

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
