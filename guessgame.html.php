<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Gues Game</title>
    <style>

    </style>
</head>

<body class="bg-primary">
<?php 
//   $hint = $_GET['hint'];
//   $result = $_GET['result'];
//   $lvl=$_GET['lvl'];
 
//   $try = $_GET['try'];
//   if ($ra > $g) {
//     $try--;
//     // $hint = "Too Low! Guess Higher";
// } elseif ($ra < $g) {
//     $try--;
//     // $hint = "Too High! Guess Lower";
// }
// elseif($try==0){
//     $try=5;
//     $result="Game Over! You Lose";
// }
?>
    <div class="container-fluid mt-5">
       
            <div class="col-4"></div>
            <h1 class="success" id="lvl">Level 1</h1>
            <h5 id="lv">1-10</h5>

            <div class="col-4">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Guess The Number</label>
                    <input type="number" class="form-control" id="g1" name="guess" placeholder="Guess The Number">
                </div>
            </div>
            <div class="col-4 mt-5">
                <button type="button" id="myBtn" class="btn btn-success mb-3">Guess</button>
            </div>

            <h4 class="text-danger" id="tr">Tries Left: 5</h4>
        <h3 class="text-warning" id="hint"></h3>
        <h1 style="color: green;" id="rst" ></h1>
      
    </div>
    <div id="t"></div>
    <script type="text/javascript">
     var btn = document.getElementById("myBtn");
	    // add event listener for the button, for action "click"
	    btn.addEventListener("click", ggg);
        var ra = Math.floor(Math.random() * 10) + 1;
   


        var lvl =1;
        var tryy =5;
    function ggg() {
        
        
        
        var hint = "";
        var result = "";
        
        var g =   document.getElementById("g1").value;
        alert(ra);
    if (ra == g) {
        lvl++;
        result = "Congratulation! You Won - Go to Next Level "+lvl;
        hint="";
        tryy=5;
        switch (lvl) {
            case 2:
                ra = Math.floor(Math.random() * 20) + 1;
                document.getElementById("lv").innerHTML = "1-20";
               
                document.getElementById("lvl").innerHTML = "Level 2";
                break;
            case 3:
                ra = Math.floor(Math.random() * 30) + 1;
                document.getElementById("lvl").innerHTML = "Level 3";
                document.getElementById("lv").innerHTML = "1-30";


                break;
            case 4:
                ra = Math.floor(Math.random() * 40) + 1;
                document.getElementById("lvl").innerHTML = "Level 4";
                document.getElementById("lv").innerHTML = "1-40";


                break;
            default:
            ra =Math.floor(Math.random() * 10) + 1;
            document.getElementById("lvl").innerHTML = "Level 1";
            result="Game Over! You Won";
            tryy=5;
                break;
        }
    } else if (ra > g) {
        tryy--;
        hint = "Too Low! Guess Higher";
    } else if (ra < g) {
        tryy--;
        hint = "Too High! Guess Lower";
    }
     if(tryy == 0){
        tryy=5;
        document.getElementById("lvl").innerHTML = "Level 1";

        ra = Math.floor(Math.random() * 10) + 1;
        result="Game Over! You Lose";
    } 
    document.getElementById("rst").innerHTML =result;
    document.getElementById("hint").innerHTML = "Hint: "+hint;
    document.getElementById("tr").innerHTML = "Tries Left: "+tryy;
    if(result == "Game Over! You Lose"){
    document.getElementById("rst").style.color= "red";

    }



}
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>