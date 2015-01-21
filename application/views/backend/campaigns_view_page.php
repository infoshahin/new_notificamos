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
                    <h3 class="glyphicons shopping_cart"><i></i> Campaigns</h3>
 <?php 
									  $admin_title = $this->crud_model->get_user_type($admin_type['user_type_id']);
									 if($admin_title[0]['title'] == 'Merchant'):?>
                    <div class="buttons pull-right">
                        <a href="<?php echo base_url(); ?>admin/campaigns_information"
                           class="btn btn-primary btn-icon glyphicons circle_plus" style="color:white"><i></i> Add
                            Campaigns</a>

                    </div>
					
					<?php endif; ?>
                </div>


                <div class="relativeWrap">
                    <div class="widget widget-gray widget-gray-white">
                        <div class="widget-head">
                            <h4 class="heading">Campaigns</h4>
                        </div>
                        <div class="widget-body">
                            <table cellpadding="0" cellspacing="0" border="0"
                                   class="dynamicTable table table-striped table-bordered table-primary table-condensed">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Coverage Area</th>
                                    <th>Time From</th>
                                    <th>Time To</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($campaigns as $row): ?>
                                    <tr class="gradeX">

                                        <td><?php echo $row['title']; ?></td>
                                        <td><?php echo $row['short_description']; ?></td>
                                        <td class="center"><?php $address = $this->crud_model->get_name_from_coverage_id($row['coverage_id']);
                                            echo $address[0]['title'];

                                            ?></td>
                                        <td class="center"><?php echo $row['time_from']; ?></td>
                                        <td class="center"><?php echo $row['time_to']; ?></td>
                                        <td class="center">
                                            <a href="<?php echo base_url() . 'admin/view_compaign/' . $row["id"] ?>"
                                               class="btn-action glyphicons rss btn-success"><i></i></a>
                                            <a href="<?php echo base_url() . 'admin/edit_compaign/' . $row["id"] ?>"
                                               class="btn-action glyphicons pencil btn-success"><i></i></a>
                                            <a href="<?php echo base_url() . 'admin/cmp_del/' . $row["id"] ?>"
                                               class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
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