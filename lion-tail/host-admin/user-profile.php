<?php $actova1 = '';
$actova2 = '';
$actova3 = '';
$actova4 = '';
$actova5 = '';
$actova6 = '';
$actova7 = '';
$actova8 = '';
$actova9 = '';
$actova10 = ''; ?>
<?php require_once('../../con-cot/conn_sqli.php'); ?>
<?php require_once('../../lib/basic-functions.php'); ?>
<?php require_once('../../library.php'); ?>
<?php require_once('../../select-library.php'); ?>
<?php $bassic->checkLogedINAdmin('login'); ?>
<?php if (isset($_GET['id-ter']) && !empty($_GET['id-ter'])) {
    $user_id = $_GET['id-ter'];
} else {
    header("location:all-users");
} ?>
<?php
$msg = '';
//update wallet address
if (isset($_POST['subW'])) {
    $wallet_address = mysqli_real_escape_string($link, htmlentities($_POST['wallet']));
    $E_address = mysqli_real_escape_string($link, htmlentities($_POST['walletE']));
    $pm = mysqli_real_escape_string($link, htmlentities($_POST['pm']));
    if (!empty($wallet_address)) {
        $fieldW = array('wallet_address', 'ethereum_wallet_address', 'perfectmoney');
        $valueW = array($wallet_address, $E_address, $pm);
        $msg = $cal->update($user_tb, $fieldW, $valueW, 'email', $user_id);
    }
}
?>
<?php
if (isset($_POST['subP'])) {
    $pic_name  = $_FILES['pic']['name'];
    $pic_tmp = $_FILES['pic']['tmp_name'];
    $pic_size = $_FILES['pic']['size'];
    $passportIn = $cal->selectFrmDB($user_tb, 'passport', 'email', $user_id);
    if (!empty($pic_name)) {
        $gen_Num = $bassic->randGenerator();
        $extension_Name = $bassic->extentionName($pic_name);
        $new_name = $gen_Num . $extension_Name;
        $path = '../../photo/' . $new_name;
        $picvalidation = $bassic->picVlidator($pic_name, $pic_size);
        if (empty($picvalidation)) {
            $bassic->unlinkFile($passportIn, '../photo/');
            $upl = $bassic->uploadImage($pic_tmp, $path);
            if (empty($upl)) {
                $fieldP = array('passport');
                $valueP = array($new_name);
                $msg = $cal->update($user_tb, $fieldP, $valueP, 'email', $user_id);
            } else {
                $msg = $upl;
            }
        } else {
            $msg = $picvalidation;
        }
    } else {
        $msg = 'Please fill all fields!';
    }
}


