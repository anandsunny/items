<!DOCTYPE html>
<html>
  <head>
      <title>dependent dropdowns</title>
      <style type="text/css">
          #sub1, #sub2, #sub3, #additional_yes_no_div, #add_sub6, #additional_yes_no_for_single_subj, #additional_yes_no { display: none; }
      </style>
 </head>
 <body>
    <select class="form-control" name="reg_appl_for" id="reg_appl_for" onchange="applFor()" >
        <option value="">Select Class</option>
        <option value="class8">Class 8<sup>th</sup></option>
        <option value="class10">Class 10<sup>th</sup></option>
        <option value="class12">Class 12<sup>th</sup></option>
    </select>
<br>
<select class="form-control" id="stream" name="stream" onchange="streamSubjects()">
    <option value="">Select Stream</option>
    <option value="arts">Arts</option>
    <option value="commerce">Commerce</option>
    <option value="non_medical">Non-Medical</option>
    <option value="medical">Medical</option>
</select>
<br>

     <input type="text" name="add_sub4" id="add_sub4" value="subject4" readonly /><br>
     <input type="text" name="add_sub5" id="add_sub5" value="subject5" readonly /><br>
     <input type="text" name="add_sub1" id="add_sub1" value="subject1" readonly /><br>
     <input type="text" name="add_sub2" id="add_sub2" value="subject2" readonly /><br>
     <input type="text" name="add_sub3" id="add_sub3" value="subject3" readonly /><br>
     <input type="text" name="add_sub6" id="add_sub6" value="subject6" readonly /><br>

<div id="additional_yes_no_div">
    <p>Addtion subjects: Yes/No</p>
    <select id="additional_yes_no_for_single_subj" onchange="streamSubjects()">
        <option value="no">No</option>
        <option value="yes">Yes</option>
    </select>
    <select id="additional_yes_no" onchange="additionalYesNo()">
        <option value="no">No</option>
        <option value="yes">Yes</option>
    </select>
</div>

 
<br><br>
 
<select name = "parameters" id="sub1" onchange="checkIt(this.id)">
    <option value=""></option>
    <option value="history">History</option>
    <option value="political_science">Political Science</option>
    <option value="economics">Economics</option>
    <option value="sociology">Sociology</option>  
</select>
<select id="sub2" onchange="checkIt1(this.id)">
    
</select>
<select id="sub3" onchange="checkIt2()">
    
</select>
<!-- javaScript -->
<script type="text/javascript">
function applFor() {
    // body...
    var additional_yes_no_div = document.getElementById("additional_yes_no_div");
    var s1 = document.getElementById("sub1");
    var s2 = document.getElementById("sub2");
    var s3 = document.getElementById("sub3");
    var add_sub1 = document.getElementById("add_sub1");
    var add_sub2 = document.getElementById("add_sub2");
    var add_sub3 = document.getElementById("add_sub3");
    var add_sub4 = document.getElementById("add_sub4");
    var add_sub5 = document.getElementById("add_sub5");
    

    var reg_appl_for = document.getElementById('reg_appl_for');
    if (reg_appl_for.value == "class8") {
        additional_yes_no_div.style.display = "none";
        s1.style.display = "none";
        s2.style.display = "none";
        s3.style.display = "none";
        add_sub1.value = "Science";
        add_sub2.value = "Mathematics";
        add_sub3.value = "Social Science";
        add_sub4.value = "Hindi";
        add_sub5.value = "English";
    }
    else if (reg_appl_for.value == "class10") {
        additional_yes_no_div.style.display = "none";
        s1.style.display = "none";
        s2.style.display = "none";
        s3.style.display = "none";
        add_sub1.value = "Science";
        add_sub2.value = "Mathematics";
        add_sub3.value = "Social Science";
        add_sub4.value = "Hindi";
        add_sub5.value = "English";
    }
    else if (reg_appl_for.value == "class12") {
        additional_yes_no_div.style.display = "none";
        add_sub1.value = "Select Stream Firts";
        add_sub2.value = "Select Stream Firts";
        add_sub3.value = "Select Stream Firts";
        add_sub4.value = "Select Stream Firts";
        add_sub5.value = "Select Stream Firts";

    }
    else {
        additional_yes_no_div.style.display = "none";
        s1.style.display = "none";
        s2.style.display = "none";
        s3.style.display = "none";
    }
}


