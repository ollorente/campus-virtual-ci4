<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Tool extends BaseController
{
	public function teachers()
	{
		$model = model('ToolsModel');

		return view('Front/herramientas-para-docentes', [
			'tools' => $model
				->where('toolRole', 4)
				->where('isToolActive', 1)
				->orderBy('toolName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function students()
	{
		$model = model('ToolsModel');

		return view('Front/herramientas-para-estudiantes', [
			'tools' => $model
				->where('toolRole', 3)
				->where('isToolActive', 1)
				->orderBy('toolName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}
}
