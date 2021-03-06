<?php

/**
 * @Project TMS HOLDINGS
 * @Author TMS HOLDINGS <contact@tms.vn>
 * @Copyright (C) 2021 TMS HOLDINGS. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Fri, 19 Feb 2021 09:11:34 GMT
 */

if (!defined('NV_IS_FILE_MODULES'))
    die('Stop!!!');

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_bank";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_penalize";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_punish_complain";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_punish";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_vnpay_refund";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_complain";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_complain_status";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_voucher";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_voucher";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_block";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_block_id";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_brand";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_categories";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_category_shop";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_category_shop_item";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_follow";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_inventory_product";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_logs_order";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_item";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_origin";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_product";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_product_classify";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_product_classify_value";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_product_classify_value_product";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_push_product";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_rate";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_seller_management";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_static_order";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_order";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_order_ghn";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_order_ghtk";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_vnpay";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_tabs";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_transporters";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_transporters_shop";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_unit";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_unit_currency";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_unit_length";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_unit_weight";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_warehouse";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_warehouse_import";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_warehouse_import_item";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_wishlist";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_vnpay";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_vnpos";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_vnpos_detail";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_ghn";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_ghn_detail";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_ghn";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_error_ghn";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_vnpos";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_not_received";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_seller_delivery_failed";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_admin_ecng";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_voucher_wallet";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_warehouse_transport";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_ghtk";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_ghtk_detail";

