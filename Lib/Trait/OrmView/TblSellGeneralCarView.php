<?php 


trait TblSellGeneralCarView {

	/**
	 * TblSellGeneralCar
	 * @var array<TblSellGeneralCar::$data>
	 */
	protected $dataTblSellGeneralCar = array();

	/**
	 * TblSellGeneralCar::$data
	 * if (!isset($dataTblSellGeneralCar))	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
	 * $ctlHelper->setDataTblSellGeneralCar($dataTblSellGeneralCar);
	 * @param array $dataTblSellGeneralCar
	 */
	public function setDataTblSellGeneralCar(array $dataTblSellGeneralCar) {
		$this->dataTblSellGeneralCar = $dataTblSellGeneralCar;
	}

	/**
	 * プライマリID(Ref No)
	 * $textTblSellGeneralCarId	= $ctlHelper->getTextTblSellGeneralCarId	();
	 * <?php echo $textTblSellGeneralCarId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * ユーザID
	 * $textTblSellGeneralCarTblUserId	= $ctlHelper->getTextTblSellGeneralCarTblUserId	();
	 * <?php echo $textTblSellGeneralCarTblUserId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'tbl_user_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 販売車両プランID（一般車）
	 * $textTblSellGeneralCarTblSellGeneralCarPlanId	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanId	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'tbl_sell_general_car_plan_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 公開フラグ
	 * $textTblSellGeneralCarPublicFlag	= $ctlHelper->getTextTblSellGeneralCarPublicFlag	();
	 * <?php echo $textTblSellGeneralCarPublicFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarPublicFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'public_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 公開開始日
	 * $textTblSellGeneralCarPublicStartDate	= $ctlHelper->getTextTblSellGeneralCarPublicStartDate	();
	 * <?php echo $textTblSellGeneralCarPublicStartDate	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarPublicStartDate() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'public_start_date';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 公開終了日
	 * $textTblSellGeneralCarPublicEndDate	= $ctlHelper->getTextTblSellGeneralCarPublicEndDate	();
	 * <?php echo $textTblSellGeneralCarPublicEndDate	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarPublicEndDate() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'public_end_date';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * QRコード表示フラグ
	 * $textTblSellGeneralCarQrCodeFlag	= $ctlHelper->getTextTblSellGeneralCarQrCodeFlag	();
	 * <?php echo $textTblSellGeneralCarQrCodeFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarQrCodeFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'qr_code_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * NewArrivalsフラグ
	 * $textTblSellGeneralCarNewArrivalsFlag	= $ctlHelper->getTextTblSellGeneralCarNewArrivalsFlag	();
	 * <?php echo $textTblSellGeneralCarNewArrivalsFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarNewArrivalsFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'new_arrivals_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * BestDealフラグ
	 * $textTblSellGeneralCarBestDealFlag	= $ctlHelper->getTextTblSellGeneralCarBestDealFlag	();
	 * <?php echo $textTblSellGeneralCarBestDealFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarBestDealFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'best_deal_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * Recommendedフラグ
	 * $textTblSellGeneralCarRecommendedFlag	= $ctlHelper->getTextTblSellGeneralCarRecommendedFlag	();
	 * <?php echo $textTblSellGeneralCarRecommendedFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarRecommendedFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'recommended_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * プレミアムタグフラグ
	 * $textTblSellGeneralCarPremiumFlag	= $ctlHelper->getTextTblSellGeneralCarPremiumFlag	();
	 * <?php echo $textTblSellGeneralCarPremiumFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarPremiumFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'premium_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * TOPページ表示フラグ
	 * $textTblSellGeneralCarTopPageViewFlag	= $ctlHelper->getTextTblSellGeneralCarTopPageViewFlag	();
	 * <?php echo $textTblSellGeneralCarTopPageViewFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTopPageViewFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'top_page_view_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 検索結果上位表示フラグ
	 * $textTblSellGeneralCarSearchPriorityFlag	= $ctlHelper->getTextTblSellGeneralCarSearchPriorityFlag	();
	 * <?php echo $textTblSellGeneralCarSearchPriorityFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarSearchPriorityFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'search_priority_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 売り主連絡フラグ
	 * $textTblSellGeneralCarContactSellerFlag	= $ctlHelper->getTextTblSellGeneralCarContactSellerFlag	();
	 * <?php echo $textTblSellGeneralCarContactSellerFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarContactSellerFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'contact_seller_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 車両画像の最大登録数
	 * $textTblSellGeneralCarCarImageCountMax	= $ctlHelper->getTextTblSellGeneralCarCarImageCountMax	();
	 * <?php echo $textTblSellGeneralCarCarImageCountMax	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarCarImageCountMax() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'car_image_count_max';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * メーカーID
	 * $textTblSellGeneralCarTblMakerId	= $ctlHelper->getTextTblSellGeneralCarTblMakerId	();
	 * <?php echo $textTblSellGeneralCarTblMakerId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'tbl_maker_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 車種名ID
	 * $textTblSellGeneralCarTblGeneralCarNameId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'tbl_general_car_name_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 型式ID（一般車）
	 * $textTblSellGeneralCarTblGeneralCarCodeId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'tbl_general_car_code_id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 年式
	 * $textTblSellGeneralCarModelYear	= $ctlHelper->getTextTblSellGeneralCarModelYear	();
	 * <?php echo $textTblSellGeneralCarModelYear	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarModelYear() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'model_year';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 車両価格（LKS）
	 * $textTblSellGeneralCarCarPrice	= $ctlHelper->getTextTblSellGeneralCarCarPrice	();
	 * <?php echo $textTblSellGeneralCarCarPrice	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarCarPrice() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'car_price';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 走行距離
	 * $textTblSellGeneralCarMileage	= $ctlHelper->getTextTblSellGeneralCarMileage	();
	 * <?php echo $textTblSellGeneralCarMileage	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMileage() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mileage';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 駆動方式ID
	 * $textTblSellGeneralCarMstDriveTypeId	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeId	();
	 * <?php echo $textTblSellGeneralCarMstDriveTypeId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_drive_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * ステアリングタイプマスタID
	 * $textTblSellGeneralCarMstSteeringTypeId	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeId	();
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_steering_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * トランスミッションタイプマスタID
	 * $textTblSellGeneralCarMstTransmissionTypeId	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeId	();
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_transmission_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カラーマスタID
	 * $textTblSellGeneralCarMstBodyColorId	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorId	();
	 * <?php echo $textTblSellGeneralCarMstBodyColorId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_body_color_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 燃料タイプマスタID
	 * $textTblSellGeneralCarMstFuelTypeId	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeId	();
	 * <?php echo $textTblSellGeneralCarMstFuelTypeId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_fuel_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * タウンシップマスタID
	 * $textTblSellGeneralCarMstTownShipId	= $ctlHelper->getTextTblSellGeneralCarMstTownShipId	();
	 * <?php echo $textTblSellGeneralCarMstTownShipId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_town_ship_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 排気量マスタID
	 * $textTblSellGeneralCarMstEnginePowerId	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerId	();
	 * <?php echo $textTblSellGeneralCarMstEnginePowerId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_engine_power_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * ドアタイプマスタID
	 * $textTblSellGeneralCarMstDoorTypeId	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeId	();
	 * <?php echo $textTblSellGeneralCarMstDoorTypeId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_door_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * シートタイプマスタID
	 * $textTblSellGeneralCarMstSeatsTypeId	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeId	();
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_seats_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * ライセンスタイプマスタID
	 * $textTblSellGeneralCarMstLicenceTypeId	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeId	();
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_licence_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 形状ID
	 * $textTblSellGeneralCarMstBodyTypeId	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeId	();
	 * <?php echo $textTblSellGeneralCarMstBodyTypeId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_body_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * プレートカラーマスタID
	 * $textTblSellGeneralCarMstPlateColorId	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorId	();
	 * <?php echo $textTblSellGeneralCarMstPlateColorId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_plate_color_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * プレート内容１
	 * $textTblSellGeneralCarPlateContent1	= $ctlHelper->getTextTblSellGeneralCarPlateContent1	();
	 * <?php echo $textTblSellGeneralCarPlateContent1	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarPlateContent1() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'plate_content1';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * プレート内容１
	 * $textTblSellGeneralCarPlateContent2	= $ctlHelper->getTextTblSellGeneralCarPlateContent2	();
	 * <?php echo $textTblSellGeneralCarPlateContent2	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarPlateContent2() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'plate_content2';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * プレート内容１
	 * $textTblSellGeneralCarPlateContent3	= $ctlHelper->getTextTblSellGeneralCarPlateContent3	();
	 * <?php echo $textTblSellGeneralCarPlateContent3	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarPlateContent3() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'plate_content3';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 車両情報ID（一般車）
	 * $textTblSellGeneralCarTblGeneralCarInfoId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'tbl_general_car_info_id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時
	 * $textTblSellGeneralCarCreated	= $ctlHelper->getTextTblSellGeneralCarCreated	();
	 * <?php echo $textTblSellGeneralCarCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時
	 * $textTblSellGeneralCarUpdated	= $ctlHelper->getTextTblSellGeneralCarUpdated	();
	 * <?php echo $textTblSellGeneralCarUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCar';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * プライマリID(hasOne TblSellGeneralCarDetail.id)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailId	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailId	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 販売車両情報ID（一般車）(hasOne TblSellGeneralCarDetail.tbl_sell_general_car_id)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarId	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarId	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'tbl_sell_general_car_id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * セールスコメント(hasOne TblSellGeneralCarDetail.sales_comment)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailSalesComment	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailSalesComment	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailSalesComment	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailSalesComment() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'sales_comment';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return nl2br(h($value));
	}

	/**
	 * 備考(hasOne TblSellGeneralCarDetail.remarks)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailRemarks	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailRemarks	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailRemarks	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailRemarks() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'remarks';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return nl2br(h($value));
	}

	/**
	 * 購入プラン情報(hasOne TblSellGeneralCarDetail.tbl_sell_general_car_plan_data)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarPlanData	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarPlanData	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarPlanData	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarPlanData() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'tbl_sell_general_car_plan_data';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return nl2br(h($value));
	}

	/**
	 * その他のメーカー名(hasOne TblSellGeneralCarDetail.outher_maker_name)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailOutherMakerName	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailOutherMakerName	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailOutherMakerName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailOutherMakerName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'outher_maker_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * その他の車種名（一般車）(hasOne TblSellGeneralCarDetail.outher_general_car_name)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarName	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarName	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'outher_general_car_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * その他の型式（一般車）(hasOne TblSellGeneralCarDetail.outher_general_car_code)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarCode	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarCode	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarCode	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarCode() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'outher_general_car_code';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(hasOne TblSellGeneralCarDetail.created)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailCreated	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailCreated	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(hasOne TblSellGeneralCarDetail.updated)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailUpdated	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailUpdated	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * ユーザ名(公開)(belongsTo TblUser.user_name)
	 * $textTblSellGeneralCarTblUserUserName	= $ctlHelper->getTextTblSellGeneralCarTblUserUserName	();
	 * <?php echo $textTblSellGeneralCarTblUserUserName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserUserName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'user_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 住所(公開)(belongsTo TblUser.address)
	 * $textTblSellGeneralCarTblUserAddress	= $ctlHelper->getTextTblSellGeneralCarTblUserAddress	();
	 * <?php echo $textTblSellGeneralCarTblUserAddress	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserAddress() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'address';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 電話番号(公開)(belongsTo TblUser.phone_no)
	 * $textTblSellGeneralCarTblUserPhoneNo	= $ctlHelper->getTextTblSellGeneralCarTblUserPhoneNo	();
	 * <?php echo $textTblSellGeneralCarTblUserPhoneNo	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserPhoneNo() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'phone_no';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * ユーザのメールアドレス(公開)(belongsTo TblUser.user_mail)
	 * $textTblSellGeneralCarTblUserUserMail	= $ctlHelper->getTextTblSellGeneralCarTblUserUserMail	();
	 * <?php echo $textTblSellGeneralCarTblUserUserMail	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserUserMail() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'user_mail';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * ログインID(belongsTo TblUser.user_login)
	 * $textTblSellGeneralCarTblUserUserLogin	= $ctlHelper->getTextTblSellGeneralCarTblUserUserLogin	();
	 * <?php echo $textTblSellGeneralCarTblUserUserLogin	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserUserLogin() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'user_login';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * パスワード(ハッシュ)(belongsTo TblUser.password)
	 * $textTblSellGeneralCarTblUserPassword	= $ctlHelper->getTextTblSellGeneralCarTblUserPassword	();
	 * <?php echo $textTblSellGeneralCarTblUserPassword	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserPassword() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'password';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * パスワード(belongsTo TblUser.user_password)
	 * $textTblSellGeneralCarTblUserUserPassword	= $ctlHelper->getTextTblSellGeneralCarTblUserUserPassword	();
	 * <?php echo $textTblSellGeneralCarTblUserUserPassword	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserUserPassword() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'user_password';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return nl2br(h($value));
	}

	/**
	 * ログイン可能フラグ(belongsTo TblUser.login_flag)
	 * $textTblSellGeneralCarTblUserLoginFlag	= $ctlHelper->getTextTblSellGeneralCarTblUserLoginFlag	();
	 * <?php echo $textTblSellGeneralCarTblUserLoginFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserLoginFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'login_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * ユーザID(belongsTo TblUser.mst_user_group_id)
	 * $textTblSellGeneralCarTblUserMstUserGroupId	= $ctlHelper->getTextTblSellGeneralCarTblUserMstUserGroupId	();
	 * <?php echo $textTblSellGeneralCarTblUserMstUserGroupId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserMstUserGroupId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'mst_user_group_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 販売車両登録数(一般車)(belongsTo TblUser.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblUserTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblUserTblSellGeneralCarCount	();
	 * <?php echo $textTblSellGeneralCarTblUserTblSellGeneralCarCount	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserTblSellGeneralCarCount() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 販売車両登録数(商用車)(belongsTo TblUser.tbl_sell_comm_car_count)
	 * $textTblSellGeneralCarTblUserTblSellCommCarCount	= $ctlHelper->getTextTblSellGeneralCarTblUserTblSellCommCarCount	();
	 * <?php echo $textTblSellGeneralCarTblUserTblSellCommCarCount	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserTblSellCommCarCount() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'tbl_sell_comm_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 備考(belongsTo TblUser.remarks)
	 * $textTblSellGeneralCarTblUserRemarks	= $ctlHelper->getTextTblSellGeneralCarTblUserRemarks	();
	 * <?php echo $textTblSellGeneralCarTblUserRemarks	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserRemarks() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'remarks';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return nl2br(h($value));
	}

	/**
	 * 作成日時(belongsTo TblUser.created)
	 * $textTblSellGeneralCarTblUserCreated	= $ctlHelper->getTextTblSellGeneralCarTblUserCreated	();
	 * <?php echo $textTblSellGeneralCarTblUserCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo TblUser.updated)
	 * $textTblSellGeneralCarTblUserUpdated	= $ctlHelper->getTextTblSellGeneralCarTblUserUpdated	();
	 * <?php echo $textTblSellGeneralCarTblUserUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblUser';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 有効フラグ(belongsTo TblSellGeneralCarPlan.enable_flag)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanEnableFlag	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanEnableFlag	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanEnableFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanEnableFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'enable_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * プラン名(belongsTo TblSellGeneralCarPlan.plan_name)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanPlanName	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanPlanName	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanPlanName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanPlanName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'plan_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 掲載料（KS）/台(belongsTo TblSellGeneralCarPlan.plan_price)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanPlanPrice	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanPlanPrice	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanPlanPrice	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanPlanPrice() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'plan_price';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * QRコード表示フラグ(belongsTo TblSellGeneralCarPlan.qr_code_flag)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanQrCodeFlag	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanQrCodeFlag	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanQrCodeFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanQrCodeFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'qr_code_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * プレミアムタグフラグ(belongsTo TblSellGeneralCarPlan.premium_flag)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanPremiumFlag	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanPremiumFlag	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanPremiumFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanPremiumFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'premium_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * TOPページ表示フラグ(belongsTo TblSellGeneralCarPlan.top_page_view_flag)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanTopPageViewFlag	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanTopPageViewFlag	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanTopPageViewFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanTopPageViewFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'top_page_view_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 検索結果上位表示フラグ(belongsTo TblSellGeneralCarPlan.search_priority_flag)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanSearchPriorityFlag	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanSearchPriorityFlag	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanSearchPriorityFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanSearchPriorityFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'search_priority_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 売り主連絡フラグ(belongsTo TblSellGeneralCarPlan.contact_seller_flag)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanContactSellerFlag	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanContactSellerFlag	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanContactSellerFlag	; ?>
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanContactSellerFlag($true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'contact_seller_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 車両画像の最大登録数(belongsTo TblSellGeneralCarPlan.car_image_count_max)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanCarImageCountMax	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanCarImageCountMax	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanCarImageCountMax	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanCarImageCountMax() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'car_image_count_max';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 掲載期間(Sys)(belongsTo TblSellGeneralCarPlan.sys_public_period)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanSysPublicPeriod	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanSysPublicPeriod	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanSysPublicPeriod	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanSysPublicPeriod() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'sys_public_period';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 掲載期間(View)(belongsTo TblSellGeneralCarPlan.view_public_period)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanViewPublicPeriod	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanViewPublicPeriod	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanViewPublicPeriod	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanViewPublicPeriod() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'view_public_period';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(belongsTo TblSellGeneralCarPlan.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanTblSellGeneralCarCount	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanTblSellGeneralCarCount	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanTblSellGeneralCarCount() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo TblSellGeneralCarPlan.created)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanCreated	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanCreated	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo TblSellGeneralCarPlan.updated)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanUpdated	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanUpdated	();
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * メーカー名(belongsTo TblMaker.maker_name)
	 * $textTblSellGeneralCarTblMakerMakerName	= $ctlHelper->getTextTblSellGeneralCarTblMakerMakerName	();
	 * <?php echo $textTblSellGeneralCarTblMakerMakerName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerMakerName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblMaker';
		$field	= 'maker_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo TblMaker.sort)
	 * $textTblSellGeneralCarTblMakerSort	= $ctlHelper->getTextTblSellGeneralCarTblMakerSort	();
	 * <?php echo $textTblSellGeneralCarTblMakerSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblMaker';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 国マスタID(belongsTo TblMaker.mst_country_id)
	 * $textTblSellGeneralCarTblMakerMstCountryId	= $ctlHelper->getTextTblSellGeneralCarTblMakerMstCountryId	();
	 * <?php echo $textTblSellGeneralCarTblMakerMstCountryId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerMstCountryId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblMaker';
		$field	= 'mst_country_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(belongsTo TblMaker.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblMakerTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblMakerTblSellGeneralCarCount	();
	 * <?php echo $textTblSellGeneralCarTblMakerTblSellGeneralCarCount	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerTblSellGeneralCarCount() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblMaker';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（商用車））(belongsTo TblMaker.tbl_sell_comm_car_count)
	 * $textTblSellGeneralCarTblMakerTblSellCommCarCount	= $ctlHelper->getTextTblSellGeneralCarTblMakerTblSellCommCarCount	();
	 * <?php echo $textTblSellGeneralCarTblMakerTblSellCommCarCount	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerTblSellCommCarCount() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblMaker';
		$field	= 'tbl_sell_comm_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo TblMaker.created)
	 * $textTblSellGeneralCarTblMakerCreated	= $ctlHelper->getTextTblSellGeneralCarTblMakerCreated	();
	 * <?php echo $textTblSellGeneralCarTblMakerCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblMaker';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo TblMaker.updated)
	 * $textTblSellGeneralCarTblMakerUpdated	= $ctlHelper->getTextTblSellGeneralCarTblMakerUpdated	();
	 * <?php echo $textTblSellGeneralCarTblMakerUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblMaker';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * メーカーID(belongsTo TblGeneralCarName.tbl_maker_id)
	 * $textTblSellGeneralCarTblGeneralCarNameTblMakerId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameTblMakerId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameTblMakerId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameTblMakerId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarName';
		$field	= 'tbl_maker_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 車種名（一般車）(belongsTo TblGeneralCarName.car_name)
	 * $textTblSellGeneralCarTblGeneralCarNameCarName	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameCarName	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameCarName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameCarName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarName';
		$field	= 'car_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(belongsTo TblGeneralCarName.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarNameTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameTblSellGeneralCarCount	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameTblSellGeneralCarCount	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameTblSellGeneralCarCount() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarName';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 国マスタID（従属項目）(belongsTo TblGeneralCarName.mst_country_id)
	 * $textTblSellGeneralCarTblGeneralCarNameMstCountryId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameMstCountryId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameMstCountryId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameMstCountryId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarName';
		$field	= 'mst_country_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo TblGeneralCarName.created)
	 * $textTblSellGeneralCarTblGeneralCarNameCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameCreated	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarName';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo TblGeneralCarName.updated)
	 * $textTblSellGeneralCarTblGeneralCarNameUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameUpdated	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarName';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 車種名ID(belongsTo TblGeneralCarCode.tbl_general_car_name_id)
	 * $textTblSellGeneralCarTblGeneralCarCodeTblGeneralCarNameId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeTblGeneralCarNameId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeTblGeneralCarNameId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeTblGeneralCarNameId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarCode';
		$field	= 'tbl_general_car_name_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 枝番(belongsTo TblGeneralCarCode.branch_no)
	 * $textTblSellGeneralCarTblGeneralCarCodeBranchNo	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeBranchNo	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeBranchNo	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeBranchNo() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarCode';
		$field	= 'branch_no';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 型式(belongsTo TblGeneralCarCode.car_code)
	 * $textTblSellGeneralCarTblGeneralCarCodeCarCode	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeCarCode	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeCarCode	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeCarCode() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarCode';
		$field	= 'car_code';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(belongsTo TblGeneralCarCode.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarCodeTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeTblSellGeneralCarCount	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeTblSellGeneralCarCount	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeTblSellGeneralCarCount() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarCode';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * メーカーID（従属項目）(belongsTo TblGeneralCarCode.tbl_maker_id)
	 * $textTblSellGeneralCarTblGeneralCarCodeTblMakerId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeTblMakerId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeTblMakerId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeTblMakerId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarCode';
		$field	= 'tbl_maker_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 国マスタID（従属項目）(belongsTo TblGeneralCarCode.mst_country_id)
	 * $textTblSellGeneralCarTblGeneralCarCodeMstCountryId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeMstCountryId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeMstCountryId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeMstCountryId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarCode';
		$field	= 'mst_country_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo TblGeneralCarCode.created)
	 * $textTblSellGeneralCarTblGeneralCarCodeCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeCreated	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarCode';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo TblGeneralCarCode.updated)
	 * $textTblSellGeneralCarTblGeneralCarCodeUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeUpdated	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarCode';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstDriveType.name)
	 * $textTblSellGeneralCarMstDriveTypeName	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeName	();
	 * <?php echo $textTblSellGeneralCarMstDriveTypeName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDriveType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstDriveType.sort)
	 * $textTblSellGeneralCarMstDriveTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeSort	();
	 * <?php echo $textTblSellGeneralCarMstDriveTypeSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDriveType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstDriveType.sys_name)
	 * $textTblSellGeneralCarMstDriveTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeSysName	();
	 * <?php echo $textTblSellGeneralCarMstDriveTypeSysName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeSysName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDriveType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstDriveType.options)
	 * $textTblSellGeneralCarMstDriveTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeOptions	();
	 * <?php echo $textTblSellGeneralCarMstDriveTypeOptions	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeOptions() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDriveType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstDriveType.created)
	 * $textTblSellGeneralCarMstDriveTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeCreated	();
	 * <?php echo $textTblSellGeneralCarMstDriveTypeCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDriveType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstDriveType.updated)
	 * $textTblSellGeneralCarMstDriveTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeUpdated	();
	 * <?php echo $textTblSellGeneralCarMstDriveTypeUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDriveType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstDriveType.deleted)
	 * $textTblSellGeneralCarMstDriveTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeDeleted	();
	 * <?php echo $textTblSellGeneralCarMstDriveTypeDeleted	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeDeleted() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDriveType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstSteeringType.name)
	 * $textTblSellGeneralCarMstSteeringTypeName	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeName	();
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSteeringType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstSteeringType.sort)
	 * $textTblSellGeneralCarMstSteeringTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeSort	();
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSteeringType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstSteeringType.sys_name)
	 * $textTblSellGeneralCarMstSteeringTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeSysName	();
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeSysName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeSysName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSteeringType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstSteeringType.options)
	 * $textTblSellGeneralCarMstSteeringTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeOptions	();
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeOptions	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeOptions() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSteeringType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstSteeringType.created)
	 * $textTblSellGeneralCarMstSteeringTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeCreated	();
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSteeringType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstSteeringType.updated)
	 * $textTblSellGeneralCarMstSteeringTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeUpdated	();
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSteeringType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstSteeringType.deleted)
	 * $textTblSellGeneralCarMstSteeringTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeDeleted	();
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeDeleted	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeDeleted() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSteeringType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstTransmissionType.name)
	 * $textTblSellGeneralCarMstTransmissionTypeName	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeName	();
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTransmissionType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstTransmissionType.sort)
	 * $textTblSellGeneralCarMstTransmissionTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeSort	();
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTransmissionType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstTransmissionType.sys_name)
	 * $textTblSellGeneralCarMstTransmissionTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeSysName	();
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeSysName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeSysName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTransmissionType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstTransmissionType.options)
	 * $textTblSellGeneralCarMstTransmissionTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeOptions	();
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeOptions	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeOptions() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTransmissionType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstTransmissionType.created)
	 * $textTblSellGeneralCarMstTransmissionTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeCreated	();
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTransmissionType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstTransmissionType.updated)
	 * $textTblSellGeneralCarMstTransmissionTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeUpdated	();
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTransmissionType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstTransmissionType.deleted)
	 * $textTblSellGeneralCarMstTransmissionTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeDeleted	();
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeDeleted	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeDeleted() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTransmissionType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstBodyColor.name)
	 * $textTblSellGeneralCarMstBodyColorName	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorName	();
	 * <?php echo $textTblSellGeneralCarMstBodyColorName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyColor';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstBodyColor.sort)
	 * $textTblSellGeneralCarMstBodyColorSort	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorSort	();
	 * <?php echo $textTblSellGeneralCarMstBodyColorSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyColor';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstBodyColor.sys_name)
	 * $textTblSellGeneralCarMstBodyColorSysName	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorSysName	();
	 * <?php echo $textTblSellGeneralCarMstBodyColorSysName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorSysName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyColor';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstBodyColor.options)
	 * $textTblSellGeneralCarMstBodyColorOptions	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorOptions	();
	 * <?php echo $textTblSellGeneralCarMstBodyColorOptions	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorOptions() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyColor';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstBodyColor.created)
	 * $textTblSellGeneralCarMstBodyColorCreated	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorCreated	();
	 * <?php echo $textTblSellGeneralCarMstBodyColorCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyColor';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstBodyColor.updated)
	 * $textTblSellGeneralCarMstBodyColorUpdated	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorUpdated	();
	 * <?php echo $textTblSellGeneralCarMstBodyColorUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyColor';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstBodyColor.deleted)
	 * $textTblSellGeneralCarMstBodyColorDeleted	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorDeleted	();
	 * <?php echo $textTblSellGeneralCarMstBodyColorDeleted	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorDeleted() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyColor';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstFuelType.name)
	 * $textTblSellGeneralCarMstFuelTypeName	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeName	();
	 * <?php echo $textTblSellGeneralCarMstFuelTypeName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstFuelType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstFuelType.sort)
	 * $textTblSellGeneralCarMstFuelTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeSort	();
	 * <?php echo $textTblSellGeneralCarMstFuelTypeSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstFuelType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstFuelType.sys_name)
	 * $textTblSellGeneralCarMstFuelTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeSysName	();
	 * <?php echo $textTblSellGeneralCarMstFuelTypeSysName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeSysName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstFuelType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstFuelType.options)
	 * $textTblSellGeneralCarMstFuelTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeOptions	();
	 * <?php echo $textTblSellGeneralCarMstFuelTypeOptions	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeOptions() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstFuelType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstFuelType.created)
	 * $textTblSellGeneralCarMstFuelTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeCreated	();
	 * <?php echo $textTblSellGeneralCarMstFuelTypeCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstFuelType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstFuelType.updated)
	 * $textTblSellGeneralCarMstFuelTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeUpdated	();
	 * <?php echo $textTblSellGeneralCarMstFuelTypeUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstFuelType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstFuelType.deleted)
	 * $textTblSellGeneralCarMstFuelTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeDeleted	();
	 * <?php echo $textTblSellGeneralCarMstFuelTypeDeleted	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeDeleted() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstFuelType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstTownShip.name)
	 * $textTblSellGeneralCarMstTownShipName	= $ctlHelper->getTextTblSellGeneralCarMstTownShipName	();
	 * <?php echo $textTblSellGeneralCarMstTownShipName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTownShip';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstTownShip.sort)
	 * $textTblSellGeneralCarMstTownShipSort	= $ctlHelper->getTextTblSellGeneralCarMstTownShipSort	();
	 * <?php echo $textTblSellGeneralCarMstTownShipSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTownShip';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstTownShip.sys_name)
	 * $textTblSellGeneralCarMstTownShipSysName	= $ctlHelper->getTextTblSellGeneralCarMstTownShipSysName	();
	 * <?php echo $textTblSellGeneralCarMstTownShipSysName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipSysName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTownShip';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstTownShip.options)
	 * $textTblSellGeneralCarMstTownShipOptions	= $ctlHelper->getTextTblSellGeneralCarMstTownShipOptions	();
	 * <?php echo $textTblSellGeneralCarMstTownShipOptions	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipOptions() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTownShip';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstTownShip.created)
	 * $textTblSellGeneralCarMstTownShipCreated	= $ctlHelper->getTextTblSellGeneralCarMstTownShipCreated	();
	 * <?php echo $textTblSellGeneralCarMstTownShipCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTownShip';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstTownShip.updated)
	 * $textTblSellGeneralCarMstTownShipUpdated	= $ctlHelper->getTextTblSellGeneralCarMstTownShipUpdated	();
	 * <?php echo $textTblSellGeneralCarMstTownShipUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTownShip';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstTownShip.deleted)
	 * $textTblSellGeneralCarMstTownShipDeleted	= $ctlHelper->getTextTblSellGeneralCarMstTownShipDeleted	();
	 * <?php echo $textTblSellGeneralCarMstTownShipDeleted	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipDeleted() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstTownShip';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstEnginePower.name)
	 * $textTblSellGeneralCarMstEnginePowerName	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerName	();
	 * <?php echo $textTblSellGeneralCarMstEnginePowerName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstEnginePower';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstEnginePower.sort)
	 * $textTblSellGeneralCarMstEnginePowerSort	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerSort	();
	 * <?php echo $textTblSellGeneralCarMstEnginePowerSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstEnginePower';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstEnginePower.sys_name)
	 * $textTblSellGeneralCarMstEnginePowerSysName	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerSysName	();
	 * <?php echo $textTblSellGeneralCarMstEnginePowerSysName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerSysName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstEnginePower';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstEnginePower.options)
	 * $textTblSellGeneralCarMstEnginePowerOptions	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerOptions	();
	 * <?php echo $textTblSellGeneralCarMstEnginePowerOptions	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerOptions() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstEnginePower';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstEnginePower.created)
	 * $textTblSellGeneralCarMstEnginePowerCreated	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerCreated	();
	 * <?php echo $textTblSellGeneralCarMstEnginePowerCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstEnginePower';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstEnginePower.updated)
	 * $textTblSellGeneralCarMstEnginePowerUpdated	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerUpdated	();
	 * <?php echo $textTblSellGeneralCarMstEnginePowerUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstEnginePower';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstEnginePower.deleted)
	 * $textTblSellGeneralCarMstEnginePowerDeleted	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerDeleted	();
	 * <?php echo $textTblSellGeneralCarMstEnginePowerDeleted	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerDeleted() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstEnginePower';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstDoorType.name)
	 * $textTblSellGeneralCarMstDoorTypeName	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeName	();
	 * <?php echo $textTblSellGeneralCarMstDoorTypeName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDoorType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstDoorType.sort)
	 * $textTblSellGeneralCarMstDoorTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeSort	();
	 * <?php echo $textTblSellGeneralCarMstDoorTypeSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDoorType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstDoorType.sys_name)
	 * $textTblSellGeneralCarMstDoorTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeSysName	();
	 * <?php echo $textTblSellGeneralCarMstDoorTypeSysName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeSysName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDoorType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstDoorType.options)
	 * $textTblSellGeneralCarMstDoorTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeOptions	();
	 * <?php echo $textTblSellGeneralCarMstDoorTypeOptions	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeOptions() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDoorType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstDoorType.created)
	 * $textTblSellGeneralCarMstDoorTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeCreated	();
	 * <?php echo $textTblSellGeneralCarMstDoorTypeCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDoorType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstDoorType.updated)
	 * $textTblSellGeneralCarMstDoorTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeUpdated	();
	 * <?php echo $textTblSellGeneralCarMstDoorTypeUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDoorType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstDoorType.deleted)
	 * $textTblSellGeneralCarMstDoorTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeDeleted	();
	 * <?php echo $textTblSellGeneralCarMstDoorTypeDeleted	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeDeleted() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstDoorType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstSeatsType.name)
	 * $textTblSellGeneralCarMstSeatsTypeName	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeName	();
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSeatsType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstSeatsType.sort)
	 * $textTblSellGeneralCarMstSeatsTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeSort	();
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSeatsType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstSeatsType.sys_name)
	 * $textTblSellGeneralCarMstSeatsTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeSysName	();
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeSysName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeSysName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSeatsType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstSeatsType.options)
	 * $textTblSellGeneralCarMstSeatsTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeOptions	();
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeOptions	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeOptions() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSeatsType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstSeatsType.created)
	 * $textTblSellGeneralCarMstSeatsTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeCreated	();
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSeatsType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstSeatsType.updated)
	 * $textTblSellGeneralCarMstSeatsTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeUpdated	();
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSeatsType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstSeatsType.deleted)
	 * $textTblSellGeneralCarMstSeatsTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeDeleted	();
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeDeleted	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeDeleted() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstSeatsType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstLicenceType.name)
	 * $textTblSellGeneralCarMstLicenceTypeName	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeName	();
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstLicenceType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstLicenceType.sort)
	 * $textTblSellGeneralCarMstLicenceTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeSort	();
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstLicenceType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstLicenceType.sys_name)
	 * $textTblSellGeneralCarMstLicenceTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeSysName	();
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeSysName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeSysName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstLicenceType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstLicenceType.options)
	 * $textTblSellGeneralCarMstLicenceTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeOptions	();
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeOptions	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeOptions() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstLicenceType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstLicenceType.created)
	 * $textTblSellGeneralCarMstLicenceTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeCreated	();
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstLicenceType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstLicenceType.updated)
	 * $textTblSellGeneralCarMstLicenceTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeUpdated	();
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstLicenceType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstLicenceType.deleted)
	 * $textTblSellGeneralCarMstLicenceTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeDeleted	();
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeDeleted	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeDeleted() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstLicenceType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstBodyType.name)
	 * $textTblSellGeneralCarMstBodyTypeName	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeName	();
	 * <?php echo $textTblSellGeneralCarMstBodyTypeName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstBodyType.sort)
	 * $textTblSellGeneralCarMstBodyTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeSort	();
	 * <?php echo $textTblSellGeneralCarMstBodyTypeSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstBodyType.sys_name)
	 * $textTblSellGeneralCarMstBodyTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeSysName	();
	 * <?php echo $textTblSellGeneralCarMstBodyTypeSysName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeSysName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstBodyType.options)
	 * $textTblSellGeneralCarMstBodyTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeOptions	();
	 * <?php echo $textTblSellGeneralCarMstBodyTypeOptions	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeOptions() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstBodyType.created)
	 * $textTblSellGeneralCarMstBodyTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeCreated	();
	 * <?php echo $textTblSellGeneralCarMstBodyTypeCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstBodyType.updated)
	 * $textTblSellGeneralCarMstBodyTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeUpdated	();
	 * <?php echo $textTblSellGeneralCarMstBodyTypeUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstBodyType.deleted)
	 * $textTblSellGeneralCarMstBodyTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeDeleted	();
	 * <?php echo $textTblSellGeneralCarMstBodyTypeDeleted	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeDeleted() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstBodyType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstPlateColor.name)
	 * $textTblSellGeneralCarMstPlateColorName	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorName	();
	 * <?php echo $textTblSellGeneralCarMstPlateColorName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstPlateColor';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstPlateColor.sort)
	 * $textTblSellGeneralCarMstPlateColorSort	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorSort	();
	 * <?php echo $textTblSellGeneralCarMstPlateColorSort	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorSort() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstPlateColor';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstPlateColor.sys_name)
	 * $textTblSellGeneralCarMstPlateColorSysName	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorSysName	();
	 * <?php echo $textTblSellGeneralCarMstPlateColorSysName	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorSysName() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstPlateColor';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstPlateColor.options)
	 * $textTblSellGeneralCarMstPlateColorOptions	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorOptions	();
	 * <?php echo $textTblSellGeneralCarMstPlateColorOptions	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorOptions() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstPlateColor';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstPlateColor.created)
	 * $textTblSellGeneralCarMstPlateColorCreated	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorCreated	();
	 * <?php echo $textTblSellGeneralCarMstPlateColorCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstPlateColor';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstPlateColor.updated)
	 * $textTblSellGeneralCarMstPlateColorUpdated	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorUpdated	();
	 * <?php echo $textTblSellGeneralCarMstPlateColorUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstPlateColor';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstPlateColor.deleted)
	 * $textTblSellGeneralCarMstPlateColorDeleted	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorDeleted	();
	 * <?php echo $textTblSellGeneralCarMstPlateColorDeleted	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorDeleted() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'MstPlateColor';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 型式ID（一般車）(belongsTo TblGeneralCarInfo.tbl_general_car_code_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoTblGeneralCarCodeId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoTblGeneralCarCodeId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoTblGeneralCarCodeId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoTblGeneralCarCodeId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarInfo';
		$field	= 'tbl_general_car_code_id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 枝番(belongsTo TblGeneralCarInfo.branch_no)
	 * $textTblSellGeneralCarTblGeneralCarInfoBranchNo	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoBranchNo	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoBranchNo	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoBranchNo() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarInfo';
		$field	= 'branch_no';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 排気量ID(belongsTo TblGeneralCarInfo.mst_engine_power_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoMstEnginePowerId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoMstEnginePowerId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoMstEnginePowerId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoMstEnginePowerId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarInfo';
		$field	= 'mst_engine_power_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 駆動方式ID(belongsTo TblGeneralCarInfo.mst_drive_type_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoMstDriveTypeId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoMstDriveTypeId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoMstDriveTypeId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoMstDriveTypeId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarInfo';
		$field	= 'mst_drive_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 形状ID(belongsTo TblGeneralCarInfo.mst_body_type_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoMstBodyTypeId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoMstBodyTypeId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoMstBodyTypeId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoMstBodyTypeId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarInfo';
		$field	= 'mst_body_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(belongsTo TblGeneralCarInfo.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarInfoTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoTblSellGeneralCarCount	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoTblSellGeneralCarCount	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoTblSellGeneralCarCount() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarInfo';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 車種名ID（従属項目）(belongsTo TblGeneralCarInfo.tbl_general_car_name_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoTblGeneralCarNameId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoTblGeneralCarNameId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoTblGeneralCarNameId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoTblGeneralCarNameId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarInfo';
		$field	= 'tbl_general_car_name_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * メーカーID（従属項目）(belongsTo TblGeneralCarInfo.tbl_maker_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoTblMakerId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoTblMakerId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoTblMakerId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoTblMakerId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarInfo';
		$field	= 'tbl_maker_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 国マスタID（従属項目）(belongsTo TblGeneralCarInfo.mst_country_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoMstCountryId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoMstCountryId	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoMstCountryId	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoMstCountryId() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarInfo';
		$field	= 'mst_country_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo TblGeneralCarInfo.created)
	 * $textTblSellGeneralCarTblGeneralCarInfoCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoCreated	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoCreated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoCreated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarInfo';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo TblGeneralCarInfo.updated)
	 * $textTblSellGeneralCarTblGeneralCarInfoUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoUpdated	();
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoUpdated	; ?>
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoUpdated() {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarInfo';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * hasManyデータカウント（TblSellGeneralCarImage）
	 * $cnt = $ctlHelper->getDataTblSellGeneralCarTblSellGeneralCarImageCount();
	 * @return int
	 */
	public function getDataTblSellGeneralCarTblSellGeneralCarImageCount() {
		if (isset($this->dataTblSellGeneralCar['TblSellGeneralCarImage'])) {
			return count($this->dataTblSellGeneralCar['TblSellGeneralCarImage']);
		} else {
			return 0;
		}
	}

