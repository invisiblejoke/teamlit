

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
        <link href="../css/searchResult.css" rel="stylesheet">
        <script src="../js/owl.carousel.min.js"></script>
          <style>
            #RsBody table td{
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
          }
          </style>
    </head>
    <body>
      <div id="wrapper">
      <?php
      include'../userHeaderMenu_nostyle.php';
      ?>

        <div>
          <div id="refineResults">

            <h3>Refine search results</h3>

            <h4 style="border-bottom:1px solid #000000">Subject</h4>
            <a href="#">fiction</a><br>
            <a href="#">non-fiction</a>
            <h4 style="border-bottom:1px solid #000000">Resource type</h4>
            <a href="#">articles</a><br>
            <a href="#">books</a><br>


          </div>

          <div id="refineBar">
            <button onclick="myFunction()" class="dropbtn">Refine my search results<span style="float:right">&#9660;</span></button>
            <div id="myDropdown" class="dropdown-content">
                <span>Categories</span>
                <a href="#">Fiction</a>
                <a href="#">Non-fiction</a>
                <span>Country</span>
                <a href="#">UK</a>
                <a href="#">China</a>
            </div>
          </div>

          <div>
            <div id="resultColumn">
              <div>
                <h3>Results:</h3>
              </div>

              <div class="resultRow">
                <div class="resultRowImage">
                  <a href="bookDetails.php"><img src="https://www.nap.edu/cover/9829/450" height="160px" width="160px"></img></a>
                </div>
                <div class="resultRowDetails">

                     <h3 style="line-height:inherit"><a href="bookDetails.php">Information technology and the conduct of research the user's view/ report of the Panel on Information Technology</h3>
                    <h4>Panel on Information Technology and the Conduct of Research(U.S.)</h4>
                    <h5>1989</h5>

                </div>
              </div>

              <div class="resultRow">
                <div class="resultRowImage">
                  <a href="#"><img src="https://pictures.abebooks.com/isbn/9780750636575-us-300.jpg" height="160px" width="160px"></img></a>
                </div>
                <div class="resultRowDetails">

                    <h3 style="line-height:inherit"><a href="#">Information technology/Roger Carter</a></h3>
                    <h4>Roger Carter 1939-</h4>
                    <h5>1996</h5>

                </div>
              </div>

              <div class="resultRow">
                <div class="resultRowImage">
                  <a href="#"><img src="http://t2.gstatic.com/images?q=tbn:ANd9GcS9vp0FP6aJVo4y8iG8hUiMGkVLFn5M3J-U_HaiRll5-duTgbWQ" height="160px" width="160px"></img></a>
                </div>
                <div class="resultRowDetails">

                    <h3><a href="#">Information communication technology at university : skills for success/Greg Shaw.</a></h3>
                    <h4>Gregory.Shaw</h4>
                    <h5>2010</h5>

                </div>
              </div>

              <div>

                <h4>Pages <a href="#">1 2 3 ... 788 -></a> </h4>

              </div>

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

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
