<!-- container -->
<div class="container-fluid">

<!-- row -->
<div class="row p-30-0">

  <!-- col -->
  <div class="col-lg-12">

    <!-- section title -->
    <div class="art-section-title">
      <!-- title frame -->
      <div class="art-title-frame">
        <!-- title -->
        <h4>Contact information</h4>
      </div>
      <!-- title frame end -->
    </div>
    <!-- section title end -->

  </div>
  <!-- col end -->
  <!-- col -->
  <div class="col-lg-12">
    <!-- contact card -->
    <div class="art-a art-card">
      <div class="art-table p-15-15">
        <ul>
          <li>
            <h6>Email:</h6><span>hisumit.js@gmail.com</span>
          </li>
          <li>
            <h6>Phone:</h6><span>+353 (0)899601186</span>
          </li>
          <li>
            <h6>Address:</h6><span>Castlegate, Lord Edward Street Dublin 02, Ireland</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- contact card end -->
  </div>
  <!-- col end -->

  <!-- col -->
  <div class="col-lg-12">

    <!-- section title -->
    <div class="art-section-title">
      <!-- title frame -->
      <div class="art-title-frame">
        <!-- title -->
        <h4>Get in touch</h4>
      </div>
      <!-- title frame end -->
    </div>
    <!-- section title end -->

    <!-- contact form frame -->
    <div class="art-a art-card">

      <!-- contact form -->
      <form action="contact.php" method="post" name="form" class="art-contact-form">
        <!-- form field -->
        <div class="art-form-field">
          <!-- name input -->
          <input id="name" name="name" class="art-input" type="text" placeholder="Name" required>
          <!-- label -->
          <label for="name"><i class="fas fa-user"></i></label>
        </div>
        <!-- form field end -->
        <!-- form field -->
        <div class="art-form-field">
          <!-- email input -->
          <input id="email" name="email" class="art-input" type="email" placeholder="Email" required>
          <!-- label -->
          <label for="email"><i class="fas fa-at"></i></label>
        </div>
        <!-- form field end -->

         <!-- form field -->
         <div class="art-form-field">
          <!-- email input -->
          <input id="email" name="phone" class="art-input" type="tel" placeholder="Phone Number" required>
          <!-- label -->
          <label for="phone"><i class="fas fa-phone"></i></label>
        </div>
        <!-- form field end -->
       
        <!-- form field -->
        <div class="art-form-field">
          <!-- message textarea -->
          <textarea id="message" name="msg" class="art-input" placeholder="Message" required></textarea>
          <!-- label -->
          <label for="message"><i class="far fa-envelope"></i></label>
        </div>
        
        <!-- form field end -->
        <!-- button -->
        <div class="art-submit-frame">
          <button class="art-btn art-btn-md art-submit" type="submit" name="submit" value="Send"><span>Send message</span></button>
          <!-- success -->
          <div class="art-success">Success <i class="fas fa-check"></i></div>
        </div>
      </form>
      <!-- contact form end -->

    </div>
    <!-- contact form frame end -->

  </div>
  <!-- col end -->

</div>
<!-- row end -->

</div>
<!-- container end -->


<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='ichbinrajput@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h2>Sent Successfully! <br><b>Thank you"." ".$name.",</b><br> We will contact you shortly!</h2>
			<br><a href='index.php'><button class='btn5'>Back to Homepage</button></a>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>