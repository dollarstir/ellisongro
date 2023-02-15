<?php mainchecker('vaultuser', 'vaultauthenticator');
involve('functions');

?>
<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Secured Vault</title>


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
    <?php echo Yolk::uicore('cssfa'); ?>
</head>

<body class="crm_body_bg">



    <?php involve('adminnav.php'); ?>


    <section class="main_content dashboard_part">

        <?php involve('admintop.php'); ?>

        <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                            <h4 style="text-align:center; margin-top:10px !important; ">VAULT NUMBER : <span style="color:#FFB400;"><?php gdetail($_SESSION['vaultuser']['gold_id'], 'vaultnumber'); ?> </span> <a href="" style="margin-left:7px;" class="btn btn-danger">Logout</a></h4>
                                <div class="box_right d-flex lms_block">
                                    <!-- <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div>
                                    </div> -->
                                    <!-- <div class="add_button ml-10">
<a href="main/firm/data_table.html#" data-toggle="modal" data-target="#addcategory" class="btn_1">Add New</a>
</div> -->
                                </div>
                            </div>
                            <div class="QA_table ">

                                <table class="table lms_table_active">
                                <tr>
                                        <td>VAULT NUMBER </td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'vaultnumber'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>ITEM </td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'item'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>CARAT </td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'carat'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>WEIGHT </td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'weight'); ?></td>

                                    </tr>
                                    <tr>
                                        <td>PURITY </td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'purity'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>DATE  DEPOSITED</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'date_added'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>DEMURAGE CHARGE</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'charge'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>NAME OF DEPOSITOR</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'depositer'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>DATE OF BIRTH</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'dob'); ?></td>
                                    </tr>

                                    <tr>
                                        <td>ADDRESS</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'address'); ?></td>
                                    </tr>

                                    <tr>
                                        <td>COUNTRY</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'nation'); ?></td>
                                    </tr>

                                    <tr>
                                        <td>NATIONALITY</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'nationality'); ?></td>
                                    </tr>

                                    <tr>
                                        <td>SEX</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'gender'); ?></td>
                                    </tr>

                                    <tr>
                                        <td>OCCUPATION</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'occupation'); ?></td>
                                    </tr>

                                    <tr>
                                        <td>NEXT OK KIN</td>
                                        <td><?php gdetail($_SESSION['vaultuser']['gold_id'], 'next_kin'); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
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
    <?php echo Yolk::uicore('corejs'); ?>
    <script src="main/firm/processor/processor.js"></script>
</body>

</html>