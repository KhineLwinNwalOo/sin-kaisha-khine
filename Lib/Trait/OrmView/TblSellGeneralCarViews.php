<?php 


trait TblSellGeneralCarViews {

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
	 * データカウント（TblSellGeneralCar）
	 * $cnt = $ctlHelper->getDataTblSellGeneralCarCount();
	 * @return int
	 */
	public function getDataTblSellGeneralCarCount() {
		return count($this->dataTblSellGeneralCar);
	}

	/**
	 * プライマリID(Ref No)
	 * $textTblSellGeneralCarId	= $ctlHelper->getTextTblSellGeneralCarId	($i);
	 * <?php echo $textTblSellGeneralCarId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * ユーザID
	 * $textTblSellGeneralCarTblUserId	= $ctlHelper->getTextTblSellGeneralCarTblUserId	($i);
	 * <?php echo $textTblSellGeneralCarTblUserId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'tbl_user_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 販売車両プランID（一般車）
	 * $textTblSellGeneralCarTblSellGeneralCarPlanId	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanId	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'tbl_sell_general_car_plan_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 公開フラグ
	 * $textTblSellGeneralCarPublicFlag	= $ctlHelper->getTextTblSellGeneralCarPublicFlag	($i);
	 * <?php echo $textTblSellGeneralCarPublicFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarPublicFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'public_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 公開開始日
	 * $textTblSellGeneralCarPublicStartDate	= $ctlHelper->getTextTblSellGeneralCarPublicStartDate	($i);
	 * <?php echo $textTblSellGeneralCarPublicStartDate	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarPublicStartDate($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'public_start_date';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 公開終了日
	 * $textTblSellGeneralCarPublicEndDate	= $ctlHelper->getTextTblSellGeneralCarPublicEndDate	($i);
	 * <?php echo $textTblSellGeneralCarPublicEndDate	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarPublicEndDate($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'public_end_date';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * QRコード表示フラグ
	 * $textTblSellGeneralCarQrCodeFlag	= $ctlHelper->getTextTblSellGeneralCarQrCodeFlag	($i);
	 * <?php echo $textTblSellGeneralCarQrCodeFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarQrCodeFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'qr_code_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * NewArrivalsフラグ
	 * $textTblSellGeneralCarNewArrivalsFlag	= $ctlHelper->getTextTblSellGeneralCarNewArrivalsFlag	($i);
	 * <?php echo $textTblSellGeneralCarNewArrivalsFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarNewArrivalsFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'new_arrivals_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * BestDealフラグ
	 * $textTblSellGeneralCarBestDealFlag	= $ctlHelper->getTextTblSellGeneralCarBestDealFlag	($i);
	 * <?php echo $textTblSellGeneralCarBestDealFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarBestDealFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'best_deal_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * Recommendedフラグ
	 * $textTblSellGeneralCarRecommendedFlag	= $ctlHelper->getTextTblSellGeneralCarRecommendedFlag	($i);
	 * <?php echo $textTblSellGeneralCarRecommendedFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarRecommendedFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'recommended_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * プレミアムタグフラグ
	 * $textTblSellGeneralCarPremiumFlag	= $ctlHelper->getTextTblSellGeneralCarPremiumFlag	($i);
	 * <?php echo $textTblSellGeneralCarPremiumFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarPremiumFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'premium_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * TOPページ表示フラグ
	 * $textTblSellGeneralCarTopPageViewFlag	= $ctlHelper->getTextTblSellGeneralCarTopPageViewFlag	($i);
	 * <?php echo $textTblSellGeneralCarTopPageViewFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTopPageViewFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'top_page_view_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 検索結果上位表示フラグ
	 * $textTblSellGeneralCarSearchPriorityFlag	= $ctlHelper->getTextTblSellGeneralCarSearchPriorityFlag	($i);
	 * <?php echo $textTblSellGeneralCarSearchPriorityFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarSearchPriorityFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'search_priority_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 売り主連絡フラグ
	 * $textTblSellGeneralCarContactSellerFlag	= $ctlHelper->getTextTblSellGeneralCarContactSellerFlag	($i);
	 * <?php echo $textTblSellGeneralCarContactSellerFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarContactSellerFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'contact_seller_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 車両画像の最大登録数
	 * $textTblSellGeneralCarCarImageCountMax	= $ctlHelper->getTextTblSellGeneralCarCarImageCountMax	($i);
	 * <?php echo $textTblSellGeneralCarCarImageCountMax	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarCarImageCountMax($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'car_image_count_max';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * メーカーID
	 * $textTblSellGeneralCarTblMakerId	= $ctlHelper->getTextTblSellGeneralCarTblMakerId	($i);
	 * <?php echo $textTblSellGeneralCarTblMakerId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'tbl_maker_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 車種名ID
	 * $textTblSellGeneralCarTblGeneralCarNameId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'tbl_general_car_name_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 型式ID（一般車）
	 * $textTblSellGeneralCarTblGeneralCarCodeId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'tbl_general_car_code_id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 年式
	 * $textTblSellGeneralCarModelYear	= $ctlHelper->getTextTblSellGeneralCarModelYear	($i);
	 * <?php echo $textTblSellGeneralCarModelYear	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarModelYear($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'model_year';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 車両価格（LKS）
	 * $textTblSellGeneralCarCarPrice	= $ctlHelper->getTextTblSellGeneralCarCarPrice	($i);
	 * <?php echo $textTblSellGeneralCarCarPrice	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarCarPrice($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'car_price';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 走行距離
	 * $textTblSellGeneralCarMileage	= $ctlHelper->getTextTblSellGeneralCarMileage	($i);
	 * <?php echo $textTblSellGeneralCarMileage	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMileage($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mileage';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 駆動方式ID
	 * $textTblSellGeneralCarMstDriveTypeId	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeId	($i);
	 * <?php echo $textTblSellGeneralCarMstDriveTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_drive_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * ステアリングタイプマスタID
	 * $textTblSellGeneralCarMstSteeringTypeId	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeId	($i);
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_steering_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * トランスミッションタイプマスタID
	 * $textTblSellGeneralCarMstTransmissionTypeId	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeId	($i);
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_transmission_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カラーマスタID
	 * $textTblSellGeneralCarMstBodyColorId	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorId	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyColorId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_body_color_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 燃料タイプマスタID
	 * $textTblSellGeneralCarMstFuelTypeId	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeId	($i);
	 * <?php echo $textTblSellGeneralCarMstFuelTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_fuel_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * タウンシップマスタID
	 * $textTblSellGeneralCarMstTownShipId	= $ctlHelper->getTextTblSellGeneralCarMstTownShipId	($i);
	 * <?php echo $textTblSellGeneralCarMstTownShipId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_town_ship_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 排気量マスタID
	 * $textTblSellGeneralCarMstEnginePowerId	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerId	($i);
	 * <?php echo $textTblSellGeneralCarMstEnginePowerId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_engine_power_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * ドアタイプマスタID
	 * $textTblSellGeneralCarMstDoorTypeId	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeId	($i);
	 * <?php echo $textTblSellGeneralCarMstDoorTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_door_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * シートタイプマスタID
	 * $textTblSellGeneralCarMstSeatsTypeId	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeId	($i);
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_seats_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * ライセンスタイプマスタID
	 * $textTblSellGeneralCarMstLicenceTypeId	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeId	($i);
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_licence_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 形状ID
	 * $textTblSellGeneralCarMstBodyTypeId	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeId	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_body_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * プレートカラーマスタID
	 * $textTblSellGeneralCarMstPlateColorId	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorId	($i);
	 * <?php echo $textTblSellGeneralCarMstPlateColorId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'mst_plate_color_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * プレート内容１
	 * $textTblSellGeneralCarPlateContent1	= $ctlHelper->getTextTblSellGeneralCarPlateContent1	($i);
	 * <?php echo $textTblSellGeneralCarPlateContent1	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarPlateContent1($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'plate_content1';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * プレート内容１
	 * $textTblSellGeneralCarPlateContent2	= $ctlHelper->getTextTblSellGeneralCarPlateContent2	($i);
	 * <?php echo $textTblSellGeneralCarPlateContent2	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarPlateContent2($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'plate_content2';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * プレート内容１
	 * $textTblSellGeneralCarPlateContent3	= $ctlHelper->getTextTblSellGeneralCarPlateContent3	($i);
	 * <?php echo $textTblSellGeneralCarPlateContent3	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarPlateContent3($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'plate_content3';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 車両情報ID（一般車）
	 * $textTblSellGeneralCarTblGeneralCarInfoId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'tbl_general_car_info_id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時
	 * $textTblSellGeneralCarCreated	= $ctlHelper->getTextTblSellGeneralCarCreated	($i);
	 * <?php echo $textTblSellGeneralCarCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時
	 * $textTblSellGeneralCarUpdated	= $ctlHelper->getTextTblSellGeneralCarUpdated	($i);
	 * <?php echo $textTblSellGeneralCarUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCar';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * プライマリID(hasOne TblSellGeneralCarDetail.id)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailId	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailId	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 販売車両情報ID（一般車）(hasOne TblSellGeneralCarDetail.tbl_sell_general_car_id)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarId	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarId	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'tbl_sell_general_car_id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * セールスコメント(hasOne TblSellGeneralCarDetail.sales_comment)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailSalesComment	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailSalesComment	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailSalesComment	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailSalesComment($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'sales_comment';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return nl2br(h($value));
	}

	/**
	 * 備考(hasOne TblSellGeneralCarDetail.remarks)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailRemarks	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailRemarks	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailRemarks	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailRemarks($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'remarks';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return nl2br(h($value));
	}

	/**
	 * 購入プラン情報(hasOne TblSellGeneralCarDetail.tbl_sell_general_car_plan_data)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarPlanData	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarPlanData	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarPlanData	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailTblSellGeneralCarPlanData($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'tbl_sell_general_car_plan_data';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return nl2br(h($value));
	}

	/**
	 * その他のメーカー名(hasOne TblSellGeneralCarDetail.outher_maker_name)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailOutherMakerName	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailOutherMakerName	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailOutherMakerName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailOutherMakerName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'outher_maker_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * その他の車種名（一般車）(hasOne TblSellGeneralCarDetail.outher_general_car_name)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarName	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarName	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'outher_general_car_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * その他の型式（一般車）(hasOne TblSellGeneralCarDetail.outher_general_car_code)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarCode	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarCode	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarCode	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailOutherGeneralCarCode($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'outher_general_car_code';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(hasOne TblSellGeneralCarDetail.created)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailCreated	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailCreated	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(hasOne TblSellGeneralCarDetail.updated)
	 * $textTblSellGeneralCarTblSellGeneralCarDetailUpdated	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarDetailUpdated	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarDetailUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarDetailUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarDetail';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * ユーザ名(公開)(belongsTo TblUser.user_name)
	 * $textTblSellGeneralCarTblUserUserName	= $ctlHelper->getTextTblSellGeneralCarTblUserUserName	($i);
	 * <?php echo $textTblSellGeneralCarTblUserUserName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserUserName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'user_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 住所(公開)(belongsTo TblUser.address)
	 * $textTblSellGeneralCarTblUserAddress	= $ctlHelper->getTextTblSellGeneralCarTblUserAddress	($i);
	 * <?php echo $textTblSellGeneralCarTblUserAddress	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserAddress($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'address';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 電話番号(公開)(belongsTo TblUser.phone_no)
	 * $textTblSellGeneralCarTblUserPhoneNo	= $ctlHelper->getTextTblSellGeneralCarTblUserPhoneNo	($i);
	 * <?php echo $textTblSellGeneralCarTblUserPhoneNo	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserPhoneNo($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'phone_no';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * ユーザのメールアドレス(公開)(belongsTo TblUser.user_mail)
	 * $textTblSellGeneralCarTblUserUserMail	= $ctlHelper->getTextTblSellGeneralCarTblUserUserMail	($i);
	 * <?php echo $textTblSellGeneralCarTblUserUserMail	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserUserMail($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'user_mail';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * ログインID(belongsTo TblUser.user_login)
	 * $textTblSellGeneralCarTblUserUserLogin	= $ctlHelper->getTextTblSellGeneralCarTblUserUserLogin	($i);
	 * <?php echo $textTblSellGeneralCarTblUserUserLogin	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserUserLogin($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'user_login';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * パスワード(ハッシュ)(belongsTo TblUser.password)
	 * $textTblSellGeneralCarTblUserPassword	= $ctlHelper->getTextTblSellGeneralCarTblUserPassword	($i);
	 * <?php echo $textTblSellGeneralCarTblUserPassword	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserPassword($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'password';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * パスワード(belongsTo TblUser.user_password)
	 * $textTblSellGeneralCarTblUserUserPassword	= $ctlHelper->getTextTblSellGeneralCarTblUserUserPassword	($i);
	 * <?php echo $textTblSellGeneralCarTblUserUserPassword	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserUserPassword($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'user_password';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return nl2br(h($value));
	}

	/**
	 * ログイン可能フラグ(belongsTo TblUser.login_flag)
	 * $textTblSellGeneralCarTblUserLoginFlag	= $ctlHelper->getTextTblSellGeneralCarTblUserLoginFlag	($i);
	 * <?php echo $textTblSellGeneralCarTblUserLoginFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserLoginFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'login_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * ユーザID(belongsTo TblUser.mst_user_group_id)
	 * $textTblSellGeneralCarTblUserMstUserGroupId	= $ctlHelper->getTextTblSellGeneralCarTblUserMstUserGroupId	($i);
	 * <?php echo $textTblSellGeneralCarTblUserMstUserGroupId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserMstUserGroupId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'mst_user_group_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 販売車両登録数(一般車)(belongsTo TblUser.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblUserTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblUserTblSellGeneralCarCount	($i);
	 * <?php echo $textTblSellGeneralCarTblUserTblSellGeneralCarCount	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserTblSellGeneralCarCount($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 販売車両登録数(商用車)(belongsTo TblUser.tbl_sell_comm_car_count)
	 * $textTblSellGeneralCarTblUserTblSellCommCarCount	= $ctlHelper->getTextTblSellGeneralCarTblUserTblSellCommCarCount	($i);
	 * <?php echo $textTblSellGeneralCarTblUserTblSellCommCarCount	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserTblSellCommCarCount($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'tbl_sell_comm_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 備考(belongsTo TblUser.remarks)
	 * $textTblSellGeneralCarTblUserRemarks	= $ctlHelper->getTextTblSellGeneralCarTblUserRemarks	($i);
	 * <?php echo $textTblSellGeneralCarTblUserRemarks	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserRemarks($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'remarks';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return nl2br(h($value));
	}

	/**
	 * 作成日時(belongsTo TblUser.created)
	 * $textTblSellGeneralCarTblUserCreated	= $ctlHelper->getTextTblSellGeneralCarTblUserCreated	($i);
	 * <?php echo $textTblSellGeneralCarTblUserCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo TblUser.updated)
	 * $textTblSellGeneralCarTblUserUpdated	= $ctlHelper->getTextTblSellGeneralCarTblUserUpdated	($i);
	 * <?php echo $textTblSellGeneralCarTblUserUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblUserUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblUser';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 有効フラグ(belongsTo TblSellGeneralCarPlan.enable_flag)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanEnableFlag	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanEnableFlag	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanEnableFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanEnableFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'enable_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * プラン名(belongsTo TblSellGeneralCarPlan.plan_name)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanPlanName	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanPlanName	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanPlanName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanPlanName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'plan_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 掲載料（KS）/台(belongsTo TblSellGeneralCarPlan.plan_price)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanPlanPrice	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanPlanPrice	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanPlanPrice	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanPlanPrice($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'plan_price';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * QRコード表示フラグ(belongsTo TblSellGeneralCarPlan.qr_code_flag)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanQrCodeFlag	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanQrCodeFlag	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanQrCodeFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanQrCodeFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'qr_code_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * プレミアムタグフラグ(belongsTo TblSellGeneralCarPlan.premium_flag)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanPremiumFlag	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanPremiumFlag	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanPremiumFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanPremiumFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'premium_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * TOPページ表示フラグ(belongsTo TblSellGeneralCarPlan.top_page_view_flag)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanTopPageViewFlag	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanTopPageViewFlag	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanTopPageViewFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanTopPageViewFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'top_page_view_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 検索結果上位表示フラグ(belongsTo TblSellGeneralCarPlan.search_priority_flag)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanSearchPriorityFlag	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanSearchPriorityFlag	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanSearchPriorityFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanSearchPriorityFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'search_priority_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 売り主連絡フラグ(belongsTo TblSellGeneralCarPlan.contact_seller_flag)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanContactSellerFlag	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanContactSellerFlag	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanContactSellerFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanContactSellerFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'contact_seller_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 車両画像の最大登録数(belongsTo TblSellGeneralCarPlan.car_image_count_max)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanCarImageCountMax	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanCarImageCountMax	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanCarImageCountMax	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanCarImageCountMax($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'car_image_count_max';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 掲載期間(Sys)(belongsTo TblSellGeneralCarPlan.sys_public_period)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanSysPublicPeriod	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanSysPublicPeriod	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanSysPublicPeriod	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanSysPublicPeriod($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'sys_public_period';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 掲載期間(View)(belongsTo TblSellGeneralCarPlan.view_public_period)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanViewPublicPeriod	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanViewPublicPeriod	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanViewPublicPeriod	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanViewPublicPeriod($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'view_public_period';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(belongsTo TblSellGeneralCarPlan.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanTblSellGeneralCarCount	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanTblSellGeneralCarCount	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanTblSellGeneralCarCount($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo TblSellGeneralCarPlan.created)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanCreated	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanCreated	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo TblSellGeneralCarPlan.updated)
	 * $textTblSellGeneralCarTblSellGeneralCarPlanUpdated	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarPlanUpdated	($i);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarPlanUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarPlanUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarPlan';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * メーカー名(belongsTo TblMaker.maker_name)
	 * $textTblSellGeneralCarTblMakerMakerName	= $ctlHelper->getTextTblSellGeneralCarTblMakerMakerName	($i);
	 * <?php echo $textTblSellGeneralCarTblMakerMakerName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerMakerName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblMaker';
		$field	= 'maker_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo TblMaker.sort)
	 * $textTblSellGeneralCarTblMakerSort	= $ctlHelper->getTextTblSellGeneralCarTblMakerSort	($i);
	 * <?php echo $textTblSellGeneralCarTblMakerSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblMaker';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 国マスタID(belongsTo TblMaker.mst_country_id)
	 * $textTblSellGeneralCarTblMakerMstCountryId	= $ctlHelper->getTextTblSellGeneralCarTblMakerMstCountryId	($i);
	 * <?php echo $textTblSellGeneralCarTblMakerMstCountryId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerMstCountryId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblMaker';
		$field	= 'mst_country_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(belongsTo TblMaker.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblMakerTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblMakerTblSellGeneralCarCount	($i);
	 * <?php echo $textTblSellGeneralCarTblMakerTblSellGeneralCarCount	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerTblSellGeneralCarCount($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblMaker';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（商用車））(belongsTo TblMaker.tbl_sell_comm_car_count)
	 * $textTblSellGeneralCarTblMakerTblSellCommCarCount	= $ctlHelper->getTextTblSellGeneralCarTblMakerTblSellCommCarCount	($i);
	 * <?php echo $textTblSellGeneralCarTblMakerTblSellCommCarCount	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerTblSellCommCarCount($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblMaker';
		$field	= 'tbl_sell_comm_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo TblMaker.created)
	 * $textTblSellGeneralCarTblMakerCreated	= $ctlHelper->getTextTblSellGeneralCarTblMakerCreated	($i);
	 * <?php echo $textTblSellGeneralCarTblMakerCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblMaker';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo TblMaker.updated)
	 * $textTblSellGeneralCarTblMakerUpdated	= $ctlHelper->getTextTblSellGeneralCarTblMakerUpdated	($i);
	 * <?php echo $textTblSellGeneralCarTblMakerUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblMakerUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblMaker';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * メーカーID(belongsTo TblGeneralCarName.tbl_maker_id)
	 * $textTblSellGeneralCarTblGeneralCarNameTblMakerId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameTblMakerId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameTblMakerId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameTblMakerId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarName';
		$field	= 'tbl_maker_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 車種名（一般車）(belongsTo TblGeneralCarName.car_name)
	 * $textTblSellGeneralCarTblGeneralCarNameCarName	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameCarName	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameCarName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameCarName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarName';
		$field	= 'car_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(belongsTo TblGeneralCarName.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarNameTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameTblSellGeneralCarCount	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameTblSellGeneralCarCount	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameTblSellGeneralCarCount($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarName';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 国マスタID（従属項目）(belongsTo TblGeneralCarName.mst_country_id)
	 * $textTblSellGeneralCarTblGeneralCarNameMstCountryId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameMstCountryId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameMstCountryId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameMstCountryId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarName';
		$field	= 'mst_country_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo TblGeneralCarName.created)
	 * $textTblSellGeneralCarTblGeneralCarNameCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameCreated	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarName';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo TblGeneralCarName.updated)
	 * $textTblSellGeneralCarTblGeneralCarNameUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarNameUpdated	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarNameUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarNameUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarName';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 車種名ID(belongsTo TblGeneralCarCode.tbl_general_car_name_id)
	 * $textTblSellGeneralCarTblGeneralCarCodeTblGeneralCarNameId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeTblGeneralCarNameId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeTblGeneralCarNameId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeTblGeneralCarNameId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarCode';
		$field	= 'tbl_general_car_name_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 枝番(belongsTo TblGeneralCarCode.branch_no)
	 * $textTblSellGeneralCarTblGeneralCarCodeBranchNo	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeBranchNo	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeBranchNo	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeBranchNo($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarCode';
		$field	= 'branch_no';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 型式(belongsTo TblGeneralCarCode.car_code)
	 * $textTblSellGeneralCarTblGeneralCarCodeCarCode	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeCarCode	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeCarCode	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeCarCode($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarCode';
		$field	= 'car_code';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(belongsTo TblGeneralCarCode.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarCodeTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeTblSellGeneralCarCount	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeTblSellGeneralCarCount	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeTblSellGeneralCarCount($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarCode';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * メーカーID（従属項目）(belongsTo TblGeneralCarCode.tbl_maker_id)
	 * $textTblSellGeneralCarTblGeneralCarCodeTblMakerId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeTblMakerId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeTblMakerId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeTblMakerId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarCode';
		$field	= 'tbl_maker_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 国マスタID（従属項目）(belongsTo TblGeneralCarCode.mst_country_id)
	 * $textTblSellGeneralCarTblGeneralCarCodeMstCountryId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeMstCountryId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeMstCountryId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeMstCountryId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarCode';
		$field	= 'mst_country_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo TblGeneralCarCode.created)
	 * $textTblSellGeneralCarTblGeneralCarCodeCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeCreated	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarCode';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo TblGeneralCarCode.updated)
	 * $textTblSellGeneralCarTblGeneralCarCodeUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarCodeUpdated	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarCodeUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarCodeUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarCode';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstDriveType.name)
	 * $textTblSellGeneralCarMstDriveTypeName	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeName	($i);
	 * <?php echo $textTblSellGeneralCarMstDriveTypeName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDriveType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstDriveType.sort)
	 * $textTblSellGeneralCarMstDriveTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeSort	($i);
	 * <?php echo $textTblSellGeneralCarMstDriveTypeSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDriveType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstDriveType.sys_name)
	 * $textTblSellGeneralCarMstDriveTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeSysName	($i);
	 * <?php echo $textTblSellGeneralCarMstDriveTypeSysName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeSysName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDriveType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstDriveType.options)
	 * $textTblSellGeneralCarMstDriveTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeOptions	($i);
	 * <?php echo $textTblSellGeneralCarMstDriveTypeOptions	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeOptions($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDriveType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstDriveType.created)
	 * $textTblSellGeneralCarMstDriveTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeCreated	($i);
	 * <?php echo $textTblSellGeneralCarMstDriveTypeCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDriveType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstDriveType.updated)
	 * $textTblSellGeneralCarMstDriveTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeUpdated	($i);
	 * <?php echo $textTblSellGeneralCarMstDriveTypeUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDriveType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstDriveType.deleted)
	 * $textTblSellGeneralCarMstDriveTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstDriveTypeDeleted	($i);
	 * <?php echo $textTblSellGeneralCarMstDriveTypeDeleted	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDriveTypeDeleted($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDriveType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstSteeringType.name)
	 * $textTblSellGeneralCarMstSteeringTypeName	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeName	($i);
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSteeringType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstSteeringType.sort)
	 * $textTblSellGeneralCarMstSteeringTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeSort	($i);
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSteeringType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstSteeringType.sys_name)
	 * $textTblSellGeneralCarMstSteeringTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeSysName	($i);
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeSysName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeSysName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSteeringType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstSteeringType.options)
	 * $textTblSellGeneralCarMstSteeringTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeOptions	($i);
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeOptions	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeOptions($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSteeringType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstSteeringType.created)
	 * $textTblSellGeneralCarMstSteeringTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeCreated	($i);
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSteeringType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstSteeringType.updated)
	 * $textTblSellGeneralCarMstSteeringTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeUpdated	($i);
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSteeringType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstSteeringType.deleted)
	 * $textTblSellGeneralCarMstSteeringTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstSteeringTypeDeleted	($i);
	 * <?php echo $textTblSellGeneralCarMstSteeringTypeDeleted	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSteeringTypeDeleted($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSteeringType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstTransmissionType.name)
	 * $textTblSellGeneralCarMstTransmissionTypeName	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeName	($i);
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTransmissionType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstTransmissionType.sort)
	 * $textTblSellGeneralCarMstTransmissionTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeSort	($i);
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTransmissionType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstTransmissionType.sys_name)
	 * $textTblSellGeneralCarMstTransmissionTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeSysName	($i);
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeSysName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeSysName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTransmissionType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstTransmissionType.options)
	 * $textTblSellGeneralCarMstTransmissionTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeOptions	($i);
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeOptions	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeOptions($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTransmissionType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstTransmissionType.created)
	 * $textTblSellGeneralCarMstTransmissionTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeCreated	($i);
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTransmissionType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstTransmissionType.updated)
	 * $textTblSellGeneralCarMstTransmissionTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeUpdated	($i);
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTransmissionType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstTransmissionType.deleted)
	 * $textTblSellGeneralCarMstTransmissionTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstTransmissionTypeDeleted	($i);
	 * <?php echo $textTblSellGeneralCarMstTransmissionTypeDeleted	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTransmissionTypeDeleted($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTransmissionType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstBodyColor.name)
	 * $textTblSellGeneralCarMstBodyColorName	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorName	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyColorName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyColor';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstBodyColor.sort)
	 * $textTblSellGeneralCarMstBodyColorSort	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorSort	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyColorSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyColor';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstBodyColor.sys_name)
	 * $textTblSellGeneralCarMstBodyColorSysName	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorSysName	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyColorSysName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorSysName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyColor';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstBodyColor.options)
	 * $textTblSellGeneralCarMstBodyColorOptions	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorOptions	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyColorOptions	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorOptions($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyColor';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstBodyColor.created)
	 * $textTblSellGeneralCarMstBodyColorCreated	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorCreated	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyColorCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyColor';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstBodyColor.updated)
	 * $textTblSellGeneralCarMstBodyColorUpdated	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorUpdated	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyColorUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyColor';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstBodyColor.deleted)
	 * $textTblSellGeneralCarMstBodyColorDeleted	= $ctlHelper->getTextTblSellGeneralCarMstBodyColorDeleted	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyColorDeleted	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyColorDeleted($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyColor';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstFuelType.name)
	 * $textTblSellGeneralCarMstFuelTypeName	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeName	($i);
	 * <?php echo $textTblSellGeneralCarMstFuelTypeName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstFuelType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstFuelType.sort)
	 * $textTblSellGeneralCarMstFuelTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeSort	($i);
	 * <?php echo $textTblSellGeneralCarMstFuelTypeSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstFuelType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstFuelType.sys_name)
	 * $textTblSellGeneralCarMstFuelTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeSysName	($i);
	 * <?php echo $textTblSellGeneralCarMstFuelTypeSysName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeSysName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstFuelType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstFuelType.options)
	 * $textTblSellGeneralCarMstFuelTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeOptions	($i);
	 * <?php echo $textTblSellGeneralCarMstFuelTypeOptions	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeOptions($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstFuelType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstFuelType.created)
	 * $textTblSellGeneralCarMstFuelTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeCreated	($i);
	 * <?php echo $textTblSellGeneralCarMstFuelTypeCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstFuelType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstFuelType.updated)
	 * $textTblSellGeneralCarMstFuelTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeUpdated	($i);
	 * <?php echo $textTblSellGeneralCarMstFuelTypeUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstFuelType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstFuelType.deleted)
	 * $textTblSellGeneralCarMstFuelTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstFuelTypeDeleted	($i);
	 * <?php echo $textTblSellGeneralCarMstFuelTypeDeleted	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstFuelTypeDeleted($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstFuelType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstTownShip.name)
	 * $textTblSellGeneralCarMstTownShipName	= $ctlHelper->getTextTblSellGeneralCarMstTownShipName	($i);
	 * <?php echo $textTblSellGeneralCarMstTownShipName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTownShip';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstTownShip.sort)
	 * $textTblSellGeneralCarMstTownShipSort	= $ctlHelper->getTextTblSellGeneralCarMstTownShipSort	($i);
	 * <?php echo $textTblSellGeneralCarMstTownShipSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTownShip';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstTownShip.sys_name)
	 * $textTblSellGeneralCarMstTownShipSysName	= $ctlHelper->getTextTblSellGeneralCarMstTownShipSysName	($i);
	 * <?php echo $textTblSellGeneralCarMstTownShipSysName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipSysName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTownShip';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstTownShip.options)
	 * $textTblSellGeneralCarMstTownShipOptions	= $ctlHelper->getTextTblSellGeneralCarMstTownShipOptions	($i);
	 * <?php echo $textTblSellGeneralCarMstTownShipOptions	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipOptions($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTownShip';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstTownShip.created)
	 * $textTblSellGeneralCarMstTownShipCreated	= $ctlHelper->getTextTblSellGeneralCarMstTownShipCreated	($i);
	 * <?php echo $textTblSellGeneralCarMstTownShipCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTownShip';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstTownShip.updated)
	 * $textTblSellGeneralCarMstTownShipUpdated	= $ctlHelper->getTextTblSellGeneralCarMstTownShipUpdated	($i);
	 * <?php echo $textTblSellGeneralCarMstTownShipUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTownShip';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstTownShip.deleted)
	 * $textTblSellGeneralCarMstTownShipDeleted	= $ctlHelper->getTextTblSellGeneralCarMstTownShipDeleted	($i);
	 * <?php echo $textTblSellGeneralCarMstTownShipDeleted	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstTownShipDeleted($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstTownShip';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstEnginePower.name)
	 * $textTblSellGeneralCarMstEnginePowerName	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerName	($i);
	 * <?php echo $textTblSellGeneralCarMstEnginePowerName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstEnginePower';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstEnginePower.sort)
	 * $textTblSellGeneralCarMstEnginePowerSort	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerSort	($i);
	 * <?php echo $textTblSellGeneralCarMstEnginePowerSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstEnginePower';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstEnginePower.sys_name)
	 * $textTblSellGeneralCarMstEnginePowerSysName	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerSysName	($i);
	 * <?php echo $textTblSellGeneralCarMstEnginePowerSysName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerSysName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstEnginePower';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstEnginePower.options)
	 * $textTblSellGeneralCarMstEnginePowerOptions	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerOptions	($i);
	 * <?php echo $textTblSellGeneralCarMstEnginePowerOptions	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerOptions($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstEnginePower';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstEnginePower.created)
	 * $textTblSellGeneralCarMstEnginePowerCreated	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerCreated	($i);
	 * <?php echo $textTblSellGeneralCarMstEnginePowerCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstEnginePower';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstEnginePower.updated)
	 * $textTblSellGeneralCarMstEnginePowerUpdated	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerUpdated	($i);
	 * <?php echo $textTblSellGeneralCarMstEnginePowerUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstEnginePower';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstEnginePower.deleted)
	 * $textTblSellGeneralCarMstEnginePowerDeleted	= $ctlHelper->getTextTblSellGeneralCarMstEnginePowerDeleted	($i);
	 * <?php echo $textTblSellGeneralCarMstEnginePowerDeleted	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstEnginePowerDeleted($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstEnginePower';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstDoorType.name)
	 * $textTblSellGeneralCarMstDoorTypeName	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeName	($i);
	 * <?php echo $textTblSellGeneralCarMstDoorTypeName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDoorType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstDoorType.sort)
	 * $textTblSellGeneralCarMstDoorTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeSort	($i);
	 * <?php echo $textTblSellGeneralCarMstDoorTypeSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDoorType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstDoorType.sys_name)
	 * $textTblSellGeneralCarMstDoorTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeSysName	($i);
	 * <?php echo $textTblSellGeneralCarMstDoorTypeSysName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeSysName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDoorType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstDoorType.options)
	 * $textTblSellGeneralCarMstDoorTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeOptions	($i);
	 * <?php echo $textTblSellGeneralCarMstDoorTypeOptions	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeOptions($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDoorType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstDoorType.created)
	 * $textTblSellGeneralCarMstDoorTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeCreated	($i);
	 * <?php echo $textTblSellGeneralCarMstDoorTypeCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDoorType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstDoorType.updated)
	 * $textTblSellGeneralCarMstDoorTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeUpdated	($i);
	 * <?php echo $textTblSellGeneralCarMstDoorTypeUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDoorType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstDoorType.deleted)
	 * $textTblSellGeneralCarMstDoorTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstDoorTypeDeleted	($i);
	 * <?php echo $textTblSellGeneralCarMstDoorTypeDeleted	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstDoorTypeDeleted($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstDoorType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstSeatsType.name)
	 * $textTblSellGeneralCarMstSeatsTypeName	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeName	($i);
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSeatsType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstSeatsType.sort)
	 * $textTblSellGeneralCarMstSeatsTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeSort	($i);
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSeatsType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstSeatsType.sys_name)
	 * $textTblSellGeneralCarMstSeatsTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeSysName	($i);
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeSysName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeSysName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSeatsType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstSeatsType.options)
	 * $textTblSellGeneralCarMstSeatsTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeOptions	($i);
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeOptions	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeOptions($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSeatsType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstSeatsType.created)
	 * $textTblSellGeneralCarMstSeatsTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeCreated	($i);
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSeatsType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstSeatsType.updated)
	 * $textTblSellGeneralCarMstSeatsTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeUpdated	($i);
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSeatsType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstSeatsType.deleted)
	 * $textTblSellGeneralCarMstSeatsTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstSeatsTypeDeleted	($i);
	 * <?php echo $textTblSellGeneralCarMstSeatsTypeDeleted	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstSeatsTypeDeleted($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstSeatsType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstLicenceType.name)
	 * $textTblSellGeneralCarMstLicenceTypeName	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeName	($i);
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstLicenceType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstLicenceType.sort)
	 * $textTblSellGeneralCarMstLicenceTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeSort	($i);
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstLicenceType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstLicenceType.sys_name)
	 * $textTblSellGeneralCarMstLicenceTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeSysName	($i);
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeSysName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeSysName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstLicenceType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstLicenceType.options)
	 * $textTblSellGeneralCarMstLicenceTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeOptions	($i);
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeOptions	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeOptions($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstLicenceType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstLicenceType.created)
	 * $textTblSellGeneralCarMstLicenceTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeCreated	($i);
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstLicenceType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstLicenceType.updated)
	 * $textTblSellGeneralCarMstLicenceTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeUpdated	($i);
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstLicenceType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstLicenceType.deleted)
	 * $textTblSellGeneralCarMstLicenceTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstLicenceTypeDeleted	($i);
	 * <?php echo $textTblSellGeneralCarMstLicenceTypeDeleted	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstLicenceTypeDeleted($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstLicenceType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstBodyType.name)
	 * $textTblSellGeneralCarMstBodyTypeName	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeName	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyTypeName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyType';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstBodyType.sort)
	 * $textTblSellGeneralCarMstBodyTypeSort	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeSort	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyTypeSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyType';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstBodyType.sys_name)
	 * $textTblSellGeneralCarMstBodyTypeSysName	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeSysName	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyTypeSysName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeSysName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyType';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstBodyType.options)
	 * $textTblSellGeneralCarMstBodyTypeOptions	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeOptions	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyTypeOptions	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeOptions($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyType';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstBodyType.created)
	 * $textTblSellGeneralCarMstBodyTypeCreated	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeCreated	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyTypeCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyType';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstBodyType.updated)
	 * $textTblSellGeneralCarMstBodyTypeUpdated	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeUpdated	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyTypeUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyType';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstBodyType.deleted)
	 * $textTblSellGeneralCarMstBodyTypeDeleted	= $ctlHelper->getTextTblSellGeneralCarMstBodyTypeDeleted	($i);
	 * <?php echo $textTblSellGeneralCarMstBodyTypeDeleted	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstBodyTypeDeleted($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstBodyType';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示名(belongsTo MstPlateColor.name)
	 * $textTblSellGeneralCarMstPlateColorName	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorName	($i);
	 * <?php echo $textTblSellGeneralCarMstPlateColorName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstPlateColor';
		$field	= 'name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(belongsTo MstPlateColor.sort)
	 * $textTblSellGeneralCarMstPlateColorSort	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorSort	($i);
	 * <?php echo $textTblSellGeneralCarMstPlateColorSort	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorSort($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstPlateColor';
		$field	= 'sort';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * システム名(belongsTo MstPlateColor.sys_name)
	 * $textTblSellGeneralCarMstPlateColorSysName	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorSysName	($i);
	 * <?php echo $textTblSellGeneralCarMstPlateColorSysName	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorSysName($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstPlateColor';
		$field	= 'sys_name';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * オプション(belongsTo MstPlateColor.options)
	 * $textTblSellGeneralCarMstPlateColorOptions	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorOptions	($i);
	 * <?php echo $textTblSellGeneralCarMstPlateColorOptions	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorOptions($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstPlateColor';
		$field	= 'options';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo MstPlateColor.created)
	 * $textTblSellGeneralCarMstPlateColorCreated	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorCreated	($i);
	 * <?php echo $textTblSellGeneralCarMstPlateColorCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstPlateColor';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo MstPlateColor.updated)
	 * $textTblSellGeneralCarMstPlateColorUpdated	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorUpdated	($i);
	 * <?php echo $textTblSellGeneralCarMstPlateColorUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstPlateColor';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 削除日時(belongsTo MstPlateColor.deleted)
	 * $textTblSellGeneralCarMstPlateColorDeleted	= $ctlHelper->getTextTblSellGeneralCarMstPlateColorDeleted	($i);
	 * <?php echo $textTblSellGeneralCarMstPlateColorDeleted	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarMstPlateColorDeleted($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'MstPlateColor';
		$field	= 'deleted';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 型式ID（一般車）(belongsTo TblGeneralCarInfo.tbl_general_car_code_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoTblGeneralCarCodeId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoTblGeneralCarCodeId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoTblGeneralCarCodeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoTblGeneralCarCodeId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarInfo';
		$field	= 'tbl_general_car_code_id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 枝番(belongsTo TblGeneralCarInfo.branch_no)
	 * $textTblSellGeneralCarTblGeneralCarInfoBranchNo	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoBranchNo	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoBranchNo	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoBranchNo($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarInfo';
		$field	= 'branch_no';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 排気量ID(belongsTo TblGeneralCarInfo.mst_engine_power_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoMstEnginePowerId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoMstEnginePowerId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoMstEnginePowerId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoMstEnginePowerId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarInfo';
		$field	= 'mst_engine_power_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 駆動方式ID(belongsTo TblGeneralCarInfo.mst_drive_type_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoMstDriveTypeId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoMstDriveTypeId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoMstDriveTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoMstDriveTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarInfo';
		$field	= 'mst_drive_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 形状ID(belongsTo TblGeneralCarInfo.mst_body_type_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoMstBodyTypeId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoMstBodyTypeId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoMstBodyTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoMstBodyTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarInfo';
		$field	= 'mst_body_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(belongsTo TblGeneralCarInfo.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarInfoTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoTblSellGeneralCarCount	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoTblSellGeneralCarCount	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoTblSellGeneralCarCount($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarInfo';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 車種名ID（従属項目）(belongsTo TblGeneralCarInfo.tbl_general_car_name_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoTblGeneralCarNameId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoTblGeneralCarNameId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoTblGeneralCarNameId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoTblGeneralCarNameId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarInfo';
		$field	= 'tbl_general_car_name_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * メーカーID（従属項目）(belongsTo TblGeneralCarInfo.tbl_maker_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoTblMakerId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoTblMakerId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoTblMakerId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoTblMakerId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarInfo';
		$field	= 'tbl_maker_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 国マスタID（従属項目）(belongsTo TblGeneralCarInfo.mst_country_id)
	 * $textTblSellGeneralCarTblGeneralCarInfoMstCountryId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoMstCountryId	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoMstCountryId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoMstCountryId($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarInfo';
		$field	= 'mst_country_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(belongsTo TblGeneralCarInfo.created)
	 * $textTblSellGeneralCarTblGeneralCarInfoCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoCreated	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoCreated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarInfo';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(belongsTo TblGeneralCarInfo.updated)
	 * $textTblSellGeneralCarTblGeneralCarInfoUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarInfoUpdated	($i);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarInfoUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarInfoUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarInfo';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * hasManyデータカウント（TblSellGeneralCarImage）
	 * $cnt = $ctlHelper->getDataTblSellGeneralCarTblSellGeneralCarImageCount();
	 * @param int $snt1
	 * @return int
	 */
	public function getDataTblSellGeneralCarTblSellGeneralCarImageCount($cnt) {
		if (isset($this->dataTblSellGeneralCar[$cnt]['TblSellGeneralCarImage'])) {
			return count($this->dataTblSellGeneralCar[$cnt]['TblSellGeneralCarImage']);
		} else {
			return 0;
		}
	}

