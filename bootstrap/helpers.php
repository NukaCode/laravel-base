<?php

/**
 * Print Pre data.
 *
 * @param mixed $data   The data you would like to display
 * @param bool  $return Return the data instad of echoing it.
 *
 * @return string $output The data to display wrapped in pre tags.
 */
function pp($data, $return = false)
{
	$output = '<pre>';
	$output .= print_r($data, true);
	$output .= "</pre>";

	if ($return == true) {
		return $output;
	} else {
		echo $output;
	}
}

/**
 * Print Pre and die.
 *
 * @param mixed $data The data you would like to display
 *
 * @return void
 */
function ppd($data)
{
	$output = '<pre>';
	$output .= print_r($data, true);
	$output .= "</pre>";

	echo $output;
	die;
}

function routeAnchor($route, array $parameters, $anchor)
{
	return route($route, $parameters) . $anchor;
}

/**
 * Convert HTML characters to entities.
 *
 * The encoding specified in the application configuration file will be used.
 *
 * @param string[] $array
 *
 * @return string[]
 */
function e_array($array)
{
	foreach ($array as $key => $value) {
		if (is_array($value)) {
			$array[$key] = e_array($value);
		} else {
			$array[$key] = HTML::entities($value);
		}
	}

	return $array;
}

/**
 * Add the active class to an element if the url matchs the arguments.
 *
 * @param  string[] $controller An array of controller then action arguments to check for.
 * @param  bool     $justActive Return class="active" or just active.
 *
 * @return string
 */
function routeIs($controller, $justActive = false)
{
	if (! is_array($controller)) {
		if ($controller == '/' && Request::segment(1) == null) {
			return "class='active'";
		}
		if (Request::segment(1) == $controller) {
			if ($justActive) {
				return "active";
			} else {
				return "class='active'";
			}
		}
	} else {
		if (Request::segment(1) == $controller[0]
			&& Request::segment(2) == $controller[1]
		) {
			if ($justActive) {
				return "active";
			} else {
				return "class='active'";
			}
		}
	}

	return false;
}

function routeActive($route, $children = [], $simple = false)
{
	$currentRoute = Route::getCurrentRoute()->getName();

	if ($route == $currentRoute || in_array($currentRoute, $children)) {
		if ($simple) {
			return "active";
		} else {
			return "class='active'";
		}
	}
}

function percent($num_amount, $num_total)
{
	if ($num_amount == 0 || $num_total == 0) {
		return 0;
	} else {
		$count1 = $num_amount / $num_total;
		$count2 = $count1 * 100;
		$count  = number_format($count2, 0);

		return $count;
	}
}

function decimal($num_amount, $num_total, $round = 2)
{
	if ($num_amount == 0) {
		return number_format(-($num_total * 1), 2);
	} elseif ($num_total == 0) {
		return number_format($num_amount * 1, 2);
	} else {
		$count1 = $num_amount / $num_total;
		$count  = number_format($count1, $round);

		return $count;
	}
}

function classify($value)
{
	$value  = mb_convert_case($value, MB_CASE_TITLE, 'UTF-8');
	$search = ['_', '-', '.', '/', ':'];

	return str_replace(' ', '_', str_replace($search, ' ', $value));
}

function cleanRoute($route, $returnArray = false)
{
	$route         = str_replace('_', '.', $route);
	$routeParts    = explode('@', $route);
	$routeParts[1] = preg_replace('/^get/', '', $routeParts[1]);
	$routeParts[1] = preg_replace('/^post/', '', $routeParts[1]);
	$route         = strtolower(str_replace('Controller', '', implode('.', $routeParts)));

	if ($returnArray == true) {
		$route = explode('.', $route);
	}

	return $route;
}

function variableObject($object, $tap)
{
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

function ordinal($cardinal)
{
	$test_c    = abs($cardinal) % 10;
	$extension = ((abs($cardinal) % 100 < 21 && abs($cardinal) % 100 > 4) ? 'th' : (($test_c < 4) ? ($test_c < 3) ? ($test_c < 2) ? ($test_c < 1) ? 'th' : 'st' : 'nd' : 'rd' : 'th'));

	return $cardinal . $extension;
}

function humanReadableImplode($array)
{
	$last  = array_slice($array, -1);
	$first = join(', ', array_slice($array, 0, -1));
	$both  = array_filter(array_merge([$first], $last));

	return join(' and ', $both);
}

function convertToSeconds($time)
{
	$timeIntervals = explode(':', $time);

	// We have hours.  Convert it all to seconds.
	if (isset($timeIntervals[2])) {
		$seconds = $timeIntervals[2];
		$minutes = $timeIntervals[1] * 60;
		$hours   = $timeIntervals[0] * 60 * 60;

		return $hours + $minutes + $seconds;
	}

	// Only minutes.  COnvert all to seconds.
	if (isset($timeIntervals[1])) {
		$seconds = $timeIntervals[1];
		$minutes = $timeIntervals[0] * 60;

		return $minutes + $seconds;
	}

	// We only have seconds.  Return it.
	return $timeIntervals[0];
}


function convertFromSeconds($time)
{
	$units = [
		"week"   => 7 * 24 * 3600,
		"day"    => 24 * 3600,
		"hour"   => 3600,
		"minute" => 60,
		"second" => 1,
	];

	// specifically handle zero
	if ($time == 0) {
		return "0 seconds";
	}

	$s = "";

	foreach ($units as $name => $divisor) {
		if ($quot = intval($time / $divisor)) {
			$num = sprintf("%02s", $quot);
			$s .= "$num" . ":";
			$time -= $quot * $divisor;
		}
	}

	return substr($s, 0, -1);
}

function trim_value(&$value)
{
	$value = trim($value);
}