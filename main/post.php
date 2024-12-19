  <?php
                      $id=$_GET['id'];
                    //  echo($id);
              

    ?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>HTML</title>
      <link rel="stylesheet" href="./css/style.css">
      <link rel="stylesheet" href="./css/default.css">
      <link rel="stylesheet" href="./css/nav2.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&family=Nunito:wght@200;500;600;700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="./css/nav3.css">
      <link rel="stylesheet" href="/css/myntra_nav.css">
      <link rel="stylesheet" href="/css/YouTube_nav.css">
      <link rel="stylesheet" href="/css/black_x.css">
      <link rel="stylesheet" href="/css/Amazon_nav.css">
      <link rel="stylesheet" href="./css/post.css">
      <link rel="stylesheet" href="./css/phone.css">
  </head>

  <body>
      <div class="main">
            <?php
        include('./header.php');
        ?>



          <div class="z_body">
         <?php
                 $data_x=gPOST($conn,$id);
                 
                   foreach ($data_x as $post){
                       
                         echo ' <h1 class="post_name">'.$post['name'].'</h1>';
                         
                          echo($post['Post_data']);

                         
                     }
            
            
        ?>
             
   


</div>

<script src="./jquery.js"></script>


        <script src="main.js"></script>
       <script src="_.js"></script>

 

  </body>

  </html>