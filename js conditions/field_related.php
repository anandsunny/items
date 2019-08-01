


<!DOCTYPE html>
<html>
<head>
    <title>field related conditions</title>

<div id="localtion"></div>
<!-- stylesheet -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style type="text/css">
/*#err_mob { display: none; }*/

</style>
</head>
<body>
<form method="post" action="myphp.php" enctype="multipart/form-data" onsubmit="return formSubmit()">
<span id="err" style="font-size: 18px; color: red; font-weight: bold"></span><br>
<input type="text" name="father_name" id="father_name" class="" placeholder="father name" /><br>
<input type="text" name="father_occupation" id="father_occupation" class="" placeholder="father occupation" /><br>
<input type="text" name="mother_name" id="mother_name" class="" placeholder="mother name" /><br>
<input type="text" name="mother_occupation" id="mother_occupation" class="" placeholder="mother occupation" /><br>
<input type="text" name="local_mobile" id="local_mobile" class="" placeholder="mobile number" />
<br>
<input type="text" name="father_mobile" id="father_mobile" class="" placeholder="mobile number" /><br>
<input type="text" name="mother_mobile" id="mother_mobile" class="" placeholder="mobile number" /><br>
<input type="text" name="aadhar_no" id="aadhar_no" class="" placeholder="Aadhar no" ><br>
<input type="text" name="smgra_id" id="smgra_id" class="" placeholder="Samagra no" /><br>
<input type="number" name="annual_income" id="annual_income" class="" placeholder="annual income" /><br>
<input type="submit" name="submit" id="submit" class="" value="Submit" />
</form>
            <!-- javaScript -->
<script type="text/javascript" src="js/jquery.js"></script>
<!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
<script type="text/javascript">


// var ul_list = document.getElementById("one");
// alert(ul_list.value);

	// auto capital
	$("#father_name, #father_occupation, #mother_name, #mother_occupation").keyup(function (argument) {
		var val = $(this).val();
		$(this).val(val.toUpperCase());
	})
 // // for stream display only for 12th
 // 							function applFor() {
 //     							// alert("kljdfskl");
 //                               var clss = document.getElementById("reg_appl_for").value;
 //                               var stream = document.getElementById('stream_tr');
 //                               // alert(clss);
 //                               if (clss == "class12") {
 //                               	stream.style.display = "block";
 //                               }
 //                               else {
 //                               	stream.style.display = "none";
 //                               }
 //                               forDate();
 //                           }

 //                           // generate form no
 //                           function forDate() {
 //                                // // body...
 //                                var mm, yy, cls, no, x, c_form_no;
 //                                var cls_val = document.getElementById("reg_appl_for").value;
 //                                var d = new Date();
                                
 //                                var month = d.getMonth();
 //                                var year = d.getFullYear();
 //                                if (month >= 6 && month <= 10) {
 //                                	mm = "DE";
 //                                    // document.write(mm);
 //                                }
 //                                else {
 //                                	mm = "JU";
 //                                    // document.write(mm);
 //                                }
 //                                if (cls_val == "class8") {
 //                                	cls = "8";
 //                                    // alert(cls);
 //                                }
 //                                else if (cls_val == "class10") {
 //                                	cls = "10";
 //                                    // alert(cls);
 //                                }
 //                                else if (cls_val == "class12") {
 //                                	cls = "12";
 //                                    // alert(cls);
 //                                }
 //                                document.getElementById('session').value = mm+"-"+year;
 //                                year = year.toString().substr(-2);
 //                                x = 10;
 //                                no = ++x;
 //                                no_lng = no.toString().length;
 //                                xx_lng = "XXXXX".slice(no_lng, -1);
 //                                c_form_no = "UI-"+mm+"-"+cls+"-"+year+"-"+xx_lng+no;
 //                                document.getElementById('form_no').value = c_form_no;

 //                            }
 //                            forDate();


// function sub(argument) {
	
// 	}
function _(x) {
  return document.getElementById(x);
}