	/**
	 * hasMany Displays (TblSellGeneralCarImage）
	 * $textTblSellGeneralCarTblSellGeneralCarImageDisplay = $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageDisplay();
	 * <?php $textTblSellGeneralCarTblSellGeneralCarImageDisplay; ?>
	 * @param string
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageDisplay($display = 'image_name') {
		$data	= $this->dataTblSellGeneralCar;
		$path	= 'TblSellGeneralCarImage.{n}.' . $display;
		$tmp	= Hash::extract($data, $path);
		
		return join(",\n", $tmp);
	}

	/**
	 * プライマリID(hasMany TblSellGeneralCarImage.{n}.id)
	 * $textTblSellGeneralCarTblSellGeneralCarImageId	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageId	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarImageId	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageId($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarImage';
		$field	= 'id';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 販売車両情報ID（一般車）(hasMany TblSellGeneralCarImage.{n}.tbl_sell_general_car_id)
	 * $textTblSellGeneralCarTblSellGeneralCarImageTblSellGeneralCarId	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageTblSellGeneralCarId	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarImageTblSellGeneralCarId	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageTblSellGeneralCarId($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarImage';
		$field	= 'tbl_sell_general_car_id';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 枝番(hasMany TblSellGeneralCarImage.{n}.branch_no)
	 * $textTblSellGeneralCarTblSellGeneralCarImageBranchNo	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageBranchNo	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarImageBranchNo	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageBranchNo($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarImage';
		$field	= 'branch_no';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * イメージファイル名(hasMany TblSellGeneralCarImage.{n}.image_name)
	 * $textTblSellGeneralCarTblSellGeneralCarImageImageName	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageImageName	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarImageImageName	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageImageName($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarImage';
		$field	= 'image_name';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(hasMany TblSellGeneralCarImage.{n}.created)
	 * $textTblSellGeneralCarTblSellGeneralCarImageCreated	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageCreated	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarImageCreated	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageCreated($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarImage';
		$field	= 'created';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(hasMany TblSellGeneralCarImage.{n}.updated)
	 * $textTblSellGeneralCarTblSellGeneralCarImageUpdated	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageUpdated	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarImageUpdated	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageUpdated($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblSellGeneralCarImage';
		$field	= 'updated';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * hasAndBelongsToManyデータカウント（TblGeneralCarComfort）
	 * $cnt = $ctlHelper->getDataTblSellGeneralCarTblGeneralCarComfortCount();
	 * @return int
	 */
	public function getDataTblSellGeneralCarTblGeneralCarComfortCount() {
		if (isset($this->dataTblSellGeneralCar['TblGeneralCarComfort'])) {
			return count($this->dataTblSellGeneralCar['TblGeneralCarComfort']);
		} else {
			return 0;
		}
	}

