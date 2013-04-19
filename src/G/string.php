<?php

namespace G;

/**
 * Returns a string with backslashes before characters that are listed in charlist parameter. 
 *  
 * @param  \Iterator $str Iterator that yields strings to be escaped
 * @param  string    $charlist A list of characters to be escaped.
 * @return \Generator
 */
function addcslashes(\Iterator $str, string $charlist) {
	foreach($str as $item) {
		yield \addcslashes($item, $charlist);
	}
}

/**
 * Returns a string with backslashes before characters that need to be quoted in database queries etc.
 * These characters are single quote ('), double quote ("), backslash (\) and NUL (the NULL byte). 
 *  
 * @param  \Iterator $str Iterator that yields strings to be escaped
 * @return \Generator
 */
function addslashes(\Iterator $str) {
	foreach($str as $item) {
		yield \addslashes($item);
	}
}

/**
 * Returns an ASCII string containing the hexadecimal representation of str.
 * The conversion is done byte-wise with the high-nibble first.
 * 
 * @param  \Iterator $str Iterator that yields the strings
 * @return \Generator
 */
function bin2hex(\Iterator $str) {
	foreach($str as $item) {
		yield \bin2hex($item);
	}
}

/**
 * This function is an alias of: rtrim().
 * 
 * @param  \Interator $str
 * @param  string     $charlist
 * @return \Generator
 */
function chop(\Interator $str, $charlist = " \t\n\r\0\0x0B") {
	return rtrim($str, $charlist);
}

/**
 * Returns a one-character string containing the character specified by ascii. 
 * 
 * @param  \Interator $ascii Iterator over ascii codes
 * @return \Generator
 */
function chr(\Interator $ascii) {
	foreach($ascii as $item) {
		yield \chr($item);
	}
}

/**
 *  Can be used to split a string into smaller chunks which is useful for e.g. converting base64_encode()
 *  output to match RFC 2045 semantics. It inserts end every chunklen characters. 
 *  
 * @param  \Interator $body Iterator over strings to be chunked.
 * @param  integer    $chunklen The chunk length.
 * @param  string     $end The line ending sequence.
 * @return \Generator
 */
function chunk_split(\Interator $body, $chunklen = 76, $end = "\r\n") {
	foreach($body as $item) {
		yield \chunk_split($item, $chunklen, $end);
	}
}

/**
 * Converts from one Cyrillic character set to another. 
 * 
 * @param  \Iterator $str Iterator over strings to be converted
 * @param  string    $from The source Cyrillic character set, as a single character. 
 * @param  string    $to The target Cyrillic character set, as a single character. 
 * @return \Generator
 */
function convert_cyr_string(\Iterator $str, string $from, string $to) {
	foreach ($body as $item) {
		yield \convert_cyr_string($item, $from, $to);
	}
}

/**
 * Decode a uuencoded string
 * 
 * @param  \Iterator $data Iterator over uuencoded data
 * @return \Generator
 */
function convert_uudecode(\Iterator $data) {
	foreach ($data as $item) {
		yield \convert_uudecode($item);
	}
}

/**
 * convert_uuencode() encodes a string using the uuencode algorithm. 
 * 
 * @param  \Iterator $data Iterator over the data to be encoded
 * @return \Generator
 */
function convert_uuencode(\Iterator $data) {
	foreach ($data as $item) {
		yield \convert_uuencode($item);
	}
}

/**
 * Counts the number of occurrences of every byte-value (0..255)
 * in string and returns it in various ways.
 * 
 * @param  \Interator $string Iterator over strings to be examined
 * @param  integer    $mode
 * @return \Generator
 */
function count_chars(\Interator $string, $mode = 0) {
	foreach ($string as $item) {
		yield \count_chars($item, $mode);
	}
}

/**
 * Generates the cyclic redundancy checksum polynomial of 32-bit lengths of the str.
 * This is usually used to validate the integrity of data being transmitted. 
 * 
 * @param  \Interator $str Iterator over the data
 * @return \Generator
 */
function crc32(\Interator $str) {
	foreach ($str as $item) {
		yield \crc32($item);
	}
}

/**
 * crypt() will return a hashed string using the standard Unix DES-based
 * algorithm or alternative algorithms that may be available on the system. 
 * 
 * @param  \Iterator $str Iterator over strings to be hashed
 * @param  string    $salt
 * @return \Generator
 */
