<?php
	// ini_set('display_errors', 1);
	// error_reporting(~0);

	require 'vendor/autoload.php';
	require_once 'vendor/dompdf/autoload.inc.php';
//home/mohit_jotaniya/htdocs/EmployeeManagement/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Writer/Pdf

use Dompdf\Dompdf; 

	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	//use PhpOffice\PhpWord\Writer\PDF\DomPDF;
	//use pdf\Dompdf as Dompdf;

	//use Dompdf\Dompdf;

	//use vendor\PhpOffice\PhpSpreadsheet\Spreadsheet;

use PHPMailer\PHPMailer\PHPMailer;

// use PhpSpreadsheet\Spreadsheet;




require_once("model/model.php");


$model = new model();
class controller
{
	public $model;

	public function __construct($model)
	{
		

		$this->model = $model;
		if ($_SERVER["PATH_INFO"]) {
			switch ($_SERVER["PATH_INFO"]) {
				case '/':
					require_once("index.php");
					require_once("header.php");
					require_once("herosection.php");
					require_once("aboutsection.php");
					require_once("clients.php");
					require_once("footer.php");

					break;
				case '/registration':
					require_once("index.php");
					require_once("header.php");
					require_once("registration.php");
					require_once("footer.php");

					break;

				case '/login':
					require_once("index.php");
					require_once("header.php");
					require_once("login.php");
					require_once("footer.php");

					break;
				case '/list':
					require_once("index.php");
					require_once("header.php");
					require_once("list.php");
					require_once("footer.php");

					break;
				case '/edit':
					require_once("index.php");
					require_once("header.php");
					require_once("edit.php");
					require_once("footer.php");

					break;
					case '/email':
						require_once("index.php");
						require_once("email_varification.php");
	
						break;
						case '/salry':
							require_once("index.php");
							//require_once("header.php");
							require_once("salry.php");
							require_once("footer.php");
		
							break;
							case '/addsalry':
								require_once("index.php");
								require_once("header.php");
								require_once("addsalry.php");
								require_once("footer.php");
			
								break;
								case '/editsalry':
									require_once("index.php");
									require_once("header.php");
									require_once("editsalry.php");
									require_once("footer.php");
				
									break;
									case '/dwonload':
										
										require_once("dwonload.php");
										
					
										break;
				default:
					require_once("index.php");
					require_once("header.php");
					require_once("404.php");
					require_once("footer.php");
					break;
			}
		}
	}

	public function userid11()
	{

		if (isset($_GET['page']) || isset($_GET["submit"]) || $sort_order = isset($_GET['order']) || strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC') {


			$this->columns = array('id', 'first_name', 'last_name', 'email', 'bod', 'organisation', 'language');
			$column = isset($_GET['column']) && in_array($_GET['column'], $this->columns) ? $_GET['column'] : $this->columns[0];





			if ($sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC') {
				$this->asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
			} else {
				$this->asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
			}




			$this->search = $_GET['search'];
			$this->search1 = $_GET['city'];
			$this->search2 = $_GET['cou'];


			$_SESSION['search'] = $this->search = $_GET['search'];
			$_SESSION['city'] = $this->city = $_GET['city'];
			$_SESSION['cou'] = $this->cou = $_GET['cou'];

			$_SESSION['page'] = $this->limit = $_GET['page'];
			$this->limit = $_GET['page'];

			

			if (!isset($_GET['page'])) {
				$this->limit = 5;
			}

			if (isset($_GET['page12'])) {
				$this->page = $_GET['page12'];
				$this->limit = $_GET['page'];
			} else {
				$this->page = 1;
			}
			$offset = ($this->page - 1) * $this->limit;

			$this->Previous = $this->page -1;
			$this->NEXT = $this->page +1;

			$userid1 = $this->model->userid11('employee', $this->search, $this->search1, $this->search2, $column, $sort_order, $offset, $this->limit);
			return $userid1;
		}
	}


	public function selalldata()
	{
		$em = $this->model->selalldata('employee');
		return $em;
	}

	public function selallcon()
	{
		$em = $this->model->selalldata('country');
		return $em;
	}



