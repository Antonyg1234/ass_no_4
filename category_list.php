<?php
include('database.php');
include('header1.php');
$num_rec_per_page=10;
if (isset($_GET["page"]))
{
    $page  = $_GET["page"];
}
else{
    $page=1;
}
$start_from = ($page-1) * $num_rec_per_page;
$category_sql = "SELECT id,name FROM category LIMIT $start_from, $num_rec_per_page ";
$category_result = $conn->query($category_sql) or die ();
// query to fetch count of total records
$sql_order = "SELECT COUNT( id ) AS count_row FROM `category`";
$result = mysqli_fetch_row($conn->query($sql_order)) or die ();
http://10.0.11.22//assignment_4/product_add.php#
$total_records = $result[0]; //count number of records
//print_r($total_records);
$total_pages = ceil($total_records / $num_rec_per_page);

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
                    <div class="Top_Search2 right">
                        <input  id="tags1" name="" type="text" onclick="this.value='';" onblur="validate_field('phone');"  value="Type desired Job Location" />
                    </div>

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
            <h4>Manage Category</h4>
        </div>
    </div>

    <!-- Content Section Start-->
    <div class="section content_section">
        <div class="container">
            <div class="filable_form_container">
                <div class="mange_buttons">
                    <ul>
                        <!--<li class="search_div">
                     <div class="Search">
                         <input name="search" type="text" />
                         <input type="submit" class="submit" value="submit">
                     </div>$id
                        </li> -->
                        <li><a href="http://10.0.11.22/assignment_4/category_add.php">Create Category</a></li>
                        <li><a href="javascript:void(0)" id="delete_multiple">Delete</a></li>
                    </ul>product.php#
                </div>
                <div class="table_container_block">
                    <table width="100%">
                        <thead>
                        <tr>
                            <th width="10%">
                                <input type="checkbox" class="checkbox" id="checkbox_all" />
                                <label class="css-label mandatory_checkbox_fildes" for="checkbox_all"></label>
                            </th>
                            <th style="width:60%">Name <!--<a href="#" class="sort_icon"><img src="images/sort.png"></a>--></th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $count=0;
                        while($row = $category_result->fetch_assoc()) {
                            $count=$count+1;
                        ?>
                            <tr>
                                <td>
                                    <input type="checkbox"  class="checkbox inner_checkbox" id="checkbox_sample<?php echo $count ?>" value="<?php echo$row['id']?>"/>
                                    <label class="css-label mandatory_checkbox_fildes" for="checkbox_sample<?php echo $count ?>"></label>
                                </td>
                                <td><?php echo $row['name']; ?></td>
                                <td>
                                    <div class="buttons">
                                        <a class="btn btn_edit" onclick="deleteFunction(<?php echo $row['id'] ?>)">Delete</a>
                                        <a class="btn btn_delete" href="http://10.0.11.22/assignment_4/category_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>


                        </tbody>
                    </table>
                </div>

                <div class="pagination_listing">
                    <ul>
                        <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=1">first</a></li>
                        <?php   for ($i=1; $i<=$total_pages; $i++) {   ?>
                        <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $i;?>"><?php echo $i;?></a></li>
                        <?php   };  ?>
                        <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo$total_pages;?>">Last</a></li>
                    </ul>
                </div>

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
