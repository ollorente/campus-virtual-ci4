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

		$users = [
			[
				'username' => 'admin',
				'email' => 'admin@admin.com',
				'auth_level' => 9,
				'banned' => 0,
				'passwd' => '$2y$10$MlGUK4LuOvjHgSeLMF8BE.W6OMP6nT4Va1IOf1UOlnbSAMb/KYIOy',
				'passwd_recovery_code' => NULL,
				'passwd_recovery_date' => NULL,
				'passwd_modified_at' => NULL,
				'last_login' => NULL,
				'created_at' =>  date('Y-m-d H:i:s'),
				'modified_at' =>  date('Y-m-d H:i:s'),
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
				'objectTaxonomySlug' => 'agronomia-veterinaria',
				'isObjectTaxonomyActive' => 0,
			],
			[
				'objectTaxonomyName' => 'Bellas artes',
				'objectTaxonomySlug' => 'bellas-artes',
				'isObjectTaxonomyActive' => 0,
			],
			[
				'objectTaxonomyName' => 'Ciencias de la salud',
				'objectTaxonomySlug' => 'ciencias-de-la-salud',
				'isObjectTaxonomyActive' => 1,
			],
			[
				'objectTaxonomyName' => 'Ciencias sociales y humanas',
				'objectTaxonomySlug' => 'ciencias-sociales-y-humanas',
				'isObjectTaxonomyActive' => 1,
			],
			[
				'objectTaxonomyName' => 'Economía, administración, contaduría',
				'objectTaxonomySlug' => 'economia-administracion-contaduria',
				'isObjectTaxonomyActive' => 1,
			],
			[
				'objectTaxonomyName' => 'Ingeniería, arquitectura, urbanismo',
				'objectTaxonomySlug' => 'ingenieria-arquitectura-urbanismo',
				'isObjectTaxonomyActive' => 1,
			],
			[
				'objectTaxonomyName' => 'Matemáticas y ciencias naturales',
				'objectTaxonomySlug' => 'matematicas-y-ciencias-naturales',
				'isObjectTaxonomyActive' => 0,
			],
			[
				'objectTaxonomyName' => 'Investigaciones',
				'objectTaxonomySlug' => 'investigaciones',
				'isObjectTaxonomyActive' => 0,
			],
			[
				'objectTaxonomyName' => 'Ciencias Básicas',
				'objectTaxonomySlug' => 'ciencias-basicas',
				'isObjectTaxonomyActive' => 1,
			],
		];
		
		$builder = $this->db->table('objecttaxonomies');
		$builder->insertBatch($objecttaxonomies);
		
		$resourcetaxonomies = [
			[
				'resourceTaxonomyName' => 'Animales y Naturaleza',
				'resourceTaxonomySlug' => 'animales-y-naturaleza',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Arquitectura',
				'resourceTaxonomySlug' => 'arquitectura',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Comidas y Bebidas',
				'resourceTaxonomySlug' => 'comidas-y-bebidas',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Conceptos e Ideas',
				'resourceTaxonomySlug' => 'conceptos-e-ideas',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Deportes',
				'resourceTaxonomySlug' => 'deportes',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Educación',
				'resourceTaxonomySlug' => 'educacion',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Escenarios',
				'resourceTaxonomySlug' => 'escenarios',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Fechas Especiales',
				'resourceTaxonomySlug' => 'fechas-especiales',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Fondo',
				'resourceTaxonomySlug' => 'fondo',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Ilustraciones',
				'resourceTaxonomySlug' => 'ilustraciones',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Negociaciones',
				'resourceTaxonomySlug' => 'negociaciones',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Personas',
				'resourceTaxonomySlug' => 'personas',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Recreación',
				'resourceTaxonomySlug' => 'recreacion',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Salud y Medicina',
				'resourceTaxonomySlug' => 'salud-y-medicina',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Tecnología',
				'resourceTaxonomySlug' => 'tecnologia',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Template',
				'resourceTaxonomySlug' => 'template',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Template Fondo Blanco',
				'resourceTaxonomySlug' => 'template-fondo-blanco',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Textura',
				'resourceTaxonomySlug' => 'textura',
				'isResourceTaxonomyActive' => 1,
			],
			[
				'resourceTaxonomyName' => 'Transporte',
				'resourceTaxonomySlug' => 'transporte',
				'isResourceTaxonomyActive' => 1,
			],
		];
		
		$builder = $this->db->table('resourcetaxonomies');
		$builder->insertBatch($resourcetaxonomies);
	}
}
