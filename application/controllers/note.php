<?php
class Note_Controller extends Base_Controller
{
	public function action_index()
	{
		echo "index for note";
	}

	public function action_welcome($name,$age)
	{
		$data = array (
				'name' => $name,
				'age' => $age
			);
		return View::make('welcome',$data);
	}
}