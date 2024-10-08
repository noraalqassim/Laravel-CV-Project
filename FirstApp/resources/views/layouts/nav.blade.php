<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="navbar.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body> 
<header class="header" >   
            <a href="#" class="logo">Nora Alqassim</a>

        <nav class="navbar" id="myTopnav">
                <a href="/Home#Aboume">About Me</a>
                <a href="/Home#Skills">Skills</a>
                <a href="/Home#Courses">Courses</a>
                <a href="/">My Project</a>
                <a href="/ContactMe">Contact Me</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
                </a>
        </nav>
  </header>

  <br>
  <br>
  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>
</body>
</html>