	/**
	 * hasMany Displays (TblSellGeneralCarImage）
	 * $textTblSellGeneralCarTblSellGeneralCarImageDisplay = $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageDisplay($i);
	 * <?php $textTblSellGeneralCarTblSellGeneralCarImageDisplay; ?>
	 * @param int $cnt1
	 * @param string $display
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageDisplay($cnt1, $display = 'image_name') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$path	= 'TblSellGeneralCarImage.{n}.' . $display;
		$tmp	= Hash::extract($data, $path);
		
		return join(",\n", $tmp);
	}

	/**
	 * プライマリID(hasMany {n}.TblSellGeneralCarImage.{n}.id)
	 * $textTblSellGeneralCarTblSellGeneralCarImageId	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageId	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarImageId	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageId($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarImage';
		$field	= 'id';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 販売車両情報ID（一般車）(hasMany {n}.TblSellGeneralCarImage.{n}.tbl_sell_general_car_id)
	 * $textTblSellGeneralCarTblSellGeneralCarImageTblSellGeneralCarId	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageTblSellGeneralCarId	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarImageTblSellGeneralCarId	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageTblSellGeneralCarId($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarImage';
		$field	= 'tbl_sell_general_car_id';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 枝番(hasMany {n}.TblSellGeneralCarImage.{n}.branch_no)
	 * $textTblSellGeneralCarTblSellGeneralCarImageBranchNo	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageBranchNo	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarImageBranchNo	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageBranchNo($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarImage';
		$field	= 'branch_no';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * イメージファイル名(hasMany {n}.TblSellGeneralCarImage.{n}.image_name)
	 * $textTblSellGeneralCarTblSellGeneralCarImageImageName	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageImageName	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarImageImageName	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageImageName($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarImage';
		$field	= 'image_name';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 作成日時(hasMany {n}.TblSellGeneralCarImage.{n}.created)
	 * $textTblSellGeneralCarTblSellGeneralCarImageCreated	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageCreated	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarImageCreated	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageCreated($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarImage';
		$field	= 'created';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(hasMany {n}.TblSellGeneralCarImage.{n}.updated)
	 * $textTblSellGeneralCarTblSellGeneralCarImageUpdated	= $ctlHelper->getTextTblSellGeneralCarTblSellGeneralCarImageUpdated	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblSellGeneralCarImageUpdated	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblSellGeneralCarImageUpdated($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblSellGeneralCarImage';
		$field	= 'updated';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * hasAndBelongsToManyデータカウント（TblGeneralCarComfort）
	 * $cnt = $ctlHelper->getDataTblSellGeneralCarTblGeneralCarComfortCount();
	 * @param int $snt1
	 * @return int
	 */
	public function getDataTblSellGeneralCarTblGeneralCarComfortCount($cnt) {
		if (isset($this->dataTblSellGeneralCar[$cnt]['TblGeneralCarComfort'])) {
			return count($this->dataTblSellGeneralCar[$cnt]['TblGeneralCarComfort']);
		} else {
			return 0;
		}
	}

