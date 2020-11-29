<!--using-fontAwesome------------>
<?php
require ("connect.php");
$errors = [];
$errorMessage = '';
$name=(isset($_POST['name']) ? $_POST['name'] : null );
$email=(isset($_POST['email']) ? $_POST['email'] : null );
$message=(isset($_POST['message']) ? $_POST['message'] : null );
$write = "INSERT INTO contact VALUES('$name', '$email', '$message')";
    if ($conn->query($write) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $write . "<br>" . $conn->error;
    }
    
    
if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }
}

?>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>
<link rel="stylesheet" type="text/css" href="style1.css"/>
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
	<section id="contact">
	<!--socail----------->
	<div class="social">
	<!--icons--------->
	<a href="#"><i class="fab fa-facebook-f"></i></a>
	<a href="#"><i class="fab fa-twitter"></i></a>
	<a href="#"><i class="fab fa-instagram"></i></a>
	<a href="#"><i class="fab fa-linkedin"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
	</div>
	<div class="contact-box">
	<!--heading---------->
	<div class="c-heading">
	<h1>Get In Touch</h1>
	<p>Call Or Email Us Regarding Question Or Issues</p>
	</div>

	<div class="c-inputs">
  <form action="c.php" method="post" id="contact-form">
  <?php echo((!empty($errorMessage)) ? $errorMessage : ''); ?>
    <p>
      <label>First Name:</label>
      <input name="name" type="text" value=""/>
    </p>
    <p>
      <label>Email Address:</label>
      <input style="cursor: pointer;" name="email" value="" type="text"/>
    </p>
    <p>
      <label>Message:</label>
      <textarea name="message"></textarea>
    </p>

    <p>
      <input type="submit" value="Send"/>
    </p>
  </form>
</div>
</div>

  <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  <script>
      const constraints = {
          name: {
              presence: {allowEmpty: false}
          },
          email: {
              presence: {allowEmpty: false},
              email: true
          },
          message: {
              presence: {allowEmpty: false}
          }
      };

      const form = document.getElementById('contact-form');

      form.addEventListener('submit', function (event) {
          const formValues = {
              name: form.elements.name.value,
              email: form.elements.email.value,
              message: form.elements.message.value
          };

          const errors = validate(formValues, constraints);

          if (errors) {
              event.preventDefault();
              const errorMessage = Object
                  .values(errors)
                  .map(function (fieldValues) {
                      return fieldValues.join(', ')
                  })
                  .join("\n");

              alert(errorMessage);
          }
      }, false);
  </script>

	<!--map------------------->
	<div class="map">
        <iframe style="  border:2px  solid #000000;"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.6694342833944!2d73.12548141484996!
        3d18.9902009871372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!
        2sPillai%20College%20of%20Engineering%2C%20New%20Panvel!5e0!3m2!1sen!2sin!4v1604941728728!5m2!1sen!2sin" 
        width="500px" height="500px" frameborder="0" style="border:0;" "position: center"></iframe>
    </div>
  </section>
</body>
</html>