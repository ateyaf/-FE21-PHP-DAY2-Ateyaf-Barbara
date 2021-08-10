<!DOCTYPE html>
<html lang="en" >
   <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="st.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <title ></title>
   </head>
   <body>
    
   <!-- <h1>please enter you name and surname</h1>
   <h2>
        <form action="index.php" method="POST">
        Name: <input type="text" name="name"><br>
        Surname: <input type="text" name="surname"><br>
        <input type="submit" name="submit">
        </form>
    </h2> -->
    
       <?php
       #--------------------day-2-php- exer.1-------------------
    //    if( isset($_POST['submit']))
    //    {
    //        if( $_POST["name"] && $_POST["surname"] )
    //        {
    //            echo "Welcome ". $_POST[ 'name'];
    //            echo " ";
    //            echo $_POST['surname']  ;
    //        }
    //        else
    //        echo" please enter your name";
    //    }

    #--------------------day-2-php- exer.2-------------------
    
    // function divFunction($num1, $num2)
    //    {
    //        $div = $num1 / $num2;
    //        echo  '<h1>"The result for dividing  '.$num1.' and '.$num2. ' is " '.$div.' </h1>';
    //    }
    //    divFunction(10, 20);


    #--------------------day-2-php- exer.3-------------------

    // function sum_avg($math, $Physics ,$English)
    // {
    //     $sum = $math + $Physics + $English;
    //     $avg=$sum/3;
    //     return  array($sum,$avg);
    // }
    // $return_value = sum_avg(50,70,80);
    // echo '<h1> "your score for Math   Physics  and english  "</h1>';
    // echo  "Return the Sumation value from the function  :  $return_value[0]  ";
    // echo"</br>";
    // echo  "Return the Avarag value from the function  : $return_value[1]";


    #--------------------day-2-php- exer.4-------------------
    function  area_volume_for_box($width, $height,$depth)
    {
        $area = $height*$width;
        $volume = $height*$width*$depth;
        return  array($area,$volume);
    }
    $return_value = area_volume_for_box(7,2,5);
   

    echo '<h1> "The Area and Volume for our box   "</h1>';
    echo  '<h2>"The Area for the box :" '.$return_value[0].' </h2>';
    echo"</br>";
    echo   '<h2> "The Volume for the box :" '.$return_value[1].' </h2>';
    echo"</br>";
     

       ?>
       <i class="fa fa-refresh fa-spin fa-3x fa-fw" style="text-align: center; color:red; margin-left: 40%; margin-top:10% ; font-size:100pt;" >
       </i>
   </body>
</html>