	/**
	 * hasAndBelongsToMany Displays (TblGeneralCarComfort）
	 * $textTblSellGeneralCarTblGeneralCarComfortDisplay = $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortDisplay($i);
	 * <?php $textTblSellGeneralCarTblGeneralCarComfortDisplay; ?>
	 * @param int $cnt1
	 * @param string $display
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortDisplay($cnt1, $display = 'name') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$path	= 'TblGeneralCarComfort.{n}.' . $display;
		$tmp	= Hash::extract($data, $path);
		
		return join(",\n", $tmp);
	}

	/**
	 * プライマリID(hasAndBelongsToMany {n}.TblGeneralCarComfort.{n}.id)
	 * $textTblSellGeneralCarTblGeneralCarComfortId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortId	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarComfortId	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortId($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarComfort';
		$field	= 'id';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 快適装備名(hasAndBelongsToMany {n}.TblGeneralCarComfort.{n}.name)
	 * $textTblSellGeneralCarTblGeneralCarComfortName	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortName	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarComfortName	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortName($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarComfort';
		$field	= 'name';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(hasAndBelongsToMany {n}.TblGeneralCarComfort.{n}.sort)
	 * $textTblSellGeneralCarTblGeneralCarComfortSort	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortSort	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarComfortSort	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortSort($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarComfort';
		$field	= 'sort';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(hasAndBelongsToMany {n}.TblGeneralCarComfort.{n}.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarComfortTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortTblSellGeneralCarCount	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarComfortTblSellGeneralCarCount	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortTblSellGeneralCarCount($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarComfort';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(hasAndBelongsToMany {n}.TblGeneralCarComfort.{n}.created)
	 * $textTblSellGeneralCarTblGeneralCarComfortCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortCreated	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarComfortCreated	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortCreated($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarComfort';
		$field	= 'created';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(hasAndBelongsToMany {n}.TblGeneralCarComfort.{n}.updated)
	 * $textTblSellGeneralCarTblGeneralCarComfortUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarComfortUpdated	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarComfortUpdated	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarComfortUpdated($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarComfort';
		$field	= 'updated';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * hasAndBelongsToManyデータカウント（TblGeneralCarFeature）
	 * $cnt = $ctlHelper->getDataTblSellGeneralCarTblGeneralCarFeatureCount();
	 * @param int $snt1
	 * @return int
	 */
	public function getDataTblSellGeneralCarTblGeneralCarFeatureCount($cnt) {
		if (isset($this->dataTblSellGeneralCar[$cnt]['TblGeneralCarFeature'])) {
			return count($this->dataTblSellGeneralCar[$cnt]['TblGeneralCarFeature']);
		} else {
			return 0;
		}
	}

