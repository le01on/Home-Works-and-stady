<?php


	class CourseModel extends CI_Model
	{
		const FILEAPI = "https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5";
		private $arrayOfCourses;

		public static function getCourses()
		{
			$arrayOfCourses = file_get_contents(self::FILEAPI);
			$arrayOfCourses = json_decode($arrayOfCourses, true);

			$courses = [
				$arrayOfCourses[0],
				$arrayOfCourses[1]
			];
			return $courses;
		}
	}
