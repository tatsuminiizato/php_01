<?php


echo '<script>

        function koshin(){
        location.reload();}
       
      </script>


      <input type="button" value = "じゃんけん" class= "btn";
            onclick="koshin()" 
            
            style= " padding: 0.5em 1em;
            margin: 2em 0;
            font-weight: bold;
            
            background: #FFF;
            border: solid 3px #6091d3;
            border-radius: 10px; 
            width: 15%;"
        ><br>' ;

echo 
    '<p style= " padding: 0.5em 1em;
                    margin: 2em 0;
                    font-weight: bold;
                    color: #6091d3;
                    background: #FFF;
                    border: solid 3px #6091d3;
                    border-radius: 10px;
                    width: 5%; 
                    

      ">自分の手</p>';

$myhand = mt_rand(1,3);

    if($myhand==1){

 echo
       '<img src="img/1.jpg" alt="gu">';
            
                    }



 else if($myhand==2){

        echo '<img src="img/2.jpg" alt="pa"> ' ;
    
            }
    
else if($myhand==3){

    echo '<img src="img/3.jpg" alt="choki"> ';
        
    }

     
echo ' <div style= " padding: 0.5em 1em;
                    margin: 2em 0;
                    font-weight: bold;
                    color: red;
                    background: #FFF;
                    border: solid 3px red;
                    border-radius: 10px; 
                    width: 5%;">相手の手</div>';
  

 $yourhand = mt_rand(1,3);

        if($yourhand==1){

        echo '<img src="img/1.jpg" alt="gu"> ';
        }

        else if($yourhand==2){

        echo '<img src="img/2.jpg" alt="pa"> ' ;
            
        }
            
         else if($yourhand==3){

        echo '<img src="img/3.jpg" alt="choki"> ';
                
        }


echo "<br>";
//結果//

  

 if ($myhand ==1 and $yourhand==3){
     echo '<div class = "abc" 
                style = "
                color : red ;
                padding: 0.5em 1em;
                margin: 2em 0;
                font-weight: bold;
                background: #FFF;
                border: solid 3px red;
                border-radius: 10px; 
                width: 5%; ">勝ち</div>';
     
     
 }
 else if ($myhand ==2 and $yourhand==1){
    echo  '<div class = "abc"  style = "
                                color : red ;
                                padding: 0.5em 1em;
                                margin: 2em 0;
                                font-weight: bold;
                                background: #FFF;
                                border: solid 3px red;
                                border-radius: 10px; 
    width: 5%; " : red" ;>勝ち</div>';
}

if ($myhand ==3 and $yourhand==2){
    echo '<div class = "abc" style = "color : red
 ;
    padding: 0.5em 1em;
    margin: 2em 0;
    font-weight: bold;
    background: #FFF;
    border: solid 3px red;
    border-radius: 10px; 
    width: 5%; " >勝ち</div>';
}

if ($myhand ==$yourhand){
    echo '<div class = "abc" style = "color : yellow" ;>あいこ</div>';
}

if ($myhand ==1 and $yourhand==2){
    echo '<div class = "abc" style = "color : blue" ;>負け</div>';
}

if ($myhand ==2 and $yourhand==3){
    echo '<div class = "abc" style = "color : blue" ;>負け</div>';
}

if ($myhand ==3 and $yourhand==1){
    echo '<div class = "abc" style = "color : blue" ;>負け</div>';
}





//ゲームの感想とお問い合わせ




?>


<!-- //----HTML------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
 
    <form method="post"　action="form.php">
            <P>お名前:<input type="text" name = "name" size = "20"></P>
            <P>ご感想:<input type="text" name = "kansou" size = "40"></P>
            <P><input type="submit" value = "送信" ></P>
    </form>
 
    
</body>
</html>