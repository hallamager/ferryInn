<?php



if(isset($_POST['sent'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	if (empty($_POST["name"])) {
		$nameError = "Name is required";
	} else if (empty($_POST["email"])) {
	    $emailError = "Email is required";
	}else if (empty($_POST["phone"])) {
	   $phoneError = "phone is required";
	} else if (empty($_POST["message"])) {
	    $messageError = "message is required";
	} else {
	    $formContent="From: $name $email $phone \n Message: $message";
	    $recipient = "hallamager@msn.com";
	    $subject = "Contact Form";
	    $mailHeader = "From: $email \r\n";
	    mail($recipient, $subject, $formContent, $mailHeader) or die("Error!");
		$messageSent = "success";
	}
}

?>

<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-sm">
	                        <?php if(empty($messageSent)) { ?>
	                            <form class="form-horizontal" action="contactus.php" method="POST">
	                                <fieldset>
	                                    <legend1 class="text-center header">Contact us</legend1>

	                                    <div class="form-group">
	                                        <span class="col-md-1 col-md-offset-1 text-center"></span>
	                                        <div class="col-md-8">
		                                        <?php if($nameError) { ?>
		                                        	<p class="bg-danger"><?= $nameError ?><p>
		                                        <?php } ?>
	                                            <input id="name" name="name" input-type="text" placeholder="Full Name" class="form-control" <?php if(!empty($name)) {?> value="<?= $name ?>" <?php } ?>>
	                                        </div>
	                                    </div>

	                                    <div class="form-group">
	                                        <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
	                                        <div class="col-md-8">
		                                        <?php if($emailError) { ?>
		                                        	<p class="bg-danger"><?= $emailError ?><p>
		                                        <?php } ?>
	                                            <input id="email" name="email" input-type="text" placeholder="Email Address" class="form-control" <?php if(!empty($email)) {?> value="<?= $email ?>" <?php } ?>>
	                                        </div>
	                                    </div>

	                                    <div class="form-group">
	                                        <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-phone-square bigicon"></i></span>
	                                        <div class="col-md-8">
		                                        <?php if($phoneError) { ?>
		                                        	<p class="bg-danger"><?= $phoneError ?><p>
		                                        <?php } ?>
	                                            <input id="phone" name="phone" input-type="tel" placeholder="Phone" class="form-control" <?php if(!empty($phone)) {?> value="<?= $phone ?>" <?php } ?>>
	                                        </div>
	                                    </div>

	                                    <div class="form-group">
	                                        <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
	                                        <div class="col-md-8">
		                                        <?php if($messageError) { ?>
		                                        	<p class="bg-danger"><?= $messageError ?><p>
		                                        <?php } ?>
	                                            <textarea class="form-control" id="message" name="message" placeholder="Enter your message for us here. We will get back to you as soon as possible." rows="7" <?php if(!empty($message)) {?> value="<?= $message ?>" <?php } ?>></textarea>
	                                        </div>
	                                    </div>
										<input type="hidden" name="sent" value="1">
	                                    <div class="form-group">
	                                        <div class="col-md-12 text-center">
	                                            <button type="submit" class="btn btn-primary btn-md">Send</button>
	                                        </div>
	                                    </div>
	                                </fieldset>
	                            </form>
	                            <?php } else { ?>
									<p>Thanks we'll be in touch</p>
	                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>