<?php
require "./templates/header.php";
?>

<h1>Your Booking Details</h1>




<a href="index.php"  class="buttonClass">
  <button>Back to Home</button>
</a>
<!-- <form action="index.php" method="post" class="whiteInput">
<input type="submit"  value="Back to Home" >
</form> -->

<br>

<form action="confirm.php" method="post">
<input type="submit"  value="Confirm Booking" >
</form>

<!-- <a href="confirm.php"  class="confirmButtonClass">
  <button>Confirm booking</button>
</a> -->


<?php
require "./templates/footer.php";
?>