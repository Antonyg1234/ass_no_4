<?php
//ini_set('display_errors',1);
include('database.php');
include('header.php');
$nameErr = $name ="";
if($_POST['submit']){
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST['category'])){
		$nameErr = "Name is must";
		}
	else{
		$name = test_input($_POST["category"]);
	}

	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

$sql_add = "INSERT INTO category (`name`,`create_at`) VALUES ('".$name."',now())";
	if ($conn->query($sql_add) === TRUE) {
		$message = "New record created successfully";
	} else {
		$error =  "Error: " . $sql_add . "<br>" . $conn->error;
	}
}
?>


<!--wrapper-starts-->
<div id="wrapper">

 <!--header-starts-->
  <header class="clearfix">

    <div class="container"><!--container Start-->

		<div class="Logo_Cont left"><!--Logo_Cont Start-->

           <a href="index.html"><img src="images/logo.png" alt=""  /></a>

        </div><!--Logo_Cont End-->

		<div class="Home_Cont_Right right"><!--Home_Cont_Right Start-->

            <div class="Home_Cont_Right_Top left"><!--Home_Cont_Right_Top Start-->

				 <div class="Top_Search1 left">Call Us Today! (02) 9017 8413</div>
				 <div class="Top_Search2 right"><input  id="tags1" name="" type="text" onclick="this.value='';" onblur="validate_field('phone');"  value="Type desired Job Location" /></div>

        	</div><!--Home_Cont_Right_Top End-->

			<div class="Home_Cont_Right_Bottom left"><!--Home_Cont_Right_Bottom Start-->
				<div class="toggle_menu"><a href="javascript:void(0)">Menu</a></div>
                 <div id= "topMenu">
                 	<ul>
                 		<li><a href="index.html">Home</a></li>
                 		<li><a href="blog_index.html">Dating Blog</a></li>
                 		<li><a href="who_we_help.html">Who We Help</a></li>
                 		<li><a href="why_vital.html">Why Vital</a></li>
                 		<li><a href="reviews.html">Reviews</a></li>
                 		<li><a href="contact_us.html">Contact Us</a></li>
                 	</ul>
                 </div>

        	</div><!--Home_Cont_Right_Bottom End-->

        </div><!--Home_Cont_Right End-->

	</div><!--container End-->

  </header>
  <!--header-ends-->

  <div class="section banner_section who_we_help">
  	<div class="container">
  		<h4>Create Category</h4>
  	</div>
  </div>

  <!-- Content Section Start-->
	<div class="section content_section">
       <div class="container">
           <div class="filable_form_container">
			   <form name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="myForm" method="post">

               <div class="form_container_block">
                   <ul>
                       <li class="fileds">
                           <div class="name_fileds">
							   <?php
							   if ($message) {
									echo "<span class='success'>".$message. "</span>";
							   } else if($error){
							   		echo "<span class='error'>".$error."</span>";
							   }
							   ?>
                               <label>Category Name <span id="dis" class="error"><span class="error">* <?php echo $nameErr;?></span></span></label>
                               <input name="category" id="category" type="text">
                           </div>
                       </li>
                   </ul>

			   </div>
				<div class="next_btn_block">
					<div class="next_btn">
						<input type="submit" name="submit" id="submitbox" value="Submit"></input>
						<a href="http://10.0.11.22//assignment_4/category_list.php" class="back-btn"><span><<</span>Back</a>
					</div>
				</div>
<!--				   <div class="mange_buttons">-->
<!--					   <ul>-->
<!--						   <li><a href="http://localhost/assignment_4/category_list.php"><span><<</span>Back</a></li>-->
<!--					   </ul>-->
<!--				   </div>-->
			   </form>
		   </div>
		</div>
	</div>

  <!-- Content Section End-->




<div class="section clearfix section-colored7"><!--section start-->

	<div class="container"><!--container Start-->

		<div class="Download_Cont_Top_Left left"><!--Download_Cont_Top Start-->
			<img src="images/icon5.png" alt=""> <h1 style="display:inline;">FREE: Men Are From Mars</h1> <a href="#">Download Now</a>

		</div><!--Download_Cont_Top End-->

	</div><!--container End-->

</div><!--section End-->

<?php
include('footer.php');
?>



