<?php
/**
 * Modifier_expand
 * Expands a named list into a standard array of keys
 *
 * @author  Jack McDade
 */

class Modifier_expand extends Modifier {

	public function index($values, $parameters=array())
	{
		if (! is_array($values)) return $values;
		
		$new_array = array();
		foreach ($values as $key => $value) {
			$new_array[] = array(
				'new_key' => $key,
				'new_value' => $value
			);
		}

		return $new_array;
	}
}