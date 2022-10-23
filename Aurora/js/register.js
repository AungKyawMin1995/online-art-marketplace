function cregister(){
	var cname = document.crform.cname.value;
	var cemail = document.crform.cemail.value;
	var cphno = document.crform.cphno.value;
	var caddress = document.crform.caddress.value;
	var cpassword = document.crform.cpassword.value;

	if(cname=="")
    {
      document.getElementById('error').innerHTML="<i>Please enter username !</i>";
      return;
    }

    if(cemail==""){
      document.getElementById('error').innerHTML="<i>Please enter email !</i>";
      return;
    }

    email_pattern=/^([a-z]){1,}([0-9])*\@([a-z]){5,}\.([a-z]){3,}$/gi;
    
    if(!email_pattern.test(cemail))
    {
      document.getElementById('error').innerHTML="<i>Invalid email address (eg.abc@gmail.com) !</i>";
      return;
    }

    if(cphno=="")
    {
      document.getElementById('error').innerHTML="<i>Please enter phone number !</i>";
      return;
    }

    ph_pattern=/^([0-9]){8,}$/;
   
    if(!ph_pattern.test(cphno))
    {
      document.getElementById('error').innerHTML="<i>Invalid phone number(eg.09123456) !</i>";
      return;
    }

    if(caddress=="")
    {
      document.getElementById('error').innerHTML="<i>Please enter current address !</i>";
      return;
    }

    if(cpassword=="")
    {
      document.getElementById('error').innerHTML="<i>Please enter password !</i>";
      return;
    }

    document.crform.action="cregisterDB.php";
    document.crform.submit();

}

function sregister(){
	var sname = document.srform.sname.value;
	var semail =  document.srform.semail.value;
	var spassword = document.srform.spassword.value;

	if(sname=="")
    {
      document.getElementById('serror').innerHTML="<i>Please enter staff name !</i>";
      return;
    }

    if(semail==""){
      document.getElementById('serror').innerHTML="<i>Please enter email !</i>";
      return;
    }

    email_pattern=/^([a-z]){1,}([0-9])*\@([a-z]){5,}\.([a-z]){3,}$/gi;
    
    if(!email_pattern.test(semail))
    {
      document.getElementById('serror').innerHTML="<i>Invalid email address (eg.abc@gmail.com) !</i>";
      return;
    }

    if(spassword=="")
    {
      document.getElementById('serror').innerHTML="<i>Please enter password !</i>";
      return;
    }

    document.srform.action="sregisterDB.php";
    document.srform.submit();
}