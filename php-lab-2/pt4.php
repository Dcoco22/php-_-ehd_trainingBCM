<html>
   
   <head>
      <title>Tìm độ dài ngắn/dài nhất của phần tử dạng chuỗi trong mảng</title>
   </head>
   <body>
   
       <?php

        $array_check = array('EHC', 'HackYourLimits', 'Training');
        $Dodai  = array_map('strlen', $array_check );
        echo "Output: minLength: " . min($Dodai). ";  maxLength: ", max($Dodai);

       ?>

   </body>
</html>

