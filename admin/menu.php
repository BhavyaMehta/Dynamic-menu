<?php session_start();?>
<?php 
	include("include/db.php");
	include("include/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Menu Management</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
		<?php include("navigation.php"); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
        	 <div class="row">
                <div class="col-lg-10">
                    <h1 class="page-header">Menu Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-10">
                	<?php echo dispMsg(); ?>
                </div>
             </div>
            <div class="row">
            	<div class="col-lg-10">
                 <div class="panel panel-default">
                    <div class="panel-heading">
                       
                    </div>
                	<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <form action="pr_add_menu.php" role="form">
                                        <div class="form-group">
                                            <label>Menu Title</label>
                                            <input class="form-control" name="mtitle" placeholder="Menu title">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Menu Short Name</label>
                                            <input class="form-control" name="msname" placeholder="Menu Short Name">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Menu Link</label>
                                            <input class="form-control" name="mlink" placeholder="Menu Link">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Parent Menu</label>
                                            <select name="mpid" class="form-control">
                                            	<option value="0"> New Menu</option>
                                                <?php echo bindComboBox("SELECT * FROM menu_master","mid","mtitle"); ?>
                                            </select>
                                        </div>
                                      
                                        <button name="submit" type="submit" class="btn btn-default">Add Item</button>
                                        <button name="cancel" type="reset" class="btn btn-default">Cancel</button>
                                    </form>
                                </div>
                              </div>
                           	</div>
                           </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>

