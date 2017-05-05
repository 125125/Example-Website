<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script type="text/javascript">
  function ajax(id, file) {
    var req = new XMLHttpRequest();

    req.onreadystatechange = function() {
      if(req.readyState == 4 && req.status == 200) {
        document.getElementById(id).innerHTML =  req.responseText;
      }
    }

    req.open('GET', file, true);
    req.send();
  }
  setInterval(function(){ajax("portchecker", "functions/portcheck.php")},1000);
  </script>
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
          $('.myForm input:NOT([type=submit])').val('');
        }
      });
      event.preventDefault();
    });
  });
  </script>
  <meta name="author" content="Tim Levinsson">
  <meta name="description" content="Example Page made by Tok124 from Ac-Web">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
