function clogin(){
	var cname = document.clform.cname.value;
	var cpassword = document.clform.cpassword.value;

	if(cname=="")
    {
      document.getElementById('cerror').innerHTML="<i>Please enter username !</i>";
      return;
    }

    if(cpassword=="")
    {
      document.getElementById('cerror').innerHTML="<i>Please enter password !</i>";
      return;
    }

    document.clform.action="cloginDB.php";
    document.clform.submit();
}

function slogin(){

	var sname = document.slform.sname.value;
	var spassword = document.slform.spassword.value;

	if(sname=="")
    {
      document.getElementById('serror').innerHTML="<i>Please enter staff name !</i>";
      return;
    }

    if(spassword=="")
    {
      document.getElementById('serror').innerHTML="<i>Please enter password !</i>";
      return;
    }

    document.slform.action="sloginDB.php";
    document.slform.submit();
}


function alogin(){
  var adname = document.adminform.adname.value;
  var adpassword = document.adminform.adpassword.value;

  if(adname=="")
    {
      document.getElementById('aerror').innerHTML="<i>Username can't be empty !</i>";
      return;
    }

    if(adpassword=="")
    {
      document.getElementById('aerror').innerHTML="<i>Password can't be empty !</i>";
      return;
    }

    document.adminform.action="adminlogincheck.php";
    document.adminform.submit();
}