	/**
	 * hasAndBelongsToMany Displays (TblGeneralCarComfort）
	 * $textTblSellGeneralCarTblGeneralCarComfortDisplay = $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortDisplay();
	 * <?php $textTblSellGeneralCarTblGeneralCarComfortDisplay; ?>
	 * @param string
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortDisplay($display = 'name') {
		$data	= $this->dataTblSellGeneralCar;
		$path	= 'TblGeneralCarComfort.{n}.' . $display;
		$tmp	= Hash::extract($data, $path);
		
		return join(",\n", $tmp);
	}

	/**
	 * プライマリID(hasAndBelongsToMany TblGeneralCarComfort.{n}.id)
	 * $textTblSellGeneralCarTblGeneralCarComfortId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortId	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarComfortId	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortId($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarComfort';
		$field	= 'id';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 快適装備名(hasAndBelongsToMany TblGeneralCarComfort.{n}.name)
	 * $textTblSellGeneralCarTblGeneralCarComfortName	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortName	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarComfortName	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortName($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarComfort';
		$field	= 'name';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(hasAndBelongsToMany TblGeneralCarComfort.{n}.sort)
	 * $textTblSellGeneralCarTblGeneralCarComfortSort	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortSort	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarComfortSort	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortSort($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarComfort';
		$field	= 'sort';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(hasAndBelongsToMany TblGeneralCarComfort.{n}.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarComfortTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortTblSellGeneralCarCount	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarComfortTblSellGeneralCarCount	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortTblSellGeneralCarCount($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarComfort';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(hasAndBelongsToMany TblGeneralCarComfort.{n}.created)
	 * $textTblSellGeneralCarTblGeneralCarComfortCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortCreated	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarComfortCreated	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortCreated($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarComfort';
		$field	= 'created';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(hasAndBelongsToMany TblGeneralCarComfort.{n}.updated)
	 * $textTblSellGeneralCarTblGeneralCarComfortUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortUpdated	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarComfortUpdated	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortUpdated($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarComfort';
		$field	= 'updated';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * hasAndBelongsToManyデータカウント（TblGeneralCarFeature）
	 * $cnt = $ctlHelper->getDataTblSellGeneralCarTblGeneralCarFeatureCount();
	 * @return int
	 */
	public function getDataTblSellGeneralCarTblGeneralCarFeatureCount() {
		if (isset($this->dataTblSellGeneralCar['TblGeneralCarFeature'])) {
			return count($this->dataTblSellGeneralCar['TblGeneralCarFeature']);
		} else {
			return 0;
		}
	}

