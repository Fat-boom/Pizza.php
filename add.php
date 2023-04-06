<?php

//if(isset($_GET['submit'])){
  //echo $_GET['email'];
  //echo $_GET['title'];
  //echo $_GET['ingredients'];
//}
  //check email
    if(empty($_POST['email'])){
      echo ' An email is required <br />';
    } else {
      echo htmlspecialchars($_POST['email']);
    }
    //check title
    if(empty($_POST['title'])){
      echo ' An title is required <br />';
    } else {
      echo htmlspecialchars($_POST['title']);
    }
    //check ingredients
    if(empty($_POST['ingredients'])){
      echo ' At least one ingredients is required <br />';
    } else {
      echo htmlspecialchars($_POST['ingredients']);
    } //this is the end of the POST check
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