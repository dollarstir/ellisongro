<?php mainchecker('admin', 'adminauth'); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Add new Gold</title>


<link rel="stylesheet" href="main/firm/css/bootstrap.min.css" />

<link rel="stylesheet" href="main/firm/vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="main/firm/vendors/swiper_slider/css/swiper.min.css" />

<link rel="stylesheet" href="main/firm/vendors/select2/css/select2.min.css" />

<link rel="stylesheet" href="main/firm/vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="main/firm/vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="main/firm/vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="main/firm/vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="main/firm/vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="main/firm/vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="main/firm/vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="main/firm/vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="main/firm/vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="main/firm/vendors/morris/morris.css">

<link rel="stylesheet" href="main/firm/vendors/material_icon/material-icons.css" />

<link rel="stylesheet" href="main/firm/css/metisMenu.css">

<link rel="stylesheet" href="main/firm/css/style.css" />
<link rel="stylesheet" href="main/firm/css/colors/default.css" id="colorSkinCSS">
<?php echo Yolk::uicore('cssa'); ?>
</head>
<body class="crm_body_bg">



<?php involve('adminnav.php'); ?>


<section class="main_content dashboard_part">

<?php involve('admintop.php'); ?>

<div class="main_content_iner ">
<div class="container-fluid plr_30 body_white_bg pt_30">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h2 class="center-text">Add Gold</h2>
</div>
</div>




<form class="addgold">
<div class="form-group">
<label for="exampleFormControlInput1"> Item</label>
<input type="text" name="item" class="form-control" id="exampleFormControlInput1" placeholder="">

</div>

<div class="form-group">
<label for="exampleFormControlInput1">Weight</label>
<input type="text" name="weight" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>



<div class="form-group">
<label for="exampleFormControlInput1">Purity</label>
<input type="text" name="purity" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<div class="form-group">
<label for="exampleFormControlInput1">Carat</label>
<input type="text" name="carat" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<div class="form-group">
<label for="exampleFormControlInput1">Demurage Charge</label>
<input type="text" name="charge" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>


<div class="form-group">
<label for="exampleFormControlInput1">Date Deposited</label>
<input type="date" name="date_added" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>


<div class="form-group">
<label for="exampleFormControlInput1">Owner's Full Name</label>
<input type="text" name="depositer" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>


<div class="form-group">
<label for="exampleFormControlInput1">Date of Birth</label>
<input type="date" name="dob" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<div class="form-group">
<label for="exampleFormControlInput1">Country</label>
<input type="text" name="nation" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<div class="form-group">
<label for="exampleFormControlInput1">Nationality</label>
<input type="text" name="nationality" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>




<div class="form-group">
    <select class="default_sel mb_30 w-100" name="gender">
<option>Select Genger</option>

<option value="Male">Male</option>
<option value="Female">Female</option>

</select>
</div>


<div class="form-group">
<label for="exampleFormControlInput1">Occupation</label>
<input type="text" name="occupation" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<div class="form-group">
<label for="exampleFormControlInput1">Address</label>
<input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<div class="form-group">
<label for="exampleFormControlInput1">Next of Kin</label>
<input type="text" name="next_kin" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>




<?php echo inputs::input('submit', 'bnt', 'primary', 'cener-button', 'Submit'); ?>



</form>
</div>
</div>




</div>
</div>

<?php involve('adminfooter.php'); ?>
</section>



<script src="main/firm/js/jquery-3.4.1.min.js"></script>

<script src="main/firm/js/popper.min.js"></script>

<script src="main/firm/js/bootstrap.min.js"></script>

<script src="main/firm/js/metisMenu.js"></script>

<script src="main/firm/vendors/count_up/jquery.waypoints.min.js"></script>

<script src="main/firm/vendors/chartlist/Chart.min.js"></script>

<script src="main/firm/vendors/count_up/jquery.counterup.min.js"></script>

<script src="main/firm/vendors/swiper_slider/js/swiper.min.js"></script>

<script src="main/firm/vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="main/firm/vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="main/firm/vendors/gijgo/gijgo.min.js"></script>

<script src="main/firm/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="main/firm/vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="main/firm/vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="main/firm/vendors/datatable/js/buttons.flash.min.js"></script>
<script src="main/firm/vendors/datatable/js/jszip.min.js"></script>
<script src="main/firm/vendors/datatable/js/pdfmake.min.js"></script>
<script src="main/firm/vendors/datatable/js/vfs_fonts.js"></script>
<script src="main/firm/vendors/datatable/js/buttons.html5.min.js"></script>
<script src="main/firm/vendors/datatable/js/buttons.print.min.js"></script>
<script src="main/firm/js/chart.min.js"></script>

<script src="main/firm/vendors/progressbar/jquery.barfiller.js"></script>

<script src="main/firm/vendors/tagsinput/tagsinput.js"></script>

<script src="main/firm/vendors/text_editor/summernote-bs4.js"></script>

<script src="main/firm/js/custom.js"></script>


<script src="main/firm/js/active_chart.js"></script>
<?php echo Yolk::uicore('jsa'); ?>
<script src="processor/processor.js"></script>
</body>
</html>