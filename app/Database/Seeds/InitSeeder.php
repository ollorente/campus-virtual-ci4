<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitSeeder extends Seeder
{
	public function run()
	{
		$roles = [
			[
				'roleName' => 'Administrador',
				'roleNameUrl' => 'administrador',
				'roleImage' => '',
				'roleOrder' => 0,
				'isRoleActive' => 0,
			],
			[
				'roleName' => 'Aspirante',
				'roleNameUrl' => 'aspirante',
				'roleImage' => 'img-aspirante.png',
				'roleOrder' => 0,
				'isRoleActive' => 0,
			],
			[
				'roleName' => 'Estudiante',
				'roleNameUrl' => 'estudiante',
				'roleImage' => 'img-estudiante.png',
				'roleOrder' => 1,
				'isRoleActive' => 1,
			],
			[
				'roleName' => 'Docente',
				'roleNameUrl' => 'docente',
				'roleImage' => 'img-docente.png',
				'roleOrder' => 2,
				'isRoleActive' => 1,
			],
		];

		$builder = $this->db->table('roles');
		$builder->insertBatch($roles);

		$authlevels = [
			[
				'name' => 'Estudiante',
			],
			[
				'name' => 'Docente',
			],
			[
				'name' => 'Administrador',
			],
			[
				'name' => 'Superusuario',
			],
		];

		$builder = $this->db->table('authlevels');
		$builder->insertBatch($authlevels);

		$users = [
			[
				'username' => 'admin',
				'email' => 'admin@admin.com',
				'auth_level' => 4,
				'banned' => '0',
				'passwd' => '$2y$10$ihBogxF7VYyEM3mvhHSwPuoJwYYhBkgy0GmLvBoF.Zv70B163WnEG',
				'passwd_recovery_code' => NULL,
				'passwd_recovery_date' => NULL,
				'passwd_modified_at' => NULL,
				'last_login' => NULL,
				'created_at' =>  date('Y-m-d H:i:s'),
				'updated_at' =>  date('Y-m-d H:i:s'),
			],
			[
				'username' => 'oscar.llorente',
				'email' => 'oscar.llorente@unicolmayor.edu.co',
				'auth_level' => 4,
				'banned' => '0',
				'passwd' => '$2y$10$yf5QVF6SVhMefwavF4C7MuQCL0djr1icC0udX0Q3oUZ/sRMan1uCm',
				'passwd_recovery_code' => NULL,
				'passwd_recovery_date' => NULL,
				'passwd_modified_at' => NULL,
				'last_login' => NULL,
				'created_at' =>  date('Y-m-d H:i:s'),
				'updated_at' =>  date('Y-m-d H:i:s'),
			],
			[
				'username' => 'marcela.romero',
				'email' => 'marcela.romero@unicolmayor.edu.co',
				'auth_level' => 3,
				'banned' => '0',
				'passwd' => '$2y$10$EsJk18q1U2yu2o4dts1toeXlT8K2wv./h8NqVU0czlHQ3OkuGFIii',
				'passwd_recovery_code' => NULL,
				'passwd_recovery_date' => NULL,
				'passwd_modified_at' => NULL,
				'last_login' => NULL,
				'created_at' =>  date('Y-m-d H:i:s'),
				'updated_at' =>  date('Y-m-d H:i:s'),
			],
			[
				'username' => 'cindy.cuellar',
				'email' => 'cindy.cuellar@unicolmayor.edu.co',
				'auth_level' => 3,
				'banned' => '0',
				'passwd' => '$2y$10$OOjSxQE6Zq6KOCsh9TLGKuh5ztPYMPg0bO.mMoyxinA6Jja06ocvK',
				'passwd_recovery_code' => NULL,
				'passwd_recovery_date' => NULL,
				'passwd_modified_at' => NULL,
				'last_login' => NULL,
				'created_at' =>  date('Y-m-d H:i:s'),
				'updated_at' =>  date('Y-m-d H:i:s'),
			],
			[
				'username' => 'eder.ramirez',
				'email' => 'eder.ramirez@unicolmayor.edu.co',
				'auth_level' => 3,
				'banned' => '0',
				'passwd' => '$2y$10$KpbIvgFDYg92H0QVDM3nGeTQhpp4r4YBSR9ySl5w/qiIL6ZjJ7zjm',
				'passwd_recovery_code' => NULL,
				'passwd_recovery_date' => NULL,
				'passwd_modified_at' => NULL,
				'last_login' => NULL,
				'created_at' =>  date('Y-m-d H:i:s'),
				'updated_at' =>  date('Y-m-d H:i:s'),
			],
			[
				'username' => 'johnarevalo',
				'email' => 'johnarevalo@unicolmayor.edu.co',
				'auth_level' => 3,
				'banned' => '0',
				'passwd' => '$2y$10$gtWbGs/RhUzwCHYfh1on/OFrXrVpQd7m9k/I99ktr4g0OVy0RPcTi',
				'passwd_recovery_code' => NULL,
				'passwd_recovery_date' => NULL,
				'passwd_modified_at' => NULL,
				'last_login' => NULL,
				'created_at' =>  date('Y-m-d H:i:s'),
				'updated_at' =>  date('Y-m-d H:i:s'),
			],
			[
				'username' => 'landreanino',
				'email' => 'landreanino@unicolmayor.edu.co',
				'auth_level' => 3,
				'banned' => '0',
				'passwd' => '$2y$10$B.i8eQWy.f3qN2S.JpN4ne/J0fpcLvWsqOignfILKQaSizg3Z2Pfe',
				'passwd_recovery_code' => NULL,
				'passwd_recovery_date' => NULL,
				'passwd_modified_at' => NULL,
				'last_login' => NULL,
				'created_at' =>  date('Y-m-d H:i:s'),
				'updated_at' =>  date('Y-m-d H:i:s'),
			],
			[
				'username' => 'sietic',
				'email' => 'sietic@unicolmayor.edu.co',
				'auth_level' => 4,
				'banned' => '0',
				'passwd' => '$2y$10$uidDocN4Uo7394DCeilQ6.hdO33od92n0uYhEu5B37UykLFDNro5m',
				'passwd_recovery_code' => NULL,
				'passwd_recovery_date' => NULL,
				'passwd_modified_at' => NULL,
				'last_login' => NULL,
				'created_at' =>  date('Y-m-d H:i:s'),
				'updated_at' =>  date('Y-m-d H:i:s'),
			],
		];

		$builder = $this->db->table('users');
		$builder->insertBatch($users);

		$menus = [
			[
				'menuName' => 'Formación virtual',
				'menuNameUrl' => 'formacion-virtual',
				'menuRole' => 2,
				'menuOrder' => 0,
				'isMenuActive' => 1,
			],
			[
				'menuName' => '¿Quiénes somos?',
				'menuNameUrl' => 'quienes-somos',
				'menuRole' => 2,
				'menuOrder' => 1,
				'isMenuActive' => 1,
			],
			[
				'menuName' => 'Tutoriales',
				'menuNameUrl' => 'tutoriales-para-estudiantes',
				'menuRole' => 3,
				'menuOrder' => 0,
				'isMenuActive' => 1,
			],
			[
				'menuName' => 'Ingreso a la plataforma',
				'menuNameUrl' => 'http://presencial-new.unicolmayor.edu.co',
				'menuRole' => 3,
				'menuOrder' => 1,
				'isMenuActive' => 0,
			],
			[
				'menuName' => 'Herramientas',
				'menuNameUrl' => 'herramientas-para-estudiantes',
				'menuRole' => 3,
				'menuOrder' => 2,
				'isMenuActive' => 1,
			],
			[
				'menuName' => 'Herramientas',
				'menuNameUrl' => 'herramientas-para-docentes',
				'menuRole' => 4,
				'menuOrder' => 4,
				'isMenuActive' => 1,
			],
			[
				'menuName' => 'Tutoriales',
				'menuNameUrl' => 'tutoriales-para-docentes',
				'menuRole' => 4,
				'menuOrder' => 0,
				'isMenuActive' => 1,
			],
			[
				'menuName' => 'Ingreso a la plataforma',
				'menuNameUrl' => 'http://presencial-new.unicolmayor.edu.co',
				'menuRole' => 4,
				'menuOrder' => 1,
				'isMenuActive' => 0,
			],
			[
				'menuName' => 'Objetos de aprendizaje',
				'menuNameUrl' => 'objetos-de-aprendizaje/categorias',
				'menuRole' => 4,
				'menuOrder' => 3,
				'isMenuActive' => 1,
			],
			[
				'menuName' => 'Banco de recursos',
				'menuNameUrl' => 'banco-de-recursos/categorias',
				'menuRole' => 4,
				'menuOrder' => 4,
				'isMenuActive' => 0,
			],
		];

		$builder = $this->db->table('menus');
		$builder->insertBatch($menus);

		$objecttaxonomies = [
			[
				'objectTaxonomyName' => 'Agronomía, veterinaria',
				'objectTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720004/categorias/objetos/agronomia-veterinaria_w4cq22.jpg',
				'isObjectTaxonomyActive' => 0,
			],
			[
				'objectTaxonomyName' => 'Bellas artes',
				'objectTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720004/categorias/objetos/bellas-artes_aoaxnn.jpg',
				'isObjectTaxonomyActive' => 0,
			],
			[
				'objectTaxonomyName' => 'Ciencias de la salud',
				'objectTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720004/categorias/objetos/ciencias-de-la-salud_xkpzt1.jpg',
				'isObjectTaxonomyActive' => 0,
			],
			[
				'objectTaxonomyName' => 'Ciencias sociales y humanas',
				'objectTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720004/categorias/objetos/ciencias-sociales-y-humanas_dglmzk.jpg',
				'isObjectTaxonomyActive' => 1,
			],
			[
				'objectTaxonomyName' => 'Economía, administración, contaduría',
				'objectTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720005/categorias/objetos/economia-administracion-contaduria_crnn8l.jpg',
				'isObjectTaxonomyActive' => 1,
			],
			[
				'objectTaxonomyName' => 'Ingeniería, arquitectura, urbanismo',
				'objectTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720006/categorias/objetos/ingenieria-arquitectura-urbanismo_tciiv3.jpg',
				'isObjectTaxonomyActive' => 1,
			],
			[
				'objectTaxonomyName' => 'Matemáticas y ciencias naturales',
				'objectTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720005/categorias/objetos/matematicas-y-ciencias-naturales_zt4a5j.jpg',
				'isObjectTaxonomyActive' => 0,
			],
			[
				'objectTaxonomyName' => 'Investigaciones',
				'objectTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720005/categorias/objetos/investigaciones_thnygv.jpg',
				'isObjectTaxonomyActive' => 0,
			],
			[
				'objectTaxonomyName' => 'Ciencias Básicas',
				'objectTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1614463537/categorias/objetos/ciencias-basicas.jpg',
				'isObjectTaxonomyActive' => 1,
			],
		];

		$builder = $this->db->table('objecttaxonomies');
		$builder->insertBatch($objecttaxonomies);

		$resourcetaxonomies = [
			[
				'resourceTaxonomyName' => 'Animales y Naturaleza',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720005/categorias/recursos/animales-y-naturaleza_s3ywcz.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Arquitectura',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720006/categorias/recursos/arquitectura_sl5gwi.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Comidas y Bebidas',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720006/categorias/recursos/comidas-y-bebidas_zaypom.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Conceptos e Ideas',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720007/categorias/recursos/conceptos-e-ideas_g2zst9.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Deportes',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720007/categorias/recursos/deportes_zk2rj3.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Educación',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720007/categorias/recursos/educacion_wjqlp1.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Escenarios',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720007/categorias/recursos/escenarios_sy60ya.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Fechas Especiales',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720007/categorias/recursos/fechas-especiales_dizpvd.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Fondo',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720007/categorias/recursos/fondo_ubmkym.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Ilustraciones',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720008/categorias/recursos/ilustraciones_cns215.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Negociaciones',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720009/categorias/recursos/negociaciones_ya2udu.pngs',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Personas',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720008/categorias/recursos/personas_kgafyu.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Recreación',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720007/categorias/recursos/deportes_zk2rj3.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Salud y Medicina',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720008/categorias/recursos/salud-y-medicina_a69o7y.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Tecnología',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720008/categorias/recursos/tecnologia_qsyswo.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Template',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720007/categorias/recursos/fondo_ubmkym.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Template Fondo Blanco',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720007/categorias/recursos/fondo_ubmkym.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Textura',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720009/categorias/recursos/template-fondo-blanco_plcr0v.png',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Transporte',
				'resourceTaxonomySlug' => 'https://res.cloudinary.com/un1c0lm4y0r/image/upload/v1607720009/categorias/recursos/transporte_b02qdf.png',
				'isResourceTaxonomyActive' => 1,
			],
		];

		$builder = $this->db->table('resourcetaxonomies');
		$builder->insertBatch($resourcetaxonomies);
	}
}
