<?php include"header.php";?>
<?php include"sidebar.php";?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
 <div class="page-content">
       <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Static Slider</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">banner</a></li>
                                        <li class="breadcrumb-item active">Update</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">

                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                                <i class="fas fa-home"></i> Update tech used Banner
                                            </a>
                                        </li>


                                    </ul>
                                </div>



                                <?php
           $status = "OK"; //initial status  	title1  	text1  client1  project1 year1 title2 	text2 client2 project2  year2 img2
$msg="";
           if(ISSET($_POST['save'])){
$stitle = mysqli_real_escape_string($con,$_POST['stitle']);
$stext = mysqli_real_escape_string($con,$_POST['stext']);
$img = mysqli_real_escape_string($con,$_POST['img']);

$title1 = mysqli_real_escape_string($con,$_POST['title1']);
$text1 = mysqli_real_escape_string($con,$_POST['text1']);
$client1 = mysqli_real_escape_string($con,$_POST['client1']);
$project1 = mysqli_real_escape_string($con,$_POST['project1']);
$year1 = mysqli_real_escape_string($con,$_POST['year1']);
$title2 = mysqli_real_escape_string($con,$_POST['title2']);
$text2 = mysqli_real_escape_string($con,$_POST['text2']);
$client2 = mysqli_real_escape_string($con,$_POST['client2']);
$project2 = mysqli_real_escape_string($con,$_POST['project2']);
$year2 = mysqli_real_escape_string($con,$_POST['year2']);
$img2 = mysqli_real_escape_string($con,$_POST['img2']);

 if ( strlen($stitle) < 5 ){
$msg=$msg."Title field can not be empty.<BR>";
$status= "NOTOK";}
 if ( strlen($stext) < 20 ){
$msg=$msg."Slider Text Field Must contain characters.<BR>";
$status= "NOTOK";}



if($status=="OK")
{
$qb=mysqli_query($con,"update techpage set stitle='$stitle',img='$img', stext='$stext',
 title1='$title1', text1='$text1',client1='$client1',project1='$project1',year1='$year1',title2='$title2',
 client2='$client2',project2='$project2', year2='$year2', img2='$img2' where id=1");

		if($qb){
		    	$errormsg= "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
                Slider Info Updated successfully.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>
 "; //printing error if found in validation

		}
	}

        elseif ($status!=="OK") {
            $errormsg= "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                     ".$msg." <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>"; //printing error if found in validation


    }
    else{
			$errormsg= "
      <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                 Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                 </div>"; //printing error if found in validation


		}
           }
           ?>



                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">

                                        <?php
					 $query="SELECT * FROM techpage where id=1 ";


 $result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result))
{
	$stitle="$row[stitle]";
	$stext="$row[stext]";
    $img="$row[img]";
    $title1="$row[title1]";
    $text1="$row[text1]";
    $client1="$row[client1]";
    $project1="$row[project1]";
    $year1="$row[year1]";

    $title2="$row[title2]";
    $text2="$row[text2]";
    $client2="$row[client2]";
    $project2="$row[project2]";
    $year2="$row[year2]";
    $img2="$row[img2]";
    

}
  ?>




                                      <?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
						{
						print $errormsg;
						}
   ?>
              <form action="" method="post" enctype="multipart/form-data">
                                                <div class="row">


                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Banner Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="stitle"  value="<?php print $stitle ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Banner Text</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="stext"  value="<?php print $stext ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Banner Text</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="img"  value="<?php print $img ?>">
                                                        </div>
                                                    </div>

                                                    <!-- third section -->

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Title 1</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="title1"  value="<?php print $title1 ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Text 1</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="text1"  value="<?php print $text1 ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> client1</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="client1"  value="<?php print $client1 ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> project1</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="project1"  value="<?php print $project1 ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">year1</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="year1"  value="<?php print $year1 ?>">
                                                        </div>
                                                    </div>








                                                    <!-- fourth section -->



                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Title 2</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="title2"  value="<?php print $title2 ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Text 2</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="text2"  value="<?php print $text2 ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> client2</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="client2"  value="<?php print $client2 ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> project2</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="project2"  value="<?php print $project2 ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">year2</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="year2"  value="<?php print $year2 ?>">
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">img2</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="img2"  value="<?php print $img2 ?>">
                                                        </div>
                                                    </div>



                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" name="save" class="btn btn-primary">Update sections</button>

                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                        <!--end tab-pane-->

                                        <!--end tab-pane-->

                                        <!--end tab-pane-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- <?php include"footer.php";?> -->