	/**
	 * hasAndBelongsToMany Displays (TblGeneralCarFeature）
	 * $textTblSellGeneralCarTblGeneralCarFeatureDisplay = $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureDisplay();
	 * <?php $textTblSellGeneralCarTblGeneralCarFeatureDisplay; ?>
	 * @param string
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureDisplay($display = 'name') {
		$data	= $this->dataTblSellGeneralCar;
		$path	= 'TblGeneralCarFeature.{n}.' . $display;
		$tmp	= Hash::extract($data, $path);
		
		return join(",\n", $tmp);
	}

	/**
	 * プライマリID(hasAndBelongsToMany TblGeneralCarFeature.{n}.id)
	 * $textTblSellGeneralCarTblGeneralCarFeatureId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureId	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarFeatureId	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureId($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarFeature';
		$field	= 'id';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 標準装備名(hasAndBelongsToMany TblGeneralCarFeature.{n}.name)
	 * $textTblSellGeneralCarTblGeneralCarFeatureName	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureName	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarFeatureName	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureName($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarFeature';
		$field	= 'name';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(hasAndBelongsToMany TblGeneralCarFeature.{n}.sort)
	 * $textTblSellGeneralCarTblGeneralCarFeatureSort	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureSort	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarFeatureSort	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureSort($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarFeature';
		$field	= 'sort';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(hasAndBelongsToMany TblGeneralCarFeature.{n}.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarFeatureTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureTblSellGeneralCarCount	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarFeatureTblSellGeneralCarCount	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureTblSellGeneralCarCount($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarFeature';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(hasAndBelongsToMany TblGeneralCarFeature.{n}.created)
	 * $textTblSellGeneralCarTblGeneralCarFeatureCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureCreated	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarFeatureCreated	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureCreated($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarFeature';
		$field	= 'created';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(hasAndBelongsToMany TblGeneralCarFeature.{n}.updated)
	 * $textTblSellGeneralCarTblGeneralCarFeatureUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureUpdated	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarFeatureUpdated	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureUpdated($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarFeature';
		$field	= 'updated';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * hasAndBelongsToManyデータカウント（TblGeneralCarSafety）
	 * $cnt = $ctlHelper->getDataTblSellGeneralCarTblGeneralCarSafetyCount();
	 * @return int
	 */
	public function getDataTblSellGeneralCarTblGeneralCarSafetyCount() {
		if (isset($this->dataTblSellGeneralCar['TblGeneralCarSafety'])) {
			return count($this->dataTblSellGeneralCar['TblGeneralCarSafety']);
		} else {
			return 0;
		}
	}

