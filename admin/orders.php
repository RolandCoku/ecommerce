<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Profile</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="../css/plugins/footable/footable.core.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <link href="../css/plugins/datapicker/datepicker3.css" rel="stylesheet">

</head>

<body>
<div id="wrapper">

    <!-- Sidebar menu -->
    <?php include 'components/sidebar.php'; ?>

    <div id="page-wrapper" class="gray-bg">

        <!-- Top bar -->
        <?php include 'components/topBar.php'; ?>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Orders</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="../index.html">Admin</a>
                    </li>
                    <li class="active">
                        <strong>Orders</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">


            <div class="ibox-content m-b-sm border-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="order_id">Order ID</label>
                            <input type="text" id="order_id" name="order_id" value="" placeholder="Order ID" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="status">Order status</label>
                            <input type="text" id="status" name="status" value="" placeholder="Status" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="customer">Customer</label>
                            <input type="text" id="customer" name="customer" value="" placeholder="Customer" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="date_added">Date added</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date_added" type="text" class="form-control" value="03/04/2014">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="date_modified">Date modified</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date_modified" type="text" class="form-control" value="03/06/2014">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="amount">Amount</label>
                            <input type="text" id="amount" name="amount" value="" placeholder="Amount" class="form-control">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                <tr>

                                    <th>Order ID</th>
                                    <th data-hide="phone">Customer</th>
                                    <th data-hide="phone">Amount</th>
                                    <th data-hide="phone">Date added</th>
                                    <th data-hide="phone,tablet" >Date modified</th>
                                    <th data-hide="phone">Status</th>
                                    <th class="text-right">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        3214
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    <td>
                                        03/04/2015
                                    </td>
                                    <td>
                                        03/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        324
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $320.00
                                    </td>
                                    <td>
                                        12/04/2015
                                    </td>
                                    <td>
                                        21/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        546
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $2770.00
                                    </td>
                                    <td>
                                        06/07/2015
                                    </td>
                                    <td>
                                        04/08/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6327
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $8560.00
                                    </td>
                                    <td>
                                        01/12/2015
                                    </td>
                                    <td>
                                        05/12/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        642
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $6843.00
                                    </td>
                                    <td>
                                        10/04/2015
                                    </td>
                                    <td>
                                        13/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7435
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                    <td>
                                        04/04/2015
                                    </td>
                                    <td>
                                        14/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3214
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    <td>
                                        03/04/2015
                                    </td>
                                    <td>
                                        03/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        324
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $320.00
                                    </td>
                                    <td>
                                        12/04/2015
                                    </td>
                                    <td>
                                        21/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        546
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $2770.00
                                    </td>
                                    <td>
                                        06/07/2015
                                    </td>
                                    <td>
                                        04/08/2015
                                    </td>
                                    <td>
                                        <span class="label label-danger">Canceled</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6327
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $8560.00
                                    </td>
                                    <td>
                                        01/12/2015
                                    </td>
                                    <td>
                                        05/12/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        642
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $6843.00
                                    </td>
                                    <td>
                                        10/04/2015
                                    </td>
                                    <td>
                                        13/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7435
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                    <td>
                                        04/04/2015
                                    </td>
                                    <td>
                                        14/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        324
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $320.00
                                    </td>
                                    <td>
                                        12/04/2015
                                    </td>
                                    <td>
                                        21/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-warning">Expired</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        546
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $2770.00
                                    </td>
                                    <td>
                                        06/07/2015
                                    </td>
                                    <td>
                                        04/08/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6327
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $8560.00
                                    </td>
                                    <td>
                                        01/12/2015
                                    </td>
                                    <td>
                                        05/12/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        642
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $6843.00
                                    </td>
                                    <td>
                                        10/04/2015
                                    </td>
                                    <td>
                                        13/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7435
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                    <td>
                                        04/04/2015
                                    </td>
                                    <td>
                                        14/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3214
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    <td>
                                        03/04/2015
                                    </td>
                                    <td>
                                        03/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        324
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $320.00
                                    </td>
                                    <td>
                                        12/04/2015
                                    </td>
                                    <td>
                                        21/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        546
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $2770.00
                                    </td>
                                    <td>
                                        06/07/2015
                                    </td>
                                    <td>
                                        04/08/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6327
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $8560.00
                                    </td>
                                    <td>
                                        01/12/2015
                                    </td>
                                    <td>
                                        05/12/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        642
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $6843.00
                                    </td>
                                    <td>
                                        10/04/2015
                                    </td>
                                    <td>
                                        13/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7435
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                    <td>
                                        04/04/2015
                                    </td>
                                    <td>
                                        14/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        324
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $320.00
                                    </td>
                                    <td>
                                        12/04/2015
                                    </td>
                                    <td>
                                        21/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        546
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $2770.00
                                    </td>
                                    <td>
                                        06/07/2015
                                    </td>
                                    <td>
                                        04/08/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6327
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $8560.00
                                    </td>
                                    <td>
                                        01/12/2015
                                    </td>
                                    <td>
                                        05/12/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        642
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $6843.00
                                    </td>
                                    <td>
                                        10/04/2015
                                    </td>
                                    <td>
                                        13/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7435
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                    <td>
                                        04/04/2015
                                    </td>
                                    <td>
                                        14/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3214
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    <td>
                                        03/04/2015
                                    </td>
                                    <td>
                                        03/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        324
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $320.00
                                    </td>
                                    <td>
                                        12/04/2015
                                    </td>
                                    <td>
                                        21/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        546
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $2770.00
                                    </td>
                                    <td>
                                        06/07/2015
                                    </td>
                                    <td>
                                        04/08/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6327
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $8560.00
                                    </td>
                                    <td>
                                        01/12/2015
                                    </td>
                                    <td>
                                        05/12/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        642
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $6843.00
                                    </td>
                                    <td>
                                        10/04/2015
                                    </td>
                                    <td>
                                        13/07/2015
                                    </td>
                                    <td>
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7435
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                    <td>
                                        04/04/2015
                                    </td>
                                    <td>
                                        14/05/2015
                                    </td>
                                    <td>
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>



                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


        </div>


        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

    </div>
</div>


<!-- Mainly scripts -->
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="../js/inspinia.js"></script>
<script src="../js/plugins/pace/pace.min.js"></script>

<!-- Data picker -->
<script src="../js/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- FooTable -->
<script src="../js/plugins/footable/footable.all.min.js"></script>

<!-- Page-Level Scripts -->
<script>
    $(document).ready(function() {

        $('.footable').footable();

        $('#date_added').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

        $('#date_modified').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

    });

</script>

</body>

</html>