// for display only when class 12th has been selected
function additionalYesNo() {
    // body...
    var additional_yes_no = document.getElementById("additional_yes_no");
    var s1 = document.getElementById("sub1");
    var s2 = document.getElementById("sub2");
    var s3 = document.getElementById("sub3");
    // alert(additional_yes_no.value);
    if (additional_yes_no.value == "yes") {
        s1.style.display = "block";
        s2.style.display = "block";
        s3.style.display = "block";
    }
    else {
        s1.style.display = "none";
        s2.style.display = "none";
        s3.style.display = "none";
    }
}

// choose subject1 for art
function checkIt(s1) {
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById("sub2");
    var s3 = document.getElementById("sub3");
    var add_sub1 = document.getElementById("add_sub1");
    add_sub1.value = "subject1";
    add_sub1.innerHTML = "Subject1";
    s2.innerHTML ="";
    // alert(s1.value);
    // alert(s1.id);
        if (s1.value == "history") {
            var opt_arr = ["|", "political_science|Political Science","economics|Economics","sociology|Sociology"];
            add_sub1.value = "history";
            add_sub1.innerHTML = "History";
        }
        else if (s1.value == "political_science") {
            var opt_arr = ["|", "history|History","economics|Economics","sociology|Sociology"];
            add_sub1.value = "political_science";
            add_sub1.innerHTML = "Political Science";
        }
        else if (s1.value == "economics") {
            var opt_arr = ["|", "history|History","political_science|Political Science","sociology|Sociology"];
            add_sub1.value = "economics";
            add_sub1.innerHTML = "Economics";
        }
        else if (s1.value == "sociology") {
            var opt_arr = ["|", "history|History","political_science|Political Science","economics|Economics"];
            add_sub1.value = "sociology";
            add_sub1.innerHTML = "Sociology";
        }
        for (var option in opt_arr) {
            var pair = opt_arr[option].split("|");
            var new_opt = document.createElement("option");
            new_opt.value = pair[0];
            new_opt.innerHTML = pair[1];
            s2.options.add(new_opt);
        }
            
    
}

// choose subject 2 for arts
function checkIt1(s2) {
    var s2 = document.getElementById(s2);
    var s3 = document.getElementById("sub3");
    var s1 = document.getElementById("sub1");
    var add_sub2 = document.getElementById("add_sub2");
    // add_sub2.value = s2][0].value;
    // add_sub2.innerHTML = s2[0].innerHTML;
    add_sub2.value = "subject2";
    add_sub2.innerHTML = "Subject2";
    
    s3.innerHTML ="";
    // alert(s1.value);
    // alert(s1.id);
    if (s2.value == "history") {
        add_sub2.value = "history";
        add_sub2.innerHTML = "History";
    }
    else if (s2.value == "political_science") {
        add_sub2.value = "political_science";
        add_sub2.innerHTML = "Political Science";
    }
    else if (s2.value == "economics") {
        add_sub2.value = "economics";
        add_sub2.innerHTML = "Economics";
    }
    else if (s2.value == "sociology") {
        add_sub2.value = "sociology";
        add_sub2.innerHTML = "Sociology";
    }
            if (s1.value == "history" && s2.value == "political_science") {
                var opt_arr1 = ["|", "economics|Economics", "sociology|Sociology"];
            }
            else if (s1.value == "history" && s2.value == "economics") {
                var opt_arr1 = ["|", "political_science|Political Science", "sociology|Sociology"];
            }
            else if (s1.value == "history" && s2.value == "sociology") {
                var opt_arr1 = ["|", "political_science|Political Science", "economics|Economics"];
            }
            else if (s1.value == "political_science" && s2.value == "history") {
                var opt_arr1 = ["|", "economics|Economics", "sociology|Sociology"];
            }
            else if (s1.value == "political_science" && s2.value == "economics") {
                var opt_arr1 = ["|", "history|History", "sociology|Sociology"];
            }
            else if (s1.value == "political_science" && s2.value == "sociology") {
                var opt_arr1 = ["|", "history|History", "economics|Economics"];
            }
            else if (s1.value == "political_science" && s2.value == "history") {
                var opt_arr1 = ["|", "political_science|Political Science", "sociology|Sociology"];
            }
            else if (s1.value == "economics" && s2.value == "political_science") {
                var opt_arr1 = ["|", "history|History", "sociology|Sociology"];
            }
            else if (s1.value == "economics" && s2.value == "sociology") {
                var opt_arr1 = ["|", "history|History", "political_science|Political Science"];
            }
            else if (s1.value == "sociology" && s2.value == "history") {
                var opt_arr1 = ["|", "political_science|Political Science", "economics|Economics"];
            }
            else if (s1.value == "sociology" && s2.value == "political_science") {
                var opt_arr1 = ["|", "history|History", "economics|Economics"];
            }
            else if (s1.value == "sociology" && s2.value == "economics") {
                var opt_arr1 = ["|", "history|History", "political_science|Political Science"];
            }
            else if (s1.value == "economics" && s2.value == "history") {
                var opt_arr1 = ["|", "political_science|Political Science", "sociology|Sociology"];
            }
            for (var option1 in opt_arr1) {
                var pair1 = opt_arr1[option1].split("|");
                var new_opt1 = document.createElement("option");
                new_opt1.value = pair1[0];
                new_opt1.innerHTML = pair1[1];
                s3.options.add(new_opt1);
            }
}

