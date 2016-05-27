<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Detail</title>
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/jasny-bootstrap/css/jasny-bootstrap.min.css">
    <style type="text/css">
        .pd-b-5{
            padding-bottom: 5px;
        }
        .error{
            color: red;
        }
    </style>
    
</head>
<body>

<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top backgroundBlue" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url()?>user/">Welcome <?php echo "\"" . $this->session->userdata('username') . "\""; ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= base_url()?>user/insert">Create User</a>
                    </li>
                    <li>
                        <a href="<?= base_url()?>user">Manage current users</a>
                    </li>
                    <li>
                        <a href="<?= base_url()?>user/logout">Logout</a>
                    </li>
                    <li>
                        <a href="<?= base_url()?>user/about">About</a>
                    </li>
                </ul>
            </div>
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>    
    
    <br/>
    <br/>
    <br/>
    <br/>