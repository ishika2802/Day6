<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>FOOD BLOG</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<?php
    include'./main2/header.php';
    ?>
	<!-- end header -->
	<!-- start page -->
	<div id="page">
    <div id="content">
			<div class="bgtop">
				<div  class="bgbtm">
					<div class="post">
                    <h1>Feedback Form</h1>
        <form method="POST" action="insertdata.php">
        <div class="mb-6 row">
        <div class="col-sm-10">
        Full Name: <input type="text" name="fname" required>
        </div>
        </div>
        <br>
        <div class ="mb-6 row">
        <div class="col-sm-10">
            Comment: <textarea name="comment" required>please comment here</textarea>
        </div>
        </div>
        <br>
        <input type="submit">
        </form>
						<div style="clear: both;">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
        
		<?php
        include'./main2/sidebar.php';
        ?>
	</div>
</div>
<!-- end page -->
<?php
 include'./main2/footer.php';
?>
</body>
</html>
