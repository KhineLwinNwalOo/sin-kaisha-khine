<?php 


trait TblSellCommCarViews {

	/**
	 * TblSellCommCar
	 * @var array<TblSellCommCar::$data>
	 */
	protected $dataTblSellCommCar = array();

	/**
	 * TblSellCommCar::$data
	 * if (!isset($dataTblSellCommCar))	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
	 * $ctlHelper->setDataTblSellCommCar($dataTblSellCommCar);
	 * @param array $dataTblSellCommCar
	 */
	public function setDataTblSellCommCar(array $dataTblSellCommCar) {
		$this->dataTblSellCommCar = $dataTblSellCommCar;
	}

	/**
	 * データカウント（TblSellCommCar）
	 * $cnt = $ctlHelper->getDataTblSellCommCarCount();
	 * @return int
	 */
	public function getDataTblSellCommCarCount() {
		return count($this->dataTblSellCommCar);
	}

	/**
	 * プライマリID(Ref No)
	 * $textTblSellCommCarId	= $ctlHelper->getTextTblSellCommCarId	($i);
	 * <?php echo $textTblSellCommCarId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * ユーザID
	 * $textTblSellCommCarTblUserId	= $ctlHelper->getTextTblSellCommCarTblUserId	($i);
	 * <?php echo $textTblSellCommCarTblUserId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarTblUserId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'tbl_user_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 販売車両プランID（商用車）
	 * $textTblSellCommCarTblSellCommCarPlanId	= $ctlHelper->getTextTblSellCommCarTblSellCommCarPlanId	($i);
	 * <?php echo $textTblSellCommCarTblSellCommCarPlanId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarTblSellCommCarPlanId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'tbl_sell_comm_car_plan_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 公開フラグ
	 * $textTblSellCommCarPublicFlag	= $ctlHelper->getTextTblSellCommCarPublicFlag	($i);
	 * <?php echo $textTblSellCommCarPublicFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellCommCarPublicFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'public_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 公開開始日
	 * $textTblSellCommCarPublicStartDate	= $ctlHelper->getTextTblSellCommCarPublicStartDate	($i);
	 * <?php echo $textTblSellCommCarPublicStartDate	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarPublicStartDate($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'public_start_date';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 公開終了日
	 * $textTblSellCommCarPublicEndDate	= $ctlHelper->getTextTblSellCommCarPublicEndDate	($i);
	 * <?php echo $textTblSellCommCarPublicEndDate	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarPublicEndDate($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'public_end_date';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * QRコード表示フラグ
	 * $textTblSellCommCarQrCodeFlag	= $ctlHelper->getTextTblSellCommCarQrCodeFlag	($i);
	 * <?php echo $textTblSellCommCarQrCodeFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellCommCarQrCodeFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'qr_code_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * NewArrivalsフラグ
	 * $textTblSellCommCarNewArrivalsFlag	= $ctlHelper->getTextTblSellCommCarNewArrivalsFlag	($i);
	 * <?php echo $textTblSellCommCarNewArrivalsFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellCommCarNewArrivalsFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'new_arrivals_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * BestDealフラグ
	 * $textTblSellCommCarBestDealFlag	= $ctlHelper->getTextTblSellCommCarBestDealFlag	($i);
	 * <?php echo $textTblSellCommCarBestDealFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellCommCarBestDealFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'best_deal_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * Recommendedフラグ
	 * $textTblSellCommCarRecommendedFlag	= $ctlHelper->getTextTblSellCommCarRecommendedFlag	($i);
	 * <?php echo $textTblSellCommCarRecommendedFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellCommCarRecommendedFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'recommended_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * プレミアムタグフラグ
	 * $textTblSellCommCarPremiumFlag	= $ctlHelper->getTextTblSellCommCarPremiumFlag	($i);
	 * <?php echo $textTblSellCommCarPremiumFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellCommCarPremiumFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'premium_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * TOPページ表示フラグ
	 * $textTblSellCommCarTopPageViewFlag	= $ctlHelper->getTextTblSellCommCarTopPageViewFlag	($i);
	 * <?php echo $textTblSellCommCarTopPageViewFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellCommCarTopPageViewFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'top_page_view_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 検索結果上位表示フラグ
	 * $textTblSellCommCarSearchPriorityFlag	= $ctlHelper->getTextTblSellCommCarSearchPriorityFlag	($i);
	 * <?php echo $textTblSellCommCarSearchPriorityFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellCommCarSearchPriorityFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'search_priority_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 売り主連絡フラグ
	 * $textTblSellCommCarContactSellerFlag	= $ctlHelper->getTextTblSellCommCarContactSellerFlag	($i);
	 * <?php echo $textTblSellCommCarContactSellerFlag	; ?>
	 * @param int $cnt1
	 * @param string $true
	 * @param string $false
	 * @return string
	 */
	public function getTextTblSellCommCarContactSellerFlag($cnt1 = 0, $true = '可', $false = '不可') {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'contact_seller_flag';
		$path	= $alias . '.' . $field;
		$flag	= Hash::get($data, $path);
		$value	= $flag? $true: $false;
		
		return h($value);
	}

