<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitTutorials extends Seeder
{
	public function run()
	{
		$tutorials = [
			[
				'tutorialTitle' => 'Que es Microaprendizaje en detalle',
				'tutorialSlug' => 'que-es-microaprendizaje-en-detalle',
				'tutorialLink' => 'https://www.youtube.com/watch?v=4gIDu-B4jXE',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/4gIDu-B4jXE/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-04T22:56:37',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '8 pasos para hacer micro-elearning',
				'tutorialSlug' => '8-pasos-para-hacer-micro-elearning',
				'tutorialLink' => 'https://www.youtube.com/watch?v=HaWqRdn8hcY',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/HaWqRdn8hcY/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-04T22:59:47',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Como crear una webquest con una plantilla de Google sites',
				'tutorialSlug' => 'como-crear-una-webquest-con-una-plantilla-de-google-sites',
				'tutorialLink' => 'https://www.youtube.com/watch?v=KjBtd8b3V0k',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/KjBtd8b3V0k/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-04T23:01:50',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Definición Webquest',
				'tutorialSlug' => 'definicion-webquest',
				'tutorialLink' => 'https://www.youtube.com/watch?v=V-G3R46WR8o',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/V-G3R46WR8o/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-04T23:03:33',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Qué es el Aprendizaje Basado en Proyectos? - PUCP',
				'tutorialSlug' => 'que-es-el-aprendizaje-basado-en-proyectos-pucp',
				'tutorialLink' => 'https://www.youtube.com/watch?v=Vp4ZQu4T6lw',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607744756/tutoriales/hqdefault_34_n1bczh.jpg',
				'tutorialCreatedAt' => '2020-08-04T23:03:33',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Viaje a la Escuela del Siglo XXI => Aprendizaje basado en proyectos',
				'tutorialSlug' => 'viaje-a-la-escuela-del-siglo-xxi-aprendizaje-basado-en-proyectos',
				'tutorialLink' => 'https://www.youtube.com/watch?v=OeAVS903x7I',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/OeAVS903x7I/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-04T23:10:32',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Clase Invertida',
				'tutorialSlug' => 'clase-invertida',
				'tutorialLink' => 'https://www.youtube.com/watch?v=ePOnn0H9GMY',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/ePOnn0H9GMY/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-04T23:13:13',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Google for Education',
				'tutorialSlug' => 'google-for-education',
				'tutorialLink' => 'https://edu.google.com/intl/es-419/?modal_active=none',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607744756/tutoriales/unnamed_rucae1.jpg',
				'tutorialCreatedAt' => '2020-08-04T23:03:33',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Educación 3.0',
				'tutorialSlug' => 'educacion-3-0',
				'tutorialLink' => 'https://www.educaciontrespuntocero.com',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://www.educaciontrespuntocero.com/wp-content/uploads/2020/07/pensamiento-logico-e1536247757685.jpg',
				'tutorialCreatedAt' => '2020-08-04T23:19:21',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '38 herramientas TIC para profesores',
				'tutorialSlug' => '38-herramientas-tic-para-profesores',
				'tutorialLink' => 'https://webdelmaestrocmf.com/portal/herramientas-tic-profesores-creativos/',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607743720/tutoriales/1-60_ueij1g.jpg',
				'tutorialCreatedAt' => '2020-08-04T23:03:33',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo subir documentos de referencia?',
				'tutorialSlug' => 'como-subir-documentos-de-referencia',
				'tutorialLink' => 'https://www.youtube.com/watch?v=W85mHp2xjqs',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/W85mHp2xjqs/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-05T03:56:17',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo segmentar un examen por grupos?',
				'tutorialSlug' => 'como-segmentar-un-examen-por-grupo',
				'tutorialLink' => 'https://www.youtube.com/watch?v=BfSUndy3paI',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/BfSUndy3paI/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-05T04:05:33',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo subir imágenes y videos?',
				'tutorialSlug' => 'como-subir-imagenes-y-videos',
				'tutorialLink' => 'https://www.youtube.com/watch?v=8gd3h9eHAwc',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/8gd3h9eHAwc/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-26T00:11:52',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo cargar contenido en una evaluación?',
				'tutorialSlug' => 'como-cargar-contenido-en-una-evaluacion',
				'tutorialLink' => 'https://www.youtube.com/watch?v=_fRACjpc-tY',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/_fRACjpc-tY/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-26T00:14:42',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo calificar una tarea?',
				'tutorialSlug' => 'como-calificar-una-tarea',
				'tutorialLink' => 'https://www.youtube.com/watch?v=OPZAB0eYeAE',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/OPZAB0eYeAE/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-26T00:16:58',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo ve el curso un estudiante?',
				'tutorialSlug' => 'como-ve-el-curso-un-estudiante',
				'tutorialLink' => 'https://www.youtube.com/watch?v=B3q1RwbNUQw',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/B3q1RwbNUQw/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-26T00:19:39',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo crear una Mesa de Ayuda?',
				'tutorialSlug' => 'como-crear-una-mesa-de-ayuda',
				'tutorialLink' => 'https://www.youtube.com/watch?v=MC1IN9p333c',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/MC1IN9p333c/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-26T00:21:13',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo crear tareas y cuestionarios?',
				'tutorialSlug' => 'como-crear-tareas-y-cuestionarios',
				'tutorialLink' => 'https://www.youtube.com/watch?v=kNlGfgtIOEA',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/kNlGfgtIOEA/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-26T00:21:59',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo trabajar con grupos dentro de moodle?',
				'tutorialSlug' => 'como-trabajar-con-grupos-dentro-de-moodle',
				'tutorialLink' => 'https://www.youtube.com/watch?v=84uAZvxc52c',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/84uAZvxc52c/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-26T00:23:51',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo fusionar copias de seguridad?',
				'tutorialSlug' => 'como-fusionar-copias-de-seguridad',
				'tutorialLink' => 'https://www.youtube.com/watch?v=QsbPtoKb8J4',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/QsbPtoKb8J4/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-08-26T00:25:20',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Instructivo Moodle',
				'tutorialSlug' => 'instructivo-moodle',
				'tutorialLink' => 'https://drive.google.com/file/d/12tyBuJc-vNUYA6e6MPWl1qTMFF27G00_/view?usp=sharing',
				'tutorialRole' => 3,
				'tutorialImage' => '/img/herramientas/instructivo-moodle-estudiantes.png',
				'tutorialCreatedAt' => '2020-10-21T19:22:11',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo ve el curso un estudiante?',
				'tutorialSlug' => 'como-ve-el-curso-un-estudiante',
				'tutorialLink' => 'https://www.youtube.com/watch?v=B3q1RwbNUQw',
				'tutorialRole' => 3,
				'tutorialImage' => 'https://i.ytimg.com/vi/B3q1RwbNUQw/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T20:20:16',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Captura de pantalla con OBS Studio',
				'tutorialSlug' => 'captura-de-pantalla-con-obs-studio',
				'tutorialLink' => 'https://www.youtube.com/watch?v=NXFrLGrROqs',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/NXFrLGrROqs/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T20:21:06',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Tutorial Instalación Zoom',
				'tutorialSlug' => 'tutorial-instalacion-zoom',
				'tutorialLink' => 'https://www.youtube.com/watch?v=QulWsytmTdE',
				'tutorialRole' => 3,
				'tutorialImage' => 'https://i.ytimg.com/vi/QulWsytmTdE/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T20:30:24',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Tutorial Instalación Zoom',
				'tutorialSlug' => 'tutorial-instalacion-zoom',
				'tutorialLink' => 'https://www.youtube.com/watch?v=QulWsytmTdE',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/QulWsytmTdE/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T20:43:04',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Crear Video Conferencia en Zoom',
				'tutorialSlug' => 'crear-video-conferencia-en-zoom',
				'tutorialLink' => 'https://www.youtube.com/watch?v=Ql9NOW0d0Nk',
				'tutorialRole' => 3,
				'tutorialImage' => 'https://i.ytimg.com/vi/Ql9NOW0d0Nk/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T20:44:53',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Crear Video Conferencia en Zoom',
				'tutorialSlug' => 'crear-video-conferencia-en-zoom',
				'tutorialLink' => 'https://www.youtube.com/watch?v=Ql9NOW0d0Nk',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/Ql9NOW0d0Nk/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T20:45:48',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Tutorial Meet',
				'tutorialSlug' => 'tutorial-meet',
				'tutorialLink' => 'https://www.youtube.com/watch?v=tmV2uVO2WN8',
				'tutorialRole' => 3,
				'tutorialImage' => 'https://i.ytimg.com/vi/tmV2uVO2WN8/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T20:48:35',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Tutorial Meet',
				'tutorialSlug' => 'tutorial-meet',
				'tutorialLink' => 'https://www.youtube.com/watch?v=tmV2uVO2WN8',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/tmV2uVO2WN8/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T20:49:11',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Tutorial Screencastify',
				'tutorialSlug' => 'tutorial-screencastify',
				'tutorialLink' => 'https://www.youtube.com/watch?v=wQMR3MWq4J4',
				'tutorialRole' => 3,
				'tutorialImage' => 'https://i.ytimg.com/vi/wQMR3MWq4J4/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T20:51:39',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Tutorial Screencastify',
				'tutorialSlug' => 'tutorial-screencastify',
				'tutorialLink' => 'https://www.youtube.com/watch?v=wQMR3MWq4J4',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/wQMR3MWq4J4/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T20:52:22',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Tutorial OBS Instalación',
				'tutorialSlug' => 'tutorial-obs-instalacion',
				'tutorialLink' => 'https://www.youtube.com/watch?v=JXfwszw76Pc',
				'tutorialRole' => 3,
				'tutorialImage' => 'https://i.ytimg.com/vi/JXfwszw76Pc/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T20:55:16',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Tutorial OBS Instalación',
				'tutorialSlug' => 'tutorial-obs-instalacion',
				'tutorialLink' => 'https://www.youtube.com/watch?v=JXfwszw76Pc',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/JXfwszw76Pc/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T20:55:59',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Tutorial Grabación Pantalla con PowerPoint',
				'tutorialSlug' => 'tutorial-grabacion-pantalla-con-powerpoint',
				'tutorialLink' => 'https://www.youtube.com/watch?v=dxpcakfUGUY',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/dxpcakfUGUY/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T21:08:13',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Tutorial Grabación Pantalla con PowerPoint',
				'tutorialSlug' => 'tutorial-grabacion-pantalla-con-powerpoint',
				'tutorialLink' => 'https://www.youtube.com/watch?v=dxpcakfUGUY',
				'tutorialRole' => 3,
				'tutorialImage' => 'https://i.ytimg.com/vi/dxpcakfUGUY/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T21:16:15',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Google Meet',
				'tutorialSlug' => 'google-meet',
				'tutorialLink' => 'https://www.youtube.com/watch?v=bmdqq72EzQ0',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/bmdqq72EzQ0/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T21:18:47',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Bajar listado de estudiantes en Moodle',
				'tutorialSlug' => 'bajar-listado-de-estudiantes-en-moodle',
				'tutorialLink' => 'https://www.youtube.com/watch?v=Gl6esNZF37E',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/Gl6esNZF37E/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T21:19:58',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Tutorial Classroom',
				'tutorialSlug' => 'tutorial-classroom',
				'tutorialLink' => 'https://www.youtube.com/watch?v=6KAW3QCQLQk',
				'tutorialRole' => 4,
				'tutorialImage' => 'https://i.ytimg.com/vi/6KAW3QCQLQk/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T21:26:46',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo hacer un podcast desde tu celular?',
				'tutorialSlug' => 'como-hacer-un-podcast-desde-tu-celular',
				'tutorialLink' => 'https://www.youtube.com/watch?v=O3xcAHYQ9wk',
				'tutorialRole' => 3,
				'tutorialImage' => 'https://i.ytimg.com/vi/O3xcAHYQ9wk/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T21:37:14',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => 'Tutorial cómo hacer una infografía efectiva',
				'tutorialSlug' => 'tutorial-como-hacer-una-infografia-efectiva',
				'tutorialLink' => 'https://www.youtube.com/watch?v=e5OIeETjTnE',
				'tutorialRole' => 3,
				'tutorialImage' => 'https://i.ytimg.com/vi/e5OIeETjTnE/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-10-21T21:55:59',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
			[
				'tutorialTitle' => '¿Cómo ingresar a Moodle?',
				'tutorialSlug' => 'como-ingresar-a-moodle',
				'tutorialLink' => 'https://youtu.be/8Uimynsl2OM',
				'tutorialRole' => 3,
				'tutorialImage' => 'https://i.ytimg.com/vi/8Uimynsl2OM/hqdefault.jpg',
				'tutorialCreatedAt' => '2020-11-19T18:17:55',
				'isTutorialActive' => 1,
				'isTutorialLock' => 0,
			],
		];

		$builder = $this->db->table('tutorials');
		$builder->insertBatch($tutorials);
	}
}