	public function insertalldata()
	{

		if (isset($_POST['reg'])) {




			$_SESSION['fname'] = $fname = $_POST['fname'];
			$_SESSION['lname'] = $lname = $_POST['lname'];
			$_SESSION['em'] = $em = $_POST['em'];
			$_SESSION['pass'] = $_POST['pass'];
			$_SESSION['cpass'] = $_POST['cpass'];
			$pass = md5($_POST['pass']);

			$_SESSION['bod'] = $bod = $_POST['bod'];
			$_SESSION['mnum'] = $mnum = $_POST['mnum'];
			$_SESSION['g'] = $g = $_POST['g'];
			$_SESSION['fno'] = $fno = $_POST['fno'];
			$_SESSION['web'] = $web = $_POST['web'];
			$_SESSION['add'] = $add = $_POST['add'];
			$_SESSION['city'] = $city = $_POST['city'];
			$_SESSION['cou'] = $cou = $_POST['cou'];
			$_SESSION['pc'] = $pc = $_POST['pc'];
			$_SESSION['app'] = $app = $_POST['app'];
			$_SESSION['ck'] = $_POST['ck'];
			// $proficiency=implode(", ",$_POST['lau']);
			// $_SESSION['country_code'] = $country_code = $_POST['country_code'];


			if (empty($_POST['fname'])) {
				$this->error .= '<p class="text-danger">Name is Required</p>';
			} else {
				if (!preg_match("/^[a-zA-Z ]*$/", $_POST["fname"])) {
					$this->error .= '<p class="text-danger">Only Alphabet allowed in Name</p>';
				} else {
					//$name = $_POST['fname'];
				}
			}

			if (empty($_POST["lname"])) {
				$this->error .= '<p class="text-danger">lastname is Required  	</p>';
			} else {
				// $address = $_POST["lname"];
			}

			if (empty($_POST["em"])) {
				$this->error .= '<p class="text-danger">Email Address is Required</p>';
			} else {
				if (!filter_var($_POST["em"], FILTER_VALIDATE_EMAIL)) {
					$this->error .= '<p class="text-danger">Invalid email format</p>';
				} else {
					// $email = $_POST["em"];
				}
			}
			if (empty($_POST["pass"])) {
				$this->error .= '<a class="text-danger">Password  is required </a><br>';
			} else {
				if (empty($_POST["pass"] > 6)) {
					$this->error .= '<a class="text-danger">Password must be 6 characters long !</a><br>';
				} else {
					$password = $_POST["pass"];
				}
				//$pass = $_POST["pass"];
			}

			if (empty($_POST["cpass"])) {
				$this->error .= '<a class="text-danger">Enter Confirm Password</a><br>';
			} else {
				if (empty($_POST["cpass"] > 6)) {
					$this->error .= '<a class="text-danger">Confirm Password must be 6 characters long !</a><br>';
				} else {
					$cpassword = $_POST["cpass"];
					if ($cpassword != $password) {
						$this->error = '<a class="text-danger">Password & Confirm Password does not match </a><br>';
					}
				}
				//$pass = $_POST["pass"];
			}


			if (empty($_POST["mnum"])) {
				$this->error .= '<p class="text-danger">Phone Number is Required</p>';
			} else {
				if (!preg_match("/^[0-9]*$/", $_POST["mnum"])) {
					$this->error .= '<p class="text-danger">Only Numbers allowed in Phone</p>';
				} else {
					// $phone = $_POST["mnum"];
				}
			}


			if (empty($_POST["fno"])) {
				$this->error .= '<p class="text-danger">FNO is Required</p>';
			} else {
				//$address = $_POST["fno"];
			}


			if (empty($_POST["web"])) {
				$this->error .= '<p class="text-danger">web is Required</p>';
			} else {
				// $address = $_POST["web"];
			}

			if (empty($_POST["add"])) {
				$this->error .= '<p class="text-danger">add is Required</p>';
			} else {
				//$address = $_POST["add"];
			}

			if (empty($_POST["pc"])) {
				$this->error .= '<p class="text-danger">pc is Required</p>';
			} else {
				//$address = $_POST["pc"];
			}

			if (empty($_POST["app"])) {
				$this->error .= '<p class="text-danger">app is Required</p>';
			} else {
				//$address = $_POST["app"];
			}

			//  if(empty($_POST["img"]))
			//  {
			//   $error .= '<p class="text-danger">Image is Required</p>';
			//  }
			//  else
			//  {
			//   $address = $_POST["img"];
			//  }
			if ($this->error == '') {
				unset($_SESSION["fname"]);
				unset($_SESSION["lname"]);
				unset($_SESSION["em"]);
				unset($_SESSION["bod"]);
				// unset($_SESSION["code"]);
				unset($_SESSION["mnum"]);
				unset($_SESSION["g"]);
				unset($_SESSION["fno"]);
				unset($_SESSION["web"]);
				unset($_SESSION["add"]);
				unset($_SESSION["pc"]);
				unset($_SESSION["app"]);
				$this->count = $this->count + 1;
			}

			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$em = $_POST["em"];
			$pass = $_POST["pass"];
			$encryptpass = md5($pass);
			$cpass = $_POST["cpass"];
			$bod = $_POST["bod"];
			$code = $_POST["code"];
			$mnum = $_POST["mnum"];
			$g = $_POST["g"];
			$fno = $_POST["fno"];
			//sal
			$sal = $_POST["sal"];
			$web = $_POST["web"];
			$add = $_POST["add"];
			$city = $_POST["city"];
			$cou = $_POST["cou"];
			$pc = $_POST["pc"];
			$app = $_POST["app"];
			$lang = $_POST["ck"];
			$status=0;
			$activationcode=md5($em.time());

			$lan = "";
			foreach ($lang as $ck1) {
				$lan .= $ck1 . ",";
			}






			if ($pass == $cpass) {
				$data = array("first_name" => $fname, "last_name" => $lname, "email" => $em, "pass" => $encryptpass, "bod" => $bod, "code" => $code, "mobile" => $mnum, "gender" => $g, "organisation" => $fno, "website" => $web, "address" => $add, "city" => $city, "county" => $cou, "postcade" => $pc, "application" => $app, "language" => $lan,"activationcode"=>$activationcode,"status"=>$status);

				//print_r($data);
				$chk = $this->model->insertalldata('employee', $data);
				$saler = $this->model->last_id;
				// );
				//  $data = array(
				// 	"salary" => $sal,"ids" =>
				// print_r($data);
				// // foreach ($data as $key => $value) {
				// // 	# code...
				// // }

				// $chk = $this->model->insertalldata('sals', $data); exit;


				// echo $this->model->last_id; exit;
				if ($chk) {
					$_SESSION['ragistor'] = "<center>ragistor Successfully !</center>";
					echo "<script>
               
               
                </script>";
					// return $chk;

				}
			} else {

				echo "<script>
                alert('Error')
               
                </script>";
			}




			require_once("/home/mohit_jotaniya/htdocs/EmployeeManagement/assets/phpmailer/Exception.php");
			require_once("/home/mohit_jotaniya/htdocs/EmployeeManagement/assets/phpmailer/PHPMailer.php");
			require_once("/home/mohit_jotaniya/htdocs/EmployeeManagement/assets/phpmailer/SMTP.php");



			$mail = new PHPMailer; 




			$mail->isSMTP();                      // Set mailer to use SMTP 
			$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
			$mail->SMTPAuth = true;               // Enable SMTP authentication 
			$mail->Username = 'jotaniyamohit6259@gmail.com';   // SMTP username 
			$mail->Password = '62596259';   // SMTP password 
			$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
			$mail->Port = 587;                    // TCP port to connect to 

			// Sender info 
			$mail->setFrom('jotaniyamohit6259@gmail.com', 'EmployeeManagement'); 
			$mail->addReplyTo('jotaniyamohit6259@gmail.com', 'EmployeeManagement'); 

			// Add a recipient 
			$mail->addAddress($_POST["em"]); 

			//$mail->addCC('cc@example.com'); 
			//$mail->addBCC('bcc@example.com'); 

			// Set email format to HTML 
			$mail->isHTML(true); 

			// Mail subject 
			$mail->Subject = 'LOGIN PAGE'; 

			// Mail body content 
			$bodyContent = '<h1>LOGIN IN LOCALHOST</h1>'; 
			//$bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>CodexWorld</b></p>';
			$bodyContent .= '<p>http://localhost/EmployeeManagement/login</b></p>'; 
			$bodyContent .= "<div style='padding-top:8px;'>Please click The following link For verifying and activation of your account</div>
			<div style='padding-top:10px;'><p>http://localhost/EmployeeManagement/email?code=$activationcode</b></p></div>'";
			$mail->Body    = $bodyContent; 

			// Send email 
			if(!$mail->send()) { 
				echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
			} else { 
				echo 'Message has been sent.'; 
			} 

			// // $data = array(
			// // 	"salary" => $sal, "email" => $em ,"ids" =>$this->last_id
			// // );

			// // $chk = $this->model->insertalldata('sals', $data);


			// if ($chk) {
			// 	$_SESSION['ragistor']="<center>ragistor Successfully !</center>";
			// 	echo "<script>


			// </script>";
			// 	// return $chk;

			// }


			 $data = array(
				"salary" => $sal,"ids" =>$saler
			);
			// print_r($data);

			$chk = $this->model->insertalldata('sals', $data);


			if ($chk) {
			// 	echo "<script>
			
			// window.location='http://localhost/EmployeeManagement/login';
			// </script>";
				// return $chk;

			}





			$directory = 'useri/';

			if (!is_dir($directory)) {
				mkdir($directory, 0755);
			}


			if (!empty(array_filter($_FILES['img']['name']))) 
			{
				foreach ($_FILES['img']['tmp_name'] as $key => $value) {


					  $file_tmpname = $_FILES['img']['tmp_name'][$key];

						  	$file_name = $_FILES['img']['name'][$key]; 

					//print_r( $_FILES['img']['tmp_name']) ;
					$file_size = $_FILES['img']['size'][$key];
					$file_type = $_FILES['img']['type'][$key];

					$em = $_POST["em"];


					$filepath = $directory . $file_name;
					$path = time() . $file_name;




					$mimetype = mime_content_type($file_tmpname);
					$countimg = count($_FILES['img']['name']);
					//print_r($countimg);




					$this->model->check_mime($mimetype, $file_size, $countimg);


					if (in_array(strtolower($mimetype),  $this->model->allowedfileExtensions)) {


						if ($countimg > $this->model->limit_img) {
							$this->error .= '<a class="text-danger">Select maximum 3 images<br / ></a><br>';
						}
						// Verify file size - 2MB max 
						if ($file_size > $this->model->maxsize)
							$this->error .= '<a class="text-danger">Error: File size is larger than the allowed limit.<br / ></a><br>';

						if ($this->error == NULL) {
							if (file_exists($filepath)) {

								$filepath = $directory . time() . $file_name;



								if (move_uploaded_file($file_tmpname, $filepath)) {
							 		$chk = $this->model->insertimage('image', $filepath, $saler); 
								} else {
									$this->error .= '<a class="text-danger">Error uploading<br / ></a><br>';
								}
							} else {

								if (move_uploaded_file($file_tmpname, $filepath)) {
								 	$chk = $this->model->insertimage('image', $filepath, $saler);												//   echo "{$file_name} successfully uploaded <br />";
								} else {
									$this->error .= '<a class="text-danger">Error uploading<br / ></a><br>';
									//   echo "Error uploading {$file_name} <br />"; 
								}
							}
						}
					} else {

						// If file extention not valid
						// echo "Error uploading {$file_name} "; 
						$this->error .= '<a class="text-danger">File type is not allowed please select valid image<br / ></a><br>';
					}
				}
			}

			// 					$path = "useri/";
			// 					if (!is_dir($path)) {
			// 						mkdir($path,0755);
			// 					}


			//    if(move_uploaded_file($tmpFilePath,$pathname))
			//    {

			// 	$chk=$this->model->insertimage('image',$pathname,$em);


			// }
			//  //	$tmp_name=$_FILES["img"]["tmp_name"];

			// $totalfiles = count($_FILES['img']['tmp_name']);

			// for($i=0;$i<$totalfiles;$i++){
			// 	$filename = $_FILES['img']['tmp_name'][$i];

			// 	//if(move_uploaded_file($_FILES["img"]["tmp_name"][$i],'useri/'.$filename)){
			// 		$path="useri".$filename;
			// 		move_uploaded_file($_FILES["img"]["tmp_name"][$i],$path);
			// 		//print_r($path);
			// 	}


		}
	}
	
