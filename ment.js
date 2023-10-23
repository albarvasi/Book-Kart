function a()
{
if (document.pay.front_firstname.value=="")
                    {
                      alert("enter a valid FIRSTNAME");
                      document.pay.front_firstname.focus();
                       return false;
} 
if (document.pay.front_lastname.value=="")
                    {
                      alert("enter a valid LASTNAME");
                      document.pay.front_lastname.focus();
                       return false;
}
if (document.pay.front_payment.value=="")
                    {
                      alert("enter a valid Payment method");
                      document.pay.front_payment.focus();
                       return false;
} 
if (document.pay.front_phn.value=="")
                    {
                      alert("enter a valid phone number");
                      document.signup.front_phn.focus();
                       return false;
} 
if (document.pay.front_email.value=="")
                    {
                      alert("enter a valid email");
                      document.signup.front_email.focus();
                       return false;
} 
if (document.pay.front_address.value=="")
                    {
                      alert("enter a valid address");
                      document.signup.front_address.focus();
                       return false;
} 
}