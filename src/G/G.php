<?php
namespace G;

class G {
	public static function __callStatic($name, $arguments) {
		$resume = true;
		while($resume) {
			$args = array();
			foreach ($arguments as $i => $v) {
				if($v instanceof \Iterator) {
					$args[$i] = $v->current();
					$v->next();
					$resume = $resume && $v->valid();
				} else {
					$args[$i] = $v;
				}
			}

			yield call_user_func_array($name, $args);
		}
	}

	public static function map(callable $method) {
		$arguments = array_slice(1, func_get_args());
		$resume = true;
		while($resume) {
			$args = array();
			foreach ($arguments as $i => $v) {
				if($v instanceof \Iterator) {
					$args[$i] = $v->current();
					$v->next();
					$resume = $resume && $v->valid();
				} else {
					$args[$i] = $v;
				}
			}

			yield call_user_func_array($method, $args);
		}
	}

	public static function filter(callable $method, \Iterator $items) {
		foreach($items as $item) {
			if($method($item)) {
				yield $method;
			}
		}
	}
}