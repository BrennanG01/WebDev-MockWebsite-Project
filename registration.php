<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Registration Form</title>
  <link href="registrationStyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php
    try {
      $connString = "mysql:host=localhost;dbname=marathon";
      $user = "root"; //Non-localhost implementation will require different mySQL account.
      $pass = "root"; //Non-localhost implementation will require different mySQL account.
      
      $message= "Please make sure all necessary fields are filled out before submitting!";
      
      function alert($message) {
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
      
      $pdo = new PDO($connString,$user,$pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && (isset($_POST['event1']) || isset($_POST['event2']) || isset($_POST['event3']))) {
        if(isset($_POST['event1'])) {
          $sql = "INSERT INTO runner (firstName, lastName, email, age, comments, FK_eventID) VALUES ('" . $_POST['firstName'] . "', '" . $_POST['lastName'] . "', '" . $_POST['email'] . "', '" . $_POST['age'] . "', '" . $_POST['comments'] . "', 1);";
          $result = $pdo->exec($sql); 
        } 
        if(isset($_POST['event2'])) {
          $sql = "INSERT INTO runner (firstName, lastName, email, age, comments, FK_eventID) VALUES ('" . $_POST['firstName'] . "', '" . $_POST['lastName'] . "', '" . $_POST['email'] . "', '" . $_POST['age'] . "', '" . $_POST['comments'] . "', 2);";
          $result = $pdo->exec($sql); 
        } 
        if(isset($_POST['event3'])) {
          $sql = "INSERT INTO runner (firstName, lastName, email, age, comments, FK_eventID) VALUES ('" . $_POST['firstName'] . "', '" . $_POST['lastName'] . "', '" . $_POST['email'] . "', '" . $_POST['age'] . "', '" . $_POST['comments'] . "', 3);";
          $result = $pdo->exec($sql); 
        } 
      
      } else {  //User is accessing registration page initially OR user has submitted incorrect form.
        alert($message);
      }
    }
    catch (PDOException $e) {
      die($e->getMessage());
    }
  ?>
  <h1> Event Registration </h1>

  <?php if(isset($result)) { ?>
    <h2> Registration Complete! </h1>
  <?php } ?>

  <table class="center">
    <form action="" method="POST">
      <tr><td>
        <label>First Name: </label></br>
        <input type="text" name="firstName" placeholder="First Name" size="50"/>
        </br></br>
        <label>Last Name: </label></br>
        <input type="text" name="lastName" placeholder="Last Name" size="50"/>
        </br></br>
        <label>E-Mail: </label></br>
        <input type="email" name="email" placeholder="Your E-Mail" size="50"/>
        </br></br>

        <div class="slidecontainer">
          <p>Select your age: <span id="demo"></span></p>
          <input type="range" name="age" min="1" max="100" value="18" class="slider" id="myRange">
        </div>

        <script src="registrationScript.js"></script>

        <p>Select the event(s) you wish to register for: </p>
        <input type="checkbox" id="event1" name="event1" value="event1">
  				<label for="event1">November 23rd  </label>
        <input type="checkbox" id="event2" name="event2" value="event2">
          <label for="event2">December 10th  </label>
        <input type="checkbox" id="event3" name="event3" value="event3">
          <label for="event3">January 15th  </label>
        <p>Is there any additional information you would like us to know about?</p></br>
        <textarea cols="50" rows="4" name="comments"></textarea></br>
        <input type="submit" value=" SUBMIT " id="Button1"/>
      </td></tr>
    </form>
  </table>
  <p id="paragraph">See you at the finish line!</p>
  <button onclick="window.location.href = 'PagePrincipale.php'"  type="button" name="home" id="Button1"> HOME </button>
  <button onclick="window.location.href = 'event.php'" type="button" name="events" id="Button1"> BACK TO EVENTS </button>
  <button onclick="window.location.href = 'contact.php'" type="button" name="contact" id="Button1"> CONTACT </button>
</body>

</html>
