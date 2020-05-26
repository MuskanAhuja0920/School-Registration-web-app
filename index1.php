<?php require_once 'controllers/authController.php';?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>FORM</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
	
	
    <link rel="stylesheet"  href ="style(1).css">
	
	<style>
	            #custom-button {
                padding: 5px;
                color: white;
                background-color: #867979;
                border: 1px solid #000;
                border-radius: 5px;
                cursor: pointer;
            }

               #custom-button:hover {
               background-color: blueviolet;
            }

               #custom-text {
               margin-left: 10px;
               font-family: sans-serif;
               color: #aaa;
            }
	</style>
	
</head>
      <body style="background-image: url('backgroundh.jpg');background-repeat: ;background-size: 100%,100%" >
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="CMS-LOGO-removebg-preview.png" style="height:40px" ></a>
                    <ul class=" navbar-nav navbar-right" >
                    <li class="nav-item"><a class="nav-link" href="images.jpg" style="color:gray" download="brochure.jpg"><strong>Download Brochure</strong></a></li>
                    <li class="nav-item"><a href="index.php" style="color:gray"><strong>Form</strong></a></li>
                        <li class="nav-item"><a href="uploadimage.php" style="color:gray"><strong>Upload Image</strong></a></li>
                        <li class="nav-item"><a href="pay.php" style="color:gray"><strong>Pay Online</strong></a></li>
                        <li class="nav-item"><a href="help1.php" style="color:gray"><strong>Help</strong></a></li>
                        <li class="nav-item dropdown ml-auto">
		                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:gray">
		                    <strong><?php echo $_SESSION['email'];?></strong></a>
			                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				                <a class="dropdown-item" href="login.php?logout=1" ><strong>Log Out</strong></a>
			                  </div>
	                      </li>
                    </ul>
                </div>
            </nav>
        </section>

        <div class="panel panel-primary form-div" style="margin-left: 125px;margin-right: 125px;">
        <div class="w3-container w3-brown sugar">
          <h1 style="color:white" align="middle"><strong>Application Form</strong> </h1>
        </div>
        <h4 style="color:red; font-size:14px" align="right">Mandatory fields are represented by *</h4>

        <form name = Register action="next.php" method="POST" enctype="multipart/form-data">
        <table align="center">


         <tr> <td><h5><strong>Student Details:</strong></h5></td></tr>

          <tr>
              <td>
                Application for class <span style="color:red;font-size:15px">*</span>
              </td>
              <td>
                <div class="col-md-12">
                <select class="form-control" OnClick="chk()"  style="margin-left: 5px" name="app_for_class" id="app_for_class" value="<?php echo $_POST['app_for_class'];?>">
                   <option name="app_for_class" value="LKG" <?php echo ($_POST['app_for_class'] =="LKG") ? 'selected' : ''; ?>>LKG</option>
                   <option name="app_for_class" value="UKG" <?php echo ($_POST['app_for_class'] =="UKG") ? 'selected' : ''; ?>>UKG</option>
               </select>
              </div>
              </td>
          </tr>


          <tr>
              <td> Child's Name <span style="color:red;font-size:15px">*</span> </td>
              <td>
              <div class="col-md-12">
                  <input class="form-control"  placeholder="First Name"  type="text"  id="name" name="fname" value="<?php echo $_POST['fname'];?>" required/>
              </div>
              </td>

              <td>
                <div class="col-md-12">
                  <input class="form-control" placeholder="Last Name"  type="text" id="surname" name="surname" title="" value="<?php echo $_POST['surname'];?>" />
                </div>
              </td>
          </tr>

          <tr>
		    <td>
		          <br> <h6> </h6>	
			</td>
		 </tr>

          <tr>
            <td> Gender <span style="color:red;font-size:15px">*</span> </td>
              <td>

                  &nbsp;&nbsp;&nbsp;   Male&nbsp;&nbsp; <input <?php if ($_POST['r_male']=='male'){ echo 'checked="checked"';} ?>  type="radio" required="true" value="male" name="r_male" id="r_male" value="<?php echo $_POST['r_male'];?>" >
                   &nbsp;&nbsp;  Female&nbsp;<input <?php if ($_POST['r_male']=='female'){ echo 'checked="checked"';} ?> required="true"   type="radio" value="female" name="r_male" id="fe_male" value="<?php echo $_POST['r_male'];?>">
              </td>
          </tr>
		  
		  <tr>
		    <td>
		          <br> <h6> </h6>	
			</td>
		 </tr>
		  
		  <tr>
            <td> Date of Birth <span style="color:red;font-size:15px">*</span>&nbsp;</td>
                <td> 

                     <input class="form-control" placeholder="Select date" type="date" id="birthday" name="birthday" value="<?php echo $_POST['birthday']; ?>" style="margin-left: 20px;width: 210px" required> 
                </td>
          </tr>


          <tr> <td><br><br><h5><strong>Place of Birth of Child:</strong></h5></td></tr>


          <tr>
            <td > City <span style="color:red;font-size:15px">*</span>  </td>
            <td colspan="">
              <div class="col-md-12">
                 <input class="form-control"  required="true" placeholder="City " type="text"  name="city" title="" value="<?php echo $_POST['city'];?>" />
              </div>
            </td>
          </tr>


          <tr>
            <td > Taluka<span style="color:red;font-size:15px">*</span> </td>

            <td colspan="">
              <div class="col-md-12">
                 <input class="form-control"  required="true" placeholder="Taluka " type="text"  name="taluka" title="" value="<?php echo $_POST['taluka'];?>" />
              </div>
            </td>
          </tr>


          <tr>
            <td > District <span style="color:red;font-size:15px">*</span>  </td>

            <td colspan="">
              <div class="col-md-12">
                <input class="form-control"  required="true" placeholder="District " type="text"  name="district" title="" value="<?php echo $_POST['district'];?>" />
              </div>
            </td>
          </tr>


          <tr>
            <td > State <span style="color:red;font-size:15px">*</span>  </td>

            <td colspan="">
              <div class="col-md-12">
                 <input class="form-control"  required="true" placeholder="State" type="text" name="state" title="" value="<?php echo $_POST['state'];?>" />
              </div>
            </td>
          </tr>


          <tr>
            <td > Country <span style="color:red;font-size:15px">*</span> </td>

            <td colspan="">
              <div class="col-md-12">
               <input class="form-control"  required="true" placeholder="Country" type="text"  name="country" title="" value="<?php echo $_POST['country'];?>" />
              </div>
            </td>
          </tr>


          <tr>
            <td>Nationality <span style="color:red;font-size:15px">*</span></td>
              <td>
                   <div class="col-md-12">
                      <input class="form-control"  required="true" placeholder="Nationality " type="text" id="nation" name="nation" title="" value="<?php echo $_POST['nation'];?>" />
                   </div>
              </td>
          </tr>


          <tr>
             <td> Religion </td>
             <td>
               <div class="col-md-12">
                 <input class="form-control"  placeholder="Religion" type="text" id="Religion" name="Religion" title="" value="<?php echo $_POST['Religion'];?>" />
               </div>
             </td>
             <td>
                 <div class="col-sm-12">
                   <input class="form-control"  placeholder="Caste" type="text" id="Caste" name="Caste" title="" value="<?php echo $_POST['Caste'];?>" />
                 </div>
            </td>
         </tr>


         <tr>
		    <td>
		          <br> <h6> </h6>	
			</td>
		 </tr>


         <tr>
             <td>Category <span style="color:red;font-size:15px">*</span></td>
             <td colspan="2">
                  &nbsp;&nbsp;&nbsp;
                 Open&nbsp;<input <?php if ($_POST['r']=='open'){ echo 'checked="checked"';} ?> class="rdb" required="true" value="open" type="radio" id="r_open" name="r" >&nbsp;&nbsp;&nbsp;
                 OBC&nbsp;<input <?php if ($_POST['r']=='obc'){ echo 'checked="checked"';} ?>class="rdb" required="true" value="obc" type="radio" id="r_obc" name="r" >&nbsp;&nbsp;&nbsp;
                 SBC &nbsp;<input <?php if ($_POST['r']=='sbc'){ echo 'checked="checked"';} ?> class="rdb" required="true" value="sbc" type="radio" id="r_sbc" name="r">&nbsp;&nbsp;&nbsp;
                 SC &nbsp;<input <?php if ($_POST['r']=='sc'){ echo 'checked="checked"';} ?> class="rdb" required="true" value="sc" type="radio" id="r_sc" name="r" >&nbsp;&nbsp;&nbsp;
                 VJ &nbsp;<input <?php if ($_POST['r']=='vj'){ echo 'checked="checked"';} ?> class="rdb" required="true" value="vj" type="radio" id="r_vj" name="r" >&nbsp;&nbsp;&nbsp;
                 NT &nbsp;<input <?php if ($_POST['r']=='nt'){ echo 'checked="checked"';} ?> class="rdb" required="true" value="nt" type="radio" id="r_nt" name="r" >&nbsp;&nbsp;&nbsp;
             </td>
          </tr>


         <tr>
		    <td>
		          <br> <h6> </h6>	
			</td>
		 </tr>


          <tr>
              <td>Mother Tongue <span style="color:red;font-size:15px">*</span></td>
              <td>
                  <div class="col-md-12">
                      <input type="text"class="form-control" required="true" id="Mother_Tounge" placeholder="Mother Tongue"  name="Mother_Tounge" value="<?php echo $_POST['Mother_Tounge'];?>">
                  </div>
              </td>
              <td colspan="2">
                  <div class="col-md-12">
                   <input type="text"class="form-control" required="true" placeholder="Languages spoken" id="l_spoken"  name="l_spoken" value="<?php echo $_POST['l_spoken'];?>">
                  </div>
              </td>
          </tr>


         <tr> <td><br><br><h5><strong>Father's Details:</strong></h5></td></tr>


          <tr>
              <td>Father's Name <span style="color:red;font-size:15px">*</span></td>
              <td>
                  <div class="col-md-12">
                    <input class="form-control"  required="true" placeholder="First Name" type="text" name="ff_name" id="ff_name" value="<?php echo $_POST['ff_name'];?>">
                  </div>
              </td>
              <td>
                  <div class="col-md-12">
                    <input class="form-control" required="true" placeholder="Middle name" type="text" name="fm_name" id="fm_name" value="<?php echo $_POST['fm_name'];?>">
                  </div>
              </td>
              <td>
                  <div class="col-md-12">
                    <input class="form-control"  placeholder="Surname"  type="text" name="fs_sname" id="fs_sname" value="<?php echo $_POST['fs_sname'];?>">
                  </div>
              </td>
          </tr>


          <tr>
              <td>Qualification <span style="color:red;font-size:15px">*</span></td>
              <td>
                  <div class="col-md-12">
                      <input type="text" placeholder="Qualification" required="true" id="fqualification " name="fqualification" class="form-control" value="<?php echo $_POST['fqualification'];?>">
                  </div>
              </td>
		  </tr>	  
			  
			  
		  <tr>	 
               <td>Occupation <span style="color:red;font-size:15px">*</span></td>		  
              <td>
                  <div class="col-md-12">
                      <input type="text" placeholder="Occupation" required="true" id="fOccupation " name="fOccupation" class="form-control" value="<?php echo $_POST['fOccupation'];?>">
                  </div>
              </td>
          </tr>


         <tr> <td><br><br><h5><strong>Mother's Details:</strong></h5></td></tr>


          <tr>
              <td>Mother's Name <span style="color:red;font-size:15px">*</span></td>
               <td>
                  <div class="col-md-12">
                    <input class="form-control"  required="true" placeholder="First Name" type="text" name="mf_name" id="mf_name" value="<?php echo $_POST['mf_name'];?>">
                  </div>
              </td>
              <td>
                  <div class="col-md-12">
                    <input class="form-control" required="true" placeholder="Middle name" type="text" name="mm_name" id="mm_name" value="<?php echo $_POST['mm_name'];?>">
                  </div>
              </td>
              <td>
                  <div class="col-md-12">
                    <input class="form-control"  placeholder="Surname"  type="text" name="m_sname" id="m_sname" value="<?php echo $_POST['m_sname'];?>">
                  </div>
              </td>
          </tr>


          <tr>
              <td>Qualification <span style="color:red;font-size:15px">*</span></td>
              <td>
                  <div class="col-md-12">
                      <input type="text" placeholder="Qualification" required="true" id="mqualification " name="mqualification" class="form-control" value="<?php echo $_POST['mqualification'];?>">
                  </div>
              </td>
		  </tr>	  
			  
			  
		  <tr>	 
               <td>Occupation <span style="color:red;font-size:15px">*</span></td>		  
              <td>
                  <div class="col-md-12">
                      <input type="text" placeholder="Occupation" required="true" id="mOccupation " name="mOccupation" class="form-control" value="<?php echo $_POST['mOccupation'];?>">
                  </div>
              </td>
          </tr>


          <tr> <td><br><br><h5><strong>General Details:</strong></h5></td></tr>


          <tr>
           <td>Monthly Family Income <span style="color:red;font-size:15px">*</span></td>
                <td>
                   <div class="col-md-12">
                       <input type="number" onkeypress="return isNumber(event);" maxlength="7"  required="true" placeholder="Monthly income" class="form-control" id="m_income" name="m_income" value="<?php echo $_POST['m_income'];?>">
                   </div>
                </td>
           </tr>


           <tr>
               <td>
                   Residential Address <span style="color:red;font-size:15px">*</span>

               </td> &nbsp

               <td colspan="2">
                   <div class="col-md-12">
                      &nbsp <textarea class="form-control" required="true" cols="40" rows="5" type="text" style="height: 70px;"   name="r_addr" id="r_addr" placeholder="Residential Address"><?php echo $_POST['r_addr'];?></textarea>
                   </div>
                   </td>

           </tr>


           <tr>
              <td>E-mail id <span style="color:red;font-size:15px">*</span></td>
              <td colspan="2">
                   <div class="col-md-12">
                     <input class="form-control" required="true" type="email" placeholder="Email id" name="email" id="email" value="<?php echo $_POST['email'];?>" readonly>
                   </div>
              </td>
           </tr>


           <tr>
              <td>Aadhar No. of Child </td>
              <td colspan="2">
                <div class="col-md-12">
                  <input class="form-control" type="tel" placeholder="0000-1111-0000" name="a_no" id="a_no" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" value="<?php echo $_POST['a_no'];?>">
                </div>
              </td>
           </tr>


         <tr>
		    <td>
		          <br> <h6> </h6>	
			</td>
		 </tr>


           <tr>
         <td>
             Distance From CMS School <span style="color:red;font-size:15px">*</span>:&nbsp &nbsp &nbsp
         </td>
             <td colspan="2">
               <div class="col-md-12" >
                 <select name="ts" id="ts">
                    <option value="0"<?php echo ($_POST['ts'] == 0) ? 'selected' : ''; ?>>0</option>
                    <option value="0.5" <?php echo ($_POST['ts'] == 0.5) ? 'selected' : ''; ?>>0.5</option>
                    <option value="1" <?php echo ($_POST['ts'] == 1) ? 'selected' : ''; ?>>1</option>
			        <option value="1.5" <?php echo ($_POST['ts'] == 1.5) ? 'selected' : ''; ?>>1.5</option>
			        <option value="2" <?php echo ($_POST['ts'] == 2) ? 'selected' : ''; ?>>2</option>
			        <option value="2.5" <?php echo ($_POST['ts'] == 2.5) ? 'selected' : ''; ?>>2.5</option>
			        <option value="3" <?php echo ($_POST['ts'] == 3) ? 'selected' : ''; ?>>3</option>
			        <option value="more" <?php echo ($_POST['ts'] == "more") ? 'selected' : ''; ?>>more</option>
                 </select>
               </div>
             </td>
           </tr>
		   
		   
		   <tr>
		    <td>
		          <br> <h6> </h6>	
			</td>
		 </tr>


           <tr>
             <td>Landmark <span style="color:red;font-size:15px">*</span></td>
             <td colspan="2">
               <div class="col-md-12"  >
                <input class="form-control" required="true" type="text" placeholder="Landmark" name="landmark" id="landmark" value="<?php echo $_POST['landmark'];?>">
                </div>
              </td>
           </tr>


          <tr>
               <td>WhatsApp No. <span style="color:red;font-size:15px">*</span></td>
               <td>
                   <div class="col-md-12">
                        <input class="form-control" required="true" type="tel"  placeholder="123-456-7890" name="t_no" id="t_no" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php echo $_POST['t_no'];?>">
                   </div>
               </td>
          </tr>


          <tr>
              <td>Telephone no.</td>
              <td>
                <div class="col-md-12">
                   <input class="form-control" type="text"  placeholder="1234-123-4567" name="Office" id="Office" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" value="<?php echo $_POST['Office'];?>">
                </div>
               </td>
          </tr>


          <tr>
            <td>Permanent Address <span style="color:red;font-size:15px">*</span></td>
              <td colspan="2">
                   <div class="col-md-12">
                       <textarea class="form-control" required="true" cols="40" rows="5" type="text" style="height: 70px;"   name="p_addr" id="p_addr" placeholder="Permanent Address" value="<?php echo $_POST['p_addr'];?>"><?php echo $_POST['p_addr'];?></textarea>
                   </div>
               </td>
          </tr>
        </table>
		
		
		<br>
        &nbsp &nbsp &nbsp &nbsp &nbsp&nbspNo. of Brothers / Sisters whether studying in CMS (2019-20) <span style="color:red;font-size:15px">*</span> : &nbsp
        <select name="bs" id="bs">
            <option value="0" <?php echo ($_POST['bs'] ==0) ? 'selected' : ''; ?>>0</option>
            <option value="1" <?php echo ($_POST['bs'] ==1) ? 'selected' : ''; ?>>1</option>
            <option value="2" <?php echo ($_POST['bs'] ==2) ? 'selected' : ''; ?>>2</option>
			<option value="3" <?php echo ($_POST['bs'] ==3) ? 'selected' : ''; ?>>3</option>
			<option value="4" <?php echo ($_POST['bs'] ==4) ? 'selected' : ''; ?>>4</option>
         </select> 
         <br>
		    
		 
		   <div align="middle"> <br><br><br>
                <input type="submit" name="submit" value="SUBMIT FORM" class="btn btn-primary" onclick="allLetter(document.Register.fname);">
        </div>
		<br><br>
		
        </form>


         </div>

    
	  </body>
</html>
