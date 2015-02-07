
	<!-- start sidebar -->
	<div id="sidebar">
		<div id="search">
			<h2>Notification</h2>
				<h3><br><?php if(isset($_GET["e"]))
							{
								echo $_GET["e"];
							}
							else
							{
								echo "Notification is Empty";
							} ?>
				</h3>
		</div>
		<ul>
			<li>
				<h2>Links</h2>
				<ul>
					<li><h3><a href="book.php">Insert New Books</a></h3></li>
					<li><h3><a href="member.php">Insert New Member</a></h3></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<div id="extra" style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	<p class="legal"> Copyright  2014-<?php echo date("Y"); ?> &copy; <a href="#">Gisue Corporation. </a> All Rights Reserved. </p>
</div>
<!-- end footer -->
<div align=center></div></body>
</html>
