<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1> Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping 1 </h3>";
        $start_number = 2 ;
        while ($start_number <= 20) {
            echo $start_number . " - I Love PHP <br>";
            $start_number+=2;
        }

        echo"<h3>Soal No 1 Looping 2 </h3>";

        echo $last_number = 20 ;
        while ($last_number >= 2) {
            echo $last_number . " - I Love PHP <br>";
            $last_number-=2;
        }


        


        echo "<h3>Soal No 2 Looping Array Modulo </h3>";

        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);

        foreach($numbers as $number) {
            $rest[] = $numbers%5;
        }
       

        echo "<br>";
        echo "Array sisa baginya adalah:  "; 
        echo "<br>";
        print_r($rest);

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        
        
        $toko_komputer = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];
        
        foreach ($toko_komputer as $value){
            $data =[
                "id" => $value[0],
                "name" => $value [1],
                "price" => $value[2],
                "description" => $value[3],
            ];
            print_r($data);
            echo "<br>";
        };
       
        
        echo "<h3>Soal No 4 Asterix </h3>";
        
        for ($j=1; $j<=5; $j++){
            for ($b=1; $b<=$j; $b++){
                echo"*";
            }
            echo "<br>";
        }
              
    ?>

</body>
</html>