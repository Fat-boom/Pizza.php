<?php

$errors = array('email' =>' ', 'title' =>' ', 'ingredients' =>' ');

//if(isset($_GET['submit'])){
  //echo $_GET['email'];
  //echo $_GET['title'];
  //echo $_GET['ingredients'];
//}

    if(isset($_POST['submit'])){

  //check email
    if(empty($_POST['email'])){
      $errors['email'] = ' An email is required <br />';
    } else {
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'email must be a valid email adress';
      }
    }
    //check title
    if(empty($_POST['title'])){
      $errors['title'] =' An title is required <br />';
    } else {
      $title = $_POST['title'];
      if(!preg_match('/^[a-zA-Z\s]+$/', $title)) {
        $erros['title'] = 'Title must be letters and spaces only';
      }
    }
    //check ingredients
    if(empty($_POST['ingredients'])){
      $errors['ingredients'] = ' At least one ingredients is required <br />';
    } else {
      $ingredients = $_POST['ingredients'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
        $errors['ingredients'] = 'Ingredients must be a comma seperated list';
      }
      
    } 
  }//this is the end of the POST check
?>
<!DOCTYPE html>
<html lang="en">


  
<?php include('templates/header.php'); ?>

<section class="container grey-text">
  <h4 class="center">Pizza hinzufügen</h4>
  <form class="white" action="add.php" method="POST">
    <label>Ihre Email:</label>
    <input type="text" name="email">
    <label>Pizza Name:</label>
    <input type="text" name="title">
    <label>Zutaten (Mit Komma trennen):</label>
    <input type="text" name="title">
    <div class="center">
      <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
    </div>
  </form>

<?php include('templates/footer.php'); ?>

</html>