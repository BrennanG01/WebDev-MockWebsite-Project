<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Registration Form</title>
  <link href="registrationStyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <h1> Event Registration </h1>
  <table class="center">
    <form action="" method="GET">
      <tr><td>
        <label>Full Name: </label></br>
        <input type="text" name="firstName" placeholder="Your Name" size="50"/>
        </br></br>
        <label>E-Mail: </label></br>
        <input type="email" name="email" placeholder="Your E-Mail" size="50"/>
        </br></br>

        <div class="slidecontainer">
          <p>Select your age: <span id="demo"></span></p>
          <input type="range" min="1" max="100" value="18" class="slider" id="myRange">
        </div>

        <script src="registrationScript.js"></script>

        <p>Select the event(s) you wish to register for: </p>
        <input type="checkbox" id="event1" name="event1" value="event1">
  				<label for="event1">Event1  </label>
        <input type="checkbox" id="event2" name="event2" value="event2">
          <label for="event2">Event2  </label>
        <p>Is there any additional information you would like us to know about?</p></br>
        <textarea cols="50" rows="4"></textarea></br>
        <input type="submit" value=" SUBMIT " id="Button1"/>
      </td></tr>
    </form>
  </table>
  <p id="paragraph">See you at the finish line!</p>
  <button onclick="window.location.href = 'PagePrincipale.html'"  type="button" name="home" id="Button1"> HOME </button>
  <button onclick="window.location.href = 'event.html'" type="button" name="events" id="Button1"> BACK TO EVENTS </button>
  <button onclick="window.location.href = 'contact.html'" type="button" name="contact" id="Button1"> CONTACT </button>
</body>

</html>
