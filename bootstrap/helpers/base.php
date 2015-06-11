<?php

if (! function_exists('pp')) {
	/**
	 * Print Pre data.
	 *
	 * @param mixed $data   The data you would like to display
	 * @param bool  $return Return the data instad of echoing it.
	 *
	 * @return string $output The data to display wrapped in pre tags.
	 */
	function pp($data, $return = false) {
		$output = '<pre>';
		$output .= print_r($data, true);
		$output .= "</pre>";

		if ($return == true) {
			return $output;
		} else {
			echo $output;
		}
	}
}

if (! function_exists('ppd')) {
	/**
	 * Print Pre and die.
	 *
	 * @param mixed $data The data you would like to display
	 *
	 * @return void
	 */
	function ppd($data) {
		$output = '<pre>';
		$output .= print_r($data, true);
		$output .= "</pre>";

		echo $output;
		die;
	}
}

if (! function_exists('classify')) {
	/**
	 * Converts a string into a class name.
	 * Hello world would become Hello_World.
	 *
	 * @param $value
	 *
	 * @return mixed
	 */
	function classify($value) {
		$value  = mb_convert_case($value, MB_CASE_TITLE, 'UTF-8');
		$search = ['_', '-', '.', '/', ':'];

		return str_replace(' ', '_', str_replace($search, ' ', $value));
	}
}

if (! function_exists('variableObject')) {
	/**
	 * @todo - Tell me what the hell this does.
	 *
	 * @param $object
	 * @param $tap
	 *
	 * @return mixed
	 */
	function variableObject($object, $tap) {
		if (strpos($tap, '->')) {
			$fields = explode('->', $tap);
			foreach ($fields as $field) {
				$object = $object->$field;
			}
		} else {
			$object = $object->$tap;
		}

		return $object;
	}
}

if (! function_exists('humanReadableImplode')) {
	/**
	 * Implode an array but add 'and' before the last result.
	 *
	 * @param $array
	 *
	 * @return string
	 */
	function humanReadableImplode($array) {
		$last  = array_slice($array, -1);
		$first = join(', ', array_slice($array, 0, -1));
		$both  = array_filter(array_merge([$first], $last));

		return join(' and ', $both);
	}
}
