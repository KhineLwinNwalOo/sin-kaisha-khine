<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('ImageManager', 'Vendor');

/**
 * Description of SellGeneralCarImageFiels
 *
 * @author hanai
 */
class SellGeneralCarImageFiel {
	
	const IMAGES		= IMAGES;
	const IMG_DIR_BIG	= 'SellGeneralCarImages/big/';
	const IMG_DIR_MED	= 'SellGeneralCarImages/med/';
	const IMG_DIR_MIN	= 'SellGeneralCarImages/min/';
	
	const IMG_TYPE		= 'png';
	
	const IMAGE_SIZE_BIG_W = 700;
	const IMAGE_SIZE_BIG_H = 525;

	const IMAGE_SIZE_MED_W = 182;
	const IMAGE_SIZE_MED_H = 137;
	
	const IMAGE_SIZE_MIN_W = 90;
	const IMAGE_SIZE_MIN_H = 67;
	
	public static function generate($img_sys_name, $imgPath, $imgName) {
		$imgType	= ImageManager::getImageType($imgName);
		
		$imagePathBig	= self::getImagePathBig($img_sys_name);
		$imagePathMed	= self::getImagePathMed($img_sys_name);
		$imagePathMin	= self::getImagePathMin($img_sys_name);
				
		$iconPropertyBig	= ImageManager::getImageProperty(self::IMAGE_SIZE_BIG_W, self::IMAGE_SIZE_BIG_H, self::IMG_TYPE);
		$iconPropertyMed	= ImageManager::getImageProperty(self::IMAGE_SIZE_MED_W, self::IMAGE_SIZE_MED_H, self::IMG_TYPE);
		$iconPropertyMin	= ImageManager::getImageProperty(self::IMAGE_SIZE_MIN_W, self::IMAGE_SIZE_MIN_H, self::IMG_TYPE);
		
		ImageManager::generateCutImageFile($imgPath, $imgType, $imagePathBig, $iconPropertyBig);
		ImageManager::generateCutImageFile($imgPath, $imgType, $imagePathMed, $iconPropertyMed);
		ImageManager::generateCutImageFile($imgPath, $imgType, $imagePathMin, $iconPropertyMin);
	}
	
	/**
	 * プロジェクトイメージ削除
	 * @param string $img_sys_name
	 */
	public static function remove($img_sys_name) {
		$imagePathBig = self::getImagePathBig($img_sys_name);
		$imagePathMed = self::getImagePathMed($img_sys_name);
		$imagePathMin = self::getImagePathMin($img_sys_name);
		
		ImageManager::removeImageFile($imagePathBig);
		ImageManager::removeImageFile($imagePathMed);
		ImageManager::removeImageFile($imagePathMin);
	}
	
	private static function getImagePathBig($img_sys_name) {
		return self::IMAGES . self::IMG_DIR_BIG . $img_sys_name;
	}
	
	private static function getImagePathMed($img_sys_name) {
		return self::IMAGES . self::IMG_DIR_MED . $img_sys_name;
	}
	
	private static function getImagePathMin($img_sys_name) {
		return self::IMAGES . self::IMG_DIR_MIN . $img_sys_name;
	}
}