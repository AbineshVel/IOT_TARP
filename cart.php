<!DOCTYPE html>
<html>
<head>
  <style>
  table {
    border: auto solid black;
  padding: autox;
  background: url("bg_groc.jpg");
  background-repeat: no-repeat;
  background-size: auto;
  }
  table {
    border-collapse: collapse;
    width: 50%;
	  margin: auto;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }
  td {
    background-color: Linen;
    color: black;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
  <style>
  body {background-image: url("background.jpg");}
  </style>
  <h1>WELCOME TO SMARTTROLLEY CART</h1>
  <h3>LIST OF ALL THE PRODCTS YOU SCANNED</h3>
  <div id="table_bg">
  <?php
  include 'C:\xampp\htdocs\TARP\TARP\Costumer_Table.php'
  ?>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      function showData()
      {
        $.ajax({
          url: 'C:\xampp\htdocs\TARP\TARP\fetch_data.php',
          type: 'POST',
          data: {action : 'showProcess'},
          dataType: 'html',
          success: function(result)
          {
            $('#show').html(result);
          },
          error: function()
          {
            alert("Failed to show the logs");
          }
        })
      }
      setInterval(function(){ showData(); }, 1000);
    });
  </script>
</body>


</html>
