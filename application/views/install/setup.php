<?php
  $db_file_write_perm = is_writable('application/config/database.php');
  $routes_file_write_perm = is_writable('application/config/routes.php');

  if ($db_file_write_perm == false || $routes_file_write_perm == false) {
    $valid = false;
  } else {
    $valid = true;
  }
?>

<div class="col-md-8 col-md-offset-2">
    <div class="card">
        <div class="card-body">
            <div class="panel panel-default" data-collapsed="0" style="border-color: #dedede;">
    			<!-- panel body -->
    			<div class="panel-body" style="font-size: 14px;">
                    <p style="font-size: 14px;">
                    We ran diagnosis on your server. Review the items that have a red mark on it. If everything is green, you
                    are good to go to the next step.
                    </p>
                    <br>
                    <p style="font-size: 14px;">
                    <?php if ($db_file_write_perm == true) { ?>
                        <i class="dripicons-checkmark" style="color: #5ac52d;"></i>
                    <?php } else { ?>
                        <i class="dripicons-cross" style="color: #f12828"></i>
                    <?php } ?>
                    <strong>application/config/database.php </strong>: file has write permission
                    </p>
                    <p style="font-size: 14px;">
                    <?php if ($routes_file_write_perm == true) { ?>
                        <i class="dripicons-checkmark" style="color: #5ac52d;"></i>
                    <?php } else { ?>
                        <i class="dripicons-cross" style="color: #f12828"></i>
                    <?php } ?>
                    <strong>application/config/routes.php </strong>: file has write permission
                    </p>

                    <p style="font-size: 14px;">
                        <strong>To continue the installation process, all the above requirements are needed to be checked</strong>
                    </p>
                    <br>
    		    </div>
            </div>
        </div>
    </div>
</div>
<?php if(isset($error_con_fail)) { ?>
  <div class="row"
    style="margin-top: 20px;">
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-danger">
        <strong><?php echo $error_con_fail; ?></strong>
      </div>
    </div>
  </div>
<?php } ?>
<?php if(isset($error_nodb)) { ?>
  <div class="row" style="margin-top: 20px;">
    <div class="col-md-8 col-md-offset-2">
      <div class="alert alert-danger">
        <strong><?php echo $error_nodb; ?></strong>
      </div>
    </div>
  </div>
<?php } ?>

<div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="card-body">
        <div class="panel panel-default" data-collapsed="0" style="border-color: #dedede;">
            <!-- panel body -->
            <div class="panel-body" style="font-size: 14px;">
                <p style="font-size: 14px;">
                    Below you should enter your database connection details. If you're not sure about these, contact your host.
                </p>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal form-groups" method="post" action="<?php echo site_url('install/setup/configure_database');?>">
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Database Name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="dbname" placeholder="" required autofocus>
                                </div>
                                <div class="col-sm-4" style="font-size: 12px;">
                                The name of the database you want to use with this application
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="username" placeholder="" required>
                                </div>
                                <div class="col-sm-4" style="font-size: 12px;">
                                Your database Username
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" name="password" placeholder="">
                                </div>
                                <div class="col-sm-4" style="font-size: 12px;">
                                Your database Password
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Database Host</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="hostname" placeholder="" required>
                                </div>
                                <div class="col-sm-4" style="font-size: 12px;">
                                If 'localhost' does not work, you can get the hostname from web host
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-7">
                                    <button type="submit" class="btn btn-info">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
