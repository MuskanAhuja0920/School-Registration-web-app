<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
	  require 'config/db.php';
	   
    if(isset($_POST['submit']))
    {  
	   $class1 = $_POST['app_for_class'];
	   $firstname = $_POST['fname'];
	   $lname = $_POST['surname'];
	   $gender = $_POST['r_male'];
	   $dob = $_POST['birthday'];
	   $city = $_POST['city'];
	   $taluka = $_POST['taluka'];
	   $district = $_POST['district'];
	   $state = $_POST['state'];
	   $country = $_POST['country'];
	   $nationality = $_POST['nation'];
	   $religion = $_POST['Religion'];
	   $caste = $_POST['Caste'];
	   $category = $_POST['r'];
	   $mothertongue = $_POST['Mother_Tounge'];
	   $lang = $_POST['l_spoken'];
	   $ffname = $_POST['ff_name'];
	   $fmname = $_POST['fm_name'];
	   $fsurname = $_POST['fs_sname'];
	   $fqual = $_POST['fqualification'];
	   $foccu = $_POST['fOccupation'];
	   $mfname = $_POST['mf_name'];
	   $mmname = $_POST['mm_name'];
	   $msurname = $_POST['m_sname'];
	   $mqual = $_POST['mqualification'];
	   $moccu = $_POST['mOccupation'];
	   $income = $_POST['m_income'];
	   $raddr = $_POST['r_addr'];
	   $email = $_POST['email'];
	   $aadhar = $_POST['a_no'];
	   $distance = $_POST['ts'];
	   $landmark = $_POST['landmark'];
	   $whatsappno = $_POST['t_no'];
	   $telno = $_POST['Office'];
	   $paddr = $_POST['p_addr'];
	   $brosis = $_POST['bs'];
	   //$file = $_POST['real-file'];
	   $errors=array();
	   $emailQuerry="SELECT * FROM student WHERE emaill=? LIMIT 1";
		$stmt=$conn->prepare($emailQuerry);
		$stmt->bind_param('s',$email);        // S IS for string
		$stmt->execute();
		$result= $stmt->get_result();
		$userCount=$result->num_rows;
		$stmt->close();

		if($userCount>0)
		{
			$errors['email']="Email already in use";
		}
			
	   
	   $sql="INSERT INTO student (class1,firstname,lname,gender,dob,city,taluka,district,state,country,nationality,religion,caste,category,mothertongue,lang,ffname,fmname,fsurname,fqual,foccu,mfname,mmname,msurname,mqual,moccu,income,raddr,emaill,aadhar,distance,landmark,whatsappno,telno,paddr,brosis) VALUES ('$class1','$firstname','$lname','$gender','$dob','$city','$taluka','$district','$state','$country','$nationality','$religion','$caste','$category','$mothertongue','$lang','$ffname','$fmname','$fsurname','$fqual','$foccu','$mfname','$mmname','$msurname','$mqual','$moccu','$income','$raddr','$email','$aadhar','$distance','$landmark','$whatsappno','$telno','$paddr','$brosis')";

	  

require_once __DIR__ . '/vendor1/autoload.php';


$c_name=$_POST['app_for_class'];
$child_name=$_POST['fname'];
$surname_name=$_POST['surname'];
$dob=$_POST['birthday'];
$gender=$_POST['r_male'];
$city=$_POST['city'];
$taluka=$_POST['taluka'];
$district=$_POST['district'];
$state=$_POST['state'];
$country=$_POST['country'];
$category=$_POST['r'];
$m_tounge=$_POST['Mother_Tounge'];
$language=$_POST['l_spoken'];
$f_father=$_POST['ff_name'];
$ff_father=$_POST['fm_name'];
$s_father=$_POST['fs_sname'];
$f_qualification=$_POST['fqualification'];
$occupation=$_POST['fOccupation'];
$m_mother=$_POST['mf_name'];
$mm_mother=$_POST['mm_name'];
$mothers_name=$_POST['m_sname'];
$mqualification=$_POST['mqualification'];
$moccupation=$_POST['mOccupation'];
$monthly_income=$_POST['m_income'];
$residential=$_POST['r_addr'];
$email=$_POST['email'];
$aadhaar=$_POST['a_no'];
$distance=$_POST['ts'];
$landmark=$_POST['landmark'];
$whatsapp=$_POST['t_no'];
$office=$_POST['Office'];
$permanent=$_POST['p_addr'];
//$sibling=$_POST['ts'];

//void WriteCell(50,10,"First Name:",1,0);
//void WriteCell(65,10,$c_name,1,1,);

$mpdf = new \Mpdf\Mpdf([
	'default_font_size' => 12,
	'default_font' => 'dejavusans'
]);

$data = '';

$data .= '<strong>Your Application Details </strong>' . '<br />';

$data .= '<strong>Applying for class : </strong>' . $c_name . '<br />';
$data .= '<strong>Childs Name : </strong>' . $child_name . '';$data .= '<strong>  </strong>' . $surname_name . '<br />';
//$data .= '<strong>Childs surname : </strong>' . $surname_name . '<br />';
$data .= '<strong>Date of Birth : </strong>' . $dob . '<br />';
$data .= '<strong>Gender : </strong>' . $gender . '<br />';
$data .= '<strong>City : </strong>' . $city . '<br />';
$data .= '<strong>Taluka : </strong>' . $taluka . '<br />';
$data .= '<strong>District : </strong>' . $district . '<br />';
$data .= '<strong>State : </strong>' . $state . '<br />';
$data .= '<strong>Country : </strong>' . $country . '<br />';
$data .= '<strong>Category : </strong>' . $category . '<br />';
$data .= '<strong>Mother Tounge : </strong>' . $m_tounge . '<br />';
$data .= '<strong>Languages spoken : </strong>' . $language . '<br />';
$data .= '<strong>Fathers name : </strong>' . $f_father .''; $data .= '<strong>  </strong>' . $ff_father . '';$data .= '<strong>  </strong>' . $s_father . '<br />';
//$data .= '<strong>Fathers middle name : </strong>' . $ff_father . '<br />';
//$data .= '<strong>Fathers surname : </strong>' . $s_father . '<br />';
$data .= '<strong>Fathers qualification : </strong>' . $f_qualification . '<br />';
$data .= '<strong>Fathers occupation : </strong>' . $occupation . '<br />';
$data .= '<strong>Mothers Name : </strong>' . $m_mother .''; $data .= '<strong>  </strong>' . $mm_mother . '';$data .= '<strong>  </strong>' . $mothers_name . '<br />';
$data .= '<strong>Mothers qualification : </strong>' . $mqualification . '<br />';
$data .= '<strong>Mothers occupation : </strong>' . $moccupation . '<br />';
$data .= '<strong>Monthly income : </strong>' . $monthly_income . '<br />';
$data .= '<strong>Ressidential Address : </strong>' . $residential . '<br />';
$data .= '<strong>Email : </strong>' . $email . '<br />';
$data .= '<strong>Aadhaar no : </strong>' . $aadhaar . '<br />';
$data .= '<strong>Distance from school : </strong>' . $distance . '<br />';
$data .= '<strong>Landmark : </strong>' . $landmark . '<br />';
$data .= '<strong>Mobile : </strong>' . $whatsapp . '<br />';
$data .= '<strong>Office : </strong>' . $office . '<br />';
$data .= '<strong>Permanent Address : </strong>' . $permanent . '<br />';
//$data .= '<strong>Siblings : </strong>' . $sibling . '<br />';



$mpdf->WriteHTML($data);

$pdf = $mpdf->Output('', 'S');

	$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'enter you email';                     // SMTP username
    $mail->Password   = 'enter your password';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('webapp.services.ma@gmail.com', 'Mailer');
    $mail->addAddress(($_POST['email']), 'Shreya User');     // Add a recipient
	

    $mail->addStringAttachment($pdf, 'myattachment.pdf');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Admission form details';
    $mail->Body    = 'Thank you for applying';
   // $mail->AltBody = strip_tags($emailbody);

    $mail->send();
    
    //header('Location:thanks.php?fname=' . $enquirydata['First Name']);
	
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}	


	   if(!mysqli_query($conn,$sql))
	   {
		   echo "Not Inserted";
	   }
	   
       header("location:uploadimage.php");
    }
?>