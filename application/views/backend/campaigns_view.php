<?php
$edit_data = $this->db->get_where('campaigns', array('id' => $param2))->result_array();
?>
<div class="span10 col main-right">
    <div class="rrow scroll-y" id="mainYScroller">
        <div class="inner topRight">
            <ul class="breadcrumb">
                <li><a href="index9ed2.html?lang=en" class="glyphicons home"><i></i> BootAdmin</a></li>

                <li class="divider"></li>
                <li> Edit Campaigns</li>
            </ul>
            <div class="separator"></div>
            <?php foreach ($edit_data as $row): ?>
                <?php echo form_open('admin/update_compaign/' . $row['id'], array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>

                <div class="heading-buttons">
                    <h2 class="glyphicons cart_in"><i></i> View Campaigns</h2>

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

                            <!-- Description -->
                            <div class="tab-pane active" id="productDescriptionTab">
                                <div class="row-fluid">
                                    <div class="span3">
                                        <strong>Campaigns title</strong>

                                        <p class="muted"></p>
                                    </div>
                                    <div class="span9">
                                        <label for="inputEmail">Title</label>
                                        <input type="readonly" readonly id="" name="title" class="span6"
                                               value="<?php echo $row['title'] ?>" placeholder="Enter title ..."/>

                                        <div class="separator"></div>
                                    </div>
                                </div>
                                <hr class="separator bottom"/>
                                <div class="row-fluid">
                                    <div class="span3">
                                        <strong>Short Description</strong>

                                        <p class="muted"></p>
                                    </div>
                                    <div class="span9">
                                        <label for="inputEmail">Short Description</label>
						<textarea id="mustHaveId" readonly name="short_description" class="span12" rows="5">
						<?php echo $row['short_description'] ?>
						</textarea>
                                    </div>
                                </div>

                                <hr class="separator bottom"/>
                                <div class="row-fluid">
                                    <div class="span3">
                                        <strong>Description</strong>

                                        <p class="muted"></p>
                                    </div>
                                    <div class="span9">
                                        <label for="inputEmail">Description</label>
						<textarea id="mustHaveId" name="detail" readonly class="span12" rows="5">
						<?php echo $row['detail'] ?>
						</textarea>
                                    </div>
                                </div>

                                <hr class="separator bottom"/>
                                <div class="row-fluid">
                                    <div class="span3">
                                        <strong>Image</strong>

                                        <p class="muted"></p>
                                    </div>
                                    <div class="span9">
                                        <div class="widget-body list fluid">
                                            <h5>Image upload previews</h5>

                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail"
                                                     style="width: 200px; height: 150px;">
                                                    <img
                                                        src="<?php echo base_url('images/campaigns/' . $row['image_full']); ?>"/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <hr class="separator bottom"/>
                                <div class="row-fluid">
                                    <div class="span3">
                                        <strong>WebLink</strong>

                                        <p class="muted"></p>
                                    </div>
                                    <div class="span9">
                                        <label for="inputEmail">WebLink</label>
                                        <input type="text" readonly name="weblink" id="mustHaveId"
                                               value="<?php echo $row['weblink'] ?>" class="wysihtml5 span12"/>
                                    </div>
                                </div>


                                <hr class="separator bottom"/>
                                <div class="row-fluid">
                                    <div class="span3">
                                        <strong>Coverage</strong>

                                        <p class="muted"></p>
                                    </div>
                                    <div class="span9">
                                        <label for="inputEmail">Coverage</label>
                                        <input type="text" id="mustHaveId" readonly
                                               value="<?php $address = $this->crud_model->get_name_from_coverage_id($row['coverage_id']);
                                               echo $address[0]['title'];

                                               ?>" class="wysihtml5 span12"/>
                                    </div>
                                </div>

                                <hr class="separator bottom"/>
                                <div class="row-fluid">
                                    <div class="span3">
                                        <strong>Time From</strong>

                                        <p class="muted"></p>
                                    </div>
                                    <div class="span9">
                                        <label for="inputEmail">Time From</label>
                                        <input type="text" readonly value="<?php echo $row['time_from'] ?>"
                                               data-format="hh:mm:ss" name="time_from" class="wysihtml5 span6 "/>
                                    </div>
                                </div>


                                <hr class="separator bottom"/>
                                <div class="row-fluid">
                                    <div class="span3">
                                        <strong>Time To</strong>

                                        <p class="muted"></p>
                                    </div>
                                    <div class="span9">
                                        <label for="inputEmail">Time To</label>
                                        <input type="text" readonly value="<?php echo $row['time_to'] ?>"
                                               data-format="hh:mm:ss" name="time_to" class="wysihtml5 span6 "/>

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


            <?php endforeach; ?>
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