<?php
// include '../auto_load.php';

require 'Send_Mail.php';
$mail = new Send_Mail();

if(isset($_POST['Action'])){
	if($_POST['Action'] == 'career_submit') {
		// echo "<pre>";print_r($_FILES);exit;

		$temp_file = $_FILES['file']['tmp_name'];
		$fileName = $_FILES['file']['name'];

		$res['status'] = 200;
		$res['message'] = "Career form submitted successfully."; 



		$to = array('rajani.r@rasiseeds.com');

		$subject = 'Siraseeds - Careers';

		$mail_template = '
		<html>
		<head>
			<style>
			table, td, th {
			border: 1px solid;
			}
			
			table {
			width: 100%;
			border-collapse: collapse;
			}
			</style>
			</head>
				<body>
					<table >
						<thead>
							<tr>
								<th class="text-center">S.No</th>
								<th class="text-center">First Name</th>
								<th class="text-center">Last Name</th>
								<th class="text-center">Email</th>
								<th class="text-center">Mobile No</th>
								<th class="text-center">Address</th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									1
								</td>
								<td>
									' . $_POST['first_name'] . '
								</td>
								<td>
									' . $_POST['last_name'] . '
								</td>
								<td>
									' . $_POST['email'] . '
								</td>
								<td>
									' . $_POST['mobile'] . '
								</td>
								<td>
									'.$_POST['address'] . '
								</td>
							</tr>
						</tbody>
					</table>
				</body>
		</html>';


		$process_mail = $mail->Send_Mail_attachement($subject,$temp_file,$fileName,$mail_template,$to,'','');

		if (!$process_mail) {
			$res['status'] = 500;
			$res['message'] = "Career form mail sending error."; 
		}

		echo json_encode($res);exit;
	}

	else if($_POST['Action'] == 'contact_submit') {
		// echo "<pre>";print_r($_POST);exit;
		$res['status'] = 200;
		$res['message'] = "Contact form submitted successfully."; 



		$to = array('rajani.r@rasiseeds.com');

		$subject = 'Siraseeds - Contact Enquiry';

		$mail_template = '
		<html>
		<head>
			<style>
			table, td, th {
			border: 1px solid;
			}
			
			table {
			width: 100%;
			border-collapse: collapse;
			}
			</style>
			</head>
				<body>
					<table >
						<thead>
							<tr>
								<th class="text-center">S.No</th>
								<th class="text-center">Name</th>
								<th class="text-center">Email</th>
								<th class="text-center">Mobile No</th>
								<th class="text-center">Message</th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									1
								</td>
								<td>
									' . $_POST['name'] . '
								</td>
								<td>
									' . $_POST['email'] . '
								</td>
								<td>
									' . $_POST['mobile'] . '
								</td>
								<td>
									'.$_POST['message'] . '
								</td>
							</tr>
						</tbody>
					</table>
				</body>
		</html>';


		$process_mail = $mail->Send_Mail_Details($subject,'','',$mail_template,$to,'','');

		if (!$process_mail) {
			$res['status'] = 500;
			$res['message'] = "Contact form mail sending error."; 
		}

		echo json_encode($res);exit;
	}
}
