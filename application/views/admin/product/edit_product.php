<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php if(!empty($edit_product)){ foreach($edit_product as $edt_prd){} }else{ echo ''; } ?>
 		<title>Edit <?php echo str_replace('-', ' ', $edt_prd->title); ?> || Admin AAMS</title>
	</head>

  <body>
          <!-- Main Content -->
  		<div class="page-wrapper">
              <div class="container-fluid">
  				<!-- Title -->
  				<div class="row heading-bg  bg-pink">
  					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
  					  <h5 class="txt-light">Upload Product Item</h5>
  					</div>
  					<!-- Breadcrumb -->
  					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
  					  <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                <li><a href="#"><span>Product</span></a></li>
                <li><a href="<?php echo site_url('admin/product/view_product')?>">View Product</a></li>
                <li class="active"><span><?php echo str_replace('-', ' ', $edt_prd->title); ?></span></li>
  					  </ol>
  					</div>
  					<!-- /Breadcrumb -->
  				</div>
  				<!-- /Title -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="<?php echo base_url('admin/product/view_product/edit_product/'.$edt_prd->id); ?>" method="POST" enctype="multipart/form-data" name="formSubmit" onsubmit="return CheckLength()" role="form">
												<h6 class="txt-dark capitalize-font"><i class="icon-list mr-10"></i>about product</h6>
												<hr>
                        <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Product Title</label>
															<input type="text" id="title" name="title" id="firstName" class="form-control" placeholder="Rounded Chair" value="<?php echo str_replace('-', ' ', $edt_prd->title); ?>">
                              <span class="text-danger"><?php echo form_error('title'); ?></span>
                            </div>
													</div>
													<!--/span-->

												<!-- Row -->
												</div>

												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Product Price</label>
															<div class="input-group">
																<div class="input-group-addon"><i>&#8358;</i></div>
																<input type="text" name="price" class="form-control" id="exampleInputuname" placeholder="1000" value="<?php echo $edt_prd->price; ?>">
                                <span class="text-danger"><?php echo form_error('price'); ?></span>
															</div>
														</div>
													</div>
													<!--/span-->

													<!--/row-->
													<div class="row">
													<!--/span-->
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="icon-speech mr-10"></i>Product Description</h6>
												<hr>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea name="description" id="description" placeholder="Describe Your Product Item" class="form-control" rows="4" onKeyUp="textCounter(this,'count_display',30);"  onBlur="textCounter(this,'count_display',30);">
                                <?php echo $edt_prd->description; ?>
                              </textarea>
															Number of Characters Left: <span id="count_display">30</span>
															<span id="Message" style="color: #ff0000"></span>
                              <span class="text-danger"><?php echo form_error('description'); ?></span>
														</div>
													</div>
												</div>
												<!--/row-->
													<!--/span-->
												</div>
												<div class="seprator-block"></div>

												<h6 class="txt-dark capitalize-font"><i class="icon-picture mr-10"></i>Upload Product Images</h6>
												<hr>
												<div class="row">
													<div class="col-lg-12">
                            <input type="file" name="userCover[]" required="" class="filestyle" data-buttonname="btn-primary">
														</div>
													</div>
												</div>
												<div class="seprator-block"></div>
												<hr>

												<div class="form-actions">
													<button type="submit" name="upload" class="btn btn-success btn-icon left-icon mr-10">
                            <i class="fa fa-check"></i>
                            <span>Upload</span>
                          </button>
												</div>
											</form>
                      <?php echo $this->session->flashdata('msgError'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

				</div>

			</div>
			<!-- /Main Content -->

	</body>
</html>
