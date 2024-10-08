<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <!--Bootstrap-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Simple style-->
    <style>

    .footerbody{
      background-color: aliceblue !important ;
    }
   
    .nav-link{
      background-color: aliceblue;
      color: #6b305a !important;
      font-size: 20px;
    }

    .myyield{
      color: #6b305a !important; 
      font-size: 30px;
    }

    .myname{
      color: #6b305a !important; 
      font-size: 20px;
    }

    </style>
</head>
<body class=" footerbody">

 
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="/Home#Aboume" class="nav-link px-2 text-muted">About Me</a></li>
          <li class="nav-item"><a href="/Home#Skills" class="nav-link px-2 text-muted">Skills</a></li>
          <li class="nav-item"><a href="/Home#Courses" class="nav-link px-2 text-muted">Courses</a></li>
          <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">My Project</a></li>
          <li class="nav-item"><a href="/ContactMe" class="nav-link px-2 text-muted">Contact Me</a></li>
        </ul>
        <div style="color: #6b305a; font-size: 30px;">
        <p class="text-center text-muted myyield">@yield("Thx")</p>
        </div>
        <p class="text-center text-muted myname">Nora ALqassim</p>
      </footer>
    </div>
  
</body>
</html>
