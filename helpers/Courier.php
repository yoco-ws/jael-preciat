<?php

require_once('phpMailer/class.phpmailer.php');
require_once('phpMailer/class.smtp.php');

function sendContactMail($data, $correo){
	// texto arriba 15px abajo 10px
	
	$url_site = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://'.$_SERVER["HTTP_HOST"];
	$path = $_SERVER['SERVER_NAME'];
	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = "base64";
	
	$mail->From = "noreply@jaelpreciat.com";
	$mail->FromName = "Jael Preciat";
	$mail->isHTML(true);

	

	//Producción 
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = 'mail.jaelpreciat.com';  //mailtrap SMTP server
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Username = 'noreply@jaelpreciat.com';   //usernameemail
	$mail->Password = 'TqiUl9kdHyZ3';   //password
	$mail->Port = 465; 
	//*/

	$mail->addAddress($data['email'], $data['name']);
	//$mail->addBCC("soporte@yoco.ws");
	$mail->addBCC($correo);
	
	$mail->Subject = "Contacto - Jael Preciat";
	$headers =  'From: '."noreply@jaelpreciat.com"."\r\n" .
		    	'Reply-To: noreply@jaelpreciat.com'.
		    	'X-Mailer: PHP/' . phpversion();
	$message = "<html>
				<body leftmargin='0' marginwidth='0' topmargin='0' marginheight='0' offset='0'>
					<center>
						<table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' style='background:#fff;'>
							<tr>
								<td align='center' valign='top'>
									<br>
									<table border='0' cellpadding='0' cellspacing='0' width='600' id='templateContainer' style='background:#fff; font-family:helvetica; font-size:12px;'>
										<tr>
											<td align='center' valign='top'>
								
												<table border='0' cellpadding='0' cellspacing='0' width='600' id='backgroundCentral'>
													<tr>
														<td class='headerContent'>
															<div style='width:100%; margin: 0 auto; padding-top:20px; text-align:center;'>
																<a href='".RUTA."'>
																	<img src='".RUTA."img/mailer.jpg' alt='Jael Preciat'>
																</a>
													
															</div>
														</td>
													</tr>


													<tr>
														<td valign='top'>
															<div style='padding:10px;color: #255A7B;'>
																
																<div style='text-align:left; font-size:15px;'>
																	
																	<br>
																	<div style='margin-left: 2rem;'>
																		¡Hola ".$data['name']."! Agradezco que te hayas comunicado conmigo. Leeré tu mensaje a la brevedad posible para así ponernos en contacto contigo al correo ".$data['email'].". 
																	</div>

																	<br><br>

																	<strong> Jael Preciat </strong>
																</div>

																

															</div>
														</td>
													</tr>
										
												</table>
								
											</td>
										</tr>
							
									</table>
									<br />
								</td>
							</tr>
						</table>
					</center>
				</body>
			</html>";
	$mail->Body = $message;
	$mail->AltBody = $headers."\n\n".$message;
	if(!$mail->Send()) {
		error_log($mail->ErrorInfo);
		return false;
	} else {
		return true;
	}
}


?>