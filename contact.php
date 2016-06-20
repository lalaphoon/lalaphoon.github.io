<?PHP
 $to = 'lalaphoon@gmail.com';
 $subject=$_POST['title'];
 $name = $_POST['name'];
 $email=$_POST['email'];
 $message=$_POST['comment'];
 
if($_POST["submit"]){
	if(!$_POST['email']){
        //style="color: #ffd9cc
		//$feedback="Please enter your email";
        $feedback='<p style="color: #ffd9cc">Please enter your email</p>';
	}
	if(!$_POST['comment']){
		//$feedback.="<br />Please enter a comment";
        $feedback.='<p style="color: #ffd9cc">Please enter a feedback</p>';
	}else{
	mail($to,$subject,$message,"From:".$email);
	//$feedback ='Thanks for the email';
    $feedback='<p style="color: #ccffcc">Thank you for your feedback.</p>';
	}
	//print "Your message has been sent";
}
?>


<html>
<head>
    <title>lalaphoon's seashore</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Latest compiled and minified CSS -->
    <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <!--script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script-->
 
    <style type="text/css">

    html { 
            background: url("images/starrynight_small.jpg") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-color: black;
    }
    h1{

        color:#80ffff;
        text-align:center;
        font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;

    }
    h2{
        color:#80ffbf;
        text-align:center;
        font-family: Arial, Helvetica, sans-serif;

    }
    h3{
        color:#b3ffff;
        text-align:center;
    }
    div#me {
        color:#80ffdf;
    }
    div#projects{
       color:#80ffdf; 
    }
    #me header{
        color:#99ffff;
        font-weight: bold;
    }
    #projects header{
        color:#99ffff;
        font-weight: bold;
    }
    a{
        color:#ccf2ff;
    }
    div#title {
        height:200px;
    }
    div#hmenu ul {
        list-style-type: none;
        margin: 0;
        padding:0;
        overflow: hidden;
        background: rgba(0,0,0,0.5);
    }
    div#hmenu li {
    float: left;
    padding-top: 0px;
    padding-bottom:0px;
    }
    div#hmenu li a {
        display: block;
        color: #b3ffff;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        padding-top: 30px;
        padding-bottom: 30px;
        text-decoration: none;   
    }
    div#hmenu li a:hover:not(.active) {
        background: rgba(0,0,0,0.5);
    }
    div#hmenu .active {
    background: rgba(0, 0, 0,0.45);
    }

    div#footer{
        text-align:center;
        color:#99ffff; 
        opacity: 0.75;  
    }
    .submitbutton{
        position:relative;
        
        font-size: 16px;
        text-align: center;
        background-color:rgba(0,0,0,0.2);
        color:#99ffff; 
        border: 1px solid #99ffff; 
        text-decoration: none;  
    }
    .floating-box{
        margin:10px;
        display:inline-block;
    }
    .maincontent{

        background: rgba(0,0,0,0.5);
        
        height:900px;   
        padding-top: 30px;
        padding-left: 30px;
        padding-right: 30px;
        font-family: Tahoma, Geneva, sans-serif;   
    }
    .hidden {
        display:none;
        over-flow: hidden;
        
    }
    .emailform{
        border:1px solid #99ffff;
        border-radius:10px;
        margin-top:20px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;

    }
    textarea{
        height:200px;
        border-radius:10px;
        border:1px solid #99ffff;
        background:rgba(0,0,0,0.5);
        width: 90%;
    }
    input{
        height:40px;
        border-radius:10px;
        border:1px solid #99ffff;
        background:rgba(0,0,0,0.5);
        width: 90%;
    }
    form{
        margin:20px;
        width: 100%;

    }
    input[type='text']{
        color:#80ffdf; 
        font-size: 18px;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        padding: 10px;
    }
     input[type='email']{
        color:#80ffdf; 
        font-size: 18px;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        padding: 10px;
    }
    textarea{
        color: #80ffdf; 
        font-size: 18px;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        padding: 10px;
    }
    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
      color: #99ffff;
      opacity: 0.5;
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      padding: 10px;
    }
    ::-moz-placeholder { /* Firefox 19+ */
      color:#99ffff;
      opacity: 0.5;
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      padding: 10px;
    }
    :-ms-input-placeholder { /* IE 10+ */
      color: #99ffff;
      opacity: 0.5;
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      padding: 10px;
    }
    :-moz-placeholder { /* Firefox 18- */
      color: #99ffff;
      opacity: 0.5;
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      padding: 10px;
    }
     </style>
     <script>
        $(document).ready(function(){
            $("#hmenu ul li a").on('click', function(e){
                e.preventDefault();
                $(this).closest('li').addClass('active').siblings().removeClass('active');
                var divv = "#"+$(e.target).attr("target");
                //$(".maincontent").children().hide();
                //$(".maincontent").find(divv).show();
                $(".maincontent").children().addClass('hidden');
                $(".maincontent").find(divv).removeClass('hidden');
                     
            });
        });
     </script>
</head>

<body>

<div id="title">
    
    <h1>Lalaphoon's Seashore</h1>
    <h2>Welcome to visit my world </h2>    
</div>

