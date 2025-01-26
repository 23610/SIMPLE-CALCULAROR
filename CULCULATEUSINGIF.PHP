<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simpe calculator</title>
</head>
<body>
    <h1 >SIMPLE CALCULATOR</h1>
     <form action="CULCULATEUSINGIF.PHP"METHOD="POST">
      FIRST NUMBER:<input type="number"name="num1"step="0.00001"><br>
      OPARATER:<input type="text"name="op"><br>
      SECOND NUMBER:<input type="number"name="num2"step="0.00001"><br>
      SUBMIT:<input type="submit">

 <?php
 $num1=$_POST["num1"];
 $num2=$_POST["num1"];
 $op=$_POST["op"];

 if($op=="+"){echo$num1+$num2;}

elseif($op=="-"){
    echo$num1-$num2;

}
elseif($op=="/"){
    echo$num1/$num2;

}
elseif($op=="*"){
    echo$num1*$num2;
    

}
else{"invalide number";}

 ?>
    </input>
     </form>
     <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color:rgb(107, 143, 23);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .calculator {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 30px; 
            width: 300px; 
            position: center;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: green; 
            top:center;
            position: center;
        }

        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 18px;
            box-sizing: border-box;
            text-align: center;
            color:yellow;

        }

        input[type="submit"] {
            background-color:rgb(116, 78, 35);
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        #result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            text-align: center; 
            color: blue; 
        }
    </style>
</head>
<body>

    