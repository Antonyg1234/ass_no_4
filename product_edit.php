<?php
include('database.php');
include('header.php');

//print_r($conn->query($sql));die;
if($_POST['update']){
   $update_name = ($_POST[product]);
    $update_price = ($_POST[price]);
    $update_category = ($_POST[category_select]);
    $sql_update = "UPDATE product SET name='".$update_name."',price='".$update_price."',category='".$update_category."' WHERE id=$_GET[id]";

    if ($conn->query($sql_update) === TRUE) {
        $message = "New record updated successfully";
    } else {
        $error =  "Error: " . $sql_update . "<br>" . $conn->error;
    }
}

$sql_select = "SELECT id,name FROM category";
$result_select=$conn->query($sql_select) or die ();

$edit = "SELECT  name,price,category  FROM product WHERE id=$_GET[id]";
$result_edit = $conn->query($edit);
if(!empty($result_edit)){
    while($row = $result_edit->fetch_assoc()) {
        $name_list=$row['name'];
        $price_list=$row['price'];
        $category_list=$row['category'];

    }
}else{
    header('Location:http://10.0.11.22/assignment_4/product_list.php');
}
?>
<body>
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
            <h4>Edit Product</h4>
        </div>
    </div>

    <!-- Content Section Start-->
    <div class="section content_section">
        <div class="container">
            <div class="filable_form_container">
                <form name="myForm_productedit" action="#" id="myForm_productedit" method="post">
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
                                <label>Product Name</label>
                                <input name="product" id="product" type="text" value="<?php echo $name_list ?>"/>
                            </div>
                        </li>
                        <li class="fileds">
                            <div class="name_fileds">
                                <label>Product Price</label>
                                <input name="price" id="price" type="text" value="<?php echo $price_list?>"/>
                            </div>
                        </li>
                        <li class="fileds">
                            <div class="upload_fileds">
                                <label>Upload Image</label>
                                <input id="uploadFile" type="file" placeholder="Choose File" class="mandatory_fildes">
                            </div>
                        </li>
                        <li class="fileds">
                            <div class="name_fileds">
                                <label>Select Category</label>
                                <select id="category_select" name="category_select" class="select category">
                                    <option value="0"><?php echo $category_list ?></option>
                                    <?php
                                    while ($row = $result_select->fetch_assoc()) {?>
                                    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                    <?php	} ?>
                                </select>
                            </div>
                        </li>
                    </ul>
                    <div class="next_btn_block">
                        <div class="next_btn">
                            <input type="submit" name="update" id="submitbox" value="Update"></input>
                            <a href="http://10.0.11.22//assignment_4/product_list.php" class="back-btn"><span><<</span>Back</a>
                        </div>
                    </div>
                </div>
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

<!--<script type="text/javascript" src="js/jquery.js"></script> -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.select').each(function(){
            var title = $(this).attr('title');
            if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
            $(this).css({'z-index':10,'opacity':0,'-khtml-appearance':'none'}).after('<span class="select">' + title + '</span>').change(function(){
                val = $('option:selected',this).text();
                $(this).next().text(val);
            })
        });
    });
</script>
</body>
</html>