	/**
	 * hasAndBelongsToMany Displays (TblGeneralCarSafety）
	 * $textTblSellGeneralCarTblGeneralCarSafetyDisplay = $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetyDisplay();
	 * <?php $textTblSellGeneralCarTblGeneralCarSafetyDisplay; ?>
	 * @param string
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetyDisplay($display = 'name') {
		$data	= $this->dataTblSellGeneralCar;
		$path	= 'TblGeneralCarSafety.{n}.' . $display;
		$tmp	= Hash::extract($data, $path);
		
		return join(",\n", $tmp);
	}

	/**
	 * プライマリID(hasAndBelongsToMany TblGeneralCarSafety.{n}.id)
	 * $textTblSellGeneralCarTblGeneralCarSafetyId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetyId	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarSafetyId	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetyId($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarSafety';
		$field	= 'id';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 安全装備名(hasAndBelongsToMany TblGeneralCarSafety.{n}.name)
	 * $textTblSellGeneralCarTblGeneralCarSafetyName	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetyName	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarSafetyName	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetyName($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarSafety';
		$field	= 'name';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(hasAndBelongsToMany TblGeneralCarSafety.{n}.sort)
	 * $textTblSellGeneralCarTblGeneralCarSafetySort	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetySort	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarSafetySort	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetySort($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarSafety';
		$field	= 'sort';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(hasAndBelongsToMany TblGeneralCarSafety.{n}.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarSafetyTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetyTblSellGeneralCarCount	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarSafetyTblSellGeneralCarCount	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetyTblSellGeneralCarCount($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarSafety';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(hasAndBelongsToMany TblGeneralCarSafety.{n}.created)
	 * $textTblSellGeneralCarTblGeneralCarSafetyCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetyCreated	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarSafetyCreated	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetyCreated($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarSafety';
		$field	= 'created';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(hasAndBelongsToMany TblGeneralCarSafety.{n}.updated)
	 * $textTblSellGeneralCarTblGeneralCarSafetyUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetyUpdated	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarSafetyUpdated	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetyUpdated($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarSafety';
		$field	= 'updated';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * hasAndBelongsToManyデータカウント（TblGeneralCarWindow）
	 * $cnt = $ctlHelper->getDataTblSellGeneralCarTblGeneralCarWindowCount();
	 * @return int
	 */
	public function getDataTblSellGeneralCarTblGeneralCarWindowCount() {
		if (isset($this->dataTblSellGeneralCar['TblGeneralCarWindow'])) {
			return count($this->dataTblSellGeneralCar['TblGeneralCarWindow']);
		} else {
			return 0;
		}
	}

