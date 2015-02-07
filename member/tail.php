
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
				<h2>Wishlist</h2>
				<ul>
				<?php
					$query="SELECT * FROM wishlist where user_id='".$_SESSION["id"]."'";
					$result=$con->query($query);

					while($row=$result->fetch_assoc())
					{	?> <li> <?php
						$available=0;
			        	if($arr=$con->fetch_assoc($con->query("SELECT * FROM book where id='".$row["book_id"]."'")))
			        	{
							echo $arr["name"]."-".$arr["author"]."[".$arr["edition"]."](";
						}
						$first="SELECT id FROM list where book='".$row["book_id"]."' and 	status='Available'";
						$second=$con->query($first);
						while($arr=$second->fetch_assoc())
						{ $available+=1;}
							echo $available.")"; ?>  </li> <?php
					} ?>
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
