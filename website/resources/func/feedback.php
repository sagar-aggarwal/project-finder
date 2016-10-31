<?php
	
	if(isset($_POST['sendFeedback']))
	{
		if(isset($_POST['feedbackSender'])&&isset($_POST['feedbackText']))
		{
			$from=$_POST['feedbackSender'];
			$text=$_POST['feedbackText'];

			if(empty($from) || empty($text))
			{
				echo '<script>alert('All fields are required')</script>';
			}
			else
			{
				$to1='shreya.chandra96@gmail.com';
				$to2='sagarkiemailid';
				$subject='Feedback submitted';
				$body=$text;
				$headers='From: '.$from;

				if(mail($to1,$subject,$body,$headers)||mail($to1,$subject,$body,$headers))
				{
					echo '<script>alert('Thanks for the feedback')</script>';
				}
				else
				{
					echo '<script>alert('There was an error sending feedback. Please try again later.')</script>';
				}
			}
		}
		else
		{
			echo '<script>alert('All fields are required')</script>';
		}

}