<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Format helper class extended
 *
 * @package    Core
 * @author     Rodrigo Petry
 * @copyright  (c) 2010 Lantech
 * @license    http://kohanaphp.com/license.html
 */
class format {

	/**
	 * 
	 * Strip non numeric characters
	 *
	 * @access	public
	 * @param	string	the string to convert in only numbers
	 * @return	string
	 */
	public static function strip_no_numbers($str)
	{
		return (preg_replace('/\D/', '', $str));
	}

	/**
	 *
	 * CEP with dots and hyphen
	 *
	 * @access	public
	 * @param	string	the cep number
	 * @return	string
	 */
	public static function cep($str)
	{
		if(!empty($str)) {

			$cep = (preg_replace('/\D/', '', $str));


			if(strlen($cep) != 8) {
				return $str;
			}

			return substr($cep, 0,2) . '.' . substr($cep, 2,3) .
					'-' . substr($cep, 5,3);
		}
	}

	/**
	 *
	 * CPF with dots and hifen
	 *
	 * @access	public
	 * @param	string	the cpf number
	 * @return	string
	 */
	public static function cpf($str)
	{
		if(!empty($str)) {

			$cpf = (preg_replace('/\D/', '', $str));

			$cpf = str_pad($cpf, 11, 0, STR_PAD_LEFT);

			return substr($cpf, 0,3) . '.' . substr($cpf, 3,3) .
					'.' . substr($cpf, 6,3) . '-' . substr($cpf, 9,2);
		}
	}

	/**
	 *
	 * CNPJ with dots, hifen and slash
	 *
	 * @access	public
	 * @param	string	the cnpj number
	 * @return	string
	 */
	public static function cnpj($str)
	{
		if(!empty($str)) {

			$cnpj = (preg_replace('/\D/', '', $str));

			$cnpj = str_pad($cnpj, 14, 0, STR_PAD_LEFT);

			return substr($cnpj, 0,2) . '.' . substr($cnpj, 2,3) . '.' . substr($cnpj, 5,3) .
					'/' . substr($cnpj, 8,4) . '-' . substr($cnpj, 12,2);
		}
	}

	/**
	 *
	 * Fone with hifen and parentesis
	 *
	 * @access	public
	 * @param	string	the cep number
	 * @return	string
	 */
	public static function fone($str)
	{
		if(!empty($str)) {

			$fone = (preg_replace('/\D/', '', $str));

			if(strlen($fone) != 10) {
				return $str;
			}

			return '(' . substr($fone, 0,2) . ') ' . substr($fone, 2,4) .
					'-' . substr($fone, 6,4);
		}
	}

	/**
	 *
	 * Regular date (dd/mm/yyyy) to Mysql Date format
	 *
	 * @access	public
	 * @param	string	date dd/mm/yyyy
	 * @return	string
	 */
	public static function date_human2mysql($data) {
        // Recebemos a data no formato: dd/mm/aaaa
        // Convertemos a data para o formato: aaaa-mm-dd
        if ( preg_match("/\//",$data) == true) {
	        $data = implode('-', array_reverse(explode('/',$data)));
        }
		
        return $data;
	}

	/**
	 * Formats a mysql date to human date (mm/dd/yyyy)
	 *
	 * @param   date	mysql date (yyyy-mm-dd)
	 * @return  string
	 */
	public static function date_mysql2human($date)
	{
		if(!empty($date)) {
			$newDate = implode('/',array_reverse(explode('-',$date)));

			return $newDate;
		} else {
			return $date;
		}
	}

	/**
	 * Formats a mysql datetime to human datetime (dd/mm/yyyy | hh:mm:ss)
	 *
	 * @param   date mysql datetime
	 * @return  string
	 */
	public static function datetime_mysql2human($datetime)
	{

		if(!empty($datetime) and valid::datetime($datetime)) {
			$data = date('d/m/Y',strtotime($datetime));
			$hora = date('H:i:s',strtotime($datetime));
			return $data . ' ' .$hora;
		} else {
			return $datetime;
		}
	}

	/**
	 * Formats a mysql datetime to human datetime (dd/mm/yyyy | hh:mm:ss)
	 *
	 * @param   date mysql datetime
	 * @return  string
	 */
	public static function datetime_mysql2human_fancy($datetime)
	{

		if(!empty($datetime) and valid::datetime($datetime)) {
			$data = html::image('images/icons/calendar_view_month.png');
			$data .= date('d/m/Y',strtotime($datetime));
			$hora = html::image('images/icons/clock_1.png');
			$hora .= date('H:i:s',strtotime($datetime));
			return $data . ' | ' . $hora;
		} else {
			return $datetime;
		}
	}

	/**
	 *
	 * Regular datetime (dd/mm/yyyy hh:mm:ss) to Mysql datetime format
	 *
	 * @access	public
	 * @param	string	datetime dd/mm/yyyy hh:mm:ss
	 * @return	string
	 */
	public static function datetime_human2mysql($human_datetime) {
        $date_time = explode(' ',$human_datetime);
        
		if ( preg_match("/\//",$date_time[0]) == true) {
                $data = implode('-', array_reverse(explode('/',$date_time[0])));
        }

		return $data.' '.$date_time[1];
	}