	//login here

	public function userlogin()
	{
		if (!empty($_POST["log"])) {

			if (empty($_POST["em"])) {
				$this->error .= '<p class="text-danger">Email Address is Required</p>';
			} else {
				if (!filter_var($_POST["em"], FILTER_VALIDATE_EMAIL)) {
					$this->error .= '<p class="text-danger">Invalid email format</p>';
				} else {
					// $email = $_POST["em"];
				}
			}
			if (empty($_POST["pass"])) {
				$this->error .= '<a class="text-danger">Password  is required </a><br>';
			} else {
				if (empty($_POST["pass"] > 6)) {
					$this->error .= '<a class="text-danger">Password must be 6 characters long !</a><br>';
				} else {
					$password = $_POST["pass"];
				}
				//$pass = $_POST["pass"];
			}
		//	$code=$_GET['code'];
			$this->em = $_POST["em"];
			$this->pass = $_POST["pass"];
			$encryptpass = md5($this->pass);

			$captcha = $_POST["captcha"];
			
			if ($_SESSION['CODE'] == $captcha)
			 {
				

				echo	$chk = $this->model->userlogin('employee', $this->em, $encryptpass); 
				if ($chk) {
					$_SESSION['success'] = "<center>Login Successfully !</center>";
					//header("Location: ./list");
					echo '<meta http-equiv="refresh" content="0; URL=http://localhost/EmployeeManagement/list">';

				//	header('Location: http://localhost/EmployeeManagement/list');
					// echo "<script>
                  
                    //  window.location='http://localhost/EmployeeManagement/list';
                    //  </script>";
				} else {
					$_SESSION['error'] = "<center>Email Address Wrong activation code.!</center>";
					// echo '<meta http-equiv="refresh" content="0; URL=http://localhost/EmployeeManagement/login">';
					// echo "<script>
                    
                    //  window.location='http://localhost/EmployeeManagement/login';
                    //  </script>";
				}

				// if (!empty($_POST["remember"])) {
				// 	setcookie("em", $_POST["em"], time() + 3600);
				// 	setcookie("pass", $_POST["pass"], time() + 3600);
				// 	//echo "Cookies Set Successfuly";
				// } else {
				// 	setcookie("em", "");
				// 	setcookie("pass", "");
				// 	// echo "Cookies Not Set";
				// }
			} else {
				$_SESSION['error'] = "<center>Captcha Code is not match !</center>";
				// echo '<meta http-equiv="refresh" content="0; URL=http://localhost/EmployeeManagement/login">';

				// echo "<script>
				
				//  window.location='http://localhost/EmployeeManagement/login';
				//  </script>";
			}
			
		
		}
		
	}

