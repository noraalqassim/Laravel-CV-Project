<!DOCTYPE html>
<html>
<head>
<!--Font style link -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<!--stylesheet -->
<link rel="stylesheet" href="MyResume.css">
<!-- cdnjs link for icon-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
<!--JQury-->
<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
</head>
<body >
    <header>
        @extends('layouts.nav')
    </header>
<br>
<br>
   <!--About Me-->
   <div id="Aboume" class="section">
       <div class="container">
           <div class="title">
             <h1>About me </h1>
           </div>
           <div class="content">
             <div class="article">
                <h3>Nora Al-Qassim is a student at Qassim University in her final year in the College of computer, Department of Information Technology ( IT ).
                    Born in Kingdom of Saudi Arabia in 2001. Fluent in Arabic and English. 
                    Interested in learning programming languages and web design.
                     She can be creative in designing user interfaces. 
                     Interested in artificial intelligence and data science.
                     Proficient in working on databases.
                </h3>
                <p> If you are interested in contacting me, click here. </p>
                <div class="button">
                    <a href="/ContactMe">Contact me</a>
                </div>
             </div>
           </div>
           <div class="img-section">
                <img src="IT.png" alt="img">
           </div>
           <div class="social">
                <!--<a href="/ContactMe"><i class='fa fa-envelope-o'></i></a>-->
                <a href="https://github.com/noraalqassim"><i class="fa fa-github"></i></a>
                <a href="https://www.linkedin.com/in/noraalqassim12/"><i class="fa fa-linkedin"></i></a>
           </div>
       </div>
   </div>
   <br>
   <br>
   <br>


   <!-- Skills part-->

   <div id="Skills" class="skills_section">
    <div class="skills_head">
        <h2>My <span>Skills</span></h2>
        <p>Here is my skills to represent my Expertise</p>
    </div>

    <div class="skills_main">
        <div class="skill_bar">
            <div class="info">
                <p>HTML</p>
                <P>90%</P>
            </div>
            <div class="bar">
                <span class="html"></span>
            </div>
        </div>
        <div class="skill_bar">
            <div class="info">
                <p>CSS</p>
                <P>85%</P>
            </div>
            <div class="bar">
                <span class="css"></span>
            </div>
        </div>
        <div class="skill_bar">
            <div class="info">
                <p>PHP</p>
                <P>60%</P>
            </div>
            <div class="bar">
                <span class="PHP"></span>
            </div>
        </div>
        <div class="skill_bar">
            <div class="info">
                <p>Java Script</p>
                <P>80%</P>
            </div>
            <div class="bar">
                <span class="js"></span>
            </div>
        </div>
        <div class="skill_bar">
            <div class="info">
                <p>C++</p>
                <P>85%</P>
            </div>
            <div class="bar">
                <span class="cc"></span>
            </div>
        </div>
        <div class="skill_bar">
            <div class="info">
                <p>C</p>
                <P>85%</P>
            </div>
            <div class="bar">
                <span class="c"></span>
            </div>
        </div>
        <div class="skill_bar">
            <div class="info">
                <p>Python</p>
                <P>90%</P>
            </div>
            <div class="bar">
                <span class="Python"></span>
            </div>
        </div>
        <div class="skill_bar">
            <div class="info">
                <p>Java</p>
                <P>80%</P>
            </div>
            <div class="bar">
                <span class="Java"></span>
            </div>
        </div>
        <div class="skill_bar">
            <div class="info">
                <p>SQL</p>
                <P>95%</P>
            </div>
            <div class="bar">
                <span class="SQL"></span>
            </div>
        </div>
        <div class="skill_bar">
            <div class="info">
                <p>LINUX</p>
                <P>80%</P>
            </div>
            <div class="bar">
                <span class="LINUX"></span>
            </div>
        </div>
        <div class="skill_bar">
            <div class="info">
                <p>Android Studio</p>
                <P>70%</P>
            </div>
            <div class="bar">
                <span class="AS"></span>
            </div>
        </div>       
        <div class="skill_bar">
            <div class="info">
                <p>Design Skills (Canva) </p>
                <P>95%</P>
            </div>
            <div class="bar">
                <span class="Canva"></span>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<!--End skills-->

