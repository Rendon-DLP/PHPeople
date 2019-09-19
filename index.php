<?php include_once 'includes/db.php'?>
<style>
<?php include 'styles/styles.css'; ?>
</style>

<!DOCTYPE html>
<html>
    <head>
        <title>People Saver!</title>
</head>
<body>
<div id="mainContainer">
      <h1>Add People!</h1>
        <form action="includes/addPerson.php" method="POST">
         <div id="formDiv">
            <label>First Name:</label>
             <input id="textInput" type="text" name="first">
            <label>Last Name:</label>
             <input id="textInput" type="text" name="last">
            <label>Email:</label>
             <input id="textInput" type="text" name="email">
            <button id='submitButton' name='submit' type='submit'>Submit</button>
         </div>
        </form>
</div>
<div id='resultsDiv'>
<?php
    $sql = 'SELECT * FROM people;';
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<br>' . $row['people_first'] . '<br>';
            echo $row['people_last'] . '<br>';
            echo $row['people_email'] . '<br>';
        }
    }
?>
</div>
</body>
</html>