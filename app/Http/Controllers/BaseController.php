<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Foundation\Validation\ValidatesRequests;
use NukaCode\Core\Controllers\BaseController as CoreBaseController;

abstract class BaseController extends CoreBaseController {

	use DispatchesCommands, ValidatesRequests;

	public function __construct()
	{
		parent::__construct();

		$this->setUpMenu();
	}

	protected function setUpMenu()
	{
		\Menu::add('leftMenu')->quickLink('Home', 'home')->end();
	}

}