function crypt(\Iterator $str, string $salt = null) {
	if(!$salt) {
		foreach ($str as $item) {
			yield \crypt($item);
		}
	} else {
		foreach ($str as $item) {
			yield \crypt($item, $salt);
		}
	}
}

/**
 * Outputs all strings. Unlike PHP's implementation of echo(), this version
 * yields all strings to enable chaining
 * 
 * @param  \Iterator $str Iterator over the strings
 * @return \Generator Strings that were echoed
 */
/*function echo_(\Iterator $str) {
	foreach ($str as $item) {
		echo($item);
		yield $item;
	}
}*/

/**
 * Returns an array of strings, each of which is a substring of
 * string formed by splitting it on boundaries formed by the string delimiter.
 * 
 * @param  string     $delimiter The boundary string. 
 * @param  \Iterator $string Iterator over input strings
 * @param  [type]     $limit
 * @return \Generator Generator of arrays
 */
function explode(string $delimiter, \Iterator $string, $limit = null) {
	if($limit !== null) {
		foreach ($string as $item) {
			yield \explode($delimiter, $item);
		}
	} else {
		foreach ($string as $item) {
			yield \explode($delimiter, $item, $limit);
		}
	}
}

/**
 * TODO
 * @param  [type] $args
 * @return [type]
 */
function fprintf($args) {
	//TODO
	throw new \Exception("The behaviour of this function is yet to be determined.");
}

/**
 * Converts logical Hebrew text to visual text.
 * @param  \Iterator $hebrew_text Iterator over Hebrew input strings
 * @param  integer   $max_chars_per_line This optional parameter indicates maximum number of characters per line that will be returned. 
 * @return \Generator Generator over the visual strings
 */
function hebrev(\Iterator $hebrew_text, $max_chars_per_line = 0) {
	foreach($hebrew_text as $item) {
		yield \hebrev($item, $max_chars_per_line);
	}
}

/**
 * This function is similar to hebrev() with
 * the difference that it converts newlines (\n) to "<br>\n".
 * 
 * @param  \Iterator $hebrew_text Iterator over Hebrew input strings
 * @param  integer   $max_chars_per_line This optional parameter indicates maximum number of characters per line that will be returned. 
 * @return \Generator Generator over the visual strings
 */
function hebrevc(\Iterator $hebrew_text, $max_chars_per_line = 0) {
	foreach($hebrew_text as $item) {
		yield \hebrevc($item, $max_chars_per_line);
	}
}

/**
 * Decodes a hexadecimally encoded binary string.
 * 
 * @param  \Iterator $data Iterator over hexadecimal representation of data.
 * @return \Generator Generator that yields binary representations of the given data
 */
function hex2bin(\Iterator $data) {
	foreach ($data as $item) {
		yield \hex2bin($item);
	}
}

/**
 * Convert all HTML entities to their applicable characters
 * 
 * @param  \Iterator $string Iterator over input strings
 * @param  int    $flags A bitmask
 * @param  string    $encoding Encoding to use. If omitted, the default value for this argument is UTF-8
 * @return \Generator Generator yielding decoded strings
 */
function html_entity_decode(\Iterator $string, $flags = (ENT_COMPAT | ENT_HTML401), $encoding = 'UTF-8') {
	foreach($string as $item) {
		yield \html_entity_decode($item, $flags, $encoding);
	}
}

/**
 * Convert all applicable characters to HTML entities
 * 
 * @param  \Iterator $string Iterator over input strings
 * @param  int    $flags A bitmask
 * @param  string    $encoding Encoding to use. If omitted, the default value for this argument is UTF-8
 * @param  bool $double_encode When double_encode is turned off PHP will not encode existing html entities. The default is to convert everything.
 * @return \Generator Generator yielding encoded strings
 */
function htmlentities(\Iterator $string, $flags = ENT_COMPAT | ENT_HTML401, $encoding = 'UTF-8', $double_encode = true) {
	foreach($string as $item) {
		yield \htmlentities($item, $flags, $encoding, $double_encode);
	}
}

/**
 * Convert special HTML entities back to characters 
 *  
 * @param  \Iterator $string Iterator over strings to decode.
 * @param  int    $flags A bitmask
 * @return \Generator Generator yielding decoded strings
 */
function htmlspecialchars_decode(\Iterator $string, $flags = ENT_COMPAT | ENT_HTML401) {
	foreach($string as $item) {
		yield \htmlspecialchars_decode($item, $flags);
	}
}

