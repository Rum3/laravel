<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Валута</th>
                <th>Стойност</th>
            </tr>
        </thead>
        <tbody>
           <?php
        // $exchangeRates = [
        // 'USD' => 1.85,
        // 'EUR' => 1.96,
        // 'GBP' => 2.2,
        // ];
         foreach ($exchangeRates as $currency => $value){
             echo "<tr>";
                echo "<td>" . $currency . "</td>";
                echo "<td>" . $value . "</td>";
              echo "</tr>";
             } ?>
        </tbody>
    </table>
</body>
</html>
