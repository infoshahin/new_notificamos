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
                    <h3 class="glyphicons shopping_cart"><i></i> User</h3>

                   <div class="buttons pull-right">
                        <a href="<?php echo base_url(); ?>admin/user_information"
                           class="btn btn-primary btn-icon glyphicons circle_plus" style="color:white"><i></i> Add
                            User</a>

                    </div>
                </div>


                <div class="relativeWrap">
                    <div class="widget widget-gray widget-gray-white">
                        <div class="widget-head">
                            <h4 class="heading">View User</h4>
                        </div>
                        <div class="widget-body">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="dynamicTable table table-striped table-bordered table-primary table-condensed">
                                <thead>
                                <tr>
                                    <th>User Name</th>

                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($users as $row): ?>
                                    <tr class="gradeX">

                                        <td><?php echo $row['username'];?> </td>
                                        <td class="center"><?php echo $row['password']; ?></td>
                                        <td class="center">
										 <?php 
									  $admin_title = $this->crud_model->get_user_type($admin_type['user_type_id']);
									 if($admin_title[0]['title'] == 'Moderator'):?>
										
                                           <?php if($row['status'] == 0) : ?>
                                            <a href="<?php echo base_url() . 'admin/approve_user/' . $row["id"] ?>"
                                               class="btn-action glyphicons check btn-success"><i></i></a>
											   <?php endif; ?>
											   
											    <?php if($row['status'] == 1) : ?>
                                            <a href="<?php echo base_url() . 'admin/disapprove_user/' . $row["id"] ?>"
                                               class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
											   <?php endif; ?>
								<?php endif;?>
											   
											 <a href="<?php echo base_url() . 'admin/delete_user/' . $row["id"] ?>"
                                               class="btn-action glyphicons delete btn-danger"><i></i></a>
                                        </td>
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