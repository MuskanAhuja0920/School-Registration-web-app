<?php  
 $connect = mysqli_connect("localhost", "root", "", "userverification","3307");  
 $output = '';  
 $sql = "SELECT * FROM student ORDER BY id";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>
    <th width="10%">Id</th>
    <th width="40%">Class</th>
    <th width="40%">First name</th>
    <th width="40%">Last name</th>
    <th width="40%">Gender</th>
    <th width="40%">DOB</th>
    <th width="40%">City</th>
    <th width="40%">Taluka</th>
    <th width="40%">District</th>
    <th width="40%">State</th>
    <th width="40%">Country</th>
    <th width="40%">Nationalty</th>
    <th width="40%">Religion</th>
    <th width="40%">Caste</th>
    <th width="40%">Category</th>
    <th width="40%">Mohter Tongue</th>
    <th width="40%">Languages</th>
    <th width="40%">Fathers Fname</th>
    <th width="40%">Fatherss Mname</th>
    <th width="40%">Fathers Lname</th>
    <th width="40%">Fathers Qualification</th>
    <th width="40%">Fathers Occupation</th>
    <th width="40%">Mothers Fname</th>
    <th width="40%">Mothers Mname</th>
    <th width="40%">Mothers Lname</th>
    <th width="40%">Mothers Qualification</th>
    <th width="40%">Mothers Occupation</th>
    <th width="40%">Income</th>
    <th width="40%">Address</th>
    <th width="40%">Email</th>
    <th width="40%">Aadhar</th>
    <th width="40%">Distance</th>
    <th width="40%">Landmark</th>
    <th width="40%">Whatsapp No</th>
    <th width="40%">Telephone No</th>
    <th width="40%">Permanent Address</th>
    <th width="40%">Brothers/Sisters</th>
    <th width="10%">Delete</th>
    </tr>';
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  /*if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM tbl_sample LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }*/
      while($row = mysqli_fetch_array($result))  
      {   $output .='
    <tr>
    <td>'.$row["id"].'</td>
    <td class="class1" data-id1="'.$row["id"].'"contenteditable>'.$row["class1"].'</td>
    <td class="firstname" data-id2="'.$row["id"].'"contenteditable>'.$row["firstname"].'</td>
    <td class="lname" data-id3="'.$row["id"].'"contenteditable>'.$row["lname"].'</td>
    <td class="gender" data-id4="'.$row["id"].'"contenteditable>'.$row["gender"].'</td>
    <td class="dob" data-id5="'.$row["id"].'"contenteditable>'.$row["dob"].'</td>
    <td class="city" data-id6="'.$row["id"].'"contenteditable>'.$row["city"].'</td>
    <td class="taluka" data-id7="'.$row["id"].'"contenteditable>'.$row["taluka"].'</td>
    <td class="district" data-id8="'.$row["id"].'"contenteditable>'.$row["district"].'</td>
    <td class="state" data-id9="'.$row["id"].'"contenteditable>'.$row["state"].'</td>
    <td class="country" data-id10="'.$row["id"].'"contenteditable>'.$row["country"].'</td>
    <td class="nationality" data-id11="'.$row["id"].'"contenteditable>'.$row["nationality"].'</td>
    <td class="religion" data-id12="'.$row["id"].'"contenteditable>'.$row["religion"].'</td>
    <td class="caste" data-id13="'.$row["id"].'"contenteditable>'.$row["caste"].'</td>
    <td class="category" data-id14="'.$row["id"].'"contenteditable>'.$row["category"].'</td>
    <td class="mothertongue" data-id15="'.$row["id"].'"contenteditable>'.$row["mothertongue"].'</td>
    <td class="lang" data-id16="'.$row["id"].'"contenteditable>'.$row["lang"].'</td>
    <td class="ffname" data-id17="'.$row["id"].'"contenteditable>'.$row["ffname"].'</td>
    <td class="fmname" data-id18="'.$row["id"].'"contenteditable>'.$row["fmname"].'</td>
    <td class="fsurname" data-id19="'.$row["id"].'"contenteditable>'.$row["fsurname"].'</td>
    <td class="fqual" data-id20="'.$row["id"].'"contenteditable>'.$row["fqual"].'</td>
    <td class="foccu" data-id21="'.$row["id"].'"contenteditable>'.$row["foccu"].'</td>
    <td class="mfname" data-id22="'.$row["id"].'"contenteditable>'.$row["mfname"].'</td>
    <td class="mmname" data-id23="'.$row["id"].'"contenteditable>'.$row["mmname"].'</td>
    <td class="msurname" data-id24="'.$row["id"].'"contenteditable>'.$row["msurname"].'</td>
    <td class="mqual" data-id25="'.$row["id"].'"contenteditable>'.$row["mqual"].'</td>
    <td class="moccu" data-id26="'.$row["id"].'"contenteditable>'.$row["moccu"].'</td>
    <td class="income" data-id27="'.$row["id"].'"contenteditable>'.$row["income"].'</td>
    <td class="raddr" data-id28="'.$row["id"].'"contenteditable>'.$row["raddr"].'</td>
    <td class="email" data-id29="'.$row["id"].'">'.$row["emaill"].'</td>
    <td class="aadhar" data-id30="'.$row["id"].'"contenteditable>'.$row["aadhar"].'</td>
    <td class="distance" data-id31="'.$row["id"].'"contenteditable>'.$row["distance"].'</td>
    <td class="landmark" data-id32="'.$row["id"].'"contenteditable>'.$row["landmark"].'</td>
    <td class="whatsappno" data-id33="'.$row["id"].'"contenteditable>'.$row["whatsappno"].'</td>
    <td class="telno" data-id34="'.$row["id"].'"contenteditable>'.$row["telno"].'</td>
    <td class="paddr" data-id35="'.$row["id"].'"contenteditable>'.$row["paddr"].'</td>
    <td class="brosis" data-id36="'.$row["id"].'"contenteditable>'.$row["brosis"].'</td>
    <td><button type="button" name="delete_btn" data-id38="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">X</button></td>
    </tr>';
}
$output .='
            <tr>
            <td></td>
            <td id="class1" contenteditable></td>
            <td id="firstname" contenteditable></td>
            <td id="lname" contenteditable></td>
            <td id="gender" contenteditable></td>
            <td id="dob" contenteditable></td>
            <td id="city" contenteditable></td>
            <td id="taluka" contenteditable></td>
            <td id="district" contenteditable></td>
            <td id="state" contenteditable></td>
            <td id="country" contenteditable></td>
            <td id="nationality" contenteditable></td>
            <td id="religion" contenteditable></td>
            <td id="caste" contenteditable></td>
            <td id="category" contenteditable></td>
            <td id="mothertongue" contenteditable></td>
            <td id="lang" contenteditable></td>
            <td id="ffname" contenteditable></td>
            <td id="fmname" contenteditable></td>
            <td id="fsurname" contenteditable></td>
            <td id="fqual" contenteditable></td>
            <td id="foccu" contenteditable></td>
            <td id="mfname" contenteditable></td>
            <td id="mmname" contenteditable></td>
            <td id="msurname" contenteditable></td>
            <td id="mqual" contenteditable></td>
            <td id="moccu" contenteditable></td>
            <td id="income" contenteditable></td>
            <td id="raddr" contenteditable></td>
            <td id="email" ></td>
            <td id="aadhar" contenteditable></td>
            <td id="distance" contenteditable></td>
            <td id="landmark" contenteditable></td>
            <td id="whatsappno" contenteditable></td>
            <td id="telno" contenteditable></td>
            <td id="paddr" contenteditable></td>
            <td id="brosis" contenteditable></td>
            <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success"">+</button></td>
            </tr>';

}
else
{
$output .='<tr>
                <td colspan="4">Data not Found</td>
            </tr>';
}


$output .='</table>

</div>';

echo $output;

?>