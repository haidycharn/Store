<div class="col-md-12">
    <div class="row"style="margin-top: 30px;">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="panel panel-default" data-collapsed="0" style="border-color: #dedede;">
                        <!-- panel body -->
                        <div class="panel-body" style="font-size: 14px;">
                            <p style="font-size: 14px;">
                                Welcome to Store Installation. You will need to know the following items before proceeding.
                            </p>
                            <ol>
                                <li>Database Name</li>
                                <li>Database Username</li>
                                <li>Database Password</li>
                                <li>Database Hostname</li>
                            </ol>
                            <p style="font-size: 14px;">
                                We are going to use the above information to write database.php file which will connect the application to your database. During the installation process, we will check if the files that are needed to be written
                                (<strong>application/config/database.php</strong> has
                                <strong>write permission</strong>.
                            </p>
                            <p style="font-size: 14px;">
                                Gather the information mentioned above before hitting the start installation button. If you are ready....
                            </p>
                        <br>
                        <p>
                        <a href="<?php echo site_url('install/setup');?>" class="btn btn-info">
                            Start Installation Process
                        </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

