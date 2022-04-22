function myFunction() 
{
  var x = document.getElementById("myinput");//id password
  var y = document.getElementById("hide1"); //id icon 1
  var z = document.getElementById("hide2"); //id icon 2

  if (x.type === "password") //jika 
  {
        x.type = "text";
        y.style.display="block";
        z.style.display="none";
  }
  else
  {
    x.type = "password";
    y.style.display="none";
    z.style.display="block";
  }
}