<?php

include "includes/header.inc.php";

?>


<div class="container">
	
	<h1>qualifications and grades</h1>

	<table class="table mac-table">
	  <thead>
	    <tr>
	      <th scope="col">Level</th>
	      <th scope="col">From</th>
	      <th scope="col">To</th>
	      <th scope="col">Grade</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>DBIT</td>
	      <td>01/09/2019</td>
	      <td>14/08/2022</td>
	      <td>5.0 gpa</td>
	    </tr>
	    <tr>
	      <td>A level</td>
	      <td>08/06/2017</td>
	      <td>01/01/2019</td>
	      <td>5.0 gpa</td>
	    </tr>
	    <tr>
	      <td>IGCSE</td>
	      <td>01/01/2016</td>
	      <td>01/01/2017</td>
	      <td>5.0 gpa</td>
	    </tr>
	  </tbody>
	</table>

	<button type="button" class="btn btn-primary mac-btn">
		<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">back</a>
	</button>

</div>

<?php

include "includes/footer.inc.php";

?>