<!-- Navigation bar -->
<div id="hmenu">
    <ul>
        <li  style="width:20%"><a href="#" target="me">About me</a></li>
        <li  style="width:20%"><a href="#" target="portfolio" >My Portfolio</a></li>
        <li style="width:20%"><a href="#" target="projects" >My Projects</a></li>
        <li class="active" style="width:20%"><a href="#" target="contact">Contact Me</a></li>
        <li style="width:20%"><a href="#" target="links">My Links</a></li>
    </ul>
</div>

<!--main content -->
<div class = "maincontent">

<div id="me" class="hidden">
    <header>SUMMARY</header>
    <p>I am a forth year student at <strong>University of Waterloo</strong> Studying <strong>Computer Science</strong> and <strong>Fine Arts</strong>.</p>
    
    <p>
    I’ve spent the last three years as an undergraduate student in the University of Waterloo  (Canada) under the Faculty of Mathematics Computer Science program. During that time, I’ve been studying on some programming languages, Object-Oriented Programming and design patterns, some data structures and algorithms. Meanwhile, I am also a student studying visual culture, life drawing and digital image under Fine Arts department of UW.</p>
    <p> I am very left-and-right-brain-balanced person, keeping both <strong>logic</strong> and <strong>creativity</strong> in one head.
    </p>
    <p>If you are interested about me, please contact me.</p>
    <header>PROFILE</header>
    <ul>
        <li> Good at Dr.Racket, C/C++, swift, JAVA, Python, Visual Basic, Matlab, Unix Tool, Shell Script</li>
        <li>Good at SQL and Java Database Connectivity (JDBC)</li>
        <li>Good at html/javascript/css, THREE,js</li>
        <li>Familiar with Objective-C, Ruby</li>
        <li>Skilled at operating in a wide range of platforms: Windows, Mac, Linux</li>
        <li>Skilled at Adobe Photoshop,Adobe Illustrator, oil painting, life drawing</li>
        <li>Good at mathematics and statistics</li>
        <li>Good at data structures, algorithms, design pattern, Object-Oriented Programming</li>
        <li>Good at Mandarin, excellent understanding on traditional Chinese stories</li>
        <li>Very patient on debugging, QA, strong attention to details</li>
        <li>Able to work cooperatively in a team or independently with little supervision; Resourceful, reliable and goal oriented.</li>
        <li>Excellent organization skills, time-management, self-study and self-motivation.</li>
    </ul>
    <header>CURRENT POSITION</header>
    <p>part-time Computer Programming Instructor at Real Programming 4 Kids
    </p>
    <br />

    
</div>


<div id="portfolio" class="hidden" >
    <!--h3>My Portfolio</h3-->
    <img src="MyPortfolio/zhenhuan.jpg" height="200" width="200" class="floating-box"/>
    <img src="MyPortfolio/test.jpg" height="200" width="200" class="floating-box"/>
    <!--_blank target can open a page in a new window-->
    <a class="submitbutton floating-box" target="_blank" href="https://www.instagram.com/lalaphoon/" style="padding: 89px 60px;top:-100px;">View More</a>
   
</div>
<div id ="projects" class="hidden">
    <!--h3>My Projects</h3-->
    <div class="floating-box">
        <img src="images/Moments.jpg" height="200" width="200" />
    </div>
    <div class="floating-box" style="width:550px">
        <a class = "submitbutton" target="_blank"href="https://itunes.apple.com/ca/app/moments-stories/id1093880482?mt=8" style="padding:20px 40px; top:-50px">View the App</a>
        <header>Moments (IOS/SWIFT)</header> 
        <p>Moments is designed to help us easily capture and organize the many precious moments in our daily lives. It supports 5 multimedia types (text/audio/photo/sticker/video) and provides various organization methods. Capture your memories with Moments!</p>
    </div>
    
   
</div>
<div id="contact" class="emailform">

    <!--h3>Contact Me</h3-->
    
    <form action="contact.php"method="post">

        <div id="feedback" ><?php echo $feedback;?></div>
        <input type="text" placeholder="Name" name="name"  />
        <br /><br />
        <input type="text" placeholder="Title" name="title"  />
        <br /><br />
        <input type="email" placeholder = "Email" name = "email" />
        <br /><br />
        <textarea name = "comment" placeholder = "Thank you for giving me your feedback" ></textarea>
        <br /><br />
        <input type="submit" name="submit" class="submitbutton"/>
    </form>
    <div><a class="submitbutton" style="padding:10px 10px" href="mailto:lalaphoon@gmail.com">Send me email via your mail app</a></div>
   
</div>
<div id="links" class="hidden" style="padding-top: 50px">
     <ul>
        <li class=" floating-box" ><a class="submitbutton" style="padding: 89px 60px;" target="_blank" href="https://www.linkedin.com/in/monica-luo-70399857?trk=hp-identity-name"><img src="images/linkedin.png"/></a></li>
        <li class=" floating-box" ><a  class="submitbutton" style="padding: 89px 60px" target="_blank" href="https://www.instagram.com/lalaphoon/"><img src="images/instagram.png"/></a></li>
        <li class=" floating-box" ><a class="submitbutton"style="padding: 89px 60px" target="_blank" href="https://twitter.com/lalaphoon"><img src="images/twitter.png"/></a></li>
        <li class=" floating-box" ><a class="submitbutton" style="padding: 89px 60px;"target="_blank" href="https://github.com/lalaphoon"><img src="images/github.png"/></a></li>
    </ul> 
</div>

</div>
<div id="footer">
    
     <p>&copy; Lalaphoon</p>
    
</div>
</body>
</html>

