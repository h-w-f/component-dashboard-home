<?php

namespace Compoennts\Dashboard;

use System\Base\BaseComponent;

class Home extends BaseComponent
{
	public function view()
	{
		return $this->generateView();
	}
}