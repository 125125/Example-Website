<DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.myForm').submit(function (event) {
    var data = $(this);
    $.ajax({
      type: data.attr('method'),
      url: data.attr('action'),
      data: data.serialize(),
      success: function (data) {
        $('.output').html(data);
      }
    });
    event.preventDefault();
  });
});
</script>
</head>
<body>
<div class="output"></div> <!-- container to post the output from php file -->
<form action="test.php" method="POST" autocomplete="off" class="myForm">
	<input type="text" name="txt1">
	<input type="text" name="txt2">
	<input type="text" name="txt3">
	<input type="text" name="txt4">
	<input type="text" name="txt5">
	<input type="submit" value="Send">
</form>
</body>
</html>