<!DOCTYPE html>
<html>
  <body>
  <form action="/E-Commerce/update_category.php" method="post">
    Id: <input type="text" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>"><br>
    Name: <input type="text" name="name"><br>
    Quantity: <input type="text" name="quantity"><br>
    <input type="submit">
  </form>
  </body>
</html>
