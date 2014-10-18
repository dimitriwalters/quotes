<?php
include("retwis.php");
include("header.php");
?>
<h2>Timeline</h2>
<i>Latest registered users</i><br>
<?php
showLastUsers();
?>
<i>Latest 50 quotes from users aroud the world!</i><br>
<?php
showUserPosts(-1,0,50);
include("footer.php")
?>
