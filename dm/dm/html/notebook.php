<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/effect.css">

    <title>Note book</title>
</head>
<body>
     <?php include'../connect.php';

session_start();
$useri=$_SESSION['dormuserid'];
IF($useri==""){$userid="user1783240023";}else{$userid=$_SESSION['dormuserid'];}

$rselr="SELECT * FROM profile WHERE Id='".$userid."'";
$result= $conn6->query($rselr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
    $name=$row["name"];
  $pic=$row["ppic"];
  $userschool=$row["school"];
  
  $usercourse=$row["course"];
  
  $username=$row["username"];
  
  
  
  $ppic=$row["ppic"];
  if($ppic=="media/"){$ppic="media/ppic/pro.png";
  }else{ $ppic=$row["ppic"];}
  
echo'
   <div class="flex_side">
        <div class="navi_main">
            <div class="navi_icons_dp">
                <a href="../html/profile.php" title="see your profile">
                    <img class="nav_icons_dp"src="https://dorm.com.ng/'.$ppic.'" alt="'.$username.'">
                    <!-- <hr> -->
                    <!-- <p class="label">study tools</p> -->
                </a>
            </div>
            <div class="navi_icons" style="background-color: var(--dormorange);">
                <a href="../html/studytools.php" title="Access tools that gives you information about your school">
                    <img class="nav_icons" src="../images/studytools_white.svg"  alt="">
                    <p class="label">study tools</p>
                </a>
            </div>
            <div class="navi_icons" >
                <a href="../html/coursereview.php" title="Get reviews about different courses">
                    <img class="nav_icons" src="../images/course_review_white.svg" onmouseover= "slide()" alt="">
                    <p class="label">course review</p>
                </a>
            </div>
            <div class="navi_icons">
                <a href="../html/texter.php" title="Send text massages using mobile data">
                    <img class="nav_icons" src="../images/texter_white.svg" onmouseover= "slide()" alt="">
                </a>
                <p class="label">texter</p>
            </div>
            <div class="navi_icons">
                <a href="../html/accomodia.php" title="get accomodation easily">
                    <img class="nav_icons" src="../images/house.svg" onclick = "slide()" alt="">
                    <p class="label">accomodia</p>
                </a>
            </div>
        </div>
        <!-- <div class="nav_icons_footer">
            <hr>
            <img class="nav_footer_icons" onclick="more()" id="morebtn" src="../images/plus-circle-fill.svg" alt="" title="------- ------ more info">
        </div> -->
    </div>     

<!-- second menu -->
    <!-- <div id="menu2" class="flex_side-2">
        <div class="nav_bar">
             <div class="nav_bar">
                <div class="navi_main">
                    <a href="#" title="------- ------ more info">
                        <img class="nav_icons" src="../images/cart3.svg" onmouseover= "slide()" alt="">
                        <p class="label">shopper</p>
                    </a>

                     <a href="#" title="------- ------ more info">
                        <img class="nav_icons" src="../images/settings_white.svg" onmouseover= "slide()" alt="">
                        <p class="label">settings</p>
                    </a>
                </div>
                <div class="nav_icons_footer">
                    <hr>
                    <img class="nav_footer_icon-2" onclick="closemore()" id="closebtn" src="../images/plus-circle-fill.svg" alt="" title="------- ------ more info">
                </div>
             </div>
        </div>
    </div> -->
<!----->        

    <div class="flex_wrap">
        <div class="top_bar">
            <div class="topbar_lv1">
                <img class="dorm_logo" src="../images/dorm_no_bg.png" alt="">
                
                <!-- for mobile view only -->
                <div id="mobile_menu" class="mobile_menu">
                    <div id="mobileham" class="mobileham" onclick="openNav()">
                        <div class="mobileham_box"></div>
                        <div class="mobileham_box"></div>
                        <div class="mobileham_box"></div>
                    </div>
                    <div id="mobileham_cont" class="mobileham_cont">
                        <span href="" id="closebutt" class="closebutt" onclick="closeNav()">&times;</span>
                       <a href="../html/profile.php">
                            <div class="list">
                                <p class="ham_textmob">Profile</p>
                            </div> 
                        </a>
                        <!----<a href="../html/setting.php">
                            <div class="list">
                                <p class="ham_textmob">Settings</p>
                            </div> 
                        </a>---->
                        <!-- <a href="../html/support.php">
                            <div class="list">
                                <p class="ham_textmob">Help and Suport</p>
                            </div> 
                        </a>-->
                         <a href="../html/feedback.php">
                            <div class="list">
                                <p class="ham_textmob">Give Feedback</p>
                            </div> 
                        </a>
                        <button id="shareButton" style="display:none;"></button>
                         <label for="shareButton">
                            <a><div class="list">
                            
                                <p class="ham_textmob">Invite a friend </p>
                            </div> </a>
                        </label>
                       
                      
                        <a href="../html/logout.php">
                            <div class="list">
                                   <p class="ham_textmob">Logout</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- mobile view ham ends here --> 
                
            </div>
    
            
            <!--<div class="topbar_lv2">
                <div class="srcbar_box">
                    <span class="src_clk">Search</span>
                    <input class="search_bar" type="text">
                </div>
            </div>
            <input type="text"> -->
            
            
            
      <div class="rightH">
                <a class="user_top" href="../html/profile.php">
                    <p>'.$username.'</p>
                    <img class="top_dp" src="https://dorm.com.ng/'.$ppic.'" alt="'.$username.'">
                </a>
                
                <div class="ham">
                    <img id="drop_down" class="drop_down" src="../images/down_arrow.svg" alt=""  onclick="myFun()">
                    <div id="myhambugger" class="hambugger-content">
                        <div id="close_ham" class="close_box">
                            <span class="close_ham">&times;</span>
                        </div>
                         <a href="../html/profile.php">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/profile.svg" alt="">
                                <p class="ham_text">Profile</p>
                            </div> 
                        </a>
                       <!-- <a href="../html/setting.php">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/settings_grey.svg" alt="">
                                <p class="ham_text">Settings</p>
                            </div> 
                        </a>-->
                        <!-- <a href="../html/support.php">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/support.svg" alt="">
                                <p class="ham_text">Help and Suport</p>
                            </div> 
                        </a>-->
                         <a href="../html/feedback.php">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/feedback.svg" alt="">
                                <p class="ham_text">Give Feedback</p>
                            </div> 
                        </a>
                        <button id="shareButton" style="display:none;"></button>
                         <label for="shareButton">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/share.svg" alt="">
                                <p class="ham_text">Invite a friend </p>
                            </div> 
                        </label>
                       
                      
                        <a href="../html/logout.php">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/logout.svg" alt="">
                                <p class="ham_text">Logout</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        ';


//submit new notes

if(isset($_POST['submitnew'])){
        
$tab="personaljotternote".$userid;

    $idd='jn'.rand();
 $date=date("Y-m-d h:i:sa");
$name=$_POST['namer'];
$message=$_POST['messager'];


echo $tab;

$sqp="CREATE TABLE ".$tab." (id CHAR(30) NOT NULL PRIMARY KEY, name TEXT NOT NULL, message TEXT NOT NULL, time TEXT NOT NULL, status TEXT NOT NULL)";
if ($conn15->query($sqp)==TRUE) {}

      $sqll = "INSERT INTO ".$tab." (id, name, message, time, status)VALUES ('$idd', '$name', '$message', '$date', 'offline')";

if ($conn15->query($sqll) == TRUE) {
  echo '<script> alert("Saved successfully to notebooks. Click My notes to publish")</script>';
} 

}



//Upload files

if(isset($_POST['submit'])){
 // Count total files
 $countfiles = count($_FILES['file']['name']);
 
 // Looping all files
 for($i=0;$i<$countfiles;$i++){
   $filename = $_FILES['file']['name'][$i];
   
   // Upload file
   move_uploaded_file($_FILES['file']['tmp_name'][$i],'../../../media/personalnotes/'.$filename);
    
$table="personalfiles".$userid;
$idd='jf'.rand();
 $date=date("Y-m-d h:i:sa");
$realfilename="../../../media/personalnotes/".$filename;


$sql="CREATE TABLE ".$table." (id CHAR(30) NOT NULL PRIMARY KEY, name TEXT NOT NULL, url TEXT NOT NULL, time TEXT NOT NULL, status TEXT NOT NULL)";
if ($conn15->query($sql)==TRUE) {}
    $sqll = "INSERT INTO ".$table." (id, name, url, time, status)VALUES ('$idd', '$filename', '$realfilename', '$date', 'offline')";

if ($conn15->query($sqll) == TRUE) {
  echo '<script> alert("Uploaded successfully to notebooks. Goto note books to publish")</script>';
} else {
  echo '<script> alert("Upload not successfull")</script>';
}



 }
} 

    
    
}}
?>
        <div class="flex_main">
            <div class="note_div" >
                <button id="notebtn" class="jot">create something new</button>
                <!-- <img src="../images/" alt=""> -->
                <!-- <input type="submit" name="" placeholder="Upload"> -->
                
                <!-- creating a note -->
                <br><p>Or</p><br>
                
                        <h3>Upload a note from device </h3>
                        <form method='post' action='' enctype='multipart/form-data'>
 
 <input type="file" name="file[]" id="file" multiple><br>
 <input type='submit'  class="save"name='submit' value='Upload'>

