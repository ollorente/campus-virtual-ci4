<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Tutorial extends BaseController
{
	public function teachers()
	{
		$model = model('TutorialsModel');

		return view('Front/tutoriales-para-docentes', [
			'tutorials' => $model
				->where('tutorialRole', 4)
				->where('isTutorialActive', 1)
				->where('isTutorialLock', 0)
				->orderBy('tutorialTitle', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function students()
	{
		$model = model('TutorialsModel');

		return view('Front/tutoriales-para-estudiantes', [
			'tutorials' => $model
				->where('tutorialRole', 3)
				->where('isTutorialActive', 1)
				->where('isTutorialLock', 0)
				->orderBy('tutorialTitle', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}
}