	public function cookie()
	{

			if (!empty($_POST["remember"])) {
				setcookie("em", $_POST["em"], time() + 3600);  //setcookie(name, value, expire, path, domain, secure, httponly);
				setcookie("pass", $_POST["pass"], time() + 3600); //	
				//echo "Cookies Set Successfuly";
			}

	}

	public function logout()
	{
		if (isset($_GET["logout"])) {

			$lg = $this->model->logout();
			if ($lg) {

				$_SESSION['logout'] = "<center>You are Logout Successfuly !</center>";
				echo '<meta http-equiv="refresh" content="0; URL=http://localhost/EmployeeManagement/login">';

				// echo "<script>
             
                
                // window.location='http://localhost/EmployeeManagement/login';
                
                // </script>";
			}
			return $lg;
		}
	}

	public function upddata()
	{

		if (isset($_POST["update"])) {


			$_SESSION['fname'] = $fname = $_POST['fname'];
			$_SESSION['lname'] = $lname = $_POST['lname'];
			$_SESSION['em'] = $em = $_POST['em'];
			//$_SESSION['pass'] = $_POST['pass'];
			//$_SESSION['cpas'] = $_POST['cpas'];
			// $pass = md5($_POST['pass']);
			// $cpas = md5($_POST['cpas']);
			$_SESSION['bod'] = $bod = $_POST['bod'];
			$_SESSION['mnum'] = $mnum = $_POST['mnum'];
			$_SESSION['g'] = $g = $_POST['g'];
			$_SESSION['fno'] = $fno = $_POST['fno'];
			$_SESSION['web'] = $web = $_POST['web'];
			$_SESSION['add'] = $add = $_POST['add'];
			$_SESSION['city'] = $city = $_POST['city'];
			$_SESSION['cou'] = $cou = $_POST['cou'];
			$_SESSION['pc'] = $pc = $_POST['pc'];
			$_SESSION['app'] = $app = $_POST['app'];
			$_SESSION['ck'] = $_POST['ck'];
			// $proficiency=implode(", ",$_POST['lau']);
			// $_SESSION['country_code'] = $country_code = $_POST['country_code'];


			if (empty($_POST['fname'])) {
				$this->error .= '<p class="text-danger">Name is Required</p>';
			} else {
				if (!preg_match("/^[a-zA-Z ]*$/", $_POST["fname"])) {
					$this->error .= '<p class="text-danger">Only Alphabet allowed in Name</p>';
				} else {
					//$name = $_POST['fname'];
				}
			}

			if (empty($_POST["lname"])) {
				$this->error .= '<p class="text-danger">lastname is Required  	</p>';
			} else {
				// $address = $_POST["lname"];
			}

			if (empty($_POST["em"])) {
				$this->error .= '<p class="text-danger">Email Address is Required</p>';
			} else {
				if (!filter_var($_POST["em"], FILTER_VALIDATE_EMAIL)) {
					$this->error .= '<p class="text-danger">Invalid email format</p>';
				} else {
					// $email = $_POST["em"];
				}
			}




			if (empty($_POST["mnum"])) {
				$this->error .= '<p class="text-danger">Phone Number is Required</p>';
			} else {
				if (!preg_match("/^[0-9]*$/", $_POST["mnum"])) {
					$this->error .= '<p class="text-danger">Only Numbers allowed in Phone</p>';
				} else {
					// $phone = $_POST["mnum"];
				}
			}


			if (empty($_POST["fno"])) {
				$this->error .= '<p class="text-danger">FNO is Required</p>';
			} else {
				//$address = $_POST["fno"];
			}


			if (empty($_POST["web"])) {
				$this->error .= '<p class="text-danger">web is Required</p>';
			} else {
				// $address = $_POST["web"];
			}

			if (empty($_POST["add"])) {
				$this->error .= '<p class="text-danger">add is Required</p>';
			} else {
				//$address = $_POST["add"];
			}

			if (empty($_POST["pc"])) {
				$this->error .= '<p class="text-danger">pc is Required</p>';
			} else {
				//$address = $_POST["pc"];
			}

			if (empty($_POST["app"])) {
				$this->error .= '<p class="text-danger">app is Required</p>';
			} else {
				//$address = $_POST["app"];
			}

			//  if(empty($_POST["img"]))
			//  {
			//   $error .= '<p class="text-danger">Image is Required</p>';
			//  }
			//  else
			//  {
			//   $address = $_POST["img"];
			//  }
			$saler = $this->model->last_id;
			
			if ($this->error == '') {
				unset($_SESSION["fname"]);
				unset($_SESSION["lname"]);
				unset($_SESSION["em"]);
				unset($_SESSION["bod"]);
				// unset($_SESSION["code"]);
				unset($_SESSION["mnum"]);
				unset($_SESSION["g"]);
				unset($_SESSION["fno"]);
				unset($_SESSION["web"]);
				unset($_SESSION["add"]);
				unset($_SESSION["pc"]);
				unset($_SESSION["app"]);
				$count = $this->count + 1;
			}

			$id = $_POST["eid"];
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$em = $_POST["em"];
			$pass = $_POST["pass"];
			$encryptpass = md5($pass);
			$cpass = $_POST["cpass"];
			$bod = $_POST["bod"];
			$code = $_POST["code"];
			$mnum = $_POST["mnum"];
			$g = $_POST["ga"];
			$fno = $_POST["fno"];
			$sal = $_POST["sal"];
			$web = $_POST["web"];
			$add = $_POST["add"];
			$city = $_POST["city"];
			$cou = $_POST["cou"];
			$pc = $_POST["pc"];
			$app = $_POST["app"];
			$lang = $_POST["ck"];

			$lan = "";
			foreach ($lang as $ck1) {
				$lan .= $ck1 . ",";
			}

			$sid = $_POST["sid"];
			$data = array("salary" => $sal);
			echo	$chk = $this->model->updatesal('sals', $sal,$sid ); 
				if ($chk) {
					echo "<script>
			alert('5')
			window.location='http://localhost/EmployeeManagement/list';
			</script>";
				} else {
					echo "<script>
			alert('update')
			window.location='http://localhost/EmployeeManagement/list';
			</script>";
			}

				$directory = 'useri/';

				if (!is_dir($directory)) {
					mkdir($directory, 0755);
				}
	
	
				if (!empty(array_filter($_FILES['img']['name']))) 
				{
					foreach ($_FILES['img']['tmp_name'] as $key => $value) {
	
	
						  $file_tmpname = $_FILES['img']['tmp_name'][$key];
	
								  $file_name = $_FILES['img']['name'][$key]; 
	
						//print_r( $_FILES['img']['tmp_name']) ;
						$file_size = $_FILES['img']['size'][$key];
						$file_type = $_FILES['img']['type'][$key];
	
						$em = $_POST["em"];
	
	
						$filepath = $directory . $file_name;
						$path = time() . $file_name;
	
	
	
	
						$mimetype = mime_content_type($file_tmpname);
						$countimg = count($_FILES['img']['name']);
						print_r($countimg);
	
	
	
	
						$this->model->check_mime($mimetype, $file_size, $countimg);
	
	
						if (in_array(strtolower($mimetype),  $this->model->allowedfileExtensions)) {
	
	
							if ($countimg > $this->model->limit_img) {
								$this->error .= '<a class="text-danger">Select maximum 3 images<br / ></a><br>';
							}
							// Verify file size - 2MB max 
							if ($file_size > $this->model->maxsize)
								$this->error .= '<a class="text-danger">Error: File size is larger than the allowed limit.<br / ></a><br>';
	
							if ($this->error == NULL) {
								if (file_exists($filepath)) {
	
									$filepath = $directory . time() . $file_name;
	
	
	
									if (move_uploaded_file($file_tmpname, $filepath)) {
									 	 $chk = $this->model->insertimage('image', $filepath, $id);  
									} else {
										$this->error .= '<a class="text-danger">Error uploading<br / ></a><br>';
									}
								} else {
	
									if (move_uploaded_file($file_tmpname, $filepath)) {
										 $chk = $this->model->insertimage('image', $filepath, $id);												//   echo "{$file_name} successfully uploaded <br />";
									} else {
										$this->error .= '<a class="text-danger">Error uploading<br / ></a><br>';
										//   echo "Error uploading {$file_name} <br />"; 
									}
								}
							}
						} else {
	
							// If file extention not valid
							// echo "Error uploading {$file_name} "; 
							$this->error .= '<a class="text-danger">File type is not allowed please select valid image<br / ></a><br>';
						}
					}
				}
			
			// $tmp_name = $_FILES["img"]["tmp_name"];
			// $path = "useri/" . basename(time() . base64_encode($_POST['em']) . ".png");
			// // $path="useri/".$_FILES["img"]["name"];
			// $size = $_FILES["img"]["size"] / 1024;
			// $type = $_FILES["img"]["type"];
			// move_uploaded_file($tmp_name, $path);

			$userid = $this->model->userid('employee', $id);

			if (!$_FILES["img"]["error"] == 4) {

				if ($pass == $cpass) {
					$data = array("first_name" => $fname, "last_name" => $lname, "email" => $em, "pass" => $encryptpass, "bod" => $bod, "code" => $code, "mobile" => $mnum, "gender" => $g, "organisation" => $fno, "website" => $web, "address" => $add, "city" => $city, "county" => $cou, "postcade" => $pc, "application" => $app, "language" => $lan);
					$chk = $this->model->upddata('employee', $fname, $lname, $em, $encryptpass, $bod, $code, $mnum, $g, $fno, $web, $add, $city, $cou, $pc, $app, $lan, $id);
					
					if ($chk) {
						echo "<script>
			alert('1')
			window.location='http://localhost/EmployeeManagement/list';
			</script>";
					}
				} else {
					echo "<script>
				alert('2')
				window.location='http://localhost/EmployeeManagement/list';
				</script>";
				}
			}
			if (!empty($_POST["pass"])) {
				if (!$_FILES["img"]["error"] == 4) {
					if ($pass == $cpass) {
						$data = array( "first_name" => $fname, "last_name" => $lname, "email" => $em, "pass" => $encryptpass, "bod" => $bod, "code" => $code, "mobile" => $mnum, "gender" => $g, "organisation" => $fno, "website" => $web, "address" => $add, "city" => $city, "county" => $cou, "postcade" => $pc, "application" => $app, "language" => $lan);
						$chk = $this->model->upddata('employee',$fname, $lname, $em, $encryptpass, $bod, $code, $mnum, $g, $fno, $web, $add, $city, $cou, $pc, $app, $lan, $id);
						if ($chk) {
							echo "<script>
			alert('3')
			window.location='http://localhost/EmployeeManagement/list';
			</script>";
						}
					} else {
						echo "<script>
				alert('4')
				window.location='http://localhost/EmployeeManagement/list';
				</script>";
					}
				}
			} else {
				$data = array("first_name" => $fname, "last_name" => $lname, "email" => $em, "bod" => $bod, "code" => $code, "mobile" => $mnum, "gender" => $g, "organisation" => $fno, "website" => $web, "address" => $add, "city" => $city, "county" => $cou, "postcade" => $pc, "application" => $app, "language" => $lan);
				$chk = $this->model->upddata1('employee', $fname, $lname, $em, $bod, $code, $mnum, $g, $fno, $web, $add, $city, $cou, $pc, $app, $lan, $id);
				if ($chk) {
					echo "<script>
			alert('5')
			window.location='http://localhost/EmployeeManagement/list';
			</script>";
				} else {
					echo "<script>
			alert('update')
			window.location='http://localhost/EmployeeManagement/list';
			</script>";
			 	}
			}
			
	


		}
	}