	/**
	 * hasAndBelongsToMany Displays (TblGeneralCarFeature）
	 * $textTblSellGeneralCarTblGeneralCarFeatureDisplay = $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureDisplay($i);
	 * <?php $textTblSellGeneralCarTblGeneralCarFeatureDisplay; ?>
	 * @param int $cnt1
	 * @param string $display
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureDisplay($cnt1, $display = 'name') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$path	= 'TblGeneralCarFeature.{n}.' . $display;
		$tmp	= Hash::extract($data, $path);
		
		return join(",\n", $tmp);
	}

	/**
	 * プライマリID(hasAndBelongsToMany {n}.TblGeneralCarFeature.{n}.id)
	 * $textTblSellGeneralCarTblGeneralCarFeatureId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureId	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarFeatureId	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureId($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarFeature';
		$field	= 'id';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 標準装備名(hasAndBelongsToMany {n}.TblGeneralCarFeature.{n}.name)
	 * $textTblSellGeneralCarTblGeneralCarFeatureName	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureName	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarFeatureName	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureName($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarFeature';
		$field	= 'name';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(hasAndBelongsToMany {n}.TblGeneralCarFeature.{n}.sort)
	 * $textTblSellGeneralCarTblGeneralCarFeatureSort	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureSort	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarFeatureSort	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureSort($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarFeature';
		$field	= 'sort';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(hasAndBelongsToMany {n}.TblGeneralCarFeature.{n}.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarFeatureTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureTblSellGeneralCarCount	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarFeatureTblSellGeneralCarCount	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureTblSellGeneralCarCount($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarFeature';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(hasAndBelongsToMany {n}.TblGeneralCarFeature.{n}.created)
	 * $textTblSellGeneralCarTblGeneralCarFeatureCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureCreated	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarFeatureCreated	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureCreated($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarFeature';
		$field	= 'created';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(hasAndBelongsToMany {n}.TblGeneralCarFeature.{n}.updated)
	 * $textTblSellGeneralCarTblGeneralCarFeatureUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarFeatureUpdated	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarFeatureUpdated	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarFeatureUpdated($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarFeature';
		$field	= 'updated';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * hasAndBelongsToManyデータカウント（TblGeneralCarSafety）
	 * $cnt = $ctlHelper->getDataTblSellGeneralCarTblGeneralCarSafetyCount();
	 * @param int $snt1
	 * @return int
	 */
	public function getDataTblSellGeneralCarTblGeneralCarSafetyCount($cnt) {
		if (isset($this->dataTblSellGeneralCar[$cnt]['TblGeneralCarSafety'])) {
			return count($this->dataTblSellGeneralCar[$cnt]['TblGeneralCarSafety']);
		} else {
			return 0;
		}
	}