	/**
	 * 車両画像の最大登録数
	 * $textTblSellCommCarCarImageCountMax	= $ctlHelper->getTextTblSellCommCarCarImageCountMax	($i);
	 * <?php echo $textTblSellCommCarCarImageCountMax	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarCarImageCountMax($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'car_image_count_max';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * メーカーID
	 * $textTblSellCommCarTblMakerId	= $ctlHelper->getTextTblSellCommCarTblMakerId	($i);
	 * <?php echo $textTblSellCommCarTblMakerId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarTblMakerId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'tbl_maker_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 車種名ID
	 * $textTblSellCommCarTblCommCarNameId	= $ctlHelper->getTextTblSellCommCarTblCommCarNameId	($i);
	 * <?php echo $textTblSellCommCarTblCommCarNameId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarTblCommCarNameId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'tbl_comm_car_name_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 型式ID（商用車）
	 * $textTblSellCommCarTblCommCarCodeId	= $ctlHelper->getTextTblSellCommCarTblCommCarCodeId	($i);
	 * <?php echo $textTblSellCommCarTblCommCarCodeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarTblCommCarCodeId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'tbl_comm_car_code_id';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 年式
	 * $textTblSellCommCarModelYear	= $ctlHelper->getTextTblSellCommCarModelYear	($i);
	 * <?php echo $textTblSellCommCarModelYear	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarModelYear($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'model_year';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 車両価格（LKS）
	 * $textTblSellCommCarCarPrice	= $ctlHelper->getTextTblSellCommCarCarPrice	($i);
	 * <?php echo $textTblSellCommCarCarPrice	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarCarPrice($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'car_price';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 走行距離
	 * $textTblSellCommCarMileage	= $ctlHelper->getTextTblSellCommCarMileage	($i);
	 * <?php echo $textTblSellCommCarMileage	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMileage($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mileage';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 駆動方式ID
	 * $textTblSellCommCarMstDriveTypeId	= $ctlHelper->getTextTblSellCommCarMstDriveTypeId	($i);
	 * <?php echo $textTblSellCommCarMstDriveTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMstDriveTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mst_drive_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * ステアリングタイプマスタID
	 * $textTblSellCommCarMstSteeringTypeId	= $ctlHelper->getTextTblSellCommCarMstSteeringTypeId	($i);
	 * <?php echo $textTblSellCommCarMstSteeringTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMstSteeringTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mst_steering_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * トランスミッションタイプマスタID
	 * $textTblSellCommCarMstTransmissionTypeId	= $ctlHelper->getTextTblSellCommCarMstTransmissionTypeId	($i);
	 * <?php echo $textTblSellCommCarMstTransmissionTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMstTransmissionTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mst_transmission_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * カラーマスタID
	 * $textTblSellCommCarMstBodyColorId	= $ctlHelper->getTextTblSellCommCarMstBodyColorId	($i);
	 * <?php echo $textTblSellCommCarMstBodyColorId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMstBodyColorId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mst_body_color_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 燃料タイプマスタID
	 * $textTblSellCommCarMstFuelTypeId	= $ctlHelper->getTextTblSellCommCarMstFuelTypeId	($i);
	 * <?php echo $textTblSellCommCarMstFuelTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMstFuelTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mst_fuel_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * タウンシップマスタID
	 * $textTblSellCommCarMstTownShipId	= $ctlHelper->getTextTblSellCommCarMstTownShipId	($i);
	 * <?php echo $textTblSellCommCarMstTownShipId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMstTownShipId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mst_town_ship_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 排気量マスタID
	 * $textTblSellCommCarMstEnginePowerId	= $ctlHelper->getTextTblSellCommCarMstEnginePowerId	($i);
	 * <?php echo $textTblSellCommCarMstEnginePowerId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMstEnginePowerId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mst_engine_power_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * ドアタイプマスタID
	 * $textTblSellCommCarMstDoorTypeId	= $ctlHelper->getTextTblSellCommCarMstDoorTypeId	($i);
	 * <?php echo $textTblSellCommCarMstDoorTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMstDoorTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mst_door_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * シートタイプマスタID
	 * $textTblSellCommCarMstSeatsTypeId	= $ctlHelper->getTextTblSellCommCarMstSeatsTypeId	($i);
	 * <?php echo $textTblSellCommCarMstSeatsTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMstSeatsTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mst_seats_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * ライセンスタイプマスタID
	 * $textTblSellCommCarMstLicenceTypeId	= $ctlHelper->getTextTblSellCommCarMstLicenceTypeId	($i);
	 * <?php echo $textTblSellCommCarMstLicenceTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMstLicenceTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mst_licence_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 形状ID
	 * $textTblSellCommCarMstBodyTypeId	= $ctlHelper->getTextTblSellCommCarMstBodyTypeId	($i);
	 * <?php echo $textTblSellCommCarMstBodyTypeId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMstBodyTypeId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mst_body_type_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * プレートカラーマスタID
	 * $textTblSellCommCarMstPlateColorId	= $ctlHelper->getTextTblSellCommCarMstPlateColorId	($i);
	 * <?php echo $textTblSellCommCarMstPlateColorId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarMstPlateColorId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'mst_plate_color_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * プレート内容１
	 * $textTblSellCommCarPlateContent1	= $ctlHelper->getTextTblSellCommCarPlateContent1	($i);
	 * <?php echo $textTblSellCommCarPlateContent1	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarPlateContent1($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'plate_content1';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * プレート内容１
	 * $textTblSellCommCarPlateContent2	= $ctlHelper->getTextTblSellCommCarPlateContent2	($i);
	 * <?php echo $textTblSellCommCarPlateContent2	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarPlateContent2($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'plate_content2';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * プレート内容１
	 * $textTblSellCommCarPlateContent3	= $ctlHelper->getTextTblSellCommCarPlateContent3	($i);
	 * <?php echo $textTblSellCommCarPlateContent3	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarPlateContent3($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'plate_content3';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 車両情報ID（商用車）
	 * $textTblSellCommCarTblCommCarInfoId	= $ctlHelper->getTextTblSellCommCarTblCommCarInfoId	($i);
	 * <?php echo $textTblSellCommCarTblCommCarInfoId	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarTblCommCarInfoId($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'tbl_comm_car_info_id';
		$path	= $alias . '.' . $field;
		$tmp	= Hash::get($data, $path);
		$value	= number_format((int) $tmp);
		
		return h($value);
	}

	/**
	 * 作成日時
	 * $textTblSellCommCarCreated	= $ctlHelper->getTextTblSellCommCarCreated	($i);
	 * <?php echo $textTblSellCommCarCreated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarCreated($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'created';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

	/**
	 * 更新日時
	 * $textTblSellCommCarUpdated	= $ctlHelper->getTextTblSellCommCarUpdated	($i);
	 * <?php echo $textTblSellCommCarUpdated	; ?>
	 * @param int $cnt1
	 * @return string
	 */
	public function getTextTblSellCommCarUpdated($cnt1 = 0) {
		$data	= $this->dataTblSellCommCar[$cnt1];
		$alias	= 'TblSellCommCar';
		$field	= 'updated';
		$path	= $alias . '.' . $field;
		$value	= Hash::get($data, $path);
		
		return h($value);
	}

}