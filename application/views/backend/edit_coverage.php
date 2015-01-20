<?php $edit_data = $this->db->get_where('coverage', array('id' => $param2))->result_array();
?>
<div class="span10 col main-right">
    <div class="rrow scroll-y" id="mainYScroller">
        <div class="inner topRight">
            <ul class="breadcrumb">
                <li><a href="index9ed2.html?lang=en" class="glyphicons home"><i></i> BootAdmin</a></li>
                <li class="divider"></li>

                <li class="divider"></li>
                <li>Edit Coverage Area</li>
            </ul>
            <div class="separator"></div>
            <?php echo form_open('admin/update_coverage/' . $param2 . '', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
            <div class="heading-buttons">
                <h2 class="glyphicons cart_in"><i></i> Edit Coverage Area</h2>

                <div class="buttons pull-right">
                    <i class="btn-icon glyphicons ok_2"></i><input type="submit"
                                                                   class="btn btn-primary btn-icon glyphicons ok_2"
                                                                   value="Update">
                </div>
            </div>
            <div class="separator"></div>

            <div class="widget widget-2 widget-tabs">
                <div class="widget-head">
                    <ul>
                        <li class="active"><a href="#productDescriptionTab" data-toggle="tab"
                                              class="glyphicons font"><i></i>Description</a></li>

                    </ul>
                </div>
                <div class="widget-body large">
                    <div class="tab-content">
                        <?php if (isset($status) == 'Success'): ?>
                            <div class="alert alert-success alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times;
                                </a>
                                Add Successfully.
                            </div>
                        <?php endif; ?>
                        <!-- Description -->
                        <div class="tab-pane active" id="productDescriptionTab">
                            <div class="row-fluid">
                                <div class="span3">
                                    <strong>Address</strong>

                                    <p class="muted"></p>
                                </div>
                                <div class="span9">
                                    <label for="inputEmail">Address title</label>
                                    <?php $query = $this->db->get('address')->result_array(); ?>
                                    <select name="address_id">
                                        <?php foreach ($query as $row): ?>
                                            <option
                                                value="<?php echo $row['id'] ?>" <?php if ($row['id'] == $edit_data[0]['address_id']) {
                                                echo 'selected';
                                            } ?> > <?php echo $row['title']; ?> </option>
                                        <?php endforeach; ?>
                                    </select>

                                    <div class="separator"></div>
                                </div>
                            </div>
                            <hr class="separator bottom"/>

                            <div class="row-fluid">
                                <div class="span3">
                                    <strong>Coverage Area Name</strong>

                                    <p class="muted"></p>
                                </div>
                                <div class="span9">
                                    <label for="inputEmail"> Coverage Title</label>
                                    <input type="text" name="title" id="mustHaveId"
                                           value="<?php echo $edit_data[0]['title'] ?>" class="wysihtml5 span12"/>
                                </div>
                            </div>

                            <hr class="separator bottom"/>

                            <div class="row-fluid">
                                <div class="span3">
                                    <strong>Coordinate</strong>

                                    <p class="muted"></p>
                                </div>
                                <div class="span9">
                                    <label for="inputEmail"> Coordinate</label>
									<textarea id="mustHaveId" name="coordinates" class="wysihtml5 span12" rows="5">
									<?php echo $edit_data[0]['coordinates'] ?>
									 </textarea>
                                   
                                    
                                </div>
                            </div>


                        </div>
                        <!-- Description END -->

                        <!-- Photos -->
                        <div class="tab-pane" id="productPhotosTab">

                        </div>
                        <!-- Photos END -->

                        <!-- Attributes -->
                        <div class="tab-pane" id="productAttributesTab">

                        </div>
                        <!-- Attributes END -->

                        <!-- Price -->
                        <div class="tab-pane" id="productPriceTab">

                        </div>
                        <!-- Price END -->

                        <!-- SEO -->
                        <div class="tab-pane" id="productSeoTab">

                        </div>
                        <!-- SEO END -->

                    </div>
                </div>
            </div>
            <div class="heading-buttons">
                <div class="buttons pull-right" style="margin-top: 0;">

                    <i class="btn-icon glyphicons ok_2"></i><input type="submit"
                                                                   class="btn btn-primary btn-icon glyphicons ok_2"
                                                                   value="Update">
                </div>
                <div class="clearfix"></div>
            </div>
            <br/>
            </form>
            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    $('.noticeDate').datepicker();
                    $('#datetimepicker_dark').datetimepicker({theme: 'dark'});
                    $('.datetimepicker_mask').datetimepicker({
                        mask: '9999/19/39 29:59'
                    });
                });


            </script>
            <script src="<?php echo base_url(); ?>assets/bb-prompt.js"></script>
            <script src="<?php echo base_url(); ?>assets/datetime/jquery.datetimepicker.js"></script>
            <script src="<?php echo base_url(); ?>assets/bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js"
                    type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js"
                    type="text/javascript"></script>