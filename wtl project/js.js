function a()
{
if (document.login.front_username.value=="")
                    {
                      alert("enter a valid username");
                      document.login.front_username.focus();
                       return false;
} 
if (document.login.front_psw.value=="")
                    {
                      alert("enter a valid password");
                      document.login.front_psw.focus();
                       return false;
} 
                   }