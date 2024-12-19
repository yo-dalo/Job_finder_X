      
      
        <?php
                include('./php/conn.php');
                   include('./php/function.php');
                         //   $id=$_GET['id'];
                                $data_x=gCAT($conn);
                            //echo($id);
      
          ?>
      

      
        <nav>
            <div class="x1">
                <a href="./index.php"><i class="fa-brands fa-wix"></i></a>
                     
                </div>
            <div class="x2">
                <?php
                       foreach ($data_x as $data){
                ?>
                <div>
                    <a href="./category.php?id=<?php echo $data['id']?>"><h2><?php echo $data['name']?></h2></a>
                </div>
                     <?php
                       }
                      ?>
            </div>

            <div class="x3">
                <div class="x3_1">Login</div>
                <div class="x3_2">Button On</div>
            </div>

        </nav>

