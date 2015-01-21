<?php $admin_type = $this->session->userdata('logged_in');
                              ?>
<div class="span10 col main-right">
    <div class="rrow scroll-y" id="mainYScroller">
        <div class="inner topRight">
            <ul class="breadcrumb">
                <li><a href="index9ed2.html?lang=en" class="glyphicons home"><i></i> BootAdmin</a></li>
                <li class="divider"></li>

                <div class="separator"></div>

                <div class="heading-buttons">
                    <h3 class="glyphicons shopping_cart"><i></i> Client View</h3>

                </div>


                <div class="relativeWrap">
                    <div class="widget widget-gray widget-gray-white">
                        <div class="widget-head">
                            <h4 class="heading">Client View</h4>
                        </div>
                        <div class="widget-body">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="dynamicTable table table-striped table-bordered table-primary table-condensed">
                                <thead>
                                <tr>
                                    <th>Unique ID</th>

                                    <th>Email</th>
                                    <th>Mobile</th>
									 <th>Platform</th>

                                    <th>Platform Version</th>
                                    <th>Apps Version</th>
									 <th>Gcm ID</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($clients as $row): ?>
                                    <tr class="gradeX">

                                        <td><?php echo $row['unique_id'];?> </td>
                                        <td class="center"><?php echo $row['email']; ?></td>
										<td><?php echo $row['msisdn'];?> </td>
                                        <td class="center"><?php echo $row['platform']; ?></td>
										<td><?php echo $row['platform_version'];?> </td>
                                        <td class="center"><?php echo $row['app_version']; ?></td>
										 <td class="center"><?php echo $row['gcm_id']; ?></td>
                                       
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br/>

        </div>
    </div>
</div>

<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" language="javascript"
        src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>