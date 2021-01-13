<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Calculator</title>
</head>
<body>

<div class="container text-center py-5">
  <h1 class="display-4 pb-5">Calculator</h1>

  <form action="" class="row col col-4 offset-4 g-3 align-items-center">
    
      <input type="text" class="form-control" name="num1" placeholder="Number 1">
      <input type="text" class="form-control" name="num2" placeholder="Number 2">
      
      <select class="form-select" name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <br>
      <button class="btn btn-primary" type="submit" name="submit" value="submit">Calculate</button>
  </form>  

  <?php
    if(isset($_GET['submit'])) {
      $result1 = $_GET['num1'];
      $result2 = $_GET['num2'];
      $operator = $_GET['operator'];
      switch ($operator) {
        case "None": 
          $answer = "You need to select a method";
        break;
        case "Add": 
          $answer = $result1 + $result2;
        break;
        case "Subtract": 
          $answer = $result1 - $result2;
        break;
        case "Multiply": 
          $answer = $result1 * $result2;
        break;
        case "Divide": 
          $answer = $result1 / $result2;
        break;
      }    
    }
?>

  <p class="p-5 m-y5 lead">The answer is: <?php echo $answer ?></p>

</div> 

</body>
</html>