<div class="topmenu">
    <?php
         echo '<div class="icon">
         <div class="dropdown">
             <a class="chudrop"><i class="fas fa-bars""></i></a> 
             <div class="dropdownlist">
                 <p class="content">
                     <a href="index.php">Trang Chủ
                 </p>
                
             </div>
         </div>
     </div>  
     <div class="thongtin">
         <div class="dropdown">
             <a href="index.php" class="chudrop">Trang chủ</a> 
         </div>
     </div>
    
     
     </div>';

        $conn=mysqli_connect("localhost","root","","banhang");
        $sql="select * from chungloai";
        mysqli_query($conn,"SET NAMES 'utf8'"); 
        $resultCL=mysqli_query($conn,$sql);
        while($rowCL=mysqli_fetch_array($resultCL))
        {
           echo '<div style="margin-left:50px; font-size: 20px;text-transform: uppercase; "> <a href="index.php?act=left&id='.$rowCL["idLoaiSP"].'">
                    '.$rowCL["loaiSP"].'
                    </a> </div>';
            
        }
        mysqli_close($conn);
    ?>
    
</div>
            
