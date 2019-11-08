<?php

 /**
 * @file generated from https://raw.githubusercontent.com/tecnickcom/TCPDF/master/include/tcpdf_static.php
 * This is a PHP class that contains static methods for the TCPDF class.<br>
 * @package com.tecnick.tcpdf
 * @author Nicola Asuni
 * @version 1.1.2
 */

namespace Jeylabs\TCPDI;

class TCPDF_STATIC 
{

	/**
	 * Add "\" before "\", "(" and ")"
	 * @param $s (string) string to escape.
	 * @return string escaped string.
	 * @public static
	 */
	public static function _escape($s) {
		// the chr(13) substitution fixes the Bugs item #1421290.
		return strtr($s, array(')' => '\\)', '(' => '\\(', '\\' => '\\\\', chr(13) => '\r'));
	}
}