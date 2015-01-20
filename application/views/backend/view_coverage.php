<?php
$edit_data = $this->db->get_where('coverage', array('id' => $param2))->result_array();
?>
<div class="span10 col main-right">
    <div class="rrow scroll-y" id="mainYScroller">
        <div class="inner topRight">
            <ul class="breadcrumb">
                <li><a href="index9ed2.html?lang=en" class="glyphicons home"><i></i> BootAdmin</a></li>

                <li class="divider"></li>
                <li>Coverage</li>
            </ul>
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
                                    <strong>Coverage Name</strong>

                                    <p class="muted"></p>
                                </div>
                                <div class="span9">
                                    <label for="inputEmail">Title</label>
                                    <input type="text" id="" name="title" class="span6"
                                           value="<?php echo $edit_data[0]['title']; ?>" readonly
                                           placeholder="Enter title ..."/>

                                    <div class="separator"></div>
                                </div>
                            </div>


                            <hr class="separator bottom"/>
                            <div class="row-fluid">
                                <div class="span3">
                                    <strong>Address</strong>

                                    <p class="muted"></p>
                                </div>
                                <div class="span9">
                                    <label for="inputEmail">Address title</label>
                                    <input type="text" readonly
                                           value="<?php $address = $this->crud_model->get_addrs_name_from_addrs_id($edit_data[0]['address_id']);
                                           echo $address[0]['title'];

                                           ?>">

                                    <div class="separator"></div>
                                </div>
                            </div>


                            <hr class="separator bottom"/>
                            <div class="row-fluid">
                                <div class="span3">
                                    <strong>Coordinates</strong>

                                    <p class="muted"></p>
                                </div>
                                <div class="span9">
                                    <label for="inputEmail">Coordinates</label>
                                    <input type="text" name="coordinates" id="mustHaveId"
                                           value="<?php echo $edit_data[0]['coordinates']; ?>" readonly
                                           class="wysihtml5 span12"/>
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