if (isset($_POST['subB'])) {
    $pic_name  = $_FILES['banner']['name'];
    $pic_tmp = $_FILES['banner']['tmp_name'];
    $pic_size = $_FILES['banner']['size'];
    $passportIn = $cal->selectFrmDB($user_tb, 'school_banner', 'email', $user_id);
    if (!empty($pic_name)) {
        $gen_Num = $bassic->randGenerator();
        $extension_Name = $bassic->extentionName($pic_name);
        $new_name = $gen_Num . $extension_Name;
        $path = '../../photo/' . $new_name;
        $picvalidation = $bassic->picVlidator($pic_name, $pic_size);
        if (empty($picvalidation)) {
            $bassic->unlinkFile($passportIn, '../photo/');
            $upl = $bassic->uploadImage($pic_tmp, $path);
            if (empty($upl)) {
                $fieldP = array('school_banner');
                $valueP = array($new_name);
                $msg = $cal->update($user_tb, $fieldP, $valueP, 'email', $user_id);
            } else {
                $msg = $upl;
            }
        } else {
            $msg = $picvalidation;
        }
    } else {
        $msg = 'Please fill all fields!';
    }
}
?>
<?php
if (isset($_POST['sub'])) {
    $name = mysqli_real_escape_string($link, htmlentities($_POST['name']));
    $lname = mysqli_real_escape_string($link, htmlentities($_POST['lname']));
    $sex = mysqli_real_escape_string($link, htmlentities($_POST['sex']));
    $city = mysqli_real_escape_string($link, htmlentities($_POST['city']));
    $school_name = mysqli_real_escape_string($link, htmlentities($_POST['school_name']));
    $school_description = mysqli_real_escape_string($link, htmlentities($_POST['school_description']));
    $phone = mysqli_real_escape_string($link, htmlentities($_POST['phone']));
    if (!empty($name) && !empty($sex) && !empty($phone)) {
        $fieldA = array('first_name', 'last_name', 'sex', 'city', 'phone', 'school_name', 'school_description');
        $valueA = array($name, $lname, $sex, $city, $phone, $school_name, $school_description);
        $msg = $cal->update($user_tb, $fieldA, $valueA, 'email', $user_id);
    } else {
        $msg = 'Please fill all fields';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Users Profile | The Best Bitcoin Mining Company';
require_once('head.php') ?>

<body>
    <!-- container section start -->
    <section id="container" class="" style="margin-bottom:100px;">
        <?php require_once('header.php') ?>
        <?php require_once('sidebar.php') ?>
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!--overview start-->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-laptop"></i> Profile</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="../host-admin/">Home</a></li>
                            <li><i class="fa fa-laptop"></i> My Profile</li>
                        </ol>
                    </div>
                </div>

                <?php if (!empty($msg)) { ?>
                    <div class="row">
                        <div id="go" class=" col-lg-12">
                            <div id="go" class="alert alert-warning" style="text-align: center; color:#FFF;"><?php print @$msg; ?> <i id="remove" class="fa fa-remove pull-right"></i></div>
                        </div>
                    </div>
                <?php } ?>


                <div class="row">
                    <!-- profile-widget -->
                    <div class="col-lg-12">
                        <div class="profile-widget profile-widget-info">
                            <div class="panel-body">
                                <div class="col-lg-2 col-sm-2">
                                    <h4><?php print @'Hi ' . $cal->selectFrmDB($user_tb, 'first_name', 'email', $user_id); ?></h4>
                                    <div class="follow-ava">
                                        <img src="../../photo/<?php if ($cal->selectFrmDB($user_tb, 'passport', 'email', $user_id) == 'passport') {
                                                                    print 'avata.png';
                                                                } else {
                                                                    print @$cal->selectFrmDB($user_tb, 'passport', 'email', $user_id);
                                                                } ?>" alt="profile picture">
                                    </div>

                                </div>
                                <div class="col-lg-10 col-sm-10 follow-info">
                                    <p>Hello I’m <?php print $cal->selectFrmDB($user_tb, 'first_name', 'email', $user_id); ?>, a proud member of <?php print @$siteName; ?>.</p>
                                    <p><i class="fa fa-envelope"></i> Email: <?php print @$cal->selectFrmDB($user_tb, 'email', 'email', $user_id); ?></p>
                                    <p><i class="fa fa-twitter"></i> Phone: <?php print @$cal->selectFrmDB($user_tb, 'phone', 'email', $user_id); ?></p>
                                    <h6>
                                        <p><i class="icon_clock_alt"></i> Date Reg.: <?php print @$cal->selectFrmDB($user_tb, 'date_reg', 'email', $user_id); ?></p>
                                        <p><i class="icon_calendar"></i> City: <?php print @$cal->selectFrmDB($user_tb, 'city', 'email', $user_id); ?></p>

                                    </h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading tab-bg-info">
                                <ul class="nav nav-tabs">


                                    <li class="active">
                                        <a data-toggle="tab" href="#edit-profile">
                                            <i class="icon-envelope"></i>
                                            Edit Profile
                                        </a>
                                    </li>
                                </ul>
                            </header>
                            <div class="panel-body">
                                <div class="tab-content">

                                    <!-- edit-profile -->
                                    <div id="edit-profile" class="tab-pane active">
                                        <section class="panel">
                                            <div class="panel-body bio-graph-info">

                                                <h1> School Logo</h1>
                                                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="">
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">School Logo</label>
                                                        <p> </p>
                                                        <div class="col-lg-3">
                                                            <img src="../../photo/<?php print @$cal->selectFrmDB($user_tb, 'passport', 'email', $user_id); ?>" width="90" height="83" alt="Logo">
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <label class="col-lg-2 control-label">Browse Logo</label>
                                                            <input name="pic" type="file">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-lg-offset-2 col-lg-10">
                                                            <button type="submit" name="subP" class="btn btn-primary">Update Logo</button>
                                                        </div>
                                                    </div>
                                                </form>

                                                <h1> School Banner</h1>
                                                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="">
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">School Banner</label>
                                                        <p> </p>

                                                        <div class="col-lg-3">
                                                            <img src="../../photo/<?php print @$cal->selectFrmDB($user_tb, 'school_banner', 'email', $user_id); ?>" width="90" height="83" alt="Banner">
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <label class="col-lg-2 control-label">Browse Banner</label>
                                                            <input name="banner" type="file">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-lg-offset-2 col-lg-10">
                                                            <button type="submit" name="subB" class="btn btn-primary">Update Banner</button>
                                                        </div>
                                                    </div>
                                                </form>

                                                <h1> Profile Info/School</h1>
                                                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="">

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">School Name</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" value="<?php print @$cal->selectFrmDB($user_tb, 'school_name', 'email', $user_id); ?>" class="form-control" id="school_name" name="school_name" placeholder=" ">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">School Description</label>
                                                        <div class="col-lg-6">
                                                            <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin">
                                                                < />

                                                                <
                                                                script >
                                                                    tinymce.init({
                                                                        selector: 'textarea'
                                                                    });
                                                            </script>

                                                            <textarea class="form-control" rows="5" value="" id="school_description" name="school_description">
                                                        <?php print @$cal->selectFrmDB($user_tb, 'school_description', 'email', $user_id); ?>
                                                        </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">First Name</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" value="<?php print @$cal->selectFrmDB($user_tb, 'first_name', 'email', $user_id); ?>" class="form-control" id="f-name" name="name" placeholder=" ">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Last Name</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" value="<?php print @$cal->selectFrmDB($user_tb, 'last_name', 'email', $user_id); ?>" class="form-control" id="lname" name="lname" placeholder=" ">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Sex</label>
                                                        <div class="col-lg-6">
                                                            <select class="form-control" name="sex" id="sex">
                                                                <option selected="selected" value="">Select your Gender</option>
                                                                <?php $sex = $cal->selectFrmDB($user_tb, 'sex', 'email', $user_id); ?>
                                                                <option <?php if ($sex == 'Male') echo 'selected="selected"'; ?> value="Male">Male</option>
                                                                <option <?php if ($sex == 'Female') echo 'selected="selected"'; ?> value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">City</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" value="<?php print @$cal->selectFrmDB($user_tb, 'city', 'email', $user_id); ?>" class="form-control" id="l-name" name="city" placeholder=" ">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Email</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="email" readonly value="<?php print @$cal->selectFrmDB($user_tb, 'email', 'email', $user_id); ?>" class="form-control" id="email" placeholder=" ">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Phone</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="phone" value="<?php print @$cal->selectFrmDB($user_tb, 'phone', 'email', $user_id); ?>" class="form-control" id="mobile" placeholder=" ">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-lg-offset-2 col-lg-10">
                                                            <button type="submit" name="sub" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>

            <!--main content end-->
        </section>
        <!-- container section start -->
    </section>
    <!-- javascripts -->
    <?php require_once('jsfiles.php') ?>
    <!-- charts scripts -->
</body>

</html>