	/**
	 * hasAndBelongsToMany Displays (TblGeneralCarWindow）
	 * $textTblSellGeneralCarTblGeneralCarWindowDisplay = $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowDisplay();
	 * <?php $textTblSellGeneralCarTblGeneralCarWindowDisplay; ?>
	 * @param string
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowDisplay($display = 'name') {
		$data	= $this->dataTblSellGeneralCar;
		$path	= 'TblGeneralCarWindow.{n}.' . $display;
		$tmp	= Hash::extract($data, $path);
		
		return join(",\n", $tmp);
	}

	/**
	 * プライマリID(hasAndBelongsToMany TblGeneralCarWindow.{n}.id)
	 * $textTblSellGeneralCarTblGeneralCarWindowId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowId	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarWindowId	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowId($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarWindow';
		$field	= 'id';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 窓装備名(hasAndBelongsToMany TblGeneralCarWindow.{n}.name)
	 * $textTblSellGeneralCarTblGeneralCarWindowName	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowName	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarWindowName	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowName($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarWindow';
		$field	= 'name';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(hasAndBelongsToMany TblGeneralCarWindow.{n}.sort)
	 * $textTblSellGeneralCarTblGeneralCarWindowSort	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowSort	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarWindowSort	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowSort($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarWindow';
		$field	= 'sort';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(hasAndBelongsToMany TblGeneralCarWindow.{n}.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarWindowTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowTblSellGeneralCarCount	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarWindowTblSellGeneralCarCount	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowTblSellGeneralCarCount($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarWindow';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(hasAndBelongsToMany TblGeneralCarWindow.{n}.created)
	 * $textTblSellGeneralCarTblGeneralCarWindowCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowCreated	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarWindowCreated	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowCreated($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarWindow';
		$field	= 'created';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(hasAndBelongsToMany TblGeneralCarWindow.{n}.updated)
	 * $textTblSellGeneralCarTblGeneralCarWindowUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowUpdated	($cnt = 0);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarWindowUpdated	; ?>
	 * @param int $cnt
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowUpdated($cnt = 0) {
		$data	= $this->dataTblSellGeneralCar;
		$alias	= 'TblGeneralCarWindow';
		$field	= 'updated';
		$path	= $alias . '.' . $cnt . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

}