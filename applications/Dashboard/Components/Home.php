<?php

namespace Applications\Dashboard\Components;

use System\Base\Component;

class Hello extends Component
{
	public function view()
	{
		return $this->generateView();
	}
}