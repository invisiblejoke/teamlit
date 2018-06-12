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
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">
		<script src="js/owl.carousel.min.js"></script>
		<?php
			include'ptrack.php';
			session_start();
		?>
    </head>
    <body>
		<?php
			include'userHeaderMenu_nostyle.php';
			include_once'recentSearchAPIController.php';
			include_once'latestTopSearchAPIController.php';
		?>
        <div class="row">
			<!--start of new book and materials-->
			<div class="col-sm-6" >
				<div class="panel panel-default">
					<div class="panel-heading" id="Newbook" style="background-color:#777777">New Books and Materials</div>
					<div class="panel-body" style="background-color:rgba(128, 128, 128, 0.2)">
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
						<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
						<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>
						<link rel="stylesheet" href="css/sliderimage.css">
						<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
						<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
						<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
						<script src='js/slick1.js'></script>
						<script src='js/slick.js'></script>

						<div class="imagecontainer">
							<div class="row">
							  <div class="col-md-12 heroSlider-fixed">
								<div class="overlay">
							  </div>
								 <!-- Slider -->
								<div class="slider responsive">
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=SLQI0001&title=Get%20the%20net&author=%20QANTM%20Australia%20CMC.%20Youthworks&year=199?&image=https://i.pinimg.com/236x/53/99/c6/5399c60a25c0459de8829139cfde69fd.jpg&subjects=QANTM%20Australia%20CMC.%20Youthworks%20--%20Posters;Interactive%20multimedia%20--%20Publishing%20--%20Posters;Internet%20publishing%20--%20Posters&description=1%20poster%20(double-sided):%20col.%20;%2042%20x%2030%20cm..%20&notes=&record=21133063560002061'>
												<img src='https://i.pinimg.com/236x/53/99/c6/5399c60a25c0459de8829139cfde69fd.jpg' class='mySlides' style='width:150px;height:200px;'>
												<div class="star">
												<img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;">
												</div>
												<p>Get the net<br><small>QANTM Australia CMC. Youthworks</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=SLQI0002&title=Mannequin%20modelling%20a%20wedding%20dress%20in%20a%20fashion%20parade%20at%20Lennon%27s%20Hotel,%20Brisbane,%201955&author=UnidentifiedTruth%20(Brisbane,%20Qld.)&year=1995&image=https://i.pinimg.com/originals/58/7b/db/587bdb441fc0ae2fc3a6e710572c3d40.jpg&subjects=fashion%20models;%20fashion%20parades;%20dresses;%20wedding%20dresses;%20women%27s%20clothing%20&%20accessories;%20Brisbane%20(Qld.)&description=Digital%20format:%20image/jpeg%20;%20Original%20format:%20copy%20print%20:%20b&w%20&notes=&record=201955'>
												<img src='https://i.pinimg.com/originals/58/7b/db/587bdb441fc0ae2fc3a6e710572c3d40.jpg' class='mySlides' style='width:150px;height:200px;'>
												<div class="star">
												<img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/halfstaricon.png" alt="star" style="display: inline-block; width: 25px;">
												</div>
												<p>Mannequin modelling a wedding dress in a fashion parade at Lennon's Hotel, Brisbane, 1955
												<br><small>Unidentified Truth (Brisbane, Qld.)</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=SLQI0003&title=Arts%20on%20radio%20photography%20Richard%20Harris%20;%20design%20Antart.&author=Richard%20Harris%201950-%20;%20Australian%20Broadcasting%20Corporation%20;%20ABC%20Radio%20(Australia)%20;%20Australian%20Broadcasting%20Corporation.%20Radio%20National.&year=1994&image=http://www.weddingrelated.co.uk/Images/CompanyImages/Wedding%20Listing/Richard-Harris-Photography-1061242-4.jpeg&subjects=Australian%20Broadcasting%20Corporation%20--%20Posters;ABC%20Radio%20(Australia)%20--%20Periodicals;Australia%20Broadcasting%20Commission%20--%20Periodicals;Radio%20programs%20--%20Australia%20--%20Posters;Radio%20programs%20--%20Australia%20--%20Periodicals;Radio%20broadcasting%20--%20Queensland%20--%20Periodicals&description=1%20poster%20:%20turquoise%20and%20purple%20;%2036%20x%2051%20cm..&notes=Poster%20promoting%20the%20range%20of%20programmes%20aired%20on%20ABC%20Radio%20National,%20with%20details%20of%20their%20frequencies.&record=21106324660002061'>
												<img src='http://www.weddingrelated.co.uk/Images/CompanyImages/Wedding%20Listing/Richard-Harris-Photography-1061242-4.jpeg' class='mySlides' style='width:150px;height:200px;'>
												<div class="star">
												<img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;">
												</div>
												<p>Arts on radio photography Richard Harris ; design Antart.
												<br><small>Richard Harris 1950- ; Australian Broadcasting Corporation ; ABC Radio (Australia) ; Australian Broadcasting Corporation. Radio National.</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=SLQI0004&title=Whatever%20happened%20to...?%20/%20[design%20and%20linocut%20by%20Mike%20Hudson%20and%20Jadwiga%20Jarvis].&author=Mike%20HudsonJadwiga%20Jarvis%20artist.%20;%20Wayzgoose%20Press%20issuing%20body.&year=2014&image=https://i.pinimg.com/736x/65/8a/d1/658ad16860959e58608fa23c3284b64f--michael-keaton-michael-okeefe.jpg&subjects=Broadsides%20--%20New%20South%20Wales%20--%20Katoomba%20--%20Specimens;Printing%20--%20New%20South%20Wales%20--%20Katoomba%20--%20Specimens;Technology%20--%20Social%20aspects&description=1%20broadside%20:%20colour%20;%2070%20x%2050%20cm..&notes=Caption%20title.%20Edition%20of%2010%20signed%20and%20numbered%20copies.%20&record=21133038380002061'>
												<img src='https://i.pinimg.com/736x/65/8a/d1/658ad16860959e58608fa23c3284b64f--michael-keaton-michael-okeefe.jpg' class='mySlides' style='width:150px;height:200px;'>
												<div class="star">
												<img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;">
												</div>
												<p>Whatever happened to...? / [design and linocut by Mike Hudson and Jadwiga Jarvis].
												<br><small>Mike Hudson Jadwiga Jarvis artist. ; Wayzgoose Press issuing body.</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=SLQEB0001&title=Information%20technology%20and%20the%20conduct%20of%20research%20the%20user%27s%20view/%20report%20of%20the%20Panel%20on%20Information%20Technology%20and%20the%20Conduct%20of%20Research....[et%20al.].&author=Panel%20on%20Information%20Technology%20and%20the%20Conduct%20of%20Research(U.S.)&year=1989&image=https://www.nap.edu/cover/9829/450&subjects=Information%20technology%20--%20Scientific%20applications;%20Research%20--%20Technologyical%20innovations;%20Electronic%20books&description=xiv,%2076%20p%20:%20col.ill.&notes=Includes%20bibliographical%20references%20and%20index.&record=21181215200002061'>
												<img src='https://www.nap.edu/cover/9829/450' class='mySlides' style='width:150px;height:200px;'>
												<div class="star">
												<img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;">
												</div>
												<p>Information technology and the conduct of research the user's view/ report of the Panel on Information Technology and the Conduct of Research....[et al.].
												<br><small>Panel on Information Technology and the Conduct of Research(U.S.)</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=SLQEB0002&title=Managing%20Corporate%20Design%20Best%20Practices%20for%20In-House%20Graphic%20Design%20Departments&author=Peter%20L.%20Phillips&year=2015&image=https://images-na.ssl-images-amazon.com/images/I/51pkDNHCakL._SY344_BO1,204,203,200_.jpg&subjects=Business;Leadership;Management;Electronic%20books&description=1%20online%20resource%20(310%20p.).%20&notes=Description%20based%20upon%20print%20version%20of%20record.%20&record=21167016010002061''>
												<img src='https://images-na.ssl-images-amazon.com/images/I/51pkDNHCakL._SY344_BO1,204,203,200_.jpg' class='mySlides' style='width:150px;height:200px;'>
												<div class="star">
												<img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/halfstaricon.png" alt="star" style="display: inline-block; width: 25px;">
												</div>
												<p>Managing Corporate Design Best Practices for In-House Graphic Design Departments
												<br><small>Peter L. Phillips</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=SLQEB0002&title=Managing%20Corporate%20Design%20Best%20Practices%20for%20In-House%20Graphic%20Design%20Departments&author=Peter%20L.%20Phillips&year=2015&image=https://images-na.ssl-images-amazon.com/images/I/51pkDNHCakL._SY344_BO1,204,203,200_.jpg&subjects=Business;Leadership;Management;Electronic%20books&description=1%20online%20resource%20(310%20p.).%20&notes=Description%20based%20upon%20print%20version%20of%20record.%20&record=21167016010002061''>
												<img src='https://images-na.ssl-images-amazon.com/images/I/41Sj%2BbJOg0L._SX343_BO1,204,203,200_.jpg' class='mySlides' style='width:150px;height:200px;'>
												<div class="star">
												<img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;">
												</div>
												<p>Management / Brian Tracy.
												<br><small>Brian Tracy</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=SLQEB0004&title=A%20life%20worth%20living%20contributions%20to%20positive%20psychology%20/%20edited%20by%20Mihaly%20Csikszentmihalyi%20and%20Isabella%20Selega%20Csikszentmihalyi.&author=%20Mihaly%20Csikszentmihalyi%20;%20Isabella%20Selega%20Csikszentmihalyi%20;%20ebrary,%20Inc&year=2006&image=https://global.oup.com/academic/covers/pop-up/9780195176797&subjects=Positive%20psychology;Electronic%20books&description=ix,%20253%20p.%20:%20ill..&notes=Includes%20bibliographical%20references%20and%20indexes.&record=21184491860002061''>
												<img src='https://global.oup.com/academic/covers/pop-up/9780195176797' class='mySlides' style='width:150px;height:200px;'>
												<div class="star">
												<img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/halfstaricon.png" alt="star" style="display: inline-block; width: 25px;">
												</div>
												<p>A life worth living contributions to positive psychology / edited by Mihaly Csikszentmihalyi and Isabella Selega Csikszentmihalyi.
												<br><small> Mihaly Csikszentmihalyi ; Isabella Selega Csikszentmihalyi ; ebrary, Inc</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=SLQB0001&title=Information%20technology/Roger%20Carter&author=Roger%20Carter%201939-&year=1996&image=https://pictures.abebooks.com/isbn/9780750636575-us-300.jpg&subjects=Information%20techonology;%20Computer%20science&description=ix,%20169%20p.%20:%20ill;25cm&notes=Includes%20index&record=21137164230002061'>
												<img src='https://pictures.abebooks.com/isbn/9780750636575-us-300.jpg' class='mySlides' style='width:150px;height:200px;'>
												<div class="star">
												<img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;">
												</div>
												<p>Information technology/Roger Carter
												<br><small>Roger Carter 1939-</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=SLQB0002&title=Information%20communication%20technology%20at%20university%20:%20skills%20for%20success/Greg%20Shaw.&author=Gregory.Shaw&year=2010&image=http://t2.gstatic.com/images?q=tbn:ANd9GcS9vp0FP6aJVo4y8iG8hUiMGkVLFn5M3J-U_HaiRll5-duTgbWQ&subjects=Information%20technology;%20Information%20technology%20--%20Problems,exercise,etc&description=229%20p.%20:%20ill.%20;%2025cm.&notes=Spiral%20binding.Previous%20ed.:2009.&record=21118303790002061'>
												<img src='http://t2.gstatic.com/images?q=tbn:ANd9GcS9vp0FP6aJVo4y8iG8hUiMGkVLFn5M3J-U_HaiRll5-duTgbWQ' class='mySlides' style='width:150px;height:200px;'>
												<div class="star">
												<img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/staricon.png" alt="star" style="display: inline-block; width: 25px;"><img src="img/halfstaricon.png" alt="star" style="display: inline-block; width: 25px;">
												</div>
												<p>Information communication technology at university : skills for success/Greg Shaw.
												<br><small>Gregory.Shaw</small></p>
												</a>
											</div>
								</div>
										 <!-- control arrows -->
										<div class="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										</div>
										<div class="next">
											<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										</div>

							  </div>
							</div>
						</div>
						<!--end of imagecontainer-->
						<!--to keep images in place-->
						<script src="js/image.js"></script>
						<div id="owl-demo" class="owl-carousel owl-theme"></div>
					</div>
					<!--end of panel body-->
				</div>
			</div>
			<!--end of new books and materials-->
			<!--start of top searched books-->
			<div class="col-sm-6" >
				<div class="panel panel-default">
					<div class="panel-heading" id="TopSearchBook" style="background-color:#777777">Top Searched Books</div>
					<div class="panel-body" style="background-color:rgba(128, 128, 128, 0.2)">
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
						<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
						<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>
						<link rel="stylesheet" href="css/sliderimage.css">
						<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
						<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
						<script src='js/slick1.js'></script>
						<script src='js/slick.js'></script>

						<div class="imagecontainer">
							<div class="row">
							  <div class="col-md-12 heroSlider-fixed">
								<div class="overlay">
							  </div>
								 <!-- Slider -->
								<div class="slider responsive">
								<?php
									$topSearch = getTopSearch();
									echo $topSearch;
								?>
								</div>
										 <!-- control arrows -->
										<div class="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										</div>
										<div class="next">
											<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										</div>

							  </div>
							</div>
						</div>
						<!--end of imagecontainer-->
						<!--to keep images in place-->
						<script src="js/image.js"></script>
						<div id="owl-demo" class="owl-carousel owl-theme"></div>
					</div>
					<!--end of panel body-->
				</div>
			</div>
			<!--end of top searched books-->
		</div>
		<!--end of first row-->
		<!--start of second row-->
		<div class="row">
			<div class="col-sm-6" >
				<div class="panel panel-default">
					<div class="panel-heading" id="RecommendSearch" style="background-color:#777777">Recommended Searches</div>
					<div class="panel-body" style="background-color:rgba(128, 128, 128, 0.2)">
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
						<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
						<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>
						<link rel="stylesheet" href="css/sliderimage.css">
						<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
						<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
						<script src='js/slick1.js'></script>
						<script src='js/slick.js'></script>

						<div class="imagecontainer">
							<div class="row">
							  <div class="col-md-12 heroSlider-fixed">
								<div class="overlay">
							  </div>
								 <!-- Slider -->
								<div class="slider responsive">
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=SLQB0004&title=Science&author=Korean%20Overseas%20Information%20Service&year=1973&image=https://oup.com.pk/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/9/7/9780199060498_1.jpg&subjects=&description=95%20p.;21cm.&notes=&record=211268575300002061'>
												<img src='https://oup.com.pk/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/9/7/9780199060498_1.jpg' class='mySlides' style='width:150px;height:200px;'>
												<p>Science
												<br><small>Korean Overseas Information Service</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=ICEB0001&title=Singing%20Lessons%20for%20Beginners%20Teach%20Yourself%20How%20to%20Sing%20(Free%20Video%20Available)&author=LearnToPlayMusic.com.Peter%20Gelling&year=2014&image=https://images-na.ssl-images-amazon.com/images/I/51YZkzy09nL._SY346_.jpg&subjects=School%20music--Instruction%20and%20study;Singing--Methods%20--%20Juvenile;Singing;Electronic%20books&description=1%20online%20resource%20(105%20p.).&notes=Description%20based%20upon%20print%20version%20of%20record.&record=21197105490002061'>
												<img src='https://images-na.ssl-images-amazon.com/images/I/51YZkzy09nL._SY346_.jpg' class='mySlides' style='width:150px;height:200px;'>
												<p>Singing Lessons for Beginners Teach Yourself How to Sing (Free Video Available)
												<br><small>LearnToPlayMusic.com.Peter Gelling</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=ICEB0002&title=Ballroom%20dancing%20with%20100%20diagrams%20and%20photographs%20of%20the%20quickstep,%20waltz,%20foxtrot,%20tango,%20etc.%20/%20Alex%20Moore%20;%20foreword%20by%20Philip%20J.S.%20Richardson.&author=Alex.%20MooreProQuest%20(Firm)&year=2002&image=https://images-na.ssl-images-amazon.com/images/I/41HYnlLMoEL.jpg&subjects=Ballroom%20dancing;Electronic%20books&description=xii,%20308%20p.%20:%20ill..%20&notes='>
												<img src='https://images-na.ssl-images-amazon.com/images/I/41HYnlLMoEL.jpg' class='mySlides' style='width:150px;height:200px;'>
												<p>Ballroom dancing with 100 diagrams and photographs of the quickstep, waltz, foxtrot, tango, etc. / Alex Moore ; foreword by Philip J.S. Richardson.
												<br><small>Alex. Moore ProQuest (Firm)</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=ICEB0003&title=Michigan%20manual%20of%20plastic%20surgery%20/%20David%20L.%20Brown,%20Gregory%20H.%20Borschel.&author=David%20L%20Brown%20(David%20Lawrence),%201968-%20;%20Gregory%20H%20Borschel&year=2004&image=https://images-na.ssl-images-amazon.com/images/I/51mjM9KHgBL._SX311_BO1,204,203,200_.jpg&subjects=Surgery,%20Plastic%20--%20Handbooks,%20manuals,%20etc;Electronic%20books&description=1%20online%20resource%20(442%20pages)%20:%20illustrations.%20&notes=Includes%20index.%20&record=21182227350002061'>
												<img src='https://images-na.ssl-images-amazon.com/images/I/51mjM9KHgBL._SX311_BO1,204,203,200_.jpg' class='mySlides' style='width:150px;height:200px;'>
												<p>Michigan manual of plastic surgery / David L. Brown, Gregory H. Borschel.
												<br><small>David L Brown (David Lawrence), 1968- ; Gregory H Borschel</small></p>
												</a>
											</div>
											<div class="sliderauthor">
												<a href='/includes/bookDetails.php?page=id=ICEB0004&title=Hospital%20medicine%20/%20editors,%20Robert%20M.%20Wachter,%20Lee%20Goldman,%20Harry%20Hollander.&author=Robert%20M%20Wachter%20;%20Lee%20Goldman%20;%20Harry%20Hollander&year=2005&image=https://images-na.ssl-images-amazon.com/images/I/51S9ECQF43L._SX386_BO1,204,203,200_.jpg&subjects=Hospital%20care;Internal%20medicine;Electronic%20books&description=1%20online%20resource%20(1314%20pages)%20:%20illustrations.%20&notes=Includes%20bibliographical%20references%20and%20index.%20&record=21181915390002061'>
												<img src='https://images-na.ssl-images-amazon.com/images/I/51S9ECQF43L._SX386_BO1,204,203,200_.jpg' class='mySlides' style='width:150px;height:200px;'>
												<p>Hospital medicine / editors, Robert M. Wachter, Lee Goldman, Harry Hollander.
												<br><small>Robert M Wachter ; Lee Goldman ; Harry Hollander</small></p>
												</a>
											</div>

								</div>
										 <!-- control arrows -->
										<div class="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										</div>
										<div class="next">
											<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										</div>

							  </div>
							</div>
						</div>
						<!--end of imagecontainer-->
						<!--to keep images in place-->
						<script src="js/image.js"></script>
						<div id="owl-demo" class="owl-carousel owl-theme"></div>
					</div>
					<!--end of panel body-->
				</div>
			</div>

			<div class="col-sm-6" >
				<div class="panel panel-default">
				<div class="panel-heading" id="RecentSearch" style="background-color:#777777">Recent Searches</div>
				<div class="panel-body" id="RsBody" style="background-color:rgba(128, 128, 128, 0.2)">
					<table style="width:100% border: 1px solid black;">
						<tr>
						<th colspan="4" style="border: 1px solid black;">Search details</th>
						</tr>
					<style>
					table, th, td
					{
					border: 1px solid black;
					}
					</style>
						<?php
							//$table = table();
							//echo $table;
							$recentSearch = getRecentSearch();
							echo $recentSearch;
						?>
					</table>
				</div>
				</div>
			</div>
		</div>
		<!--end of second row-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/java.js"></script>
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
