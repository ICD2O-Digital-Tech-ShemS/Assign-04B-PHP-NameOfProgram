<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shem Irekpita">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Menue</title>
  </head>
  <body>

  <table>
    <tr>
      <td><h1>Large</h1><img src="./images/KFC1.webp"></td>
      <td><h1>Regular</h1><img src="./images/KFC2.webp"></td>
    </tr>
  </table>
    <?php 
      echo "<h3>Place order</h3>";
    ?>
    <!-- Form to get age and day from the user -->
    <form action="result.php" method="post" target="result">
      <h3>Order</h3>
      <select name="side" id="side">
          <option value="select-option">select-option</option>
          <option value="Fries">Regular</option>
          <option value="Coke">Large</option>
        </select>
      <br>
      <h3>Side</h3>
        <select name="side" id="side">
          <option value="select-option">select-option</option>
          <option value="Fries">Fries</option>
          <option value="Coke">Coke</option>
        </select>
      <br><br>
      <input type="submit" value="Enter">
    </form>

    <iframe id="result" name="result">
    <div id="user-info">
    <div id="$ans"></div>
    <div id="$display"></div>
    <div id="$total"></div>
  </div>
    </iframe>
  </body>
</html>
