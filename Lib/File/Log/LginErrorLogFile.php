<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppLogFile', 'Lib/File/Log');

/**
 * Description of LginErrorLogFile
 *
 * @author hanai
 */
class LginErrorLogFile extends AppLogFile {
	
	const PATH_BASE = 'logs/days/{:day}/common/login_error.log';
	
	protected function getPath() {
		$logFile = $this;
		$dataFormat	= static::DATE_FORMAT;
		$pathBase	= static::PATH_BASE;
		$timestamp	= $logFile->timestamp;
		
		$day = date($dataFormat, $timestamp);
		
		$map = array(
			'{:day}' => $day,
		);
		$search		= array_keys($map);
		$replace	= array_values($map);
		
		return TMP . str_replace($search, $replace, $pathBase);
	}	
}