    <?php
                 include('conn.php');
                  include('function.php');
                      $id=$_GET['id'];
                      echo($id);
              

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=Edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>HTML</title>
   <!-- HTML -->
   <!-- Custom Styles -->
   <link rel="stylesheet" href="/default.css">
   <link rel="stylesheet" href="/post.css">
</head>

<body>


<br>
<br>
<?php
              $gpost = gPOST($conn,$id);
              foreach ($gpost as $post){
                  //echo($post['Post_data'])
    ?>

   <table width="100%" align="center" style="height: auto !important;">
      <tbody>
          
          <?php
                echo($post['Post_data'])?>
          
          
       </tbody>
          </table>







<?php
}
?>


   <link rel="stylesheet" href="style.css">

   <script src="main.js"></script>
</body>

</html>