	public function deldata()
	{

		if (isset($_GET["delui"])) {
			$delid = $_GET["delui"];
			$id = array("id" => $delid);

			$userid = $this->userid('employee', $delid);
			foreach ($userid as $userid1) {
				unlink($userid1['img']);
			}

			$chk = $this->model->deldata('employee', $id);
			if ($chk)
			$_SESSION['error'] = "<center>deldata employee ....!</center>";

          echo '<meta http-equiv="refresh" content="0; URL=http://localhost/EmployeeManagement/list">';
//  {
// 				echo "<script>
// 			alert('Error')
// 			window.location='http://localhost/EmployeeManagement/list';
// 			</script>";
// 			}

// 			//return $chk;
		}
	}

	public function delimg()
	{

		if (isset($_GET["delimg"])) {
			$delid = $_GET["delimg"];
			$id = array("idimage" => $delid);

			$userid = $this->userid('employee', $delid);
			foreach ($userid as $userid1) {
				unlink($userid1['img']);
			}

			$chk = $this->model->deldata('image', $id);
			if ($chk) {
				echo "<script>
			alert('Error')
			window.location='http://localhost/EmployeeManagement/list';
			</script>";
			}
		}
	}

	public function userid()
	{
		if (isset($_GET["id"])) {
			$id = $_GET["id"];
			$userid = $this->model->userid('employee', $id);
			return $userid;
		}
	}

