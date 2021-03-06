<?php

namespace Giunashvili\Spear\Handlers;

use Giunashvili\Spear\Interfaces\Data;
use Giunashvili\Spear\Interfaces\Handler;

class CppHandler extends BaseHandler implements Handler
{
	public function __invoke(string $code = '', string $input = ''): Data
	{
		$this->setImage('giunashvili/cpp');
		$this->setCode($code);
		$this->setInput($input);
		$this->setCompiledFile('a.out');
		$this->setCompliler('g++ -x c++');

		return $this->compileAndRun();
	}
}