	/**
	 * Formats a timestamp to human datetime (mm/dd/yyyy | hh:mm:ss)
	 *
	 * @param   date timestamp
	 * @return  string
	 */
	public static function datetime_timestamp2human($timestamp)
	{
		if(!empty($timestamp)) {
			return date("d/m/Y | H:i:s",$timestamp);
		} else {
			return $timestamp;
		}
	}

	/**
	 * Formats a number according to currency format.
	 *
	 * @param   float	floating point number
	 * @return  string
	 */
	public static function currency($number,$prefix='')
	{
		return $prefix . number_format($number,2,',','.');
	}

	/**
	 * Currency to Mysql Double
	 *
	 * @param   string	currency string
	 * @return  string
	 */
	public static function currency_human2mysql($currency)
	{
		$currency = str_replace('.', '', $currency);
		return str_replace(',', '.', $currency);
	}

	/**
	 * empty to null
	 *
	 * @param   string	string
	 * @return  string
	 */
	public static function replace_empty2null($string)
	{
		if(empty($string)) {
			return null;
		} else {
			return $string;
		}
	}
	
	/**
	 * Remove acentuação
	 *
	 * @param   string	texto a remover a acentuação
	 * @return  string
	 */
	public static function no_accent($string) {
		$var = preg_replace("/Á|À|Â|Ã|Ä|Å|Æ/","A",$string);

		$var = preg_replace("/á|à|â|ã|ª|ä|å|æ/","a",$var);
		$var = preg_replace("/É|È|Ê|Ë/","E",$var);
		$var = preg_replace("/é|è|ê|ë/","e",$var);
		$var = preg_replace("/Í|Ì|Î|Ï/","I",$var);
		$var = preg_replace("/í|ì|î|ï/","I",$var);
		$var = preg_replace("/Ó|Ò|Ô|Õ|Ö|Ø/","O",$var);
		$var = preg_replace("/ó|ò|ô|õ|ö|ø|º|ð/","o",$var);
		$var = preg_replace("/Ú|Ù|Û|Ü/","U",$var);
		$var = preg_replace("/ú|ù|û|ü|µ/","u",$var);
		$var = preg_replace("/Ý|Ÿ|¥/","Y",$var);
		$var = preg_replace("/ý|ÿ/","y",$var);
		$var = preg_replace("/Ð/","D",$var);
		$var = preg_replace("/Ñ/","N",$var);
		$var = preg_replace("/ñ/","n",$var);
		$var = preg_replace("/Š/","S",$var);
		$var = preg_replace("/š|ß/","S",$var);
		$var = preg_replace("/Ž/","Z",$var);
		$var = preg_replace("/ž/","z",$var);
		$var = preg_replace("/Œ/","O",$var);
		$var = preg_replace("/œ/","o",$var);
		$var = str_replace("Ç","C",$var);
		$var = str_replace("ç","c",$var);

		return $var;
	}

	/**
	 *
	 * Display yes or no.
	 *
	 * @access	public
	 * @param	boolean
	 * @return	string
	 */
	public static function sim_nao($bool)
	{
		return ($bool == false) ? 'Não' : 'Sim' ;
	}

	/**
	 *
	 * Limit text and shows a tooltip with complete text.
	 *
	 * @access	public
	 * @param	string
	 * @return	string
	 */
	public static function short_description($text)
	{
		$text = '<span title="'.html::specialchars(strip_tags($text)).'">'.text::limit_chars(strip_tags($text), 100,'...').'</span>';

		return $text;
	}

	public static function no_specials($string) {
		$var = preg_replace("/Á|À|Â|Ã|Ä|Å|Æ/","A",$string);

		$var = preg_replace("/á|à|â|ã|ª|ä|å|æ/","a",$var);
		$var = preg_replace("/É|È|Ê|Ë/","E",$var);
		$var = preg_replace("/é|è|ê|ë/","e",$var);
		$var = preg_replace("/Í|Ì|Î|Ï/","I",$var);
		$var = preg_replace("/í|ì|î|ï/","I",$var);
		$var = preg_replace("/Ó|Ò|Ô|Õ|Ö|Ø/","O",$var);
		$var = preg_replace("/ó|ò|ô|õ|ö|ø|º|ð/","o",$var);
		$var = preg_replace("/Ú|Ù|Û|Ü/","U",$var);
		$var = preg_replace("/ú|ù|û|ü|µ/","u",$var);
		$var = preg_replace("/Ý|Ÿ|¥/","Y",$var);
		$var = preg_replace("/ý|ÿ/","y",$var);
		$var = preg_replace("/Ð/","D",$var);
		$var = preg_replace("/Ñ/","N",$var);
		$var = preg_replace("/ñ/","n",$var);
		$var = preg_replace("/Š/","S",$var);
		$var = preg_replace("/š|ß/","S",$var);
		$var = preg_replace("/Ž/","Z",$var);
		$var = preg_replace("/ž/","z",$var);
		$var = preg_replace("/Œ/","O",$var);
		$var = preg_replace("/œ/","o",$var);
		$var = str_replace("Ç","C",$var);
		$var = str_replace("ç","c",$var);

		return $var;
	}

} //End format
?>