// choose subject 3 for arts
function checkIt2() {
    // body...
    var add_sub3 = document.getElementById("add_sub3");
    var s3 = document.getElementById("sub3");
    // add_sub2.value = s2][0].value;
    // add_sub2.innerHTML = s2[0].innerHTML;
    add_sub3.value = "subject3";
    add_sub3.innerHTML = "Subject3";
    // alert(s3.value);
    if (s3.value == "history") {
        add_sub3.value = "History";
    }
    else if (s3.value == "political_science") {
        add_sub3.value = "Political Science";
    }
    else if (s3.value == "economics") {
        add_sub3.value = "Economics";
    }
    else if (s3.value == "sociology") {
        add_sub3.value = "Sociology";
    }
}

// choose art and display releted subjects
function streamSubjects() {
    var stream = document.getElementById("stream");
    var add_sub1 = document.getElementById("add_sub1");
    var add_sub2 = document.getElementById("add_sub2");
    var add_sub3 = document.getElementById("add_sub3");
    var add_sub4 = document.getElementById("add_sub4");
    var add_sub5 = document.getElementById("add_sub5");
    var add_sub6 = document.getElementById("add_sub6");
    var additional_yes_no = document.getElementById("additional_yes_no");
    var additional_yes_no_div = document.getElementById("additional_yes_no_div");
    var additional_yes_no_for_single_subj = document.getElementById("additional_yes_no_for_single_subj");

    if (stream.value == "arts") {
        add_sub1.value = "Subject1";
        add_sub2.value = "Subject2";
        add_sub3.value = "Subject3";
        add_sub4.value = "Hindi";
        add_sub5.value = "English";
        additional_yes_no_div.style.display = "block";
        additional_yes_no.style.display = "block";
        additional_yes_no_for_single_subj.style.display = "none";
    }
    else if (stream.value == "commerce") {
        add_sub1.value = "Business Studies";
        add_sub2.value = "Economics";
        add_sub3.value = "Accountancy";
        add_sub4.value = "Hindi";
        add_sub5.value = "English";
        additional_yes_no_div.style.display = "none";
        additional_yes_no.style.display = "none";
        additional_yes_no_for_single_subj.style.display = "none";
    }
    else if (stream.value == "non_medical") {
        add_sub1.value = "Physics";
        add_sub2.value = "Chemistry";
        add_sub3.value = "Mathematics";
        add_sub4.value = "Hindi";
        add_sub5.value = "English";
        additional_yes_no_div.style.display = "block";
        additional_yes_no.style.display = "none";
        additional_yes_no_for_single_subj.style.display = "block";
        if (additional_yes_no_for_single_subj.value == "yes") {
            add_sub6.style.display = "block";
            add_sub6.value = "Biology";
        }
        else if (additional_yes_no_for_single_subj.value == "no"){
            add_sub6.style.display = "none";
            add_sub6.value = "subject6";
        }
    }
    else if (stream.value == "medical") {
        add_sub1.value = "Physics";
        add_sub2.value = "Chemistry";
        add_sub3.value = "Biology";
        add_sub4.value = "Hindi";
        add_sub5.value = "English";
        additional_yes_no_div.style.display = "block";
        additional_yes_no.style.display = "none";
        additional_yes_no_for_single_subj.style.display = "block";
        if (additional_yes_no_for_single_subj.value == "yes") {
            add_sub6.style.display = "block";
            add_sub6.value = "Mathematics";
        }
        else if (additional_yes_no_for_single_subj.value == "no"){
            add_sub6.style.display = "none";
            add_sub6.value = "subject6";
        }
    }


}



</script>
 </body>
</html>
