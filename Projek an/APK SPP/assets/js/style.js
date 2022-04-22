function myFunction() {

  var x = document.getElementById("pw");

  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


function GenerateLaporan() {
  window.open("index.php?page=laporan", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
}

