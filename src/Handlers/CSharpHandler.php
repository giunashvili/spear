<?php

namespace Giunashvili\Spear\Handlers;

use Giunashvili\Spear\Interfaces\Data;
use Giunashvili\Spear\Interfaces\Handler;

class CSharpHandler extends BaseHandler implements Handler
{
	public function __invoke(string $code = '', string $input = ''): Data
	{
		$this->setImage('mono:6.12.0');
		$this->setCode($code);
		$this->setInput($input);
		$this->setCompiledFile('program.exe');
		$this->setCompliler('mcs');
		$this->setExecutor('mono');

		return $this->compileAndRun();
	}
}
