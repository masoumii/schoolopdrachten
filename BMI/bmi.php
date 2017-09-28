            <?php

            function berekenBMI($lengte, $gewicht){
                    $bmi = $gewicht / ($lengte*$lengte) * 10000;

                    echo("Uw BMI bedraagt: " . $bmi . "<br/>");

                    if($bmi < 18){
                        echo("<font color='blue'><b>U lijdt aan ondergewicht!</b></font>");
                    }
                    if($bmi > 18 AND $bmi <= 25){
                        echo("<font color='green'><b>U heeft een gezond gewicht!</b></font>");
                    }
                    if($bmi > 25 AND $bmi <= 27){
                        echo("<font color='purple'><b>U heeft een licht overgewicht!</b></font>");
                    }
                    if($bmi > 27 AND $bmi <= 30){
                        echo("<font color='yellow'><b>U heeft een matig overgewicht!</b></font>");
                    }
                    if($bmi > 30 AND $bmi <= 40){
                        echo("<font color='orange'><b>U heeft een ernstig overgewicht!</b></font>");
                    }
                    if($bmi > 40){
                        echo("<font color='red'><b>U heeft een ziekelijk overgewicht!</b></font>");
                    }
                    }


                if(isset($_POST['submit'])){
            
                    $lengte = $_POST['lengte'];
                    $gewicht = $_POST['gewicht'];

                    berekenBMI($lengte,$gewicht);
                }
                    
            ?>
            <?php include_once("form.php"); ?>
    </body>
</html>