function formSubmit() {
  // alert("lhelhekl");
	var return_type = true;
	var mob = _("local_mobile");
	var father_mob = _("father_mobile");
	var mother_mob = _("mother_mobile");
	var aadhar_no = _("aadhar_no");
	var samagra_no = _("smgra_id");
	var annual_income = _("annual_income");
	var only_mobile_no = /^[1-9]{1}[0-9]{9}$/;
	var income = /^[0-9]+$/;

	// mobile
	if (mob.value.length == "" ||  isNaN(mob.value) || mob.value.length != 10 ) {
		err.innerHTML = "enter 10 digits valid mobile number.";
		mob.style.border = "2px solid red";
		return_type = false;
	}

	// father mobile
	else if (father_mob.value.length != "" && only_mobile_no.test(father_mob.value) == false) {
		err.innerHTML = "enter 10 digits valid father mobile number.";
		father_mob.style.border = "2px solid red";
		return_type = false;
	}

	// // mother mobile
	else if (mother_mob.value.length != "" && only_mobile_no.test(mother_mob.value) == false) {
		err.innerHTML = "enter 10 digits valid mother mobile number.";
		father_mob.style.border = "2px solid red";
		return_type = false;
	}

	// aadhar no
	else if (aadhar_no.value.length == "" || isNaN(aadhar_no.value) || aadhar_no.value.length != 12 ) {
		err.innerHTML = "enter 12 digits valid aadhar number.";
		aadhar_no.style.border = "2px solid red";
		return_type = false;
	}

	// shamagra no
	else if (samagra_no.value.length == "" || isNaN(samagra_no.value) || samagra_no.value.length != 9 ) {
		err.innerHTML = "enter 9 digits valid samagra id number.";
		samagra_no.style.border = "2px solid red";
		return_type = false;
	}

	else {
		alert("not");
	}

	return return_type;
 
}
//-------------------------------------------------------



// for mobile no.
// function checkMoblile() {

//     var mob_no = document.getElementById("local_mobile").value;
//     var err = document.getElementById('err');
//     var only_no = /^[1-9]{1}[0-9]{9}$/;

//     if (mob_no.length == "") {
//         // alert(mob_no.length);
//         err.innerHTML = "enter local mobile number.";
//         return false
//     }
//     else if (only_no.test(mob_no) == false) {
//         err.innerHTML = "enter local valid mobile number.";
//         return false;
//     }
//     else if (mob_no.length != 10) {
//         err.innerHTML = "enter local 10 digits valid mobile number.";
//         return false;
//     }
//     else {
//         alert("working");
//         return true;
//     }
// }

// // for father mobile number 
// function checkFatherMoblile() {
//     var father_mob = document.getElementById("father_mobile").value;
//     var err = document.getElementById('err');
//     var only_no = /^[1-9]{1}[0-9]{9}$/;

//     if (father_mob.length != "" && only_no.test(father_mob) == false) {
//         err.innerHTML = "enter valid father mobile number.";
//         return false;
//     }
//     else if (father_mob.length != "" && father_mob.length != 10) {
//         err.innerHTML = "enter 10 digits father valid mobile number.";
//         return false;
//     }
//     else {
//         alert("father working");
//         return true;
//     }
// }

// // for father mobile number 
// function checkMotherMoblile() {
//     var mother_mob = document.getElementById("mother_mobile").value;
//     var err = document.getElementById('err');
//     var only_no = /^[1-9]{1}[0-9]{9}$/;

//     if (mother_mob.length != "" && only_no.test(mother_mob) == false) {
//         err.innerHTML = "enter valid mother mobile number.";
//         return false;
//     }
//     else if (mother_mob.length != "" && mother_mob.length != 10) {
//         err.innerHTML = "enter 10 digits mother valid mobile number.";
//         return false;
//     }
//     else {
//         alert("mother working");
//         return true;
//     }
// }

// // aadhar no.
// function aadharNo() {
//     var only_no = /^[1-9]{1}[0-9]{9}$/;
//     var aadhar_no = document.getElementById('aadhar_no').value;

//     if (aadhar_no.length != 12) {
//         err.innerHTML = "enter valid aadhar number.";
//         aadhar_no.focus();
//         return false;
//     }
//     else {
//         err.innerHTML = "";
//         return true;
//     }
// }

// // onsubmit form
// function formSubmit() {
//     // alert("jfdk");
//     var return_cond = false;
    
//     // for father mobile
//     if (checkFatherMoblile()) {
//     	return_cond = true;

//     	// for mother mobile
//     	if (checkMotherMoblile()) {
//     		return_cond = true;

//     		// mobile
//     		if (checkMoblile()) {
//     			return_cond = true;
//     		}
//     		else {
//     			return_cond = false;
//     		}

//     		// for aadhar no
//     		if (aadharNo()) {
// 		        return_cond = true;
// 		    }
// 		    else {
// 		        return_cond = false;
// 		    }
//     	}
//     	else {
//     		return_cond = false;
//     	}
        
//     }
//     else {
//     	return_cond = false;
//     }
   
//     return return_cond;
// }
</script>
</body>
</html>