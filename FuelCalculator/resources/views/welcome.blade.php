
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ново зареждане</h1>
    <table>
  <tr>
    <td>
    <label for="date">Дата на зареждане: </label>
    <input type="date" name="date" id="date">
    </td>
  </tr>
  <tr>
    <td>
    <label for="FuelAmount">Количество гориво: </label>
    <input type="float" name="FuelAmount" id="FuelAmount" required>
    </td>
  </tr>
  <tr>
    <td>
    <label for="PriceLitre">Цена за литър: </label>
    <input type="PriceLitre" name="PriceLitre" id="PriceLitre" required>
    </td>
  </tr>
  <tr>
    <td>
    <label for="Price">Цена на зареждането: </label>
    <input type="Price" name="Price" id="Price">
    </td>
  </tr>
  <tr>
    <td>
    <label for="GasStation">Бензиностанция: </label>
    <input type="GasStation" name="GasStation" id="GasStation">
    </td>
  </tr>
  <tr>
    <td>
    <label for="fuel">Вид гориво: </label>
    <input type="fuel" name="fuel" id="fuel">
    </td>
  </tr>
  <tr>
    <td>
        <button type="submit">зареждане</button>
    </td>
  </tr>
</table>
</body>
</html>