	public function salary_dow()
	{
		if(isset($_POST["export"]))
		{
		
		
		$file = new Spreadsheet();


	
	  $active_sheet = $file->getActiveSheet();
	
	  $active_sheet->setCellValue('A1', 'id');
	  $active_sheet->setCellValue('B1', 'name');
	  $active_sheet->setCellValue('C1', 'month');
	 $active_sheet->setCellValue('D1', 'salary');
	
	  $count = 2;
	
	  foreach($this->sid() as $row)
	  {
		$active_sheet->setCellValue('A' . $count, $row["s_id"]);
		 $active_sheet->setCellValue('B' . $count, $row["first_name"]);
		$active_sheet->setCellValue('C' . $count, $row["month"]);
		 $active_sheet->setCellValue('D' . $count, $row["salary"]);
	
		$count = $count + 1;
	  }


	  $writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($file);  
	
	//   $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($file, $_POST["file_type"]);

	
	  $file_name = time() . '.' . strtolower($_POST["file_type"]);
	
	  $writer->save($file_name);
	
	 header('Content-Type: application/x-www-form-urlencoded');
	
	  header('Content-Transfer-Encoding: Binary');
	
	  header("Content-disposition: attachment; filename=\"".$file_name."\"");
	
	//   readfile($file_name);
	
	//   unlink($file_name);
	
	  
	
	}
}

