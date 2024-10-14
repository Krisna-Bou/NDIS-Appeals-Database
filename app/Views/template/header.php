<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css?<?php echo time(); ?>">
    <link rel="shortcut icon" type="favicon.ico" href="<?php echo base_url(); ?>uq.ico">
</head>
<nav class="logo-header">
    <div class="logo-title">
        <!-- <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>logo.svg"></a> -->
        <div class="nav">
            <a href="<?php echo base_url(); ?>"><h2>Home</h2></a>
            <a href="<?php echo base_url();?>cases"><h2>Cases</h2></a>
            <a href="<?php echo base_url();?>about"><h2>About</h2></a>
            <a href="<?php echo base_url();?>contact"><h2>Contact</h2></a>
        </div>
    </div>
    
    <div class="account-links">
        <?php if (session()->get('token')) { ?>
            <a href="<?php echo base_url(); ?>record">New Record</a>
            <a href="<?php echo base_url(); ?>login/logout">Logout </a>
        <?php } else { ?>
            <a href="<?php echo base_url(); ?>login">Login </a>
        <?php } ?>
    </div>
</nav>
<body>