/**
 * Convert special characters to HTML entities
 *  
 * @param  \Iterator $string Iterator over strings to convert.
 * @param  int    $flags A bitmask
 * @return \Generator Generator yielding decoded strings
 */
function htmlspecialchars(\Iterator $string, $flags = ENT_COMPAT | ENT_HTML401, $encoding = 'UTF-8', $double_encode = true) {
	foreach($string as $item) {
		yield \htmlspecialchars($item, $flags, $encoding, $double_encode);
	}
}

/**
 * Join array elements with a glue string
 * 
 * @param  string    $glue Defaults to an empty string.
 * @param  \Iterator $pieces Iterator over arrays of strings to implode
 * @return \Generator Generator over glued strings
 */
function implode($glue = "", \Iterator $pieces) {
	foreach ($pieces as $item) {
		yield \implode($glue, $pieces);
	}
}

/**
 * This function is an alias of: implode().
 * 
 * @param  string    $glue Defaults to an empty string.
 * @param  \Iterator $pieces Iterator over arrays of strings to implode
 * @return \Generator Generator over glued strings
 */
function join($glue = "", \Iterator $pieces) {
	return implode($glue, $pieces);
}

/**
 * Returns a string with the first character of str,
 * lowercased if that character is alphabetic.
 * 
 * @param  \Iterator $str Iterator over input strings
 * @return \Generator
 */
function lcfirst(\Iterator $str) {
	foreach($str as $item) {
		yield \lcfirst($item);
	}
}

/**
 * Calculate Levenshtein distance between two strings
 * 
 * @param  \Iterator $str1 Interator Iterator over strings compared to $str2
 * @param  string    $str2 String that iterated strings are compared to
 * @param  integer   $cost_ins Defines the cost of insertion.
 * @param  integer   $cost_rep Defines the cost of replacement.
 * @param  integer   $cost_del Defines the cost of deletion.
 * @return \Generator
 */
function levenshtein(\Iterator $str1, string $str2, $cost_ins = 1, $cost_rep = 1, $cost_del = 1) {
	if($cost_del == 1 && $cost_ins == 1 && $cost_rep == 1) {
	    foreach($str1 as $item) {
		    yield \levenshtein($item, $str2);
	    }
	} else {
		foreach($str1 as $item) {
		    yield \levenshtein($item, $str2, $cost_ins, $cost_rep, $cost_del);
	    }
	}
}

/**
 * Strip whitespace (or other characters) from the beginning of a string.
 * 
 * @param  \Interator $str
 * @param  string     $charlist
 * @return \Generator
 */
function ltrim(\Interator $str, $charlist = " \t\n\r\0\0x0B") {
	foreach($str as $item) {
		yield \ltrim($item, $charlist);
	}
}

/**
 * Calculates the md5 hash of a given file
 * 
 * @param  \Interator $filename Iterator over filenames
 * @param  boolean    $raw_output When TRUE, returns the digest in raw binary format with a length of 16. 
 * @return \Generator Generator of digests
 */
function md5_file(\Interator $filename, $raw_output = false) {
	foreach($filename as $item) {
		yield \md5_file($item, $raw_output);
	}
}

/**
 * Calculates the md5 hash of a given string
 * 
 * @param  \Interator $str Iterator over strings
 * @param  boolean    $raw_output When TRUE, returns the digest in raw binary format with a length of 16. 
 * @return \Generator Generator of digests
 */
function md5(\Interator $str, $raw_output = false) {
	foreach($str as $item) {
		yield \md5($item, $raw_output);
	}
}

/**
 * Calculates the metaphone key of str.
 * 
 * @param  \Iterator $str Iterator over input strings
 * @param  integer   $phonemes  This parameter restricts the returned metaphone key to phonemes characters in length. The default value of 0 means no restriction.
 * @return \Generator Generator of metaphone keys
 */
function metaphone(\Iterator $str, $phonemes= 0) {
	foreach ($str as $item) {
		yield \metaphone($item, $phonemes);
	}
}

//TODO!





/**
 * This function returns a string with whitespace stripped from the end of str. 
 * 
 * @param  \Interator $str
 * @param  string     $charlist
 * @return \Generator
 */
function rtrim(\Interator $str, $charlist = " \t\n\r\0\0x0B") {
	foreach($str as $item) {
		yield \rtrim($item, $charlist);
	}
}