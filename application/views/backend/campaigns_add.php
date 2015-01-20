<div class="span10 col main-right">
    <div class="rrow scroll-y" id="mainYScroller">
        <div class="inner topRight">
            <ul class="breadcrumb">
                <li><a href="index9ed2.html?lang=en" class="glyphicons home"><i></i> BootAdmin</a></li>
                <li class="divider"></li>
                <li>Online Shop</li>
                <li class="divider"></li>
                <li>Add product</li>
            </ul>
            <div class="separator"></div>
            <?php echo form_open('admin/campaigns_information/create', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
            <div class="heading-buttons">
                <h2 class="glyphicons cart_in"><i></i> Add Campaigns</h2>

                <div class="buttons pull-right">
                    <i class="btn-icon glyphicons ok_2"></i><input type="submit"
                                                                   class="btn btn-primary btn-icon glyphicons ok_2"
                                                                   value="Save">
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
                                    <strong>Campaigns title</strong>

                                    <p class="muted"></p>
                                </div>
                                <div class="span9">
                                    <label for="inputEmail">Title</label>
                                    <input type="text" id="" name="title" class="span6" value=""
                                           placeholder="Enter title ..."/>

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
						<textarea name="short_description" class="span12" rows="5">
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
                                    <textarea id="mustHaveId" name="detail" class="wysihtml5 span12"
                                              rows="5"></textarea>
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
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img
                                                    src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"/>
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail"
                                                 style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-file"><span
                                                        class="fileupload-new">Select image</span><span
                                                        class="fileupload-exists">Change</span><input type="file"
                                                                                                      name="userfile"/></span>

                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
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
                                    <input type="text" name="weblink" id="mustHaveId" class="wysihtml5 span12"/>
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
                                    <input type="text" id="mustHaveId" class="wysihtml5 span12"/>
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
                                    <input type="text" data-format="hh:mm:ss" name="time_from"
                                           class="wysihtml5 span6 datetimepicker_mask"/>
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
                                    <input type="text" data-format="hh:mm:ss" name="time_to"
                                           class="wysihtml5 span6 datetimepicker_mask"/>

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
                                                                   value="Save">
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