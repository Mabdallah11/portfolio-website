<?php

include "includes/header.inc.php";

?>


<div class="container">
	
	<h1>supervisor information</h1>

	<div>
		<p>
			<b>full name: </b> Leo John Doe
		</p>
		<p>
			<b>staff position: </b> DBIT lecturer
		</p>
		<p>
			<b>email address: </b><a href="https://leojohndoe@gmail.com":>leojohndoe@email.com</a>
		</p>
	</div>

	<button type="button" class="btn btn-primary mac-btn">
		<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">back</a>
	</button>

</div>

<?php

include "includes/footer.inc.php";

?>