$sql_create_module = $sql_drop_module;

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_ghtk_detail(
  id int(11) NOT NULL AUTO_INCREMENT,
  order_id int(11) DEFAULT '0',
  label varchar(100) DEFAULT '0' NOT NULL COMMENT ' M?? ????n h??ng',
  status_id tinyint(2) COMMENT 'Tr???ng th??i ????n',
  reason_code varchar(100) DEFAULT '0' COMMENT 'M?? l?? do c???p nh???t',
  reason varchar(100) DEFAULT '0' COMMENT 'L?? do chi ti???t c???p nh???t',
  time_add int(11) COMMENT 'Ng??y t???o',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_ghtk(
  id int(11) NOT NULL AUTO_INCREMENT,
  order_id int(11) DEFAULT '0',
  label varchar(100) DEFAULT '0' NOT NULL COMMENT ' M?? ????n h??ng',
  fee double DEFAULT '0' NOT NULL COMMENT 'Ph?? d???ch v??? cu???i c??ng',
  insurance_fee double DEFAULT '0' COMMENT 'Ph?? b???o hi???m',
  status_id tinyint(2) COMMENT 'Tr???ng th??i ????n',
  weight double DEFAULT '0' COMMENT 'kh???i l?????ng ????n h??ng t??nh theo kilogram',
  fee_update double DEFAULT '0' COMMENT 'Ph?? d???ch v??? ???????c GHTK c???p nh???t',
  pick_money double DEFAULT '0' COMMENT 'Ph?? thu h???',
  time_add int(11) COMMENT 'Ng??y t???o',
  time_edit int(11) DEFAULT '0' COMMENT 'Ng??y s???a',
  doisoat tinyint(2) DEFAULT '0' COMMENT '?????i so??t 0 ch??a ?????i so??t, 1 ???? ?????i so??t	',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_warehouse_transport(
  id mediumint(8) NOT NULL AUTO_INCREMENT,
  warehouse_id int(11) DEFAULT '0' COMMENT 'Id kho',
  transportid_ecng varchar(50) COMMENT 'Id ????n v??? v???n chuy???n trong b???ng transport',
  storeid_transport int(11) COMMENT 'id c???a h??ng c???a c??c ????n v??? v???n chuy???n',
  time_add int(11),
  status tinyint(1)
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_voucher_wallet(
  id int(11) NOT NULL AUTO_INCREMENT,
  voucherid int(11) COMMENT 'id voucher',
  userid mediumint(8) COMMENT 'userid kh??ch',
  time_add int(11),
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_admin_ecng(
  id int(11) NOT NULL AUTO_INCREMENT,
  userid mediumint(8) COMMENT 'Admin x??? l??',
  content text  COMMENT 'Th??ng tin x??? l??' ,
  time_add int(11),
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_seller_delivery_failed(
  id int(11) NOT NULL AUTO_INCREMENT,
  userid mediumint(8) COMMENT 'Seller kh??ng g???i ???????c h??ng',
  order_id int(11)  COMMENT '????n h??ng Seller kh??ng g???i ???????c h??ng' ,
  reason varchar(255) COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'L?? do khi???u n???i',
  time_add int(11) ,
  status mediumint(8),
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_not_received(
  id int(11) NOT NULL AUTO_INCREMENT,
  userid mediumint(8) COMMENT 'Kh??ch ch??a nh???n ???????c h??ng',
  order_id int(11)  COMMENT '????n h??ng kh??ch ch??a nh???n ???????c' ,
  time_add int(11) ,
  status mediumint(8),
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_error_ghn(
  id int(11) NOT NULL AUTO_INCREMENT,
  code_status_ghn varchar(50)  DEFAULT '0' COMMENT 'M?? tr???ng th??i',
  desc_status_ghn varchar(100)  DEFAULT '0' COMMENT 'M?? t??? tr???ng th??i' ,
  weight int(10)  DEFAULT '0' COMMENT 'S???p x???p',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_ghn(
  id int(11) NOT NULL AUTO_INCREMENT,
  name_status_ghn varchar(50)  DEFAULT '0' COMMENT 'T??n tr???ng th??i',
  desc_status_ghn varchar(100)  DEFAULT '0' COMMENT 'M?? t??? tr???ng th??i' ,
  weight int(10)  DEFAULT '0' COMMENT 'S???p x???p',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_ghn_detail(
  id int(11) NOT NULL AUTO_INCREMENT,
  order_id int(11) DEFAULT '0' ,
  order_code_ghn varchar(100) DEFAULT '0'  COMMENT ' M?? ????n h??ng',
  status varchar(100) DEFAULT '0' COMMENT ' Status kh??a ngo???i status b???ng ghn',
  warehouse varchar(200) NULL COMMENT 'Th??ng tin kho',
  type varchar(100) NULL COMMENT 'Tr???ng th??i ????n h??ng',
  time_add int(11) COMMENT 'Ng??y t???o',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_ghn(
  id int(11) NOT NULL AUTO_INCREMENT,
  order_id int(11) DEFAULT '0',
  code int(11) NOT NULL DEFAULT '0' COMMENT 'M?? code Success ho???c error',
  order_code varchar(100) DEFAULT '0' NOT NULL COMMENT ' M?? ????n h??ng',
  main_service double DEFAULT '0' NOT NULL COMMENT 'C?????c ch??nh',
  insurance double DEFAULT '0' COMMENT 'Ph?? khai gi??',
  total_fee double DEFAULT '0' COMMENT 'T???ng ship',
  cod double DEFAULT '0' COMMENT 'ship COD',
  coupon double DEFAULT '0' COMMENT 'Gi???m gi?? ship',
  convertedweight double DEFAULT '0' COMMENT 'Tr???ng l?????ng quy ?????i th???c t??nh',
  weight double DEFAULT '0' COMMENT 'Tr???ng l?????ng th???c t??nh',
  width double DEFAULT '0' COMMENT 'Chi???u r???ng th???c t??nh',
  length double DEFAULT '0' COMMENT 'Chi???u d??i th???c t??nh',
  height double DEFAULT '0' COMMENT 'Chi???u cao th???c t??nh',
  desc_order varchar(200) DEFAULT '' COMMENT 'Th??ng tin tr???ng th??i ????n h??ng',
  reason varchar(200) DEFAULT '' COMMENT 'L?? do h???y',
  status varchar(100) COMMENT 'Tr???ng th??i ',
  message varchar(100) COMMENT 'mess tr??? v???',
  time_add int(11) COMMENT 'Ng??y t???o',
  time_edit int(11) DEFAULT '0' COMMENT 'Ng??y s???a',
  doisoat int(11) DEFAULT '0' COMMENT '?????i so??t 0 ch??a ?????i so??t, 1 ???? ?????i so??t	',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_bank(
  bank_id int(11) NOT NULL AUTO_INCREMENT,
  bank_code varchar(255) NOT NULL COMMENT 'M?? code ng??n h??ng',
  name_bank varchar(255) NOT NULL COMMENT 'T??n ng??n h??ng',
  user_add int(11) NOT NULL,
  time_add int(11) NOT NULL,
  user_edit int(11) DEFAULT NULL,
  time_edit int(11) DEFAULT NULL,
  status int(11) NOT NULL,
  weight int(11) NOT NULL,
  PRIMARY KEY (bank_id)
) ENGINE=MyISAM";



$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_penalize(
  id int(11) NOT NULL AUTO_INCREMENT,
  title_penalize varchar(255) NOT NULL COMMENT 'Ti??u ?????',
  des_penalize text NOT NULL COMMENT 'M?? t???',
  price_penalize float NOT NULL DEFAULT '0',
  type_penalize int(11) NOT NULL DEFAULT '0' COMMENT 'Lo???i',
  status int(11) NOT NULL,
  weight int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";


$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_punish(
  id int(11) NOT NULL AUTO_INCREMENT,
  order_id int(11) NOT NULL DEFAULT '0' COMMENT 'M?? ????n h??ng',
  penalize_id int(11) NOT NULL DEFAULT '0' COMMENT 'Ti??u ????? ph???t',
  time_add int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_vnpay_refund(
  id int(11) NOT NULL AUTO_INCREMENT,
  order_id int(11) NOT NULL DEFAULT '0' COMMENT 'M?? ????n h??ng',
  responsecode varchar(100) NOT NULL COMMENT 'vnp_ResponseCode',
  message varchar(100) NOT NULL COMMENT 'vnp_Message',
  user_add int(11) NOT NULL,
  time_add int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_punish_complain(
  id int(11) NOT NULL AUTO_INCREMENT,
  store_id int(11) NOT NULL DEFAULT '0' COMMENT 'id c???a h??ng',
  time_from int(11) NOT NULL DEFAULT '0' COMMENT 'Ng??y t???',
  time_to int(11) NOT NULL DEFAULT '0' COMMENT 'Ng??y ?????n',
  time_add int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_complain(
  id int(11) NOT NULL AUTO_INCREMENT,
  order_id int(11) NOT NULL COMMENT 'M?? ????n h??ng',
  product_id varchar(255) DEFAULT '0' COMMENT 'S???n ph???m',
  images_video varchar(255) NOT NULL COMMENT 'H??nh ???nh ho???c video',
  reason text NOT NULL COMMENT 'L?? do',
  status int(11) DEFAULT '0' COMMENT 'Tr???ng th??i x??? l??',
  ship int(11) DEFAULT '1' COMMENT '1 Seller, 2 KH ch???u ph?? ship',
  time_add int(11) NOT NULL,
  time_edit int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_complain_status(
  id int(11) NOT NULL AUTO_INCREMENT,
  complain_status varchar(100) NOT NULL COMMENT 'Tr???ng th??i',
  seller_or_customer int(10) DEFAULT '0' COMMENT '0 ECNG, 1 Seller, 2 KH',
  status int(11) DEFAULT '0',
  weight int(11) DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=MyISAM";


$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_voucher(
	id_voucher int(11) NOT NULL AUTO_INCREMENT,
	order_id int(11) NOT NULL,
	userid int(11) NOT NULL,
	time_use int(11) NOT NULL COMMENT 'Th???i gian s??? d???ng',
	discount_price double NOT NULL COMMENT 'S??? ti???n gi???m',
	time_add int(11) NULL COMMENT 'Th???i gian th??m',
	status int(11) NULL,
	PRIMARY KEY (id_voucher)
	) ENGINE=MyISAM");

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_voucher(
	id int(11) NOT NULL AUTO_INCREMENT,
	userid int(11) NOT NULL,
	voucher_name varchar(100) NOT NULL COMMENT 'T??n Voucher',
	voucher_code varchar(11) NOT NULL COMMENT 'Voucher code',
	time_from int(11) NOT NULL COMMENT 'Th???i gian t???',
	time_to int(11) NOT NULL COMMENT 'Th???i gian ?????n',
	discount_price NOT NULL COMMENT 'S??? ti???n gi???m',
	minimum_price NOT NULL COMMENT 'Gi?? tr??? ????n h??ng t???i thi???u',
	usage_limit_quantity int(11) NOT NULL COMMENT 'L?????t s??? d???ng t???i ??a',
	time_add int(11) NULL COMMENT 'Th???i gian th??m',
	status int(11) NULL,
	PRIMARY KEY (id)
	) ENGINE=MyISAM");



$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_vnpos(
  id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  id_status int(10) DEFAULT '0' COMMENT 'ID',
  name_status_vnpost varchar(255) DEFAULT '' COMMENT 'T??n tr???ng th??i',
  note_status_vnpost text DEFAULT '' COMMENT 'Ghi ch?? tr???ng th??i',
  weight int(10) DEFAULT '0' COMMENT 'S???p x???p',
  PRIMARY KEY (id)
) ENGINE=MyISAM";



$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_vnpos(
  id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  order_id int(10) DEFAULT '0' COMMENT 'order_id',
  order_code varchar(255) DEFAULT '' COMMENT 'M?? ????n h??ng',
  name_products text DEFAULT '' COMMENT 'Danh s??ch s???n ph???m',
  total_weight_convert double NOT NULL DEFAULT '0' COMMENT 'T???ng c??n n???ng th???c t???',
  total_weight double NOT NULL DEFAULT '0' COMMENT 'T???ng c??n n???ng',
  total_length double NOT NULL DEFAULT '0' COMMENT 'T???ng chi???u d??i',
  total_width double NOT NULL DEFAULT '0' COMMENT 'T???ng chi???u r???ng',
  total_height double NOT NULL DEFAULT '0' COMMENT 'T???ng chi???u cao',
  total_moeny double NOT NULL DEFAULT '0' COMMENT 'T???ng ti???n h??ng',
  tinhthanh_gui int(10) DEFAULT '0' COMMENT 'T???nh th??nh g???i',
  quanhuyen_gui int(10) DEFAULT '0' COMMENT 'Qu???n huy???n g???i',
  address_gui varchar(255) NOT NULL COMMENT '?????a ch??? g???i',
  phone_gui varchar(255) NOT NULL COMMENT 'S??? ??i???n tho???i g???i',
  name_gui varchar(255) NOT NULL COMMENT 'T??n ng?????i g???i',
  userid_add int(10) DEFAULT '0' COMMENT 'T??i kho???n l??n ????n',
  userid_edit int(10) DEFAULT '0' COMMENT 'T??i kho???n s???a',
  tinhthanh_nhan int(10) DEFAULT '0' COMMENT 'T???nh th??nh nh???n',
  quanhuyen_nhan int(10) DEFAULT '0' COMMENT 'Qu???n huy???n nh???n',
  address_nhan varchar(255) NOT NULL COMMENT '?????a ch??? nh???n',
  phone_nhan varchar(255) NOT NULL COMMENT 'S??? ??i???n tho???i nh???n',
  name_nhan varchar(255) NOT NULL COMMENT 'T??n ng?????i nh???n',
  id_vnpost varchar(255) NOT NULL COMMENT 'ID VNPOST',
  item_code varchar(255) NOT NULL COMMENT 'M?? v???n ????n',
  cuoc_phi double NOT NULL DEFAULT '0' COMMENT 'C?????c ph??',
  tongcuocdichvucongthem double NOT NULL DEFAULT '0' COMMENT 'TongCuocDichVuCongThem',
  tongcuocbaogomdvct double NOT NULL DEFAULT '0' COMMENT 'TongCuocBaoGomDVCT',
  hinhthuc_vc varchar(255) NOT NULL COMMENT 'H??nh th???c v???n chuy???n',
  vnpost_status int(10) DEFAULT '0' COMMENT 'Tr???ng th??i v???n chuy???n',
  customer_code varchar(255) NOT NULL COMMENT 'M?? KH l??n ????n',
  weight double NOT NULL DEFAULT '0' COMMENT 'Tr???ng l?????ng th???c t??nh',
  weightconvert double NOT NULL DEFAULT '0' COMMENT 'Tr???ng l?????ng quy ?????i th???c t??nh',
  width double NOT NULL DEFAULT '0' COMMENT 'Chi???u r???ng th???c t??nh',
  length double NOT NULL DEFAULT '0' COMMENT 'Chi???u d??i th???c t??nh',
  height double NOT NULL DEFAULT '0' COMMENT 'Chi???u cao th???c t??nh',
  cuocphi_thuctinh double NOT NULL DEFAULT '0' COMMENT 'C?????c ph?? th???c t??nh',
  cod double NOT NULL DEFAULT '0' COMMENT 'Thu h???',
  date_add int(10) DEFAULT '0' COMMENT 'Ng??y t???o',
  date_edit int(10) DEFAULT '0' COMMENT 'Ng??y s???a',
  doisoat int(10) DEFAULT '0' COMMENT '?????i so??t 0 ch??a ?????i so??t, 1 ???? ?????i so??t',
  PRIMARY KEY (id)
) ENGINE=MyISAM";




$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_vnpos_detail(
  id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  order_id int(100) DEFAULT '0' COMMENT 'ID ????n h??ng',
  itemcode varchar(255) NOT NULL COMMENT 'ItemCode',
  status_vnpost int(10) DEFAULT '0' COMMENT 'Tr???ng th??i',
  user_add int(11) NOT NULL DEFAULT '0',
  addtime int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

 

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_history_vnpay(
  id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  price double NOT NULL DEFAULT '0' COMMENT 'S??? ti???n thanh to??n',
  name_register varchar(255) NOT NULL COMMENT 'T??n ?????y ?????',
  email_register varchar(255) DEFAULT '' COMMENT 'Email',
  phone_register varchar(255) DEFAULT '' COMMENT 'S??? ??i???n tho???i',
  userid varchar(255) DEFAULT '' COMMENT 'T??i kho???n thanh to??n',
  vnp_txnref varchar(255) DEFAULT '' COMMENT 'M?? ????n h??ng',
  vnp_orderinfo varchar(255) DEFAULT '' COMMENT 'N???i dung thanh to??n',
  vnp_responsedode varchar(255) DEFAULT '' COMMENT 'M?? ph???n h???i',
  vnp_transactionno varchar(255) DEFAULT '' COMMENT 'M?? GD T???i VNPAY',
  vnp_bankcode varchar(255) DEFAULT '' COMMENT 'M?? Ng??n h??ng',
  vnp_paydate int(10) DEFAULT '0' COMMENT 'Th???i gian thanh to??n',
  status varchar(255) DEFAULT '' COMMENT 'Tr???ng th??i thanh to??n',
  addtime int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=MyISAM";



$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_block(
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  keyword varchar(255) NOT NULL COMMENT 'T??? kh??a',
  description_block varchar(255) NOT NULL COMMENT 'Mi??u t???',
  bodytext text NOT NULL COMMENT 'N???i dung chi ti???t',
  other text NOT NULL,
  tag_title varchar(255) NOT NULL COMMENT 'Ti??u ????? seo',
  tag_description varchar(255) NOT NULL COMMENT 'M?? t??? seo',
  time_add int(11) NOT NULL,
  user_add int(11) NOT NULL,
  time_edit int(11) DEFAULT NULL,
  user_edit int(11) DEFAULT NULL,
  weight int(11) NOT NULL,
  status int(11) NOT NULL,
  PRIMARY KEY (id) USING BTREE
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_block_id(
  id int(11) NOT NULL AUTO_INCREMENT,
  bid int(11) NOT NULL COMMENT 'ID BLOCK',
  product_id int(11) NOT NULL COMMENT 'ID S???n ph???m',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_brand(
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  time_add int(11) NOT NULL,
  time_edit int(11) DEFAULT NULL,
  logo varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  status int(11) NOT NULL,
  weight int(11) NOT NULL,
  alias varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_categories(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL COMMENT 'T??n chuy??n m???c',
  alias varchar(255) DEFAULT NULL,
  parrent_id int(11) NOT NULL DEFAULT '0',
  percent_discount float NOT NULL COMMENT 'Ph???n tr??m chi???t kh???u',
  keyword varchar(255) DEFAULT NULL,
  image varchar(255) DEFAULT NULL,
  other_image text,
  description text,
  viewdescriptionhtml int(11) NOT NULL,
  groups_view blob NOT NULL,
  inhome int(11) NOT NULL DEFAULT '1',
  viewcat int(11) NOT NULL DEFAULT '1',
  numlinks int(11) NOT NULL DEFAULT '4',
  idsite int(11) NOT NULL,
  user_add int(11) NOT NULL,
  time_add int(11) NOT NULL,
  user_edit int(11) DEFAULT NULL,
  time_edit int(11) DEFAULT NULL,
  weight int(11) NOT NULL,
  status int(11) NOT NULL,
  brand blob,
  origin blob,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_category_shop(
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  weight int(11) NOT NULL,
  status int(11) NOT NULL,
  time_add int(11) NOT NULL,
  time_edit int(11) DEFAULT NULL,
  id_shop int(11) NOT NULL,
  alias varchar(255) NOT NULL,
  parentid int(11) NOT NULL,
  description varchar(255) NOT NULL,
  image varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_category_shop_item(
  id int(11) NOT NULL AUTO_INCREMENT,
  id_category_shop int(11) NOT NULL,
  product_id int(11) NOT NULL,
  time_add int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config(
  id int(11) NOT NULL AUTO_INCREMENT,
  config_name varchar(255) NOT NULL,
  config_value text NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_follow(
  id int(11) NOT NULL AUTO_INCREMENT,
  shop_id int(11) NOT NULL,
  time_add int(11) NOT NULL,
  user_id int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_inventory_product(
  id int(11) NOT NULL AUTO_INCREMENT,
  store_id int(11) NOT NULL,
  warehouse_id int(11) NOT NULL,
  product_id int(11) NOT NULL,
  classify_value_product_id int(11) NOT NULL COMMENT 'ID Ph??n lo???i s???n ph???m',
  amount int(11) DEFAULT NULL COMMENT 'S??? l?????ng t???n kho',
  amount_delivery int(11) DEFAULT NULL COMMENT 'S??? l?????ng ??ang giao',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_logs_order(
  id int(11) NOT NULL AUTO_INCREMENT,
  order_id int(11) NOT NULL,
  status_id_old int(11) NOT NULL,
  content text NOT NULL,
  time_add int(11) NOT NULL,
  user_add int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order(
  id int(11) NOT NULL AUTO_INCREMENT,
  userid int(11) NOT NULL,
  order_code varchar(255) NOT NULL COMMENT 'M?? ????n h??ng',
  store_id int(11) NOT NULL COMMENT 'ID C???a h??ng',
  warehouse_id int(11) NOT NULL COMMENT 'ID Kho h??ng',
  order_name varchar(255) NOT NULL COMMENT 'T??n ng?????i mua',
  email varchar(255) NOT NULL COMMENT 'Email ng?????i mua',
  phone varchar(255) NOT NULL COMMENT 'S??? ??i???n tho???i ng?????i mua',
  province_id int(11) NOT NULL COMMENT 'Th??nh ph???',
  district_id int(11) NOT NULL COMMENT 'Qu???n huy???n',
  ward_id int(11) NOT NULL COMMENT 'Ph?????ng x??',
  address varchar(255) NOT NULL COMMENT '?????a ch??? ng???n g???n',
  lat text NOT NULL,
  lng text NOT NULL,
  transporters_id int(11) NOT NULL COMMENT 'ID Nh?? v???n chuy???n',
  total_product double NOT NULL COMMENT 'T???ng ti???n h??ng',
  total_weight int(11) NOT NULL COMMENT 'T???ng kh???i l????ng',
  total_height int(11) NOT NULL COMMENT 'T???ng chi???u cao',
  total_width int(11) NOT NULL COMMENT 'T???ng chi???u r???ng',
  total_length int(11) NOT NULL COMMENT 'T???ng chi???u d??i',
  payment double NOT NULL DEFAULT '0' COMMENT 'S??? ti???n ???? thanh to??n',
  payment_method int(11) NOT NULL COMMENT 'Ph????ng th???c th??nh to??n',
  fee_transport double NOT NULL COMMENT 'Ph?? v???n chuy???n',
  shipping_code text COMMENT 'M?? v???n chuy???n',
  total double NOT NULL COMMENT 'T???ng c???ng',
  note varchar(255) NOT NULL COMMENT 'Ghi ch?? cho ng?????i b??n',
  link_check_ahamove_order text,
  time_add int(11) NOT NULL,
  status int(11) NOT NULL,
  plus_money int(11) NOT NULL DEFAULT '0' COMMENT '???? c???ng ti???n hay ch??a (1 l?? r???i, 0 l?? ch??a)',
  status_payment_vnpay int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_item(
  id int(11) NOT NULL AUTO_INCREMENT,
  order_id int(11) NOT NULL COMMENT 'ID ????n h??ng',
  product_id int(11) NOT NULL COMMENT 'ID Product',
  weight int(11) NOT NULL,
  length int(11) NOT NULL,
  height int(11) NOT NULL,
  width int(11) NOT NULL,
  price double NOT NULL COMMENT 'Gi?? s???n ph???m',
  classify_value_product_id int(11) NOT NULL,
  quantity int(11) NOT NULL,
  total double NOT NULL,
  discount double NOT NULL DEFAULT '0' COMMENT 'Ti???n chi???t kh???u',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_origin(
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  time_add int(11) NOT NULL,
  time_edit int(11) DEFAULT NULL,
  weight int(11) NOT NULL,
  status int(11) NOT NULL,
  alias varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_product(
  id int(11) NOT NULL AUTO_INCREMENT,
  store_id int(11) NOT NULL,
  barcode varchar(255) NOT NULL COMMENT 'M?? v???ch',
  name_product varchar(255) NOT NULL COMMENT 'T??n s???n ph???m',
  alias varchar(255) NOT NULL COMMENT 'Li??n k???t t??nh',
  categories_id int(11) NOT NULL COMMENT 'ID chuy??n m???c',
  unit_id int(11) NOT NULL COMMENT '????n v??? s???n ph???m',
  unit_weight int(11) NOT NULL COMMENT '????n v??? kh???i l?????ng',
  weight_product double NOT NULL COMMENT 'Kh???i l?????ng s???n ph???m',
  length_product double NOT NULL COMMENT 'Chi???u d??i s???n ph???m (cm)',
  width_product double NOT NULL COMMENT 'Chi???u r???ng s???n ph???m (cm)',
  height_product double NOT NULL COMMENT 'Chi???u cao s???n ph???m',
  unit_length int(11) NOT NULL COMMENT '????n v??? chi???u d??i',
  unit_height int(11) NOT NULL COMMENT '????n v??? chi???u cao',
  unit_width int(11) NOT NULL COMMENT '????n v??? chi???u r???ng',
  image varchar(255) NOT NULL COMMENT 'H??nh ???nh s???n ph???m',
  other_image text COMMENT 'H??nh ???nh kh??c',
  description text NOT NULL COMMENT 'Gi???i thi???u ng???n g???n s???n ph???m',
  bodytext text NOT NULL COMMENT 'N???i dung chi ti???t',
  keyword varchar(255) DEFAULT NULL COMMENT 'T??? kh??a t??m ki???m',
  tag_title varchar(255) NOT NULL COMMENT 'Ti??u ????? seo',
  tag_description varchar(255) NOT NULL COMMENT 'M?? t??? seo',
  inhome int(11) NOT NULL DEFAULT '0' COMMENT 'Hi???n th??? tr??n trang ch???',
  allowed_rating int(11) NOT NULL DEFAULT '0' COMMENT 'Cho ph??p ????nh gi??',
  showprice int(11) NOT NULL DEFAULT '0' COMMENT 'Cho ph??p hi???n th??? gi?? s???n ph???m',
  number_view int(11) NOT NULL DEFAULT '0' COMMENT 'S??? l?????t xem s???n ph???m',
  price_min double NOT NULL COMMENT 'Gi?? th???p nh???t (VND)',
  price_max double NOT NULL COMMENT 'Gi?? cao nh???t (VND)',
  time_add int(11) NOT NULL,
  user_add int(11) NOT NULL,
  time_edit int(11) DEFAULT NULL,
  user_edit int(11) DEFAULT NULL,
  weight int(11) NOT NULL,
  status int(11) NOT NULL,
  number_order int(11) NOT NULL DEFAULT '0',
  brand int(11) DEFAULT NULL,
  origin int(11) DEFAULT NULL,
  price double NOT NULL,
  price_special double NOT NULL,
  star float NOT NULL DEFAULT '0',
  number_rate int(11) DEFAULT '0',
  time_push int(11) NOT NULL DEFAULT '0',
  mode_push int(11) NOT NULL DEFAULT '0',
  price_sort double NOT NULL,
  number_like int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
  ) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_product_classify(
  id int(11) NOT NULL AUTO_INCREMENT,
  name_classify varchar(255) NOT NULL,
  product_id int(11) NOT NULL,
  status int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_product_classify_value(
  id int(11) NOT NULL AUTO_INCREMENT,
  classify_id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  image varchar(100) DEFAULT '' COMMENT 'H??nh ???nh thu???c t??nh',
  status int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_product_classify_value_product(
  id int(11) NOT NULL AUTO_INCREMENT,
  classify_id_value1 int(11) NOT NULL,
  classify_id_value2 int(11) NOT NULL,
  price double NOT NULL,
  price_special double NOT NULL,
  sl_tonkho double NOT NULL DEFAULT '0',
  status int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_push_product(
  id int(11) NOT NULL AUTO_INCREMENT,
  product_id int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_rate(
  id int(11) NOT NULL AUTO_INCREMENT,
  product_id int(11) NOT NULL,
  classify_value_product_id int(11) NOT NULL DEFAULT '0',
  content varchar(255) NOT NULL,
  image varchar(255) DEFAULT NULL,
  status int(11) NOT NULL,
  time_add int(11) NOT NULL,
  time_edit int(11) DEFAULT NULL,
  userid int(11) NOT NULL,
  star int(11) NOT NULL,
  other_image blob,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_seller_management(
  id int(11) NOT NULL AUTO_INCREMENT,
  userid int(11) NOT NULL COMMENT 'ID USER',
  company_name varchar(255) NOT NULL COMMENT 'T??n doanh nghi???p',
  company_code varchar(255) NOT NULL COMMENT 'M?? doanh nghi???p',
  address varchar(255) NOT NULL COMMENT '?????a ch??? ng???n g???n',
  province_id int(11) NOT NULL COMMENT 'ID Th??nh ph???',
  district_id int(11) NOT NULL COMMENT 'ID Qu???n Huy???n',
  ward_id int(11) NOT NULL COMMENT 'ID Ph?????ng X??',
  tax_code varchar(255) NOT NULL COMMENT 'M?? s??? thu???',
  name varchar(255) NOT NULL COMMENT 'H??? t??n ng?????i ?????i di???n',
  phone varchar(255) NOT NULL COMMENT 'S??? ??i???n tho???i ng?????i ?????i di???n',
  email varchar(255) NOT NULL COMMENT 'Email',
  image_before varchar(255) NOT NULL COMMENT '???nh m???t tr?????c gi???y ph??p kinh doanh',
  image_after varchar(255) DEFAULT '' COMMENT '???nh m???t s???u gi???y ph??p kinh doanh',
  bank_id int(11) NOT NULL COMMENT 'Ng??n h??ng',
  acount_name varchar(255) NOT NULL COMMENT 'T??n ch??? th???',
  acount_number varchar(255) NOT NULL COMMENT 'S??? t??i kho???n',
  branch_name varchar(255) NOT NULL COMMENT 'Chi nh??nh',
  store blob COMMENT 'Th??ng tin kho h??ng',
  user_add int(11) NOT NULL,
  time_add int(11) NOT NULL,
  user_edit int(11) DEFAULT NULL,
  time_edit int(11) DEFAULT NULL,
  status int(11) NOT NULL,
  weight int(11) NOT NULL,
  cover_image text,
  avatar_image text,
  image_banner text,
  description_shop text,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_static_order(
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_order(
  ??d int(11) NOT NULL AUTO_INCREMENT,
  status_id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  PRIMARY KEY (??d)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_order_ghn(
  id int(11) NOT NULL AUTO_INCREMENT,
  status varchar(255) NOT NULL,
  name text NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_order_ghtk(
  id int(11) NOT NULL AUTO_INCREMENT,
  status int(11) NOT NULL,
  name varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_status_vnpay(
  id int(11) NOT NULL AUTO_INCREMENT,
  status_id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_tabs(
  id int(11) NOT NULL AUTO_INCREMENT,
  name_tabs varchar(255) NOT NULL COMMENT 'Ti??u ????? Tabs',
  image varchar(255) NOT NULL,
  content_id int(11) NOT NULL,
  time_add int(11) NOT NULL,
  user_add int(11) NOT NULL,
  time_edit int(11) DEFAULT NULL,
  user_edit int(11) DEFAULT NULL,
  weight int(11) NOT NULL,
  status int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_transporters(
  id int(11) NOT NULL AUTO_INCREMENT,
  name_transporters varchar(255) NOT NULL COMMENT 'T??n nh?? v???n chuy???n',
  code_transporters varchar(255) NOT NULL COMMENT 'M?? code v???n chuy???n',
  symbol_transporters varchar(255) NOT NULL COMMENT 'K?? hi???u nh?? v???n chuy???n',
  description varchar(255) DEFAULT NULL,
  max_weight float NOT NULL COMMENT 'Kh???i l?????ng t???i ??a (g)',
  max_length float NOT NULL COMMENT 'Chi???u d??i t???i ??a (cm)',
  max_width float NOT NULL COMMENT 'Chi???u r???ng t???i ??a (cm)',
  max_height float NOT NULL COMMENT 'Chi???u cao t???i ??a (cm)',
  image varchar(255) DEFAULT NULL,
  type int(11) NOT NULL,
  money double NOT NULL,
  time_edit int(11) DEFAULT NULL,
  user_edit int(11) DEFAULT NULL,
  status int(11) NOT NULL,
  weight int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_transporters_shop(
  id int(11) NOT NULL AUTO_INCREMENT,
  sell_id int(11) NOT NULL COMMENT 'ID Shops',
  transporters_id int(11) NOT NULL COMMENT 'ID Nh?? V???n Chuy???n',
  status int(11) NOT NULL COMMENT 'Tr???ng Th??i K??ch Ho???t',
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_unit(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL COMMENT '????n v??? s???n ph???m',
  time_add int(11) NOT NULL,
  user_add int(11) NOT NULL,
  time_edit int(11) DEFAULT NULL,
  user_edit int(11) DEFAULT NULL,
  weight int(11) NOT NULL,
  status int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_unit_currency(
  id int(11) NOT NULL AUTO_INCREMENT,
  name_currency varchar(255) NOT NULL COMMENT 'T??n ????n v??? ti???n t???',
  symbol varchar(255) NOT NULL COMMENT 'K?? hi???u',
  exchange double NOT NULL COMMENT 'Gi?? tr??? quy ?????i (VN??)',
  time_add int(11) NOT NULL,
  user_add int(11) NOT NULL,
  time_edit int(11) DEFAULT NULL,
  user_edit int(11) DEFAULT NULL,
  status int(11) NOT NULL,
  weight int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_unit_length(
  id int(11) NOT NULL AUTO_INCREMENT,
  name_length varchar(255) NOT NULL COMMENT 'T??n ????n v??? ????? d??i',
  symbol varchar(255) NOT NULL COMMENT 'K?? hi???u',
  exchange double NOT NULL COMMENT 'Gi?? tr??? quy ?????i (cm)',
  time_add int(11) NOT NULL,
  user_add int(11) NOT NULL,
  time_edit int(11) DEFAULT NULL,
  user_edit int(11) DEFAULT NULL,
  status int(11) NOT NULL,
  length int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_unit_weight(
  id int(11) NOT NULL AUTO_INCREMENT,
  name_weight varchar(255) NOT NULL COMMENT 'T??n ????n v??? kh???i l?????ng',
  symbol varchar(255) NOT NULL COMMENT 'K?? hi???u',
  exchange double NOT NULL COMMENT 'Gi?? tr??? quy ?????i (gram)',
  time_add int(11) NOT NULL,
  user_add int(11) NOT NULL,
  time_edit int(11) DEFAULT NULL,
  user_edit int(11) DEFAULT NULL,
  status int(11) NOT NULL,
  weight int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_warehouse(
  id int(11) NOT NULL AUTO_INCREMENT,
  sell_id int(11) NOT NULL COMMENT 'ID Ng?????i b??n',
  name_warehouse varchar(255) NOT NULL COMMENT 'T??n kho h??ng',
  name_send varchar(255) NOT NULL COMMENT 'T??n ng?????i g???i',
  phone_send varchar(255) NOT NULL COMMENT 'S??? ??i???n tho???i ng?????i g???i',
  address varchar(255) NOT NULL COMMENT '?????a ch??? ng?????i g???i',
  province_id int(11) NOT NULL,
  district_id int(11) NOT NULL,
  ward_id int(11) NOT NULL,
  shops_id_ghn int(11) DEFAULT NULL COMMENT 'SHOPID GHN',
  lat text,
  lng text,
  groupaddressId int(11) NOT NULL,
  cusId int(11) NOT NULL,
  user_add int(11) NOT NULL,
  time_add int(11) NOT NULL,
  user_edit int(11) DEFAULT NULL,
  time_edit int(11) DEFAULT NULL,
  status int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_warehouse_import(
  warehouse_product_import_id int(11) NOT NULL AUTO_INCREMENT,
  warehouse_product_import_code varchar(255) NOT NULL COMMENT 'M?? nh???p kho',
  store_id int(11) NOT NULL COMMENT 'ID C???a h??ng',
  warehouse_id int(11) NOT NULL COMMENT 'ID Kho h??ng',
  title varchar(255) NOT NULL COMMENT 'N???i dung',
  total_price double NOT NULL,
  total_amount int(11) NOT NULL,
  time_add int(11) NOT NULL,
  user_add int(11) NOT NULL,
  PRIMARY KEY (warehouse_product_import_id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_warehouse_import_item(
  id int(11) NOT NULL AUTO_INCREMENT,
  warehouse_product_import_id int(11) NOT NULL,
  product_id int(11) NOT NULL,
  classify_value_product_id int(11) NOT NULL COMMENT 'ID Ph??n lo???i s???n ph???m',
  price_import double NOT NULL,
  amount int(11) NOT NULL,
  unit_currency int(11) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_wishlist(
  id int(11) NOT NULL AUTO_INCREMENT,
  product_id int(11) NOT NULL,
  time_add int(11) NOT NULL,
  userid int(11) NOT NULL,
  shop_id int(11) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM";

$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('1', 'raw_product_prefix', 'SKU')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('1', 'percent_of_ship', '0')";

$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('1', 'insurance', '0')";


$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('2', 'username_vnpost', '0904999955')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('3', 'password_vnpost', 'ngocsuong113A!')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('4', 'token_ghn', '0076bd3c-c45c-11ea-b354-e6945d70dd56')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('5', 'username_viettelpost', '0904999955')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('6', 'password_viettelpost', 'ngocsuong113A!')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('7', 'token_ahamove', '55f359a75c2ac74d8713893ecf50a9e521f41def')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('8', 'token_ghtk', 'BB917c542C01B979355408c4A275a0167c2a5b21')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('9', 'raw_import_product_prefix', 'NK')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('10', 'url_ghn', 'https://online-gateway.ghn.vn/shiip/public-api')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('11', 'url_ghtk', 'https://services.giaohangtietkiem.vn')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('12', 'inhome_viewcat', '1')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('13', 'number_product', '15')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('14', 'raw_order_prefix', 'TMS')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('15', 'time_push_product', '4')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('17', 'number_product_push', '2')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('19', 'website_code_vnpay', '2E6FSPVL')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (id, config_name, config_value) VALUES('20', 'checksum_vnpay', 'MDAEJHXTMWWVHRIADHZJFZCULDWTQLRZ')";

$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('province_ecng', '0')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('district_ecng', '0')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('ward_ecng', '0')";
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_config (config_name, config_value) VALUES('address_ecng', '')";



// Comments
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'auto_postcomm', '1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'allowed_comm', '-1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'view_comm', '6')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'setcomm', '4')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'activecomm', '1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'emailcomm', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'adminscomm', '')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'sortcomm', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'captcha', '1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'perpagecomm', '5')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'timeoutcomm', '360')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'allowattachcomm', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'alloweditorcomm', '0')";