	/**
	 * hasAndBelongsToMany Displays (TblGeneralCarSafety）
	 * $textTblSellGeneralCarTblGeneralCarSafetyDisplay = $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetyDisplay($i);
	 * <?php $textTblSellGeneralCarTblGeneralCarSafetyDisplay; ?>
	 * @param int $cnt1
	 * @param string $display
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetyDisplay($cnt1, $display = 'name') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$path	= 'TblGeneralCarSafety.{n}.' . $display;
		$tmp	= Hash::extract($data, $path);
		
		return join(",\n", $tmp);
	}

	/**
	 * プライマリID(hasAndBelongsToMany {n}.TblGeneralCarSafety.{n}.id)
	 * $textTblSellGeneralCarTblGeneralCarSafetyId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetyId	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarSafetyId	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetyId($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarSafety';
		$field	= 'id';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 安全装備名(hasAndBelongsToMany {n}.TblGeneralCarSafety.{n}.name)
	 * $textTblSellGeneralCarTblGeneralCarSafetyName	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetyName	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarSafetyName	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetyName($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarSafety';
		$field	= 'name';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(hasAndBelongsToMany {n}.TblGeneralCarSafety.{n}.sort)
	 * $textTblSellGeneralCarTblGeneralCarSafetySort	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetySort	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarSafetySort	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetySort($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarSafety';
		$field	= 'sort';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(hasAndBelongsToMany {n}.TblGeneralCarSafety.{n}.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarSafetyTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetyTblSellGeneralCarCount	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarSafetyTblSellGeneralCarCount	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetyTblSellGeneralCarCount($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarSafety';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(hasAndBelongsToMany {n}.TblGeneralCarSafety.{n}.created)
	 * $textTblSellGeneralCarTblGeneralCarSafetyCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetyCreated	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarSafetyCreated	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetyCreated($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarSafety';
		$field	= 'created';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(hasAndBelongsToMany {n}.TblGeneralCarSafety.{n}.updated)
	 * $textTblSellGeneralCarTblGeneralCarSafetyUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarSafetyUpdated	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarSafetyUpdated	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarSafetyUpdated($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarSafety';
		$field	= 'updated';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * hasAndBelongsToManyデータカウント（TblGeneralCarWindow）
	 * $cnt = $ctlHelper->getDataTblSellGeneralCarTblGeneralCarWindowCount();
	 * @param int $snt1
	 * @return int
	 */
	public function getDataTblSellGeneralCarTblGeneralCarWindowCount($cnt) {
		if (isset($this->dataTblSellGeneralCar[$cnt]['TblGeneralCarWindow'])) {
			return count($this->dataTblSellGeneralCar[$cnt]['TblGeneralCarWindow']);
		} else {
			return 0;
		}
	}