	public function ssalary()
	{
		if (isset($_GET["id"])) {
			$id = $_GET["id"];
			$userid = $this->model->ssalary('sals', $id);
			return $userid;
		}
	}

	public function s_salary()
	{
		 {
			$id = $_GET["id"];
			  $userid = $this->model->s_salary('addsalary', $id);
			return $userid;
		}
	}
	public function simage()
	{ 
		{
			$id = $_GET["id"];

			$selectimg = $this->model->simage('image', 'employee', 'image.ida=employee.id', 'id', $id);

			return $selectimg;
		}
	}
	public function salry()
	{ 
		{

			$selectimg = $this->model->salry('sals', 'employee', 'sals.ida=employee.id');

			return $selectimg;
		}
	}
	public function sid()
	{ 
		{
			//$id = $_GET["id"];
			$em =$_SESSION["id"];
			$selectimg = $this->model->simage('addsalary', 'employee', 'addsalary.e_id=employee.id','id', $em);

			return $selectimg;
		}
	}
	public function s_insertdata()
	{

		if (isset($_POST['submit'])) {


			$month = $_POST["month"];
			$salary = $_POST["salary"];
			$em =$_SESSION["id"];
			

			 $data = array(
				"month" => $month,"salary" =>$salary,"e_id" =>$em
			);
			// print_r($data);

			 	$chk = $this->model->insertalldata('addsalary', $data);
				 if ($chk) {
					echo "<script>
			alert('5')
			window.location='http://localhost/EmployeeManagement/addsalry';
			</script>";
				} else {
					echo "<script>
			alert('jdkfjsdkfjdslkfjsdlfj')
			window.location='http://localhost/EmployeeManagement/addsalry';
			</script>";
			}


		

		}
	}
	public function s_upddata()
	{

		if (isset($_POST["s_update"])) {



			
			$salary = $_POST["salary"];
			$s_id = $_POST["s_id"];
			$data = array("salary" => $sal,);
				$chk = $this->model->updatesal('addsalary',$salary, $s_id ); 
				if ($chk) {
					echo "<script>
			alert('5')
			window.location='http://localhost/EmployeeManagement/addsalry';
			</script>";
				} else {
					echo "<script>
			alert('update')
			window.location='http://localhost/EmployeeManagement/addsalry';
			</script>";
			}

				

		}
	}
	public function s_delete()
	{

		if (isset($_GET["s_del"])) {
			$sdel = $_GET["s_del"];
			$id = array("s_id" => $sdel);
			$chk = $this->model->deldata('addsalary', $id);
			if ($chk) {
				echo "<script>
			alert('Error')
			window.location='http://localhost/EmployeeManagement/addsalry';
			</script>";
			}
		}
	}
	public function pdf()
	{
		if(isset($_POST["pdf"]))
		{
			$dompdf = new Dompdf();
			
			$dompdf->loadHtml('<h1>Welcome to CodexWorld.com</h1>'); 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF to Browser 
$dompdf->stream();
exit();
		}
}
}


$obj = new controller($model);