<!-- Courses section -->
<section id="Courses">
    <div class="Course-heading">
        <span>My Educational Courses hear</span>
        <h3>Courses</h3>
    </div>

    <ul class="Course-filter">
        <li class="list Course-filter-active" data-filter="all">All</il>
        <li class="list "data-filter="Oracle">Oracle</li>
        <li class="list" data-filter="JavaScript">JavaScript</li>
        <li class="list" data-filter="Web">Web Development</li>
        <li class="list" data-filter="Digit">Digital Transformation</li>
        <li class="list" data-filter="CN">Computer NetWork</li>
        <li class="list" data-filter="Research">Research ability skill</li>
    </ul>
    
  <div class="Course-container">
       <!--Oracle DataBase-->
    <a href="CertificateOfCompletion_Learning Oracle Database 12c_page-0001.jpg" class="Course-box Oracle" data-lightbox="work">
      <img src="CertificateOfCompletion_Learning Oracle Database 12c_page-0001.jpg" alt="Learning Oracle Database Courses">
    </a>
    
    <a href="CertificateOfCompletion_MTA Database Fundamentals 98364 Cert Prep 4 Administration_page-0001.jpg" class="Course-box Oracle" data-lightbox="work">
      <img src="CertificateOfCompletion_MTA Database Fundamentals 98364 Cert Prep 4 Administration_page-0001.jpg" alt="MTA Database Fundamentals 98364 Cert Prep 4 Administration">
    </a>
    
    <a href="CertificateOfCompletion_Oracle 12c Database Administration_page-0001.jpg" class="Course-box Oracle" data-lightbox="work">
      <img src="CertificateOfCompletion_Oracle 12c Database Administration_page-0001.jpg" alt="Oracle 12c Database Administration">
    </a>
 
    <a href="CertificateOfCompletion_Oracle Database 12c Advanced SQL_page-0001.jpg" class="Course-box Oracle" data-lightbox="work">
      <img src="CertificateOfCompletion_Oracle Database 12c Advanced SQL_page-0001.jpg" alt="Oracle Database 12c Advanced SQL">
    </a>
    
    <a href="CertificateOfCompletion_Oracle Database 12c Backup and Recovery_page-0001.jpg" class="Course-box Website Oracle" data-lightbox="work">
      <img src="CertificateOfCompletion_Oracle Database 12c Backup and Recovery_page-0001.jpg" alt="Oracle Database 12c Backup and Recovery">
    </a>
    
    <a href="CertificateOfCompletion_Oracle Database 12c Basic SQL_page-0001.jpg" class="Course-box Oracle" data-lightbox="work">
      <img src="CertificateOfCompletion_Oracle Database 12c Basic SQL_page-0001.jpg" alt="Basic SQL">
    </a>
      <!--javascript-->
    <a href="البرمجة بلغة javascript - العطاء الرقمي.jpg" class="Course-box JavaScript" data-lightbox="work">
      <img src="البرمجة بلغة javascript - العطاء الرقمي.jpg" alt="JavaScript">
    </a>

    <a href="JavaScript 101 certificate.png" class="Course-box JavaScript" data-lightbox="work">
      <img src="JavaScript 101 certificate.png" alt="JavaScript 101">
    </a>

    <a href="JavaScript 102 certificate.png" class="Course-box JavaScript" data-lightbox="work">
      <img src="JavaScript 102 certificate.png" alt="JavaScript 102">
    </a>

    <a href="JavaScript 103 certificate.png" class="Course-box JavaScript" data-lightbox="work">
      <img src="JavaScript 103 certificate.png" alt="JavaScript 103">
    </a>

      <!--Research ability skill-->
    <a href="مهارات القدرة البحثية.png" class="Course-box Research" data-lightbox="work">
      <img src="مهارات القدرة البحثية.png" alt="Research ability skill">
    </a>

     <!-- HTML -->
    <a href="HTML certificate.png" class="Course-box Web" data-lightbox="work">
      <img src="HTML certificate.png" alt="HTML certificate">
    </a>

    <a href="DOM certificate.png" class="Course-box Web" data-lightbox="work">
      <img src="DOM certificate.png" alt="DOM certificate">
    </a>

    <a href="Bootstrap certificate.png" class="Course-box Web" data-lightbox="work">
      <img src="Bootstrap certificate.png" alt="Bootstrap  certificate">
    </a>

    <a href="شهادة_تطوير_مواقع_الويب_باستخدام_Django.jpg" class="Course-box Web" data-lightbox="work">
      <img src="شهادة_تطوير_مواقع_الويب_باستخدام_Django.jpg" alt="Django">
    </a>

      <!--CSS -->
    <a href="CSS certificate.png" class="Course-box Web" data-lightbox="work">
      <img src="CSS certificate.png" alt="CSS  certificate">
    </a>

    <!--Digital Transformation-->
    <a href="مهن المستقبل والتحول الرقمي.png" class="Course-box Digit" data-lightbox="work">
      <img src="مهن المستقبل والتحول الرقمي.png" alt="Digital Transformation">
    </a>

    <!--Computer NetWork-->
    <a href="شهادة_شبكات_الحاسب_التاريخ_والمستقبل.jpg" class="Course-box CN" data-lightbox="work">
      <img src="شهادة_شبكات_الحاسب_التاريخ_والمستقبل.jpg" alt="Computer networks, history and future">
    </a>

    
  </div>
</section>
    <!--JQuery-->
  <script>
    $(document).on('click','.Course-filter li',function(){
            $(this).addClass('Course-filter-active').siblings().removeClass('Course-filter-active')
        });
        
     $(document).ready(function(){
            $('.list').click(function(){
                const value = $(this).attr('data-filter');
                if(value == 'all'){
                    $('.Course-box').show('1000');
                }
                else{
                    $('.Course-box').not('.'+value).hide('1000');
                    $('.Course-box').filter('.'+value).show('1000');
                }
            });
        });
  </script>
  
   <footer class="footer">
   @extends('layouts.footer')
   </footer>

</body>
</html>