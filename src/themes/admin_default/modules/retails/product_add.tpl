<!-- BEGIN: main -->
<!-- BEGIN: error -->
<div class="alert alert-warning">{ERROR}</div>
<!-- END: error -->
<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal form_product_add" method = "post"
        action="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}">
			<input type="hidden" name="id" value="{ROW.id}" />
			<div class="col-md-19 col-sm-20">
				<div class="table-responsive">					
					<div class="panel-body">
					
						<div>
							<input type="hidden" name="id" value="{ROW.id}" />
							<div class="fs_20 mb-4" style="margin-bottom:30px">{LANG.info_product}</div>
							<div class="col-md-24 col-sm-20">
								
								<div class="row">
									
									<div class="form-group row ">
										<label for="" class="col-md-6 col-form-label">{LANG.name_product}<span class="red">*</span></label>
										<div class="col-md-16">
											<input type="text" class="form-control mb-2 border" style="line-height:2.5" name="name_product" id="keywords_search1" onchange="keywordsSearch1()" value="{ROW.name_product}" onchange="nv_get_alias('id_alias')" required="required" oninvalid="setCustomValidity(nv_required)" oninput="setCustomValidity('')">
										</div>
										
										
									</div>
									<div class="form-group row">
										
										<label for="" class="col-md-6 col-form-label">{LANG.barcode}<span class="red">*</span></label>
										
										<div class="input-group  col-md-16 border rounded-lg mb-2">
											<input {readonly} class="form-control border-0" style="padding: 1.26rem 0.75rem;" type="text" name="barcode" value="{ROW.barcode}" oninvalid="setCustomValidity(nv_required)" oninput="setCustomValidity('')" />
											<span class="input-group-addon {pointer}" id="{random_num}" style="padding: 1px 10px;">
												<div class="input-group-prepend  ">
													<span class="btn secondary_text input-group-addon {pointer}" id="{random_num}"><i class="fa fa-random" ></i></span>
												</div>
											</div>
											
											
											
										</div>
										
										<div class="form-group row">
											
											<label for="" class="col-md-6 col-form-label">{LANG.categories_id}<span class="red">*</span></label>
											
											<div class="col-md-7">
												<div class="input-group mb-2 border rounded-lg ">
													<select class="form-control categories_id select2" name="categories_id">
														<option value="0">-- Ch???n danh m???c --</option>
														
														<!-- BEGIN: parent_loop -->
														<option value="{pcatid_i}" {pselect}>
															{ptitle_i}
														</option>
														<!-- END: parent_loop -->
													</select>
												</div>
											</div>
											
											
										</div>
										
										<div class="form-group row">
											
											<label for="" class="col-md-6 col-form-label">{LANG.select_brand}<span class="red">*</span></label>
											
											<div class="col-md-6">
												<div class="input-group mb-2 border rounded-lg ">
													<select required="" class="form-control border-0" name="brand" id="brand">
														<!-- BEGIN: brand -->
														<option value="{STATUS.id}" {STATUS.selected}>
															{STATUS.title}
														</option>
														<!-- END: brand -->
													</select>
													
												</div>
											</div>
											
											<label for="" class="col-md-6 col-form-label text-right">{LANG.select_origin}<span class="text_red">*</span></label>
											<div class="col-md-4 " id="box_origin">
												
												<div class="input-group mb-2 border rounded-lg ">
													<select required="" class="form-control border-0" name="origin" id="origin">
														<!-- BEGIN: origin -->
														<option value="{STATUS.id}" {STATUS.selected}>
															{STATUS.title}
														</option>
														<!-- END: origin -->
													</select>
												</div>
												
												
												
											</div>
											
											
											
										</div>
										<div class="form-group row">
											<label for="" class="col-md-6 col-form-label">{LANG.weight_product}<span class="text_red">*</span></label>
											<div class="col-md-7">
												<input class="form-control border" style="padding: 1.2rem .75rem;" type="number" min="0" onkeypress="return isNumberKey(event)" step="0.01" name="weight_product" value="{ROW.weight_product}" required="required" oninvalid="setCustomValidity('Vui l??ng nh???p s???')" oninput="setCustomValidity('')">
											</div>
											<div class="col-md-1 d-flex align-items-center">(g)</div>
										</div>
										
										<div class="form-group row">
											<label for="" class="col-md-6 col-form-label">K??ch th?????c s???n ph???m</label>
											<div class="col-md-5">
												<div class="input-group  border rounded-lg mb-2">
													<input class="form-control bg-none border-0 " type="number" min="0" onkeypress="return isNumberKey(event)" step="0.01" name="length_product" value="{ROW.length_product}"  oninput="setCustomValidity('')">
													<div class="input-group-prepend  ">
													<button  type="button" class="btn secondary_text " disabled>D??i</i></button>
												</div>
											</div>
										</div>
										<div class="col-md-5">
											<div class="input-group  border rounded-lg mb-2">
												<input  class="form-control bg-none border-0 " type="number" min="0" onkeypress="return isNumberKey(event)" step="0.01" name="width_product" value="{ROW.width_product}"
												oninput="setCustomValidity('')">
												<div class="input-group-prepend  ">
												<button  type="button" class="btn secondary_text " disabled>R???ng</i></button>
											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="input-group  border rounded-lg mb-2">
											<input class="form-control bg-none border-0 " type="number" min="0" onkeypress="return isNumberKey(event)" step="0.01" name="height_product" value="{ROW.height_product}"
											oninput="setCustomValidity('')">
											<div class="input-group-prepend  ">
											<button  type="button" class="btn secondary_text " disabled>Cao</i></button>
										</div>
									</div>
								</div>
								<div class="col-md-1 d-flex align-items-center">(Cm)</div>
								
								
								<div class="form-group row">
									<label for="" class="col-md-5 col-form-label">C???a h??ng t??? v???n chuy???n</label>
									<div class="col-md-3">
										<div>
											<input style="margin-top: 10px;" type="checkbox" name="self_transport" value="1" {self_transport_checked} />
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="" class="col-md-6 col-form-label">Mi???n ph?? v???n chuy???n cho Kh??ch h??ng (C???a h??ng s??? ch???u ph?? ship n??y)</label>
									<div class="col-3">
										<div>
											<input style="margin-top: 30px;" type="checkbox" name="free_ship" value="1" {free_ship_checked} />
										</div>
									</div>
								</div>
								
								<div class="form-group row price_product" {disabled_price}>
									<label for="" class="col-md-5 col-form-label">Gi?? s???n ph???m<span class="text_red">*</span></label>
									
									<div class="col-md-6">
										<div class="input-group  border rounded-lg mb-2">
											<input class="form-control bg-none border-0 " type="text" name="price" value="{ROW.price}" onkeyup="this.value=FormatNumber(this.value);" oninput="setCustomValidity('')">
											<div class="input-group-prepend  ">
												<button type="button" class="btn secondary_text " disabled="">Gi?? b??n</button>
											</div>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="input-group  border rounded-lg mb-2">
											<input class="form-control bg-none border-0 " type="text" name="price_special" value="{ROW.price_special}" onkeyup="this.value=FormatNumber(this.value);" oninput="setCustomValidity('')">
											<div class="input-group-prepend  ">
												<button type="button" class="btn secondary_text " disabled="">Gi?? ni??m y???t</button>
											</div>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="input-group  border rounded-lg mb-2">
											<input class="form-control bg-none border-0 " type="text" name="warehouse" value="{ROW.warehouse}" onkeyup="this.value=FormatNumber(this.value);" oninput="setCustomValidity('')">
											<div class="input-group-prepend  ">
												<button type="button" class="btn secondary_text " disabled="">SL t???n kho</button>
											</div>
										</div>
									</div>
									
								</div>
								<div class="text-center mb-2 {classify_check3}"id="classify_add">
									<a class="btn_ecng add_classify">Th??m ph??n lo???i</a>
								</div>
								
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover full">
										<colgroup>
											<col class="w200" />
											<col />
										</colgroup>
										<tbody>
											<tr class="content_classify_product {classify_class}" id="classify_product">
												<td colspan="3" style="background: #e1a208;color: #fff;text-transform: uppercase;">
													<strong>
														Danh s??ch ph??n lo???i h??ng
													</strong>
												</td>
											</tr>
											<tr class="content_classify_product {classify_class}" id="classify_product2">
												<td colspan="3" >
													<div class="table-responsive result_detail_classify">
														<table class="table table-striped table-bordered table-hover full">
															<thead>
																<tr id="classify_product2_list">
																	<!-- BEGIN: classify_title_table -->
																	<th>{classify.name_classify}</th>
																	<!-- END: classify_title_table -->
																	<th>Gi?? b??n (b???t bu???c)</th>
																	<th>Gi?? ni??m y???t</th>
																	<th>SL T???n kho</th>
																	<th>Tr???ng th??i</th>
																</tr>
															</thead>
															
															<tbody id="data_classify_product2_list">
																
																<!-- BEGIN: classify_table_one -->
																<tr data_classify_price="{table_classify.id}" id="data_classify_product2_list_{table_classify.id}">
																	
																	<td class="vertical_center" id="data_classify_product2_list_name_{table_classify.id}_id1">{table_classify.name}				
																		<input hidden="" name="product[{table_classify.id}][id1]" value="{table_classify.id}" />
																		<td>
																			<input
																			class="form-control"
																			type="text"
																			name="product[{table_classify.id}][price]"
																			placeholder="Gi?? b??n"
																			required="required"
																			value="{table_classify1.price}"
																			oninvalid="setCustomValidity('Vui l??ng nh???p gi?? s???n ph???m')"
																			oninput="setCustomValidity('')"
																			onkeyup="this.value=FormatNumber(this.value);"
																			/>
																		</td>
																		<td>
																			<input
																			class="form-control"
																			type="text"
																			name="product[{table_classify.id}][price_special]"
																			placeholder="Gi?? ni??m y???t"
																			value="{table_classify1.price_special}"
																			oninvalid="setCustomValidity('Vui l??ng nh???p gi?? s???n ph???m')"
																			oninput="setCustomValidity('')"
																			onkeyup="this.value=FormatNumber(this.value);"
																			/>
																		</td>
																		<td><input class="form-control 112344" required="required" type="text" name="product[{table_classify.id}][sl_tonkho]" 
																			value="{table_classify1.sl_tonkho}"
																		placeholder="SL T???n kho" onkeyup="this.value=FormatNumber(this.value);" /></td>
																		
																		<td class="text-center">
																			<input {table_classify1.checked} value="1" type="checkbox" name="product[{table_classify.id}][status]" />	
																		</td>
																		
																	</tr>
																	<!-- END: classify_table_one -->
																	
																	<!-- BEGIN: classify_table -->
																	<tr data_classify_price="{table_classify.id}_{table_classify1.id}" id="data_classify_product2_list_{table_classify.id}_{table_classify1.id}">
																		<!-- BEGIN: loop_classify -->
																		<td class="vertical_center" {rowspan} id="data_classify_product2_list_name_{index0}_{table_classify.id}_id1">{table_classify.name}</td>
																		<!-- END: loop_classify -->
																		<td id="data_classify_product2_list_name_{table_classify.id}_{table_classify1.id}_id2">{table_classify1.name}
																			<input hidden="" name="product[{table_classify.id}_{table_classify1.id}][id1]" value="{table_classify.id}" />
																		<input hidden="" name="product[{table_classify.id}_{table_classify1.id}][id2]" value="{table_classify1.id}" /></td>
																		<td>
																			<input
																			class="form-control"
																			type="text"
																			name="product[{table_classify.id}_{table_classify1.id}][price]"
																			placeholder="Gi?? b??n"
																			required="required"
																			value="{table_classify1.price}"
																			oninvalid="setCustomValidity('Vui l??ng nh???p gi?? s???n ph???m')"
																			oninput="setCustomValidity('')"
																			onkeyup="this.value=FormatNumber(this.value);"
																			/>
																		</td>
																		<td>
																			<input
																			class="form-control"
																			type="text"
																			name="product[{table_classify.id}_{table_classify1.id}][price_special]"
																			placeholder="Gi?? ni??m y???t"
																			value="{table_classify1.price_special}"
																			oninvalid="setCustomValidity('Vui l??ng nh???p gi?? s???n ph???m')"
																			oninput="setCustomValidity('')"
																			onkeyup="this.value=FormatNumber(this.value);"
																			/>
																		</td>
																		<td><input class="form-control" required="required" type="text" name="product[{table_classify.id}_{table_classify1.id}][sl_tonkho]" 
																			value="{table_classify1.sl_tonkho}"
																		placeholder="SL T???n kho" onkeyup="this.value=FormatNumber(this.value);" /></td>
																		
																		<td class="text-center">
																			<input {table_classify1.checked} value="1" type="checkbox" name="product[{table_classify.id}_{table_classify1.id}][status]" />	
																		</td>
																		
																	</tr>
																	<!-- END: classify_table -->
																	
																</tbody>
																
																
															</table>
														</div>
													</td>
												</tr>
												</br>
												<tr>
													<td colspan="3" style="background: #e1a208;color: #fff;text-transform: uppercase;">
														<strong>
															{LANG.illustration}
														</strong>
													</td>
												</tr>
												
												<tr>
													<td colspan="3">
														<div>
															<div class="panel-heading">
																Ch???n h??nh ???nh (t???i thi???u 1024 x 1024)
															</div> 
															<div class="panel-body">
																<div class="content_image_main">
																	<!-- BEGIN: data_image -->
																	<div id="item_image_main{stt}" stt_img="{stt}" class="item_image_main">
																		<label for="input_file_image{stt}">
																			<div class="item_image_main_span">
																				<!-- BEGIN: add -->
																				+
																				<!-- END: add -->
																				
																				<!-- BEGIN: loop -->
																				<span class="pip"><img class="imageThumb" src="{src_image}"/><input type="hidden" value="{homeimgfile}" name="array_image_pro[]" /></span>
																				
																				<!-- END: loop -->
																			</div>
																			<input multiple id="input_file_image{stt}" onchange="upload_image_main(event, {stt});" class="d-none" type="file" accept="image/*" name="array_image[]" style="display:none" disabled/>
																		</label>
																	</div>
																	<!-- END: data_image -->	
																</div>
															</div>
														</div>
													</td>
												</tr>
												
												<tr>
													<td colspan="3" style="background: #e1a208;color: #fff;text-transform: uppercase;">
														<strong>
															{LANG.bodytext} <span>(*)</span>
														</strong>
													</td>
												</tr>
												<tr>
													<td colspan="3">
														{ROW.bodytext}
													</td>
												</tr>
												
												
												<tr>
													<td colspan="3" style="background: #e1a208;color: #fff;text-transform: uppercase;">
														<strong>
															{LANG.sort_content}
														</strong>
													</td>
												</tr>
												<tr>
													<td colspan="3">
														{ROW.description}
													</td>
												</tr>
												
												
											</tbody>
											<tr>
												<td colspan="3" style="text-align: center">
													<input class="btn btn-primary" name="submit" type="submit" value="{LANG.save}" />
												</td>
											</tr>
										</table>
										
									</div>                 
									
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
		<div class="col-sm-4 col-md-5">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover full">
					
					<tbody>
						<tr>
							<td colspan="2" style="background: #e1a208;color: #fff;text-transform: uppercase;">
								<strong>
									S???n ph???m thu???c c??c block
								</strong>
							</td>
						</tr>
						<!-- BEGIN: block -->
                <tr>
                    <td colspan="2">
                        <input type="checkbox" {block.checked} id="block_{block.key}" name="block[{block.key}]"
                        value="{block.key}" />
                        <label for="block_{block.key}"> 
                            {block.title}
                        </label>
                    </td>
                </tr>
                <!-- END: block -->
						
						
					</tbody>
				</table>
				<div class="col-md-8 border" >
					<div style="display:flex">
						
						<input class="border-0 pr-4" onkeydown="return event.key != 'Enter'" onchange="keywordsSearch()" id="keywords_search" placeholder="Nh???p t??? kh??a t??m ki???m..." type="text">
					<span onclick="keywordsSearch()" id="keywords_button" style="cursor:pointer; top:0; right:0; padding:5px 10px; border-radius: 0px 2px 2px 0px;" class="position-absolute btn_ecng ml-3" >Th??m</span>
							
					</div>
					
					<div class="" id="keywords" style="position:absolute;width:200px">
						<!-- BEGIN: keyword -->
						<span class="mr-2 p-1 d-flex rounded d-block  float-left mt-1" style="background: #E6E6E6; cursor:pointer;margin-right:5px;float:left;margin-top:8px;border-radius:4px"><p class="search_text m-0 text-truncate" style="max-width:90px;white-space: nowrap;text-overflow: ellipsis;overflow:hidden;margin:0;padding:4px;">{keyword}</p><!-- BEGIN: delete --><a class="pl-1" onclick="$(this).parent().remove();" style="color: #0074a2;">??</a><!-- END: delete --><input type="hidden" name="keyword[]" value="{keyword}"></span>
						<!-- END: keyword -->
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
</div>
<script type="text/javascript">
	
	$('.select2').select2();
	
	var other_image = []
	
	<!-- BEGIN: edit_other_imagejs -->
	<!-- BEGIN: loop -->
	other_image.push({"id":{key}})
	<!-- END: loop -->
	<!-- END: edit_other_imagejs -->
	<!-- BEGIN: insert_groupjs -->
	var group_list = [{"id":1}];
	<!-- END: insert_groupjs -->
	<!-- BEGIN: edit_groupjs -->
	var group_list = [];
	<!-- BEGIN: loop -->
	group_list.push({"id":{key_list}})
	<!-- END: loop -->
	<!-- END: edit_groupjs -->
	$('.unit_currency_1').select2({})
	$('.store_id').select2({placeholder:'M???i b???n ch???n c???a h??ng'})
	$('.unit_id').select2({})
	$('.unit_weight').select2({})
	$('.unit_length').select2({})
	$('.unit_width').select2({})
	$('.unit_height').select2({})
	function add_otherimage(){
		var id_next
		if(other_image.length == 0){
			id_next=1
			}else{
			id_next=other_image[other_image.length-1]['id']+1;
		}
		$('#other_image_list').append('<tr id="other_image_tr_'+id_next+'"><td colspan="3"><div class="input-group col-md-24 col-sm-24"><input class="form-control" type="text" name="other_image[]" id="id_image_'+id_next+'"  /> <span class="input-group-btn">  <button class="btn btn-default selectfile_'+id_next+'" type="button"><em class="fa fa-folder-open-o fa-fix">&nbsp;</em></button><button type="button" class="btn btn_ecng" onclick="remove_other_image('+id_next+')">X??a</button></span></div></td></tr>')
		$(".selectfile_"+id_next).click(function() {
			var area = "id_image_"+id_next;
			var path = "{NV_UPLOADS_DIR}/{MODULE_UPLOAD}";
			var currentpath = "{currentpath}";
			var type = "image";
			nv_open_browse(script_name + "?" + nv_name_variable + "=upload&popup=1&area=" + area + "&path=" + path + "&type=" + type + "&currentpath=" + currentpath, "NVImg", 850, 420, "resizable=no,scrollbars=no,toolbar=no,location=no,status=no");
			return false;
		});
		other_image.push({"id":id_next})
	}
	
	function nv_get_alias(id) {
		var title = strip_tags($("[name='name_product']").val());
		if (title != '') {
			$.post(script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=product_add&nocache=' + new Date().getTime(), 'get_alias_title=' + encodeURIComponent(title), function(res) {
				$("#"+id).val(strip_tags(res));
			});
		}
		return false;
	}
	$('#random_num').click(function() {
		$(this).parent('.input-group').children('input').val('{raw_product_prefix}' + generateCardNo(9));
	});
	$(".selectfile").click(function() {
		var area = "id_image";
		var path = "{NV_UPLOADS_DIR}/{MODULE_UPLOAD}";
		var currentpath = "{currentpath}";
		var type = "image";
		nv_open_browse(script_name + "?" + nv_name_variable + "=upload&popup=1&area=" + area + "&path=" + path + "&type=" + type + "&currentpath=" + currentpath, "NVImg", 850, 420, "resizable=no,scrollbars=no,toolbar=no,location=no,status=no");
		return false;
	});
	<!-- BEGIN: no_edit -->
	$('#brand').select2();
	$('#origin').select2();
	<!-- END: no_edit -->
	
	$('select[name=categories_id]').change(function() {
		var categories_id = $(this).find('option:selected').val();
		if(categories_id!={ROW.categories_id}){
			$("#brand").empty()
			$("#origin").empty()
		}
		$('#box_origin').removeClass('hidden');
		$('#box_brand').removeClass('hidden');
		$('#brand').select2({
			placeholder:"Ch???n th????ng hi???u",
			ajax: {
				url: script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '={OP}&mod=brand&cat_id='+categories_id,
				dataType: 'json',
				delay: 250,
				data: function (params) {
					var query = {
						q: params.term
					}
					return query;
				},
				processResults: function (data) {
					return {
						results: data
					};
				},
				cache: true
			}
		}); 
		$('#origin').select2({
			placeholder:"Ch???n xu???t x???", 
			ajax: {
				url: script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '={OP}&mod=origin&cat_id='+categories_id,
				dataType: 'json',
				delay: 250,
				data: function (params) {
					var query = {
						q: params.term
					}
					return query;
				},
				processResults: function (data) {
					return {
						results: data
					};
				},
				cache: true
			}
		});
		
	})
	<!-- BEGIN: edit2 -->
	$('#brand').select2({
		placeholder:"Ch???n th????ng hi???u",
		ajax: {
			url: script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '={OP}&mod=brand&cat_id={ROW.categories_id}',
			dataType: 'json',
			delay: 250,
			data: function (params) {
				var query = {
					q: params.term
				}
				return query;
			},
			processResults: function (data) {
				return {
					results: data
				};
			},
			cache: true
		}
	});
	$("#brand").select2("trigger", "select", {
		data: { id: {ROW.brand}, text: '{ROW.brand_name}'}
	});
	$('#box_origin').removeClass('hidden');
	$('#box_brand').removeClass('hidden');
	$('#origin').select2({
		placeholder:"Ch???n xu???t x???", 
		ajax: {
			url: script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '={OP}&mod=origin&cat_id={ROW.categories_id}',
			dataType: 'json',
			delay: 250,
			data: function (params) {
				var query = {
					q: params.term
				}
				return query;
			},
			processResults: function (data) {
				return {
					results: data
				};
			},
			cache: true
		}
	});
	$("#origin").select2("trigger", "select", {
		data: { id: {ROW.origin}, text: '{ROW.origin_name}'}
	});
	<!-- END: edit2 -->
	$('.categories_id11111').select2({
		placeholder: "<span>M???i b???n ch???n chuy??n m???c s???n ph???m</span>",
		ajax: {
			url: script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable +
			'={OP}&mod=get_categories', 
			dataType: 'json',
			delay: 250,
			data: function(params) {
				var query = {
					q: params.term
				}
				return query; 
			},
			method: 'post',
			processResults: function(data) {
				return {
					results: data
				};
			},
			cache: true
		},
		templateResult: function (d) { 
			return $(d.text); 
		},
		templateSelection: function (d) {
			return $(d.text); 
		}
	})
	<!-- BEGIN: edit -->
	$(".categories_id").select2("trigger", "select", {
		data: { id: {ROW.categories_id}, text: '{ROW.categories_name}'}
	});
	<!-- END: edit -->
	<!-- BEGIN: no_edit_product -->
	var list_group = [];
	<!-- END: no_edit_product -->
	<!-- BEGIN: edit_productjs -->
	var list_group = [];
	<!-- BEGIN: classify -->
	list_group.push({id:{key_classify},product_id:{LOOP_classify.product_id},name:'{LOOP_classify.name_classify}',value:[]})
	<!-- BEGIN: classify_value -->
	list_group.forEach(element=>{
		if(element.id=={key_classify}){
			element.value.push({'id':{LOOP_classify_value.id},'name':'{LOOP_classify_value.name}'})
		}
	})
	<!-- END: classify_value -->
	<!-- END: classify -->
	<!-- END: edit_productjs -->
	<!-- BEGIN: edit_productjs_2 -->
	var list_group = [];
	<!-- BEGIN: classify -->
	list_group.push({id:{key_classify},product_id:'',name:'{LOOP_classify.name}',value:[]})
	<!-- BEGIN: classify_value -->
	list_group.forEach(element=>{
		if(element.id=={key_classify}){
			element.value.push({'id':{key_classify_value},'name':'{LOOP_classify_value}'})
		}
	})
	<!-- END: classify_value -->
	<!-- END: classify -->
	<!-- END: edit_productjs_2 -->
	function classify_product2_view(){
		$('#classify_product2_list').html('');
		list_group.forEach(element=>{
			$('#classify_product2_list').append('<th id=name_classify_product2_'+element.id+'">' +
			element.name +
			'</th>'
			)
		})
		$('#classify_product2_list').append('<th>Gi?? s???n ph???m (gi?? th?????ng)</th>')
		data_classify_product2_list_view();
	}
	function change_name_group(id,a){
		var data=$(a).val();
		list_group.forEach(element=>{
			if(element.id==id){
				element.name = data
			}
		})
		classify_product2_view();
	}
	function change_value_name_group(id,a,id_value){
		var data=$(a).val();
		list_group.forEach(element=>{
			if(element.id==id){
				element.value.forEach(element_value=>{
					if(element_value.id == id_value){
						element_value.name = data
					}
				})
			}
		})
		data_classify_product2_list_view(1)
	}
	function data_classify_product2_list_view(status){
		var data_array=[]
		var data_array1=[]
		var i = 1;
		
		list_group.forEach(element=>{
			if(i==1){
				data_array = element.value;
				}else{
				data_array1 = element.value;
			}
			i=i + 1;
		})
		var list_array=[]
		
		data_array.forEach(element=>{
			if(data_array1.length>0){
				data_array1.forEach(element1=>{
					list_array.push({"id2":element1.id,"id":element.id,"name1":element.name,"name2":element1.name})
				})
				}else{
				list_array.push({"id2":0,"id":element.id,"name1":element.name,"name2":""})
			}
		})
		
		if(status==1){
			list_array.forEach((element,index)=>{
				if(list_group.length==1){
					if (document.getElementById('data_classify_product2_list_'+element.id) === null){
						$('#data_classify_product2_list').append('<tr id="data_classify_product2_list_'+element.id+'">'+
						'<td id="data_classify_product2_list_name_'+element.id+'">'+
						element.name1 +
						'<input hidden name="product['+element.id+'][id1]" value="'+element.id+'" /> '+ 
						'</td>' +
						'<td>'+
						'<input class="form-control" name="product['+element.id+'][price]" placeholder="Gi?? s???n ph???m (gi?? th?????ng)" required="required"  oninvalid="setCustomValidity(\'Vui l??ng nh???p gi?? s???n ph???m\')"  oninput="setCustomValidity(\''+'\')" onkeyup="this.value=FormatNumber(this.value);" />'+ 
						'</td>' +
						'</tr>')
						}else{
						$('#data_classify_product2_list_name_'+element.id).html(element.name1 +
						'<input hidden name="product['+element.id+'][id1]" value="'+element.id+'" /> '
						)
					}
					}else{
					if (document.getElementById('data_classify_product2_list_'+element.id) === null){
						if (document.getElementById('data_classify_product2_list_'+element.id+'_'+element.id2) === null){
							if(element.name2!=""){
								$('#data_classify_product2_list').append('<tr id="data_classify_product2_list_'+element.id+'_'+element.id2+'">'+
								'<td id="data_classify_product2_list_name_'+element.id+'_'+element.id2+'_id1">'+
								element.name1 +
								'<input hidden name="product['+element.id+'_'+element.id2+'][id1]" value="'+element.id+'" /> '+ 
								'</td>' +
								'<td id="data_classify_product2_list_name_'+element.id+'_'+element.id2+'_id2">'+
								element.name2 +
								'<input hidden name="product['+element.id+'_'+element.id2+'][id2]" value="'+element.id2+'" /> '+ 
								'</td>' +
								'<td>'+
								'<input class="form-control" name="product['+element.id+'_'+element.id2+'][price]" placeholder="Gi?? s???n ph???m (gi?? th?????ng)"  required="required" oninvalid="setCustomValidity(\'Vui l??ng nh???p gi?? s???n ph???m\')"  oninput="setCustomValidity(\''+'\')"  onkeyup="this.value=FormatNumber(this.value);"  />'+ 
								'</td>' +
								'</tr>')	
							}
							}else{
							$('#data_classify_product2_list_name_'+element.id+'_'+element.id2+'_id1').html(element.name1 +
							'<input hidden name="product['+element.id+'_'+element.id2+'][id1]" value="'+element.id+'" /> '
							)
							$('#data_classify_product2_list_name_'+element.id+'_'+element.id2+'_id2').html(element.name2 +
							'<input hidden name="product['+element.id+'_'+element.id2+'][id2]" value="'+element.id2+'" /> '
							)
						}
						}else{
						$('#data_classify_product2_list_'+element.id).remove();
					}
				}
			})
			}else{
			list_array.forEach((element,index)=>{
				console.log(element);
				
				if(element.name1!=""){
					
					if(list_group.length==1){
						
						if (document.getElementById('data_classify_product2_list_'+element.id) === null){
							$('#data_classify_product2_list').append('<tr id="data_classify_product2_list_'+element.id+'">'+
							'<td id="data_classify_product2_list_name_'+element.id+'">'+
							element.name1 +
							'<input hidden name="product['+element.id+'][id1]" value="'+element.id+'" /> '+ 
							'</td>' +
							'<td>'+
							'<input class="form-control" name="product['+element.id+'][price]" placeholder="Gi?? s???n ph???m (gi?? th?????ng)" required="required"  oninvalid="setCustomValidity(\'Vui l??ng nh???p gi?? s???n ph???m\')"  oninput="setCustomValidity(\''+'\')" onkeyup="this.value=FormatNumber(this.value);" />'+ 
							'</td>' +
							'</tr>')
						}
						}else{
						if (document.getElementById('data_classify_product2_list_'+element.id) === null){
							if (document.getElementById('data_classify_product2_list_'+element.id+'_'+element.id2) === null){
								if(element.name2!=""){
									$('#data_classify_product2_list').append('<tr id="data_classify_product2_list_'+element.id+'_'+element.id2+'">'+
									'<td id="data_classify_product2_list_name_'+element.id+'_'+element.id2+'_id1">'+
									element.name1 +
									'<input hidden name="product['+element.id+'_'+element.id2+'][id1]" value="'+element.id+'" /> '+ 
									'</td>' +
									'<td id="data_classify_product2_list_name_'+element.id+'_'+element.id2+'_id2">'+
									element.name2 +
									'<input hidden name="product['+element.id+'_'+element.id2+'][id2]" value="'+element.id2+'" /> '+ 
									'</td>' +
									'<td>'+
									'<input class="form-control" name="product['+element.id+'_'+element.id2+'][price]" placeholder="Gi?? s???n ph???m (gi?? th?????ng)"  required="required" oninvalid="setCustomValidity(\'Vui l??ng nh???p gi?? s???n ph???m\')"  oninput="setCustomValidity(\''+'\')"  onkeyup="this.value=FormatNumber(this.value);"  />'+ 
									'</td>' +
									'</tr>')	
								}
							}
							}else{
							$('#data_classify_product2_list_'+element.id).remove();
						}
					}
				}
			})
		}
	}
	function add_value_name_group(id_group){
		list_group.forEach(element=>{
			if(element.id==id_group){
				var id_next=element.value[element.value.length-1]['id']+1
				$('#classify_list_group_'+id_group).append('<tr id="classify_list_group_value_'+id_group+'_'+id_next+'">'+
				'<td></td>'+
				'<td><input class="form-control" name="classify['+id_group+'][value]['+id_next+']" required="required" onclick="setCustomValidity(\'Vui l??ng nh???p ph??n lo???i\')"  oninput="setCustomValidity(\''+'\')"  onchange="change_value_name_group(\''+id_group+'\',this,'+id_next+')" value="" /></td>'+
				'<td>' +
				'<button class="form-control" type="button" onclick="remove_value_name_group(\''+id_group+'\','+id_next+')">X??a</button>'+
				'</td>'+
				'</tr>')
				element.value.push({id:id_next,name:''});
			}
		})
	}
	function remove_classify(id){
		$('#classifyfull_'+id).remove();
		let vitri=-1
		list_group.forEach((element,index)=>{
			if(element.id==id){
				vitri = index
			}
		})
		list_group.splice(vitri,1)
		if(list_group.length>0){
			if(list_group.length==1){
				$('#classify_add').removeClass('hidden');
			}
			classify_product2_view()
			$('#data_classify_product2_list').html('');
			data_classify_product2_list_view(0)
			}else{
			$('#classify').addClass('hidden');
			$('#classify_product').addClass('hidden');
			$('#classify_product2').addClass('hidden');
			$('#price_no1').removeClass('hidden');
			$('#price_no2').removeClass('hidden');
		}
	}
	function remove_value_name_group(id,id_value){
		$('#classify_list_group_value_'+id+'_'+id_value).remove();
		var data_array=[]
		var data_array1=[]
		var i=1;
		list_group.forEach(element=>{
			if(i==1){
				data_array = element.value;
				}else{
				data_array1 = element.value;
			}
			i=i + 1;
		})
		var list_array=[]
		data_array.forEach(element=>{
			if(data_array1.length>0){
				data_array1.forEach(element1=>{
					list_array.push({"id2":element1.id,"id":element.id,"name1":element.name,"name2":element1.name})
				})
				}else{
				list_array.push({"id2":0,"id":element.id,"name1":element.name,"name2":""})
			}
		})
		list_array.forEach(element=>{
			if(element.id2==id_value){
				$('#data_classify_product2_list_'+element.id+'_'+id_value).remove();
			}
		})
		let vitri=-1
		list_group.forEach(element=>{
			if(element.id==id){
				element.value.forEach((element_value,index)=>{
					if(element_value.id == id_value){
						vitri = index
						element.value.splice(vitri,1)
					}
				})
			}
		})
		data_classify_product2_list_view(0)
	}
	function change_status(a,id,id2){
		var status=Number($('#'+id).val());
		if(status==0){
			status=1
			}else{
			status=0
		}
		var status_input=document.getElementById(id)
		status_input.setAttribute('value',status)
		var status_input2=document.getElementById(id2)
		status_input2.setAttribute('value',status)
		if(status==1){
			document.getElementById(id).checked = true;
			}else{
			document.getElementById(id).checked = false;
		}
	}
	
	
	$('.unit_currency_1').select2({})
	$('.store_id').select2({placeholder:'M???i b???n ch???n c???a h??ng'})
	//$('.unit_id').select2({})
	$('.unit_weight').select2({})
	$('.unit_length').select2({})
	$('.unit_width').select2({})
	$('.unit_height').select2({})
	
	
	function nv_get_alias(id) {
		var title = strip_tags($("[name='name_product']").val());
		if (title != '') {
			$.post(nv_base_siteurl + 'index.php' + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=product_add&nocache=' + new Date().getTime(), 'get_alias_title=' + encodeURIComponent(title), function(res) {
				$("#"+id).val(strip_tags(res));
			});
		}
		return false;
	}
	$('#random_num').click(function() {
		$(this).parent('.input-group').children('input').val('{raw_product_prefix}' + generateCardNo(9));
	});
	$('#upload_image_product').change(function () {
		var name_file = $(this).val().slice(12)
		if(name_file!=''){
			$('#image').val('{currentpath}/'+name_file);
			}else{
			$('#image').val($(this).val());
		}
	}); 
	<!-- BEGIN: no_edit -->
	$('#brand').select2();
	$('#origin').select2();
	<!-- END: no_edit -->
	
	$('select[name=categories_id]').change(function() {
		var categories_id = $(this).find('option:selected').val();
		if(categories_id!={ROW.categories_id}){
			$("#brand").empty()
			$("#origin").empty()
		}
		$('#box_origin').removeClass('hidden');
		$('#box_brand').removeClass('hidden');
		$('#brand').select2({
			placeholder:"Ch???n th????ng hi???u",
			ajax: {
				url: nv_base_siteurl + 'index.php' + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '={OP}&mod=brand&cat_id='+categories_id,
				dataType: 'json',
				data: function (params) {
					var query = {
						q: params.term
					}
					return query;
				},
				processResults: function (data) {
					return {
						results: data
					};
				},
				cache: true
			}
		}); 
		$('#origin').select2({
			placeholder:"Ch???n xu???t x???", 
			ajax: {
				url: nv_base_siteurl + 'index.php' + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '={OP}&mod=origin&cat_id='+categories_id,
				dataType: 'json',
				delay: 250,
				data: function (params) {
					var query = {
						q: params.term
					}
					return query;
				},
				processResults: function (data) {
					return {
						results: data
					};
				},
				cache: true
			}
		});
		
	})
	<!-- BEGIN: edit2 -->
	$('#brand').select2({
		placeholder:"Ch???n th????ng hi???u",
		ajax: {
			url: nv_base_siteurl + 'index.php' + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '={OP}&mod=brand&cat_id={ROW.categories_id}',
			dataType: 'json',
			delay: 250,
			data: function (params) {
				var query = {
					q: params.term
				}
				return query;
			},
			processResults: function (data) {
				return {
					results: data
				};
			},
			cache: true
		}
	});
	$("#brand").select2("trigger", "select", {
		data: { id: {ROW.brand}, text: '{ROW.brand_name}'}
	});
	$('#box_origin').removeClass('hidden');
	$('#box_brand').removeClass('hidden');
	$('#origin').select2({
		placeholder:"Ch???n xu???t x???", 
		ajax: {
			url: nv_base_siteurl + 'index.php' + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '={OP}&mod=origin&cat_id={ROW.categories_id}',
			dataType: 'json',
			delay: 250,
			data: function (params) {
				var query = {
					q: params.term
				}
				return query;
			},
			processResults: function (data) {
				return {
					results: data
				};
			},
			cache: true
		}
	});
	$("#origin").select2("trigger", "select", {
		data: { id: {ROW.origin}, text: '{ROW.origin_name}'}
	});
	<!-- END: edit2 -->
	$('.categories_id').select2({})
	
	
	// k??ch th?????t h??nh ???nh chu???n
	var w_h = 800;
	
	// data m???u
	
	var data_json = '{data_price}';
	var data_obj = JSON.parse(data_json);
	
	
	$("#classify_product2").on("change", "input", function(){
		getdata_new();
	});
	
	
	function getdata_new()
	{
		data_obj = [];
		
		$('#data_classify_product2_list tr').each(function(index, value){
			
			var data_classify_price = $(this).attr('data_classify_price');
			
			var id1 = $('input[name="product['+ data_classify_price +'][id1]"]').val();
			
			var length_id2 = $('input[name="product['+ data_classify_price +'][id2]"]').length;
			
			if(length_id2)
			var id2 = $('input[name="product['+ data_classify_price +'][id2]"]').val();
			else
			var id2 = 0;
			
			
			var price = $('input[name="product['+ data_classify_price +'][price]"]').val();
			var price_special = $('input[name="product['+ data_classify_price +'][price_special]"]').val();
			var sl_tonkho = $('input[name="product['+ data_classify_price +'][sl_tonkho]"]').val();
			var status = 0;
			
			
			if ($('input[name="product['+ data_classify_price +'][status]"]').is(':checked')) 
			{
				status = 1;
			}
			
			var obj = {'id1' : id1, 'id2' : id2, 'price' : price, 'price_special' : price_special, 'sl_tonkho' : sl_tonkho, 'status' : status};
			
			data_obj.push(obj); 	
			
		});
	}
	
	function getdata(id1,id2)
	{
		var data_select = {'id1' : '', 'id2' : '', 'price' : '', 'price_special' : '', 'sl_tonkho' : '', 'status' : '1', 'checked' : ''};
		
		$.each(data_obj , function (index, element){ 
			
			if(element.id1 == id1 && element.id2 == id2)
			{
				data_select = element;
				return false;
			}
			
		}); 
		
		
		return data_select;
	}
	
	
	// x??? l?? h??nh ???nh
	
	function upload_image_main(e, id) {
		
		console.log('hhhhhhhhh');
		
		var ext = $('#input_file_image'+id).val().split('.').pop().toLowerCase();
		if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
			alert('Kh??ng ph???i file ???nh!');
			return;
		}
		
		var files = e.target.files;
		
		if(files.length > 7)
		{
			alert('S??? l?????ng h??nh ???nh kh??ng ???????c ph??p v?????t qu?? 7!');
			return false;
		}
		
		
		// x??a c???nh b??o upload h??nh ???nh tr?????c ???? c???nh b??o n???u c??
		$('.content_image_main .error_image_product').removeClass('error_image_product');
		
		
		return Promise.all([].map.call(files, function (file) {
			return new Promise(function (resolve, reject) {
				var reader = new FileReader();
				
				reader.onloadend = function () {
					
					var image = new Image();
                    image.src = reader.result;
                    image.onload = function () {
						var height = this.height;
						var width = this.width;
						var size = (file.size/1024);
						resolve({ url: reader.result, width : width, height : height, size : size});
						
					};
					
					
				};
				
				reader.readAsDataURL(file);
			});
			})).then(function (results) {
			
			var stt = id;
			
			$.each(results , function (index, result){
				
				if(result.width < w_h && result.height < w_h)
				{
					alert('K??ch th?????c t???i thi???u (t???i thi???u '+ w_h +' x '+ w_h +')');
					$('#input_file_image'+id).val('');
					return true;
				}
				
				if(result.width > 3000 || result.height > 3000)
				{
					alert('K??ch th?????c kh??ng v?????t qu?? 3000px');
					$('#input_file_image'+id).val('');
					return true;
				}
				
				if(result.size > 2048)
				{
					alert('Dung l?????ng kh??ng v?????t qu?? 2M');
					$('#input_file_image'+id).val('');
					return true;
				}
				
				id = stt;
				
				$("#item_image_main" + id + ' .item_image_main_span').html("<span class=\"pip\">" +
				"<img class=\"imageThumb\" src=\"" + result.url + "\"/>" +
				"<input type=\"hidden\" value="+ result.url +" name=\"array_image_pro[]\" />" +
				"</span>");
				
				stt = stt + 1;
				
				if(stt > 7)
				{
					stt = 1;
				}
				
				
			});
			return results;
		});
		
		
	}
	
	
	function remove_image(a)
	{
		event.preventDefault()
		
		$(a).parent().parent().parent().find('input[type=file]').val('');
		$(a).parent().parent().html('+');
		$(a).parent(".pip").remove();
	}
	
	function upload_image_group1(e,id_group,id)
	{
		var files = e.target.files,
        filesLength = files.length;
		for (var i = 0; i < filesLength; i++) {
			var f = files[i]
			var fileReader = new FileReader();
			fileReader.onload = (function(e) {
				
				var image = new Image();
				image.src = fileReader.result;
				image.onload = function () {
                    var height = this.height;
                    var width = this.width;
					
					if(height < w_h && width < w_h)
					{
						alert('K??ch th?????c t???i thi???u (t???i thi???u '+ w_h +' x '+ w_h +')');
						$('#input_image_'+id).val('');
						return false;
					}
					
					if(width > 3000 || height > 3000)
					{
						alert('K??ch th?????c kh??ng v?????t qu?? 3000px');
						$('#input_image_'+id).val('');
						return false;
					}
					
					var size = (f.size/1024);
					if(size > 2048)
					{
						alert('Dung l?????ng kh??ng v?????t qu?? 2M');
						$('#input_image_'+id).val('');
						return false;
					}
					
					var file = e.target;
					$("#item_group0_" + id + ' .item_image_group1').html("<span class=\"pip\">" +
					"<img class=\"imageThumb\" src=\"" + e.target.result + "\"/>" +
					"<input name=\"classify["+ id_group +"][image]["+ id +"]\" type=\"hidden\" value="+ e.target.result +" />"
					 +
					"</span>");
					
				};
				
				
			});
			fileReader.readAsDataURL(f);
		}
		
	}
	
	
	function add_image_group1(id_group,id_next)
	{ 
		
		var length_value = $('#classify_list_group_value_'+ id_group +'_' + id_next +' .name_detail_group_classify').length;
		var name_value = '';
		
		if(length_value > 0)
		{
			name_value = $('#classify_list_group_value_'+ id_group +'_' + id_next +' .name_detail_group_classify').val();
		}
		var item_html = '<div id="item_group0_'+ id_next +'" class="content_item_image_group1"><label title="Upload h??nh ???nh" for="input_image_'+ id_next +'"><div class="item_image_group1"><span>+</span></div><div class="capitalize name_item_group1"><span>'+ name_value +'</span></div><input onchange="upload_image_group1(event, '+ id_group +', '+ id_next +');" class="d-none upload_img_group1" id="input_image_'+ id_next +'" type="file" accept="image/*" name="image_group['+ id_next +'][]"/></label></div>';
		$('.content_image_group1').append(item_html);
	}
	
	
	
	// x??? l?? thu???c t??nh s???n ph???m
	
	// th??m thu???c t??nh
	
	
	
	// x??a nh??m ph??n lo???i
	
	function remove_classify(id)
	{
		$('#classify_list').find('#classifyfull_'+ id).remove();
		var length = $('#classify_list .phanloai').length;
		
		if(length == 0)
		{
			// ???n table nh???p gi??
			$('.content_classify_product').addClass('hidden');
		}
		
		if(length < 2)
		{
			$('#classify_add').removeClass('hidden');
		}
		
		build_view_table();
		
		field_input_price();
		
		// check group 1 h??nh ???nh
		check_group_image1();
	}
	
	
	function check_group_image1()
	{
		var group = $('#classify .phanloai').length;
		if(group == 1)
		{
			// check xem group image c?? t???n t???i kh??ng
			var group_image1 = $('#classify .phanloai .content_image_group1').length;
			if(group_image1 == 0)
			{
				// bild l???i group1 new
				var group_id = $('#classify .phanloai').attr('phanloai');
				div_html_image = '<div><div class="title_image_group1">H??nh ???nh thu???c t??nh (t???i thi???u '+ w_h +' x '+ w_h +')</div><div class="content_image_group1"></div></div>';
				$('#classify_list_group_'+ group_id).append(div_html_image);
				
				$('#classify .phanloai .stt_classify').each(function(){
					var id_value = $(this).attr('stt');					
					
					add_image_group1(group_id,id_value)
					//change_value_name_group(group_id,id_value);
					
				});
			}
		}
	}
	
	
	
	function change_name_group(group_id, a)
	{
		build_view_table();
	}
	
	
	// thay ?????i gi?? tr??? ph??n lo???i s???n ph???m
	
	function change_value_name_group(id,id_value){
		
		// th??m t??n thu???c t??nh v??o h??nh ???nh n???u ph??n lo???i s???n ph???m = 1
		var first_child = $('#classify_list').children('.phanloai').first().attr('phanloai');
		if(id == first_child)
		{
			var name_image = $('#classify_list_group_value_'+ id +'_' + id_value +' input[type=text]').val();
			$('#item_group0_'+ id_value +' .name_item_group1').html(name_image);
		}
		
		build_view_table();
		
	}
	
	
	function field_input_price()
	{
		// c?? thu???c t??nh n??n gi?? s???n ph???m s??? disabled ??i
		
		var id_group_new = $('#classify_list .phanloai').length;
		
		
		if(id_group_new > 0)
		{
			$('.price_product').hide();
		}
		else
		{
			$('.price_product').show();
		}
		
	}
	
	function build_view_table()
	{	
		// danh s??ch chi ti???t thu???c t??nh s???n ph???m
		
		var thead = '';
		var tbody = '';
		
		
		var list_array0 = [];
		var list_array1 = [];
		var i=1;
		
		// ????a c??c gi?? tr??? ph??n lo???i s???n ph???m v??o m???ng, t???o thead t??? t??n nh??m ph??n lo???i
		$('#classify_list .phanloai').each(function(){
			
			// thead
			var name_group_classify = $(this).find('.name_group_classify').val();
			thead += '<th>'+ name_group_classify +'</th>';
			
			
			// tbody
			//
			$(this).find('.name_detail_group_classify').each(function(){
				
				var id = $(this).attr('name_detail_group_classify');
				var name = $(this).val();
				
				if(i==1){
					list_array0.push({"id":id,"name":name});
					}else{
					list_array1.push({"id":id,"name":name});
				}
				
				
			});
			
			i=i + 1;
			
			
		});
		
		// xu???t html thead t??n nh??m ph??n lo???i
		var thead_html = '<thead><tr id="classify_product2_list">'+ thead;
		thead_html += '<th>Gi?? b??n (b???t bu???c)</th>';
		thead_html += '<th>Gi?? ni??m y???t</th>';
		thead_html += '<th>SL T???n kho</th>';
		thead_html += '<th>Tr???ng th??i</th>';
		
		//list_array0 = [1,2]
		//list_array1 = [1,2]
		
		// xu???t html tr???n c??c ph??n lo???i s???n ph???m v???i nhau
		
		var html_tr = '';
		
		$.each(list_array0, function(index0, value0){
			
			if (list_array1.length === 0) {
				
				// kh??ng c?? thu???c t??nh th??? 2
				var value_data = getdata(value0.id,0);
				
				if(value_data.status == 1)
				{
					value_data.checked = 'checked=checked';
				}
				
				if(value_data.id1 == '')
				{
					value_data.checked = 'checked=checked';
				}
				
				
				html_tr += '<tr data_classify_price="'+value0.id+'"     id="data_classify_product2_list_'+value0.id+'">'+
				'<td id="data_classify_product2_list_name_'+value0.id+'">'+
				value0.name +
				'<input hidden name="product['+value0.id+'][id1]" value="'+value0.id+'" /> '+ 
				'</td><td>'+
				'<input class="form-control" type="text" value="'+ value_data.price +'" name="product['+value0.id+'][price]" placeholder="Gi?? b??n" required="required" oninvalid="setCustomValidity(\'Vui l??ng nh???p gi?? s???n ph???m\')"  oninput="setCustomValidity(\''+'\')"  onkeyup="this.value=FormatNumber(this.value);"  />'+ 
				'</td>' +
				'<td>'+
				'<input class="form-control" type="text" value="'+ value_data.price_special +'" name="product['+value0.id+'][price_special]" placeholder="Gi?? ni??m y???t" oninvalid="setCustomValidity(\'Vui l??ng nh???p gi?? s???n ph???m\')"  oninput="setCustomValidity(\''+'\')"  onkeyup="this.value=FormatNumber(this.value);"  />'+ 
				'</td>' +
				'<td>'+
				'<input class="form-control" required="required" type="text" value="'+ value_data.sl_tonkho +'" name="product['+value0.id+'][sl_tonkho]" placeholder="SL T???n kho" onkeyup="this.value=FormatNumber(this.value);" />'+ 
				'</td>' +
				'<td>'+
				'<input value="1" '+ value_data.checked +' type="checkbox" name="product['+value0.id+'][status]">'+ 
				'</td>' +
				
				'</tr>';
				
			}
			else
			{
				// danh s??ch thu???c t??nh th??? 2 list_array1
				$.each(list_array1, function(index1, value1){
					
					var value_data = getdata(value0.id,value1.id);
					
					if(value_data.status == 1)
					{
						value_data.checked = 'checked=checked';
					}
					
					if(value_data.id1 == '' && value_data.id1 == '' )
					{
						value_data.checked = 'checked=checked';
					}
					
					
					var td_value1_name = '';
					if(index1 == 0)
					{
						td_value1_name = '<td class="vertical_center" rowspan="'+ list_array1.length +'" id="data_classify_product2_list_name_'+index0+'_'+value0.id+'_id1">'+
						value0.name +
						'</td>'
					}
					
					html_tr += '<tr data_classify_price="'+value0.id+'_'+value1.id+'" id="data_classify_product2_list_'+value0.id+'_'+value1.id+'">'+
					td_value1_name +
					'<td id="data_classify_product2_list_name_'+value0.id+'_'+value1.id+'_id2">'+
					value1.name +
					'<input hidden name="product['+value0.id+'_'+value1.id+'][id1]" value="'+value0.id+'" /> '+
					'<input hidden name="product['+value0.id+'_'+value1.id+'][id2]" value="'+value1.id+'" /> '+ 
					'</td>'+
					'<td>'+
					'<input class="form-control" type="text" value="'+ value_data.price +'" name="product['+value0.id+'_'+value1.id+'][price]" placeholder="Gi?? b??n"  required="required" oninvalid="setCustomValidity(\'Vui l??ng nh???p gi?? s???n ph???m\')"  oninput="setCustomValidity(\''+'\')"  onkeyup="this.value=FormatNumber(this.value);"  />'+ 
					'</td>' +
					'<td>'+
					'<input class="form-control" type="text" value="'+ value_data.price_special +'" name="product['+value0.id+'_'+value1.id+'][price_special]" placeholder="Gi?? ni??m y???t"  oninvalid="setCustomValidity(\'Vui l??ng nh???p gi?? s???n ph???m\')"  oninput="setCustomValidity(\''+'\')"  onkeyup="this.value=FormatNumber(this.value);"  />'+ 
					'</td>' +
					'<td>'+
					'<input class="form-control" required="required" type="text" value="'+ value_data.sl_tonkho +'" name="product['+value0.id+'_'+value1.id+'][sl_tonkho]" placeholder="SL T???n kho" onkeyup="this.value=FormatNumber(this.value);" />'+ 
					'</td>' +
					'<td>'+
					'<input value="1" '+ value_data.checked +' type="checkbox" name="product['+value0.id+'_'+value1.id+'][status]">'+ 
					'</td>' +
					
					'</tr>';
					
					
				});
				
			}
			
		});
		
		
		// html_tr
		var tbody_html = '<tbody id="data_classify_product2_list">'+ html_tr +'</tbody>';
		
		var table_html = '<table class="table table-striped table-bordered table-hover full">'+ thead_html + tbody_html +'</table>';
		
		$('.result_detail_classify').html(table_html);
		
		getdata_new();
		
	}
	
	
	// l???y s??? th??? t??? ph??n lo???i s???n ph???m
	function get_stt_classify_name(id_group)
	{
		//stt_classify
		var length_stt = $('#classify_list_group_'+ id_group + ' .stt_classify').length;
		
		var stt = 0;
		
		if(length_stt > 0)
		stt = $('#classify_list_group_'+ id_group + ' .stt_classify').last().attr('stt');
		
		return stt;
	}
	
	
	// l???y s??? th??? t??? nh??m group
	function get_stt_phanloai()
	{
		//stt_classify
		var stt = $('#classify_list .phanloai').last().attr('phanloai');
		if(!stt)
		stt = 0;
		
		return stt;
	}
	
	// th??m ph??n lo???i s???n ph???m
	
	function add_value_name_group(id_group)
	{
		
		var id_next = parseInt(get_stt_classify_name(id_group)) + 1;
		
		var first_child = $('#classify_list').children('.phanloai').first().attr('phanloai');
		
		if(first_child == id_group)
		{
			// nh??m ph??n lo???i 1 th?? add th??m h??nh ???nh v??o
			add_image_group1(id_group,id_next);
		}
		
		
		$('#classify_list_group_' + id_group + ' .col-md-8.offset-md-2').append('<div stt='+ id_next +' class="form-group mb-0 row stt_classify" id="classify_list_group_value_' + id_group + '_' + id_next + '">' +
		'<label for="" class="col-3 col-form-label"></label>' +
		'<div class="col-8">' +
		'<div class="input-group rounded-lg mb-2">' +
		'<input name_detail_group_classify="'+ id_next +'" type="text" class="form-control bg-none border name_detail_group_classify" placeholder="V?? d??? : ?????, v??ng, xanh,.." name="classify[' + id_group + '][value][' + id_next + ']" required="required" onclick="setCustomValidity(\'Vui l??ng nh???p ph??n lo???i\')"  oninput="setCustomValidity(\'' + '\')"  onchange="change_value_name_group(\'' + id_group + '\',' + id_next + ')" value="" /></td>' +
		'</div>' +
		'</div>' +
		'<div class="col-1"><button type="button" class="btn_ecng_outline" onclick="remove_value_name_group(' + id_group + ',' + id_next + ')">X??a</button></div>' +
		'</div>');
	}
	
	
	
	// x??a 1 ph??n lo???i s???n ph???m
	
	function remove_value_name_group(id, id_value)
	{
		
		$('#classify_list_group_value_'+id+'_'+id_value).remove();
		
		// remove image group 0 v??? tr?? id
		var first_child = $('#classify_list').children('.phanloai').first().attr('phanloai');
		
		
		if(id == first_child)
		{	
			$('#item_group0_'+id_value).remove();
		}
		
		build_view_table();
		
	}
	
	
	// k???t th??c x??? l?? thu???c t??nh s???n ph???m
	
	
	$('form.form_product_add input[type=submit]').click(function(event){
		//alert(123);
		event.preventDefault();
		
		var check = true;
		
		if($('input[name=name_product]').val() == '')
		{
			alert('T??n s???n ph???m ch??a nh???p!');
			$('input[name=name_product]').focus(); 
			return false;
		}
		
		if($('input[name=barcode]').val() == '')
		{
			alert('M?? v???ch ch??a nh???p!');
			$('input[name=barcode]').focus(); 
			return false;
		}
		
		if($('select[name=categories_id]').val() == 0)
		{
			alert('Chuy??n m???c s???n ph???m ch??a ch???n!');
			$(this).parent().addClass('error_select');
			$('select[name=categories_id]').focus(); 
			return false;
		}
		
		if($('select[name=brand]').val() <= 0)
		{
			alert('Th????ng hi???u ch??a ch???n!');
			$('select[name=brand]').focus(); 
			return false;
		}
		
		
		
		if($('select[name=origin]').val() <= 0)
		{
		alert('Xu???t x??? ch??a ch???n!');
		$('select[name=origin]').focus(); 
		return false;
		}
		
		if($('input[name=weight_product]').val() == '')
		{
			alert('Kh???i l?????ng s???n ph???m ch??a nh???p!');
			$('input[name=weight_product]').focus(); 
			return false;
		}
		
		// ki???m tra gi?? s???n ph???m khi kh??ng c?? thu???c t??nh s???n ph???m
		var classify = $('#classify_list .phanloai').length;
		if(classify == 0)
		{
			if($('input[name=price]').val() <= 0)
			{
				alert('Gi?? b??n ch??a nh???p!');
				$('input[name=price]').focus(); 
				return false;
			}
			
			
		}
		else
		{
			// t??n thu???c t??nh s???n ph???m
			$('#classify_list input[type=text]').each(function(){
				if( ($(this).val() == '') && ($(this).attr('required') == 'required') )
				{
					alert('T??n nh??m ph??n lo???i ch??a nh???p!');
					$(this).focus();
					check = false;
					return false;
					
				}
			})
			
			if(!check)
			{
				return false;
			}
			
			// gi??, gi?? ni??m y???t, t???n kho thu???c t??nh s???n ph???m
			var flag = false;
			$('.result_detail_classify input[type=text]').each(function(){
				if( ($(this).val() == '') && ($(this).attr('required') == 'required') )
				{
					alert('Thu???c t??nh s???n ph???m ch??a nh???p!');
					$(this).focus();
					check = false;
					return false;
					
				}
			})
			
			if(!check)
			{
				return false;
			}
			
		}
		
		
		// h??nh ???nh s???n ph???m
		var flag = false;
		$.map($('input[type=hidden][name="array_image_pro[]"]'), function(el) {
			if(el.value != '')
			{
				flag = true;
				return false;
			}
		});
		
		
		//{
		//	alert('Ch??a ch???n h??nh minh h???a s???n ph???m!');
		//$('.content_image_main .item_image_main').addClass('error_image_product');
		//	return false;
		//}
		
		
		var bodytext = CKEDITOR.instances['retails_bodytext'].getData();
		
		if(bodytext == '')
		{
			alert('M?? t??? s???n ph???m ch??a nh???p!');
			CKEDITOR.instances['retails_bodytext'].focus();
			return false;
		}
		else if(bodytext.length > 60000)
		{
			alert('M?? t??? s???n ph???m v?????t qu?? 60.000 k?? t???!');
			CKEDITOR.instances['retails_bodytext'].focus();
			return false;
		}
		
		
		var description = CKEDITOR.instances['retails_description'].getData();
		
		if(description.length > 20000)
		{
			alert('Th??ng s??? k??? thu???t v?????t qu?? 20.000 k?? t???!');
			CKEDITOR.instances['retails_bodytext'].focus();
			return false;
		}
		
		
		// g???i th??ng tin d??? li???u
		for (instance in CKEDITOR.instances) {
			CKEDITOR.instances[instance].updateElement();
		}
		
		
		if(!check)
		{
			return false;
		}
		
		
		$.ajax({               
			type: "POST",      
			dataType: 'json',  
			
			url: script_name + '?' + nv_name_variable + '=' + nv_module_name + '&' + nv_fc_variable + '=product_add&add=1',
			
			data: $('form.form_product_add').serialize(),
			beforeSend: function() {
				$('#notifi_screen').modal('show');
				//$('form input[type=submit]').prop('disabled', true);
			},	               
			complete: function() {
				
			},                 
			success: function(json) {
				
				//$('#notifi_screen').on('shown.bs.modal', function (e) {
				//$("#notifi_screen").modal('hide');})
				
				
				
				let myPromise = new Promise(function(myResolve, myReject) {
					// "Producing Code" (May take some time)
					
					$('form input[type=submit]').prop('disabled', false);
					myResolve(); // when successful
					myReject();  // when error
				});
				
				// "Consuming Code" (Must wait for a fulfilled Promise)
				myPromise.then(
				function(value) { 
					
					if(json['status'] == 'OK')
					{
						alert(json['mess']);
						window.location.href = '{list_product}';
					}
					else
					{
						alert(json['mess']);
					}
					
				}
				);
				
				
				console.log(json);
				
				
			},                 
			error: function(xhr, ajaxOptions, thrownError) {
				
				console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}                  
		});
		
		
	});
	
	
	//keywords_search
	var timesSubmitted = 0;
    var maxSubmits = 4;
	
	
	
	
	function keywordsSearch(){
		var keywords_search = document.querySelector('#keywords_search').value;
		var keywords_search1 = document.querySelector('#keywords_search1').value;
		keywords_search = loc_xoa_dau(keywords_search);
		if(keywords_search.length > 0 && keywords_search1.length > 0  && timesSubmitted < maxSubmits){
			timesSubmitted++;
			$('#keywords').append('<span class="rounded d-block  float-left mt-1" style="background: #E6E6E6; cursor:pointer;margin-right:5px;float:left;display:flex;margin-top:8px;border-radius:4px" ondblclick="$(this).remove();"><p class="search_text m-0 text-truncate" style="max-width:90px;padding:4px;white-space: nowrap;text-overflow: ellipsis;overflow:hidden;margin:0">'+keywords_search+  '</p><a class="pl-1" style="padding-right:4px;line-height:25px" onclick="remove_text(),$(this).parent().remove();" style="color: #0074a2;">&times;</a><input type="hidden" name="keyword[]" value="'+keywords_search+  '" /></span>');
			document.querySelector('#keywords_search').value='';
			$("#keywords_search").focus();
			
		}	
	}
	function keywordsSearch1(){
		var keywords_search1 = document.querySelector('input[name="name_product"]').value;
		keywords_search1 = loc_xoa_dau(keywords_search1);
		
		var div = '<span class="mr-2 text_search1 p-1 d-flex rounded d-block float-left mt-1" > <p class="text-truncate m-0" style="max-width:80px" id="keywords_1" >'+ keywords_search1 +'</p><input type="hidden" name="keyword[]" value="'+keywords_search1+  '" /></span>';
		$('#keywords').html(div);
		$('.text_search1').css("background","#E6E6E6");
	}
	
	function remove_text() {
        timesSubmitted--;
	};
	
	function loc_xoa_dau(str) {
		str = str.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/g, "a");
		str = str.replace(/??|??|???|???|???|??|???|???|???|???|???/g, "e");
		str = str.replace(/??|??|???|???|??/g, "i");
		str = str.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/g, "o");
		str = str.replace(/??|??|???|???|??|??|???|???|???|???|???/g, "u");
		str = str.replace(/???|??|???|???|???/g, "y");
		str = str.replace(/??/g, "d");
		str = str.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/g, "A");
		str = str.replace(/??|??|???|???|???|??|???|???|???|???|???/g, "E");
		str = str.replace(/??|??|???|???|??/g, "I");
		str = str.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/g, "O");
		str = str.replace(/??|??|???|???|??|??|???|???|???|???|???/g, "U");
		str = str.replace(/???|??|???|???|???/g, "Y");
		str = str.replace(/??/g, "D");
		
		return str;
	}
	
</script>

<!-- BEGIN: auto_get_alias -->
<script type="text/javascript">
	//<![CDATA[
	$("[name='name_product']").change(function() {
		nv_get_alias('id_alias');
	});
	//]]>
</script>
<!-- END: auto_get_alias -->

<!-- END: main -->
