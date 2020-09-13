<?php

namespace Applications\Dashboard\Components;

use System\Base\Controller;

class Hello extends Controller
{
	public function view()
	{
		return $this->generateView();
	}
}