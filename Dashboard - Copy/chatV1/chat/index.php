<?php 
if(isset($_POST['submit']))
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("chat", $con);
		$message=$_POST['message'];
		$sender=$_POST['sender'];
		mysql_query("INSERT INTO message(message, sender)VALUES('$message', '$sender')");
}
?>
<?php 
require 'core/database/connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Live Chat</title>
<script language="javascript" src="chatV1/chat/jquery-1.2.6.min.js"></script>
<script language="javascript" src="chatV1/chat/jquery.timers-1.0.0.js"></script>
<script type="text/javascript">

$(document).ready(function(){
   var j = jQuery.noConflict();
	j(document).ready(function()
	{
		j(".refresh").everyTime(1000,function(i){
			j.ajax({
			  url: "refresh.php",
			  cache: false,
			  success: function(html){
				j(".refresh").html(html);
			  }
			})
		})
		
	});
	j(document).ready(function() {
			j('#post_button').click(function() {
				$text = $('#post_text').val();
				j.ajax({
					type: "POST",
					cache: false,
					url: "save.php",
					data: "text="+$text,
					success: function(data) {
						alert('data has been stored to database');
					}
				});
			});
		});
   j('.refresh').css({color:"#30a5ff"});
});
</script>
<style>
.img-chat{
	width: 80px;
	height: 80px;
}
</style>
</head>
<body>
<form method="POST" name="" action="">
<input class="hide" name="sender" type="text" id="texta" value="<?php echo $users_data['users_name']; ?>"/>
<div class="panel panel-default chat refresh">
	<div class="panel-heading" id="accordion"><svg class="glyph stroked two-messages"><use xlink:href="#stroked-two-messages"></use></svg> Chat</div>
				
	<div class="panel-body">
		<ul>
			<div class="refresh">
			<?php
			$con = mysql_connect("localhost","root","");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }

			mysql_select_db("chat", $con);

			$result = mysql_query("SELECT * FROM message ORDER BY id DESC");

			while($row = mysql_fetch_array($result))
			  {
			  	echo "
				<li class='left clearfix'>
					<span class='chat-img pull-left'>";
						$sender = $row['sender'];
						$time = $row['time'];
						$con2 = mysql_connect("localhost","root","");
						mysql_select_db("dashboard", $con2);
						$result2 = mysql_query("SELECT * FROM users WHERE users_name = '$sender'");
						$row2 = mysql_fetch_array($result2);
						// echo $row2['users_name'];
						// echo $row2['users_profile'];

						echo '<img class="img-chat img-circle" src="', $row2['users_profile'],'" alt="', $users_data['users_name'],'\'s Profile Images"> ';
						// <img src='http://placehold.it/80/30a5ff/fff' alt='User Avatar' class='img-circle'>
					echo "
					</span>
					<div class='chat-body clearfix'>
						<div class='header'>
							<strong class='primary-font'>";
							echo $row['sender'];
							echo "
							</strong> <small class='text-muted'>". date('H:i', strtotime($row['time'])) . "</small>
						</div>
						<p>";
						echo $row['message'];
						echo "
						</p>
					</div>
				</li>
				";
			  }

			mysql_close($con);
			mysql_close($con2);
			?>
			</div>
		</ul>
	</div>

	<div class="panel-footer">
		<div class="input-group">
			<input name="message" type="text" id="textb" class="form-control input-md" placeholder="Type your message here...">
			<span class="input-group-btn">
				<input class="btn btn-success btn-md" name="submit" type="submit" value="Chat" id="post_button" />
			</span>
		</div>
	</div>
</div>
</form>

</body>
</html>
