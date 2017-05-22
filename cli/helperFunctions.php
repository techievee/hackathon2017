<?php

	/**
	*** Prints elements of an array in vertical format
	*/
	function printArray($arr, $lvl=0)
	{
		$ret_str = "";

		foreach($arr as $item=>$value)
		{
			$str = "";		

			for ($i = 0; $i <= $lvl; $i++)
			{
				$str= $str."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			}

			$item_name = (is_numeric($item) || ($item==""))?"":$item.":";

			//echo gettype($value);
			if(gettype($value)=="array")
			{
				$ret_str .= $str.$item_name."<br/>";
				$ret_str .= printArray($value, $lvl+1);
				//$ret_str .= "<br/>";
			}
			else
			{
				$ret_str .= $str.$item_name."&nbsp;&nbsp;".$value."<br/>";
			}

		}

		return $ret_str;

	}


	/**
	* Indents a flat JSON string to make it more human-readable.
	*
	* @param string $json The original JSON string to process.
	* @return string Indented version of the original JSON string.
	*/
	function indent($json)
	{
		$result = '';
		$pos = 0;
		$strLen = strlen($json);
		$indentStr = "&nbsp;&nbsp;&nbsp;&nbsp;";
		$newLine = "<br>";

		for ($i = 0; $i < $strLen; $i++) {
			// Grab the next character in the string.
			$char = $json[$i];

			// Are we inside a quoted string?
			if ($char == '"') {
				// search for the end of the string (keeping in mind of the escape sequences)
				if (!preg_match('`"(\\\\\\\\|\\\\"|.)*?"`s', $json, $m, null, $i))
				return $json;

				// add extracted string to the result and move ahead
				$result .= $m[0];
				$i += strLen($m[0]) - 1;
				continue;
			}
			else if ($char == '}' || $char == ']') {
				$result .= $newLine;
				$pos --;
				$result .= str_repeat($indentStr, $pos);
			}

			// Add the character to the result string.
			$result .= $char;

			// If the last character was the beginning of an element,
			// output a new line and indent the next line.
			if ($char == ',' || $char == '{' || $char == '[') {
				$result .= $newLine;
				if ($char == '{' || $char == '[') {
					$pos ++;
				}

				$result .= str_repeat($indentStr, $pos);
			}
		}

		return $result;
	}

?>