	/**
	 * hasAndBelongsToMany Displays (TblGeneralCarWindow）
	 * $textTblSellGeneralCarTblGeneralCarWindowDisplay = $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowDisplay($i);
	 * <?php $textTblSellGeneralCarTblGeneralCarWindowDisplay; ?>
	 * @param int $cnt1
	 * @param string $display
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowDisplay($cnt1, $display = 'name') {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$path	= 'TblGeneralCarWindow.{n}.' . $display;
		$tmp	= Hash::extract($data, $path);
		
		return join(",\n", $tmp);
	}

	/**
	 * プライマリID(hasAndBelongsToMany {n}.TblGeneralCarWindow.{n}.id)
	 * $textTblSellGeneralCarTblGeneralCarWindowId	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowId	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarWindowId	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowId($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarWindow';
		$field	= 'id';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 窓装備名(hasAndBelongsToMany {n}.TblGeneralCarWindow.{n}.name)
	 * $textTblSellGeneralCarTblGeneralCarWindowName	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowName	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarWindowName	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowName($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarWindow';
		$field	= 'name';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 表示順(hasAndBelongsToMany {n}.TblGeneralCarWindow.{n}.sort)
	 * $textTblSellGeneralCarTblGeneralCarWindowSort	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowSort	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarWindowSort	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowSort($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarWindow';
		$field	= 'sort';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カウンタ（販売車両（一般車））(hasAndBelongsToMany {n}.TblGeneralCarWindow.{n}.tbl_sell_general_car_count)
	 * $textTblSellGeneralCarTblGeneralCarWindowTblSellGeneralCarCount	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowTblSellGeneralCarCount	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarWindowTblSellGeneralCarCount	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowTblSellGeneralCarCount($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarWindow';
		$field	= 'tbl_sell_general_car_count';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時(hasAndBelongsToMany {n}.TblGeneralCarWindow.{n}.created)
	 * $textTblSellGeneralCarTblGeneralCarWindowCreated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowCreated	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarWindowCreated	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowCreated($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarWindow';
		$field	= 'created';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時(hasAndBelongsToMany {n}.TblGeneralCarWindow.{n}.updated)
	 * $textTblSellGeneralCarTblGeneralCarWindowUpdated	= $ctlHelper->getTextTblSellGeneralCarTblGeneralCarWindowUpdated	($i, $j);
	 * <?php echo $textTblSellGeneralCarTblGeneralCarWindowUpdated	; ?>
	 * @param int $cnt1
	 * @param int $cnt2
	 * @return string
	 */
	public function getTextTblSellGeneralCarTblGeneralCarWindowUpdated($cnt1 = 0, $cnt2 = 0) {
		$data	= $this->dataTblSellGeneralCar[$cnt1];
		$alias	= 'TblGeneralCarWindow';
		$field	= 'updated';
		$path	= $alias . '.' . $cnt2 . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

}