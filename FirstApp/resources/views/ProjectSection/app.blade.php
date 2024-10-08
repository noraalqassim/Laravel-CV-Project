<!DOCTYPE html>
<html>
<head>
    <title>Nora Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Font style link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap');


      *{
        margin: 0px;
        padding: 5px;
        box-sizing: border-box;
        font-family:'Dosis', sans-serif;
        background: aliceblue !important ;
        color: #6b305a !important;
        text-align: center;
       }
       header{
        padding-bottom: 100px;
       }
       .form-group{
        background: aliceblue !important;
        }
       .btn{
        background:  #6b305a!important ;
        color:#fff !important;
        border-color:  #6b305a!important ;
       }
       .btn:hover{
        color: #fff;
        background-color: #864975 !important;
        border-color:  #6b305a!important
       }
       .alert {
        background-color: #b73f3f6c !important  ;
        font-size: 20px;
       }
       .alert p{
        background-color: #b73f3f00 !important;
       }
       .alert strong{
        background-color: #b73f3f00 !important;
       }
       .alert ul {
        background-color: #b73f3f00 !important  ;
       }
       .alert ul li{
        background-color: #b73f3f00 !important  ;
       }
       .colersuc{
        background-color:#6b305a5f !important  ;
        font-size: 20px;
       }
       
       .footer{
         padding-top: 100px;
       }
    </style>
</head>
<body>
    <header >
        @extends('layouts.nav')
    </header>
<br>
<br>

<div class="container">
    @yield('content')
</div>
<footer class="footer">
    @extends('layouts.footer')
    </footer>
</body>
</html>