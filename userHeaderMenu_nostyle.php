<html>
    <head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../css/bookdetails.css" rel="stylesheet">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
		<!--header-->
		<div class="navbar navbar-inverse navbar-static-top" style="background-color:#ffffff;border-color:#ffffff;">
			<!-- <div class="container" style="margin-left: unset;">
				<a href = "../../index.php" class="navbar-brand" >Queensland State Library User System </a>
			</div> -->
			<a href="../../index.php">
      		<img src="../img/StateLibraryLogo1.png" alt="logo" style="margin-left:auto;margin-right:auto;width:35%;"/>
      		</a>
        </div>
		<!--end of header-->
		<!--start of search function-->
		<div class="navbar navbar-inverse navbar-static-top" style="background-color: transparent;">
			<div class="container" style="margin-left: unset;">
				<form action="../../includes/search.php" method="GET" class="navbar-form navbar-left" style="width:100%;padding:0">
					<table style="border:none;">
						<tbody>
							<tr>
								<td colspan="3" style="border:none;">
									<div class="row" style="float: left;">
										<select name="resourceType" style="padding-top: 5.5px;background-color: #ffffff;margin-left: 15px;padding-bottom: 5.5px;width: 275px;font-size: 17px;color: black;margin-right: 10px;border-radius: 5px;">
											<!--<option value="SLQcollectionseresources">SLQ collections + eresources</option> -->
											<option value="SLQcollections">SLQ collections</option>
											<option value="Informationcollections">Information collections</option>
											<option value="Openaccesscollections">Open access collections</option>
											<!--<option value="AustralianLibraryofArt">Australian Library of Art</option> -->
											<!--<option value="JohnOxleyLibrary">John Oxley Library</option> -->
											<!--<option value="SLQdigitisedcollections">SLQ digitised collections</option> -->
											<!--<option value="Originalmaterials">Original materials</option> -->
											<!--<option value="SLQFamilyHistoryIndexes">SLQ Family History Indexes</option> -->
										</select>
									</div>
									<div class="form-group" style="float: left;padding-right: 5px;padding-left: 10px;">
										<input type="text" class="form-control" placeholder="Search" style="width: 400px;" name="search">
									</div>
									<button type="submit" class="btn btn-default">Search</button>
								</td>
							</tr>
							<tr>
								<td colspan="3" style="border:none; text-align:left">
									<p style="margin: 10px 0 5px;">Refine your search:</p>
								</td>
							</tr>
							<tr style="margin-bottom: 10px;float: left;">
								<td style="border:none;" colspan="3">
									<select name="itemType" style="padding-top: 0px;background-color: #ffffff;padding-bottom: 0px;width: 150px;font-size: 17px;color: black;margin-right: 10px;border-radius: 5px;">
										<!--<option value="Articles">Articles</option>-->
										<!--<option value="AudioVisual">Audio Visual</option>-->
										<option value="Books">Books</option>
										<option value="DatabaseTitles">Database titles</option>
										<option value="eBooks">eBooks</option>
										<option value="Images">Images</option>
										<!--<option value="Journals">Journals</option>-->
										<!--<option value="Maps">Maps</option>-->
										<!--<option value="MusicScores">Music Scores</option>-->
										<!--<option value="Newspapers">Newspapers</option>-->
										<option value="WebsiteTitles">Web site titles</option>
										<option value="Allitems" selected="selected">All items</option>
									</select>
									<select name="phasing" style="padding-top: 0px;background-color: #ffffff;padding-bottom: 0px;width: 260px;font-size: 17px;color: black;margin-right: 10px;border-radius: 5px;">
										<option value="contain" selected="selected">that contain my query words</option>
										<option value="exactphrase">with my exact phrase</option>
										<option value="startswith">starts with</option>
									</select>
									<select name="location" style="padding-top: 0px;background-color: #ffffff;padding-bottom: 0px;width: 230px;font-size: 17px;color: black;margin-right: 10px;border-radius: 5px;">
										<option value="anywhere">anywhere in the record</option>
										<option value="inthetitle">in the title</option>
										<option value="asauthorcreator">as author/creator</option>
										<option value="insubject">in subject</option>
										<!--<option value="inusertags">in user tags</option>-->
									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
        </div>

        <div class="mobile-nav">
          <form action="../../includes/search.php" method="post" class="navbar-form navbar-left" style="width:100%;padding:0">
          <a href = "../../index.php"><img src="../img/StateLibraryLogo1.png" alt="logo" width="100%"/></a>
            <div class="mobile-search-bar">
            <input type="text" placeholder="  Search" name="search">
			<button type="submit" class="mobile-search-button">Search</button>
			</div>
        </form>
      </div>

		<!--end of search function-->
<!--
<div class="navbar navbar-default navbar-fixed-bottom">
        <div class="containter">
            <p class="navbar-text pull-left">Queensland State Library User System</p>
            <a href="adminHomePage.php" class="navbar-btn btn-danger btn pull-right">DECO3800</a>

        </div>
</div>-->
    </body>
</html>
