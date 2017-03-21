<?php

    include_once ('classes/voertuig.class.php');
    include_once ('classes/sportwagen.class.php');
    include_once ('classes/vrachtwagen.class.php');

    try {
        if( !empty($_POST)) {
            $Merk = $_POST['merk'];
            $AantalP = $_POST['AantalPassagiers'];
            $AantalD = $_POST['AantalDeuren'];
            $MaxLast = $_POST['MaxLast'];
            $Stereo = $_POST['StereoInstallatie'];
			
                if ($Stereo == "y" && empty($MaxLast)) {
                    $sportwagen = new sportwagen();
                    $sportwagen->Merk = $Merk;
                    $sportwagen->AantalPassagiers = $AantalP;
                    $sportwagen->AantalDeuren = $AantalD;
                    $sportwagen->stereoInstallatie = $Stereo;

                   /* if ($sportwagen->Save()){*/
                        $success = "De sportwagen is gereserveerd";
                        $output = $sportwagen->Reserveer();
                   /* } else {
                        $error = "Oei, er is een error opgetreden";
                    }*/
                } elseif (!empty($MaxLast) && $Stereo != "y"){
                    $vrachtwagen = new vrachtwagen();
                    $vrachtwagen->Merk = $Merk;
                    $vrachtwagen->AantalPassagiers = $AantalP;
                    $vrachtwagen->AantalDeuren = $AantalD;
                    $vrachtwagen->maxLast = $MaxLast;

                   /* if ($vrachtwagen->Save()){*/
                        $success = "De vrachtwagen is gereserveerd";
                        $output = $vrachtwagen->Reserveer();
                   /* } else {
                        $error = "Oei, er is een error opgetreden";
                    }*/
                } elseif (empty($MaxLast) && $Stereo == ""){
                    $voertuig = new voertuig($Merk,$AantalP,$AantalD);
                    $voertuig->Merk = $Merk;
                    $voertuig->AantalPassagiers = $AantalP;
                    $voertuig->AantalDeuren = $AantalD;

                    if ($voertuig->Save()){
                        $success = "De wagen is gereserveerd";
                        $output = $voertuig->Reserveer();
                    } else {
                        $error = "Oei, er is een error opgetreden";
                    }
                } else{
                    // niet ok
                    $error = "Gelieve te kiezen tussen de sportwagen functie of de vrachtwagen functie";
                }
            //} else {
              //  $error = "Reservaties zijn gelosten vanaf 12u!";
            //}
        }
    }
   catch(Exception $e) {
        $error = $e->getMessage();
    }

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auto's</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <form action="" method="post">
            <h2>Algemeen</h2>
            <label for="merk">Merk</label>
            <select name="merk" id="merk">
                <option value="">-- Maak uw keuze --</option>
                <option value="nokia">NoKIA</option>
                <option value="merneedes">Merneedes</option>
                <option value="bmw">Bucht Met Wielen</option>
                <option value="seatfundum">Seatfundum</option>
                <option value="nopel">Nopel</option>
                <option value="citroen">Citroen</option>

            </select>

            <label for="AantalPassagiers">Aantal passagiers</label>
            <input id="AantalPassagiers" name="AantalPassagiers" type="text">

            <label for="AantalDeuren">Aantal deuren</label>
            <input id="AantalDeuren" name="AantalDeuren" type="text">

            <div class="tabs">

                <div class="tab">
                    <input type="radio" id="tab-1" name="tab-group-1" checked>
                    <label class="label" for="tab-1"> Sportwagen</label>

                    <div class="content sport">
                        <label for="StereoInstallatie">Stereo installatie</label>
                        <input id="StereoInstallatie" name="StereoInstallatie" type="checkbox" value="y">
                    </div>
                </div>

                <div class="tab">
                    <input type="radio" id="tab-2" name="tab-group-1">
                    <label class="label" for="tab-2">Vrachtwagen</label>

                    <div class="content vracht">
                        <label for="MaxLast">Max last</label>
                        <input id="MaxLast" name="MaxLast" type="text" placeholder="TON">
                    </div>
                </div>

            </div>

            <button type="submit">Reserveer</button>
        </form>

        <?php if( !empty($_POST)) : if( isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error;?></div>
        <?php else: ?>
            <div class="alert alert-succes"><?php echo $success;?></div>
            <ul class="reservation"><?php echo $output;?></ul>
        <?php endif; endif; ?>
	</div>
</body>
</html>