  <?php
               //  include('./php/conn.php');
                  //include('./php/function.php');
                    //  $id=$_GET['id'];
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300&family=Nunito:wght@200;500;600;700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/nav3.css">
    <link rel="stylesheet" href="./css/phone.css">
    <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/footer.css">

</head>

<body id="body">

    
    <div class="main">
            <?php
        include('./header.php');
        ?>



        
  <div class="z_body index_z_body">
        
                    <h1 class="post_name">Welcome To WIX</h1>
        
        
                    <div class='container'>
                        <?php                         

                             $index_cat=gCAT($conn);
                               foreach ($index_cat as $cat){
                                   

                        ?>
                            <div class="box">
                                            <div class="cat_box">
                                                <a href="./category.php?id=<?php echo $cat['id']?>"><?php echo $cat['name'] ?></a>
                                            </div>
                                            <div class="post_box_">
                                                <div class="_post">
                                            <?php                       
                    
                                                 $index_post=gPOST($conn,'',25,$cat['id']);
                                                   foreach ($index_post as $post){
                                            ?>
                                                    <div><a href="./post.php?id=<?php echo $post['id'] ?>"> <?php echo $post['name'] ?></a></div>
                                                <?php }  ?>

                                                </div>
                                            </div>
                                        </div>
                        
                        <?php }  ?>
                        
                        
                        
                        
        
                        <div class="box"></div>
                        <div class="box"></div>
                        <div class="box"></div>
        
                    </div>
                    <div class="ex_info">
                        <h3>ex_ info</h3>
                        <p>. to use    background: #F0F0F0;
                        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
                    </p>
                        
                    </div>
                    
                    <div class="ex_info">
                        <h3>ex_ info</h3>
                        <p>. to use    background: #F0F0F0;
                        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
                    </p>
                        
                    </div>
                    
                    
                    <footer class="">
                     <div class="laft_footer">
                         <div>
                             <h2>INFO</h2>
                             <ul>
                                 <li>about us</li>
                                 <li> extra information</li>
                                 <li> extreme formation</li>
                             </ul>
                         </div>
                         <div>
                             <h2>personal information</h2>
                             <ul>
                                 <li>your name</li>
                                 <li> your address</li>
                             </ul>
                         </div>
                         <div>
                             <h2>category</h2>
                             <ul>
                                 <li>listed job</li>
                                 <li> admit card</li>
                                 <li> answer ki </li>
                                 <li>result</li>
                             </ul>
                         </div>
             
                     </div>
                     <div class="right_footer">
                         <div><i class="fa-brands fa-instagram"></i></div>
                         <div><i class="fa-brands fa-whatsapp"></i></div>
                     </div>
                 </footer>
        
                </div>
     
   

</div>

<div id="body1"></div>

<script src="./jquery.js"></script>
        <script src="main.js"></script>
       <script src="_.js"></script>

</body>
</html>