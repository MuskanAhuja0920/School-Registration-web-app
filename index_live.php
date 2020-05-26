<?php require_once 'controllers/logincontroller.php';?>
<html>  
    <head>  
        <title>LIVE DATA</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <link rel="stylesheet"  href ="style(1).css">
        
    </head>  
    <body>  
<section id="nav-bar">
   <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
   <div class="container-fluid">
    <a class="navbar-brand" href="index_live.php"><img src="CMS-LOGO-removebg-preview.png" style="height:40px" ></a>
    <ul class=" navbar-nav navbar-right" >
    <li class="nav-item dropdown ml-auto">
		<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:gray">
		<strong><?php echo $_SESSION['username'];?></strong></a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="adminlogin.php?logout=1" ><strong>Log Out</strong></a>
			</div>
	  </li>
      
    </ul>
    </div>
</nav>
</section>
      
  
        <div class="container">  
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				<h1 align="center">LIVE DATA</h1><br />
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
       var class1=$('#class1').text();
        var firstname=$('#firstname').text();
        var lname=$('#lname').text(); 
        var gender=$('#gender').text();
        var dob=$('#dob').text();
        var city=$('#city').text();
        var taluka=$('#taluka').text();
        var district=$('#district').text();
        var state=$('#state').text();
        var country=$('#country').text();
        var nationality=$('#nationality').text();
        var religion=$('#religion').text();
        var caste=$('#caste').text();
        var category=$('#category').text();
        var mothertongue=$('#mothertongue').text();
        var lang=$('#lang').text();
        var ffname=$('#ffname').text();
        var fmname=$('#fmname').text();
        var fsurname=$('#fsurname').text();
        var fqual=$('#fqual').text();
        var foccu=$('#foccu').text();
        var mfname=$('#mfname').text();
        var mmname=$('#mmname').text();
        var msurname=$('#msurname').text();
        var mqual=$('#mqual').text();
        var moccu=$('#moccu').text();
        var income=$('#income').text();
        var raddr=$('#raddr').text();
        var email=$('#email').text();
        var aadhar=$('#aadhar').text();
        var distance=$('#distance').text();
        var landmark=$('#landmark').text();
        var whatsappno=$('#whatsappno').text();
        var telno=$('#telno').text();
        var paddr=$('#paddr').text();
        var brosis=$('#brosis').text();
        //var file=$('#file').text();

       if(class1=='')
        {
            alert("enter Class");
            return false;
        }
        if(firstname=='')
        {
            alert("enter First Name");
            return false;
        }
        if(lname=='')
        {
            alert("enter Last Name");
            return false;
        }
        if(gender=='')
        {
            alert("enter Gender");
            return false;
        }
        if(dob=='')
        {
            alert("enter DOB");
            return false;
        }
        if(city=='')
        {
            alert("enter City");
            return false;
        }
        if(taluka=='')
        {
            alert("enter Taluka");
            return false;
        }
        if(district=='')
        {
            alert("enter District");
            return false;
        }
        if(state=='')
        {
            alert("enter State");
            return false;
        }
        if(country=='')
        {
            alert("enter Country");
            return false;
        }
        if(nationality=='')
        {
            alert("enter Nationality");
            return false;
        }
        if(religion=='')
        {
            alert("enter Religion");
            return false;
        }
        if(caste=='')
        {
            alert("enter Caste");
            return false;
        }
        if(category=='')
        {
            alert("enter Categorys");
            return false;
        }
	if(mothertongue=='')
        {
            alert("enter Mothertongue");
            return false;
        }
        if(lang=='')
        {
            alert("enter Languages");
            return false;
        }
        if(ffname=='')
        {
            alert("enter Father's First Name");
            return false;
        }
        if(fmname=='')
        {
            alert("enter Father's Middle Name");
            return false;
        }
        if(fsurname=='')
        {
            alert("enter Father's Last Name");
            return false;
        }
        if(fqual=='')
        {
            alert("enter Father's Qualification");
            return false;
        }
        if(foccu=='')
        {
            alert("enter Father's Occupation");
            return false;
        }
        if(mfname=='')
        {
            alert("enter Mother's First Name");
            return false;
        }
        if(mmname=='')
        {
            alert("enter Mother's Middle Name");
            return false;
        }
        if(msurname=='')
        {
            alert("enter Mother's Last Name");
            return false;
        }
        if(mqual=='')
        {
            alert("enter Mother's Qualification");
            return false;
        }
        if(moccu=='')
        {
            alert("enter Mother's Occupation");
            return false;
        }
        if(income=='')
        {
            alert("enter Income");
            return false;
        }
        if(raddr=='')
        {
            alert("enter Residential Address");
            return false;
        }
        if(email=='')
        {
            alert("enter Email");
            return false;
        }
        if(aadhar=='')
        {
            alert("enter Aadhar No.");
            return false;
        }
        if(distance=='')
        {
            alert("enter Distance");
            return false;
        }
        if(landmark=='')
        {
            alert("enter Landmark");
            return false;
        }
        if(whatsappno=='')
        {
            alert("enter Whatsapp No");
            return false;
        }
        if(telno=='')
        {
            alert("enter Telephone No");
            return false;
        }
        if(paddr=='')
        {
            alert("enter Permanent Address");
            return false;
        }
        if(brosis=='')
        {
            alert("enter Brothers/Sisters");
            return false;
        }
        /*if(file=='')
        {
            alert("enter File");
            return false;
        }*/
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{class1:class1,firstname:firstname,lname:lname,gender:gender,dob:dob,city:city,taluka:taluka,district:district,state:state,country:country,nationality:nationality,religion:religion,caste:caste,category:category,mothertongue:mothertongue,lang:lang,ffname:ffname,fmname:fmname,fsurname:fsurname,fqual:fqual,foccu:foccu,mfname:mfname,mmname:mmname,msurname:msurname,mqual:mqual,moccu:moccu,income:income,raddr:raddr,email:email,aadhar:aadhar,distance:distance,landmark:landmark,whatsappno:whatsappno,telno:telno,paddr:paddr,brosis:brosis,file:file},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    } 
    
    $(document).on('blur', '.class1', function(){  
        var id = $(this).data("id1");  
        var class1 = $(this).text();  
        edit_data(id, class1, "class1");  
    }); 
    
    $(document).on('blur', '.firstname', function(){  
        var id = $(this).data("id2");  
        var firstname = $(this).text();  
        edit_data(id,firstname, "firstname");  
    }); 
    $(document).on('blur', '.lname', function(){  
        var id = $(this).data("id3");  
        var lname = $(this).text();  
        edit_data(id,lname, "lname");  
    });  
    $(document).on('blur', '.gender', function(){  
        var id = $(this).data("id4");  
        var gender = $(this).text();  
        edit_data(id,gender, "gender");  
    });  
    $(document).on('blur', '.dob', function(){  
        var id = $(this).data("id5");  
        var dob = $(this).text();  
        edit_data(id,dob, "dob");  
    });  
    $(document).on('blur', '.city', function(){  
        var id = $(this).data("id6");  
        var city = $(this).text();  
        edit_data(id,city, "city");  
    });  
    $(document).on('blur', '.taluka', function(){  
        var id = $(this).data("id7");  
        var taluka = $(this).text();  
        edit_data(id,taluka, "taluka");  
    });  
    $(document).on('blur', '.district', function(){  
        var id = $(this).data("id8");  
        var district = $(this).text();  
        edit_data(id,district, "district");  
    });  
    $(document).on('blur', '.state', function(){  
        var id = $(this).data("id9");  
        var state = $(this).text();  
        edit_data(id,state, "state");  
    });  
    $(document).on('blur', '.country', function(){  
        var id = $(this).data("id10");  
        var country = $(this).text();  
        edit_data(id,country, "country");  
    });  
    $(document).on('blur', '.nationality', function(){  
        var id = $(this).data("id11");  
        var nationality = $(this).text();  
        edit_data(id,nationality, "nationality");  
    });  
    $(document).on('blur', '.religion', function(){  
        var id = $(this).data("id12");  
        var religion = $(this).text();  
        edit_data(id,religion, "religion");  
    });  
    $(document).on('blur', '.caste', function(){  
        var id = $(this).data("id13");  
        var caste = $(this).text();  
        edit_data(id,caste, "caste");  
    });  
    $(document).on('blur', '.category', function(){  
        var id = $(this).data("id14");  
        var category = $(this).text();  
        edit_data(id,category, "category");  
    });  
    $(document).on('blur', '.mothertongue', function(){  
        var id = $(this).data("id15");  
        var mothertongue = $(this).text();  
        edit_data(id,mothertongue, "mothertongue");  
    });  
    $(document).on('blur', '.lang', function(){  
        var id = $(this).data("id16");  
        var lang = $(this).text();  
        edit_data(id,lang, "lang");  
    }); 
    $(document).on('blur', '.ffname', function(){  
        var id = $(this).data("id17");  
        var ffname = $(this).text();  
        edit_data(id,ffname, "ffname");  
    });  
    $(document).on('blur', '.fmname', function(){  
        var id = $(this).data("id18");  
        var fmname = $(this).text();  
        edit_data(id,fmname, "fmname");  
    });  
    $(document).on('blur', '.fsurname', function(){  
        var id = $(this).data("id19");  
        var fsurname = $(this).text();  
        edit_data(id,fsurname, "fsurname");  
    });  
    $(document).on('blur', '.fqual', function(){  
        var id = $(this).data("id20");  
        var fqual = $(this).text();  
        edit_data(id,fqual, "fqual");  
    });  
    $(document).on('blur', '.foccu', function(){  
        var id = $(this).data("id21");  
        var foccu = $(this).text();  
        edit_data(id,foccu, "foccu");  
    });  
    $(document).on('blur', '.mfname', function(){  
        var id = $(this).data("id22");  
        var mfname = $(this).text();  
        edit_data(id,mfname, "mfname");  
    });  
    $(document).on('blur', '.mmname', function(){  
        var id = $(this).data("id23");  
        var mmname = $(this).text();  
        edit_data(id,mmname, "mmname");  
    });  
    $(document).on('blur', '.msurname', function(){  
        var id = $(this).data("id24");  
        var msurname = $(this).text();  
        edit_data(id,msurname, "msurname");  
    });  
    $(document).on('blur', '.mqual', function(){  
        var id = $(this).data("id25");  
        var mqual = $(this).text();  
        edit_data(id,mqual, "mqual");  
    });  
    $(document).on('blur', '.moccu', function(){  
        var id = $(this).data("id26");  
        var moccu = $(this).text();  
        edit_data(id,moccu, "moccu");  
    });  
    $(document).on('blur', '.income', function(){  
        var id = $(this).data("id27");  
        var income = $(this).text();  
        edit_data(id,income, "income");  
    });  
    $(document).on('blur', '.raddr', function(){  
        var id = $(this).data("id28");  
        var raddr = $(this).text();  
        edit_data(id,raddr, "raddr");  
    });  
    /*$(document).on('blur', '.email', function(){  
        var id = $(this).data("id29");  
        var email = $(this).text();  
        edit_data(id,email, "email");  
    }); */ 
    $(document).on('blur', '.aadhar', function(){  
        var id = $(this).data("id30");  
        var aadhar = $(this).text();  
        edit_data(id,aadhar, "aadhar");  
    });  
    $(document).on('blur', '.distance', function(){  
        var id = $(this).data("id31");  
        var distance = $(this).text();  
        edit_data(id,distance, "distance");  
    });  
    $(document).on('blur', '.landmark', function(){  
        var id = $(this).data("id32");  
        var landmark = $(this).text();  
        edit_data(id,landmark, "landmark");  
    });  
    $(document).on('blur', '.whatsappno', function(){  
        var id = $(this).data("id33");  
        var whatsappno = $(this).text();  
        edit_data(id,whatsappno, "whatsappno");  
    });  
    $(document).on('blur', '.telno', function(){  
        var id = $(this).data("id34");  
        var telno = $(this).text();  
        edit_data(id,telno, "telno");  
    });
    $(document).on('blur', '.paddr', function(){  
        var id = $(this).data("id35");  
        var paddr = $(this).text();  
        edit_data(id,paddr, "paddr");  
    });  
    $(document).on('blur', '.brosis', function(){  
        var id = $(this).data("id36");  
        var brosis = $(this).text();  
        edit_data(id,brosis, "brosis");  
    });  
    /*$(document).on('blur', '.file', function(){  
        var id = $(this).data("id37");  
        var file = $(this).text();  
        edit_data(id,file, "file");  
    }); */
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id38");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>