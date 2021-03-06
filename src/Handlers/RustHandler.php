<?php

namespace Giunashvili\Spear\Handlers;

use Giunashvili\Spear\Interfaces\Data;
use Giunashvili\Spear\Interfaces\Handler;

class RustHandler extends BaseHandler implements Handler
{
	public function __invoke(string $code, string $input = ''): Data
	{
		$this->setImage('rust:1.57');
		$this->setCode($code);
		$this->setInput($input);
		$this->setCompliler('rustc');
		$this->setCompiledFile('program');

		return $this->compileAndRun();
	}
}