</form>
                <div id="notebox" class="create_box" >
                   <div class="box_content">
                       <form method='post' action='' enctype='multipart/form-data'>
                       <h2>Create note</h2>
                       <textarea class="write_space_01" row="4" cols="200" name="namer" placeholder="Title"></textarea>
                       <textarea class="write_space" row="4" cols="200" name="messager" placeholder=" Create note body"></textarea>
                       
                     <input type='submit' name='submitnew' class="save" value='Save'>
                     </form>
                   </div>
                </div>
                      
<a href="mynotes.php"name="mynotes">My Notes</a><br><p></p>
<a href="https://dorm.com.ng/v2/dm/html/notweb.php"> Note web</a>

    
                
            </div>
            
 

        </div>
<div class="all_flex">
            <div class="flex">
                <h4>STUDY TOOLS</h4>
            </div>
            <div class="space"></div>
    
            <a href="../html/notebook.php">
                <div class="flex_in">
                    <h4>NOTEBOOK</h4>
                </div>
            </a>  
            <div class="space"></div>
            <a href="../html/notweb.php">
                <div class="flex_in">
                    <h4>NOTE WEB</h4>
                </div>
            </a>  
            <div class="space"></div>
            <a href="../html/cgpa_calc.php">
                <div class="flex_in">
                    <h4>CGPA CALC</h4>
                </div>
            </a>    
           
            <div class="space"></div>
            <a href="../html/library.php">
                <div class="flex_in">
                    <h4>LIBRARY</h4>
                </div>
            </a>  
             <div class="space"></div>
            <a href="../html/cbttest.php">
                <div class="flex_in">
                    <h4>CBT Test</h4>
                </div>
            </a> 
            <div class="space"></div>
            <a href="#">
                <div class="flex_in">
                    <h4>Resources team</h4>
                </div>
            </a> 
            
           
        </div>
    </div>
    
    <script src="../js/top_bar.js"></script>
    <script>
        // Get the notebox
        var box = document.getElementById("notebox");

        // Get the button that opens the modal
        var btn = document.getElementById("notebtn");

        // When the user clicks the button, open the notebox 
        btn.onclick = function() {
            box.style.display = "block";
        }
    </script>

<script>
    let dropdown_btn= document.getElementById('drop_down')
    let hamcontent = document.getElementById('myhambugger')
    let clo = document.getElementById('close_ham')

        function myFun() {
            if (hamcontent.style.display === "none") {
                hamcontent.style.display = "block";
            } else {
                hamcontent.style.display = "none";
            }
        }

    clo.onclick = function (){
        hamcontent.style.display = "none";            
    }
</script>
</body>
</html>                             