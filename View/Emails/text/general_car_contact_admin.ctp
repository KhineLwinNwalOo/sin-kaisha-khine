<?php
App::uses('AuthUtil', 'Lib/Util');

if (!isset($dataTblSellGeneralCar))		throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
if (!isset($data))						throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
if (!$auth instanceof AuthComponent)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

$title		= Hash::get($data, 'GeneralCarContact.title');
$content	= Hash::get($data, 'GeneralCarContact.content');

$user_name	= AuthUtil::getTblUserUserName($auth);

$textMakerName		= Hash::get($dataTblSellGeneralCar, 'TblMaker.maker_name');
$textCarName		= Hash::get($dataTblSellGeneralCar, 'TblGeneralCarName.car_name');
$textModelYear		= Hash::get($dataTblSellGeneralCar, 'TblSellGeneralCar.model_year');
$textCarPrice		= Hash::get($dataTblSellGeneralCar, 'TblSellGeneralCar.car_price');
$textCarMileage		= Hash::get($dataTblSellGeneralCar, 'TblSellGeneralCar.mileage');
$textTransmissionTypeName = Hash::get($dataTblSellGeneralCar, 'TblSellGeneralCar.');
$textDriveTypeName	= Hash::get($dataTblSellGeneralCar, 'MstTransmissionType.name');
$textFuelTypeName	= Hash::get($dataTblSellGeneralCar, 'MstFuelType.name');

$textId			= Hash::get($dataTblSellGeneralCar, 'TblSellGeneralCar.id');
$textCarCode	= Hash::get($dataTblSellGeneralCar, 'TblGeneralCarCode.car_code');
$textBodyColorName		= Hash::get($dataTblSellGeneralCar, 'MstBodyColor.name');
$textSteeringTypeName	= Hash::get($dataTblSellGeneralCar, 'MstSteeringType.name');
$textPlateColorName		= Hash::get($dataTblSellGeneralCar, 'MstPlateColor.name');
$textPlateContent1		= Hash::get($dataTblSellGeneralCar, 'TblSellGeneralCar.plate_content1');
$textPlateContent2		= Hash::get($dataTblSellGeneralCar, 'TblSellGeneralCar.plate_content2');
$textPlateContent3		= Hash::get($dataTblSellGeneralCar, 'TblSellGeneralCar.plate_content3');
$textEnginePower	= Hash::get($dataTblSellGeneralCar, 'MstEnginePower.name');
$textDoorType		= Hash::get($dataTblSellGeneralCar, 'MstDoorType.name');
$textSeatsType		= Hash::get($dataTblSellGeneralCar, 'MstSeatsType.name');
$textLicenceType	= Hash::get($dataTblSellGeneralCar, 'MstLicenceType.name');
$textBodyType		= Hash::get($dataTblSellGeneralCar, 'MstBodyType.name');
$textTownShip		= Hash::get($dataTblSellGeneralCar, 'MstTownShip.name');

$textFeature	= join(',', Hash::extract($dataTblSellGeneralCar, 'TblGeneralCarFeature.{n}.name'));
$textComfort	= join(',', Hash::extract($dataTblSellGeneralCar, 'TblGeneralCarComfort.{n}.name'));
$textSafety		= join(',', Hash::extract($dataTblSellGeneralCar, 'TblGeneralCarSafety.{n}.name'));
$textWindow		= join(',', Hash::extract($dataTblSellGeneralCar, 'TblGeneralCarWindow.{n}.name'));

$textSalesComment = Hash::get($dataTblSellGeneralCar, 'TblSellGeneralCarDetail.sales_comment');
$textRemarks	= Hash::get($dataTblSellGeneralCar, 'TblSellGeneralCarDetail.remarks');

$textTblUserUserName	= Hash::get($dataTblSellGeneralCar, 'TblUser.user_name');
$textTblUserPhoneNo		= Hash::get($dataTblSellGeneralCar, 'TblUser.phone_no');
$textTblUserUserMail	= Hash::get($dataTblSellGeneralCar, 'TblUser.user_mail');
$textTblUserAddress		= Hash::get($dataTblSellGeneralCar, 'TblUser.address');
$textTblUserRemarks		= Hash::get($dataTblSellGeneralCar, 'TblUser.remarks');
		
?>
<?php echo __('Dear'); ?> <?php echo $user_name; ?> 
 
<?php echo __('Car Sell Inquiry Confirmation'); ?> 
<?php echo __('Title'); ?>：<?php echo $title; ?> 
--------------------------------------------- 
<?php echo __('Contents'); ?> 
--------------------------------------------- 
 <?php echo $content; ?> 
--------------------------------------------- 
<?php echo __('Seller Information'); ?> 
<?php echo __('Name'); ?> : <?php echo $textTblUserUserName; ?> 
<?php echo __('Tel'); ?> : <?php echo $textTblUserPhoneNo; ?> 
<?php echo __('Mail'); ?> : <?php echo $textTblUserUserMail; ?> 
<?php echo __('Address'); ?> : <?php echo $textTblUserAddress; ?> 
<?php echo __('Remarks'); ?> : <?php echo $textTblUserRemarks; ?> 

--------------------------------------------- 
<?php echo __('Selling Car Information'); ?> 

<?php echo __('Maker'); ?> : <?php echo $textMakerName; ?> 
<?php echo __('Name'); ?> : <?php echo $textCarName; ?> 
<?php echo __('Year'); ?> : <?php echo $textModelYear; ?> 
<?php echo __('Price'); ?> : <?php echo $textCarPrice; ?> 
 
<?php echo __('Mileage'); ?> : <?php echo $textCarMileage; ?> 
<?php echo __('Transmission'); ?> : <?php echo $textTransmissionTypeName; ?> 
<?php echo __('Drive'); ?> : <?php echo $textDriveTypeName; ?> 
<?php echo __('Fuel'); ?> : <?php echo $textFuelTypeName; ?> 
 
<?php echo __('Ref No'); ?> : <?php echo $textId; ?> 
<?php echo __('Year'); ?> : <?php echo $textModelYear; ?> 
<?php echo __('Code'); ?> : <?php echo $textCarCode; ?> 
<?php echo __('Color'); ?> : <?php echo $textBodyColorName; ?> 
<?php echo __('Steering'); ?> : <?php echo $textSteeringTypeName; ?> 
<?php echo __('License plate'); ?> : (<?php echo $textPlateColorName; ?>)<?php echo $textPlateContent1 ; ?> <?php echo $textPlateContent2 ; ?>-<?php echo $textPlateContent3 ; ?> 
<?php echo __('Engine Power'); ?> : <?php echo $textEnginePower; ?> 
<?php echo __('Door'); ?> : <?php echo $textDoorType; ?> 
<?php echo __('Seats'); ?> : <?php echo $textSeatsType; ?> 
<?php echo __('Licence'); ?> : <?php echo $textLicenceType; ?> 
<?php echo __('Build Type'); ?> : <?php echo $textBodyType; ?> 
<?php echo __('Town Ship'); ?> : <?php echo $textTownShip; ?> 
 
<?php echo __('Standard features'); ?> 
 <?php echo $textFeature; ?> 
 
<?php echo __('Comfort'); ?> 
 <?php echo $textComfort; ?> 
 
<?php echo __('Safety'); ?> 
 <?php echo $textSafety; ?> 
 
<?php echo __('Windows'); ?> 
 <?php echo $textWindow; ?> 
 
<?php echo __("SELLER'S COMMENTS"); ?> 
 <?php echo $textSalesComment; ?> 

<?php echo __("Remark"); ?> 
 <?php echo $textRemarks; ?> 
 