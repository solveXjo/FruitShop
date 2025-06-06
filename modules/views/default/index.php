<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\bootstrap5\BootstrapAsset;
/* @var $this View */

$this->title = 'FruitShop Admin';
$this->registerCssFile(Url::to('@web/css/style.css'), ['depends' => [\yii\bootstrap5\BootstrapAsset::className()]]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php
    ?>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title ?? 'FruitShop Admin') ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= Url::to('@web/vendors/feather/feather.css') ?>">
    <link rel="stylesheet" href="<?= Url::to('@web/vendors/ti-icons/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= Url::to('@web/vendors/css/vendor.bundle.base.css') ?>">
    <link rel="stylesheet" href="<?= Url::to('@web/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= Url::to('@web/vendors/datatables.net-bs4/dataTables.bootstrap4.css') ?>">
    <link rel="stylesheet" href="<?= Url::to('@web/vendors/ti-icons/css/themify-icons.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= Url::to('@web/js/select.dataTables.min.css') ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= Url::to('@web/css/vertical-layout-light/style.css') ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= Url::to('@web/images/favicon.png') ?>" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to(['/admin/default/user']) ?>">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">User</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Welcome <?= Html::encode(Yii::$app->user->identity->username) ?></h3>
                                    <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <div class="justify-content-end d-flex">
                                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                                <a class="dropdown-item" href="#">January - March</a>
                                                <a class="dropdown-item" href="#">March - June</a>
                                                <a class="dropdown-item" href="#">June - August</a>
                                                <a class="dropdown-item" href="#">August - November</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card tale-bg">
                                <div class="card-people mt-auto">
                                    <img src="<?= Url::to('@web/images/dashboard/people.svg') ?>" alt="people">
                                    <div class="weather-info">
                                        <div class="d-flex">
                                            <div>
                                                <h2 class="mb-0 font-weight-normal"><i class="icon-clock mr-2"></i><?= date('H:i') ?><sup>UTC</sup></h2>
                                            </div>
                                            <div class="ml-2">
                                                <h4 class="location font-weight-normal">Amman</h4>
                                                <h6 class="font-weight-normal">Jordan</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin transparent">
                            <div class="row">
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <p class="mb-4">Number of Users</p>
                                            <p class="fs-30 mb-2"> <?= $data['userCount'] ?></p>
                                            <!-- <p>10.00% (30 days)</p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <p class="mb-4">number of orders</p>
                                            <p class="fs-30 mb-2"><?= $data['numberOfCarts'] ?></p>
                                            <!-- <p>22.00% (30 days)</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                                    <div class="card card-light-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Total Profit</p>
                                            <p class="fs-30 mb-2">$<?= $data['totalProfit'] ?></p>
                                            <!-- <p>2.00% (30 days)</p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 stretch-card transparent">
                                    <div class="card card-light-danger">
                                        <div class="card-body">
                                            <p class="mb-4">Out Of Stock Count</p>
                                            <p class="fs-30 mb-2"><?= $data['outOfStockCount'] ?></p>
                                            <!-- <p>0.22% (30 days)</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Order Details</p>
                                    <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                                    <div class="d-flex flex-wrap mb-5">
                                        <div class="mr-5 mt-3">
                                            <p class="text-muted">Order value</p>
                                            <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
                                        </div>
                                        <div class="mr-5 mt-3">
                                            <p class="text-muted">Orders</p>
                                            <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
                                        </div>
                                        <div class="mr-5 mt-3">
                                            <p class="text-muted">Users</p>
                                            <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted">Downloads</p>
                                            <h3 class="text-primary fs-30 font-weight-medium">34040</h3>
                                        </div>
                                    </div>
                                    <canvas id="order-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title">Sales Report</p>
                                        <a href="#" class="text-info">View all</a>
                                    </div>
                                    <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                                    <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                                    <canvas id="sales-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card position-relative">
                                <div class="card-body">
                                    <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">
                                                    <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                        <div class="ml-xl-4 mt-3">
                                                            <p class="card-title">Detailed Reports</p>
                                                            <h1 class="text-primary">$34040</h1>
                                                            <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                                                            <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-9">
                                                        <div class="row">
                                                            <div class="col-md-6 border-right">
                                                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                                    <table class="table table-borderless report-table">
                                                                        <tr>
                                                                            <td class="text-muted">Illinois</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">713</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-muted">Washington</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">583</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-muted">Mississippi</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">924</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-muted">California</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">664</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-muted">Maryland</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">560</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-muted">Alaska</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">793</h5>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <canvas id="north-america-chart"></canvas>
                                                                <div id="north-america-legend"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                        <div class="ml-xl-4 mt-3">
                                                            <p class="card-title">Detailed Reports</p>
                                                            <h1 class="text-primary">$34040</h1>
                                                            <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                                                            <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-9">
                                                        <div class="row">
                                                            <div class="col-md-6 border-right">
                                                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                                    <table class="table table-borderless report-table">
                                                                        <tr>
                                                                            <td class="text-muted">Illinois</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">713</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-muted">Washington</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">583</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-muted">Mississippi</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">924</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-muted">California</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">664</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-muted">Maryland</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">560</h5>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-muted">Alaska</td>
                                                                            <td class="w-100 px-0">
                                                                                <div class="progress progress-md mx-4">
                                                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h5 class="font-weight-bold mb-0">793</h5>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <canvas id="south-america-chart"></canvas>
                                                                <div id="south-america-legend"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title mb-0">Top Products</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>expected profit</th>
                                                    <th>Date</th>
                                                    <th>#Stocks</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php foreach ($data['profitByProduct'] as $productName => $profit): ?>

                                                    <tr>
                                                        <td><?= $productName ?></td>
                                                        <td class="font-weight-bold">$<?= $profit ?></td>
                                                        <td><?= $data['products'][$productName]->createdAt ?? 'N/A' ?></td>
                                                        <td class="font-weight-medium">
                                                            <div class="badge badge-success"><?= $data['products'][$productName]->stock ?? 0 ?> </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">To Do Lists</h4>
                                    <div class="list-wrapper pt-2">
                                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                            <li>
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox">
                                                        Meeting with Urban Team
                                                    </label>
                                                </div>
                                                <i class="remove ti-close"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked>
                                                        Duplicate a project for new customer
                                                    </label>
                                                </div>
                                                <i class="remove ti-close"></i>
                                            </li>
                                            <li>
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox">
                                                        Project meeting with CEO
                                                    </label>
                                                </div>
                                                <i class="remove ti-close"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked>
                                                        Follow up of team zilla
                                                    </label>
                                                </div>
                                                <i class="remove ti-close"></i>
                                            </li>
                                            <li>
                                                <div class="form-check form-check-flat">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox">
                                                        Level up for Antony
                                                    </label>
                                                </div>
                                                <i class="remove ti-close"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-items d-flex mb-0 mt-2">
                                        <input type="text" class="form-control todo-list-input" placeholder="Add new task">
                                        <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="icon-circle-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title mb-0">Projects</p>
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th class="pl-0  pb-2 border-bottom">Places</th>
                                                    <th class="border-bottom pb-2">Orders</th>
                                                    <th class="border-bottom pb-2">Users</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0">Kentucky</td>
                                                    <td>
                                                        <p class="mb-0"><span class="font-weight-bold mr-2">65</span>(2.15%)</p>
                                                    </td>
                                                    <td class="text-muted">65</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0">Ohio</td>
                                                    <td>
                                                        <p class="mb-0"><span class="font-weight-bold mr-2">54</span>(3.25%)</p>
                                                    </td>
                                                    <td class="text-muted">51</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0">Nevada</td>
                                                    <td>
                                                        <p class="mb-0"><span class="font-weight-bold mr-2">22</span>(2.22%)</p>
                                                    </td>
                                                    <td class="text-muted">32</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0">North Carolina</td>
                                                    <td>
                                                        <p class="mb-0"><span class="font-weight-bold mr-2">46</span>(3.27%)</p>
                                                    </td>
                                                    <td class="text-muted">15</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0">Montana</td>
                                                    <td>
                                                        <p class="mb-0"><span class="font-weight-bold mr-2">17</span>(1.25%)</p>
                                                    </td>
                                                    <td class="text-muted">25</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0">Nevada</td>
                                                    <td>
                                                        <p class="mb-0"><span class="font-weight-bold mr-2">52</span>(3.11%)</p>
                                                    </td>
                                                    <td class="text-muted">71</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 pb-0">Louisiana</td>
                                                    <td class="pb-0">
                                                        <p class="mb-0"><span class="font-weight-bold mr-2">25</span>(1.32%)</p>
                                                    </td>
                                                    <td class="pb-0">14</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="row">
                                <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-title">Profit by Product - Total ($ <?= $data['totalProfit'] ?>)</p>
                                            <div class="charts-data">
                                                <?php foreach ($data['profitByProduct'] as $productName => $profit): ?>
                                                    <div class="mt-3">
                                                        <p class="mb-0"><?= $productName ?></p>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="progress progress-md flex-grow-1 mr-4">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: <?= $profit ?>%" aria-valuenow="<?= $profit ?>" aria-valuemin="0" aria-valuemax="5000"></div>
                                                            </div>
                                                            <p class="mb-0"><?= $profit ?></p>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
                                    <div class="card data-icon-card-primary">
                                        <div class="card-body">
                                            <p class="card-title text-white">Number of Meetings</p>
                                            <div class="row">
                                                <div class="col-8 text-white">
                                                    <h3>34040</h3>
                                                    <p class="text-white font-weight-500 mb-0">The total number of sessions within the date range.It is calculated as the sum . </p>
                                                </div>
                                                <div class="col-4 background-icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Notifications</p>
                                    <ul class="icon-data-list">
                                        <li>
                                            <div class="d-flex">
                                                <img src="<?= Url::to('@web/images/faces/face1.jpg') ?>" alt="user">
                                                <div>
                                                    <p class="text-info mb-1">Isabella Becker</p>
                                                    <p class="mb-0">Sales dashboard have been created</p>
                                                    <small>9:30 am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <img src="<?= Url::to('@web/images/faces/face2.jpg') ?>" alt="user">
                                                <div>
                                                    <p class="text-info mb-1">Adam Warren</p>
                                                    <p class="mb-0">You have done a great job #TW111</p>
                                                    <small>10:30 am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <img src="<?= Url::to('@web/images/faces/face3.jpg') ?>" alt="user">
                                                <div>
                                                    <p class="text-info mb-1">Leonard Thornton</p>
                                                    <p class="mb-0">Sales dashboard have been created</p>
                                                    <small>11:30 am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <img src="<?= Url::to('@web/images/faces/face4.jpg') ?>" alt="user">
                                                <div>
                                                    <p class="text-info mb-1">George Morrison</p>
                                                    <p class="mb-0">Sales dashboard have been created</p>
                                                    <small>8:50 am</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <img src="<?= Url::to('@web/images/faces/face5.jpg') ?>" alt="user">
                                                <div>
                                                    <p class="text-info mb-1">Ryan Cortez</p>
                                                    <p class="mb-0">Herbs are fun and easy to grow.</p>
                                                    <small>9:00 am</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>


            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="<?= Url::to('@web/vendors/js/vendor.bundle.base.js') ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= Url::to('@web/vendors/chart.js/Chart.min.js') ?>"></script>
    <script src="<?= Url::to('@web/vendors/datatables.net/jquery.dataTables.js') ?>"></script>
    <script src="<?= Url::to('@web/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
    <script src="<?= Url::to('@web/js/dataTables.select.min.js') ?>"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= Url::to('@web/js/off-canvas.js') ?>"></script>
    <script src="<?= Url::to('@web/js/hoverable-collapse.js') ?>"></script>
    <script src="<?= Url::to('@web/js/template.js') ?>"></script>
    <script src="<?= Url::to('@web/js/settings.js') ?>"></script>
    <script src="<?= Url::to('@web/js/todolist.js') ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= Url::to('@web/js/dashboard.js') ?>"></script>
    <script src="<?= Url::to('@web/js/Chart.roundedBarCharts.js') ?>"></script>
    <!-- End custom js for this page-->
</body>

</html>