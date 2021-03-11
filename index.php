
<?php
$con = mysqli_connect('localhost','root','');
if($con)
{
mysqli_select_db($con,'bookwale');
}
else
{
	die("error".mysql_error());
}
?>
<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Book Wale</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<style type="text/css">
			.tooltip-inner{
				font-size:17px;
				padding:4px;
			}
		</style>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<!--<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav> -->
				<a href="index.html" class="logo">Book Wale</a>
			
			</header>

		<!-- Menu 
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit">Login</a></li>
				</ul>
			</nav> -->

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>Carry your books with Book wale</h1>
					<p style="color:black;">
						Its very difficult to carry each and every book with you. Still its imposible to get these books any where any time.<br>
					</p>
					<p style="color:black;">	
						you could have your every book with you any time using Book Wale.
					</p>
					<br>
					<ul class="actions">
						<li><a href="#frmdv" class="button scrolly">Get your Book</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper" style="margin: 50px;">
						<div id="frmdv" style="width: 40%; margin: auto;">
							<form id="frm" method="post" action="getbook.html">
								<label><h2> Select your Branch </h2></label>
								<select style="display:inline" name="branch" id="branch" onchange="enablesem()">
									<option selected="true" value="-1" >-- Select Branch --</option>
									<?php
										$query1 = "select * from branch84";
										$result1 = mysqli_query($con,$query1);
										while($row = mysqli_fetch_array($result1))
										{
										?>
											<option value="<?php echo $row['bid88']; ?>"><?php echo $row['bname83']; ?></option>
										<?php
										}									
									?>
									
								</select>
								<a href="#" data-toggle="tooltip" data-placement="right" title="Select Branch First"></a>
								<br>
								<label><h2> Select your Semester </h2></label>
								<select name="semster" id="semster" onclick="checkbranch()" onchange="passval(this.value)" >
									<option id="test1" value="-1" selected="true" disabled>-- Select Branch --</option>
									<?php
										$query1 = "select * from sem8";
										$result1 = mysqli_query($con,$query1);
										while($row = mysqli_fetch_array($result1))
										{
										?>
											<option disabled value="<?php echo $row['sid8']; ?>"><?php echo $row['semstername88']; ?></option>
										<?php
										}									
									?>
								</select>
								<br>
								<label><h2> Select your Subject </h2></label>
								<select name="subname" id="subname">
									<option selected="true" disabled="disabled">-- Select subject --</option>	
								</select>
								<br>
								<input type="submit" value="Get it"> </input>
							</form>
						</div>
			</section>


		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2>Feugiat lorem</h2>
					<figure>
					    <blockquote>
					        "Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra<br /> magna etiam lorem ultricies in diam. Sed arcu cras consequat."
					    </blockquote>
					    <footer>
					        <cite class="author">Jane Anderson</cite>
					        <cite class="company">CEO, Untitled</cite>
					    </footer>
					</figure>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic02.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Consequat</h3>
							<p>Placerat ornare. Pellentesque od sed euismod in, pharetra ltricies edarcu cas consequat.</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic03.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Adipiscing</h3>
							<p>Morbi in sem quis dui placerat Pellentesque odio nisi, euismod pharetra lorem ipsum.</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic04.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Malesuada</h3>
							<p>Nam dui mi, tincidunt quis, accu an porttitor, facilisis luctus que metus vulputate sem magna.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">information@untitled.tld</a></li>
						<li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Nashville, TN 00000</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. Design <a href="https://templated.co">TEMPLATED</a>. Images <a href="https://unsplash.com">Unsplash</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script type="text/javascript">
				var data1 = document.getElementById("subname").innerHTML;
				function passval(val)
				{
					var bid=document.getElementById("branch").value;
					
					$.ajax({
						url:'passvalue.php',
						type: 'POST',
						data:{semid:val,branchid:bid},
						success: function(result){
							d=data1+result;
							$("#subname").html(d);
						}
					});
				}
				function enablesem(){
					if(!($('#semster').find(":selected").val() == -1)){
						$('#semster').find(":selected").removeAttr("selected");
					}
					$('#semster').children().removeAttr("disabled");
				}
				function checkbranch(){
					if($('#branch').find(":selected").val() == -1){
						//console.log("Select breanch first");
						$('[data-toggle="tooltip"]').tooltip('show');
						$("#semster").on('focusout',function(){
							$('[data-toggle="tooltip"]').tooltip('hide');
						});
					}
				}
			</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php
mysqli_close($con);
?>
	</body>
</html>