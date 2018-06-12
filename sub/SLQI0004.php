

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

          li a{
            display:block;
            color:black;
            text-align:center;
            padding:14px 16px;
            text-decoration:none;
            border-right:1px solid #000000;
          }

          li a:hover{
            background-color:#DEB887;
          }

          .active{
            background-color:#DEB887;
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

          <div style="margin:20px;border:5px solid #000000">
            <div style="border-bottom:5px solid #000000">
              <ul style="list-style-type:none;padding:0;margin:0;overflow:hidden;">
                <li style="float:left;"><a class="active" href="#home">Details</a></li>
                <!-- <li style="float:left;"><a href="#">Add comments/tag</a></li>
                <li style="float:left;"><a href="#">More like this</a></li> -->
              </ul>
            </div>
            <div style="border-bottom:2px solid #000000;padding:20px;height:25em;margin-left:30px;">
              <div style="float:left;height:12em; margin-top:4em">
              <a href="/bookdetail?page=SLQI0004">
                <img src="https://i.pinimg.com/736x/65/8a/d1/658ad16860959e58608fa23c3284b64f--michael-keaton-michael-okeefe.jpg" height="160px" width="160px"></img></a>
              </div>
              <div style="float:left;height:12em;margin-left:2em;margin-top:3em;">

                  <h4>Title : Whatever happened to...? / [design and linocut by Mike Hudson and Jadwiga Jarvis].</h4>
                  <h4>Author :  Mike Hudson
Jadwiga Jarvis artist. ; Wayzgoose Press issuing body. </h4>

                  <h4>Subjects : Broadsides -- New South Wales -- Katoomba -- Specimens;
Printing -- New South Wales -- Katoomba -- Specimens;
Technology -- Social aspects</h4>
                  <h4>Date : 2014</h4>
                  <h4>Description: 1 broadside : colour ; 70 x 50 cm..</h4>
                  <h4>Notes : Caption title.
Edition of 10 signed and numbered copies.  </h4>
                  <h4>Record number: 21133038380002061 </h4>

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
