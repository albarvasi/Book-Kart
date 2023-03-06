function a()
{
if (document.signup.front_firstname.value=="")
                    {
                      alert("enter a valid FIRSTNAME");
                      document.signup.front_firstname.focus();
                       return false;
} 
if (document.signup.front_lastname.value=="")
                    {
                      alert("enter a valid LASTNAME");
                      document.signup.front_lastname.focus();
                       return false;
}
if (document.signup.front_username.value=="")
                    {
                      alert("enter a valid username");
                      document.signup.front_username.focus();
                       return false;
} 
if (document.signup.front_psw.value=="")
                    {
                      alert("enter a valid password");
                      document.signup.front_psw.focus();
                       return false;
} 

if (document.signup.front_univ.value=="")
                    {
                      alert("enter a valid UNIVERSITY");
                      document.signup.front_univ.focus();
                       return false;
} 
if (document.signup.front_branch.value=="")
                    {
                      alert("enter a valid Branch");
                      document.signup.front_branch.focus();
                       return false;
}
if (document.signup.front_dob.value=="")
                    {
                      alert("enter a valid Birthday");
                      document.signup.front_dob.focus();
                       return false;
} 
if (document.signup.front_phn.value=="")
                    {
                      alert("enter a valid Phone Number");
                      document.signup.front_phn.focus();
                       return false;
} 
if (document.signup.front_email.value=="")
                    {
                      alert("enter a valid Email");
                      document.signup.front_email.focus();
                       return false;
                    
                   }
if(document.signup.front_gender[0].checked==false && document.signup.front_gender[1].checked==false)
                   {
                   alert("choose one Gender");
                   return false;
                   }
}

                    
                   
