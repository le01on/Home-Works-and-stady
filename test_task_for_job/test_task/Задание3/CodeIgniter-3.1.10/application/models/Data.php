<?php
require_once 'PDOConnection.php';
require_once 'CourseModel.php';
	class Data extends CI_Model
	{
		private $fileName = 'application/cache/eacd1e40c30c8f3706cae19644510daa';
		private $cache;


		public	function readCache() {
			$fileName = $this->fileName;
    		if (file_exists($fileName)){
        		$handle = fopen($fileName, 'rb');
        		$variable = fread($handle, filesize($fileName));
        		fclose($handle);
        		$newCache = (unserialize($variable));
        			if($newCache != $this->cache){
						$this->writeDb();
					}
    			} else {
    		return null;
    		}

		}

		public function writeDb()
		{
			$courses = CourseModel::getCourses();

			$con = PDOConnection::getPDO();

			$sql = 'INSERT INTO courses_history (`base_ccy`, `ccy`, `buy`, `sale`)
        	value (:base_ccy, :ccy, :buy, :sale), (:base_ccy1, :ccy1, :buy1, :sale1);';
			$sth = $con->prepare($sql);
			$sth->execute([
				':base_ccy' => $courses[0]['base_ccy'],
				':ccy' => $courses[0]['ccy'],
				':buy' => $courses[0]['buy'],
				':sale' => $courses[0]['sale'],
				':base_ccy1' => $courses[1]['base_ccy'],
				':ccy1' => $courses[1]['ccy'],
				':buy1' => $courses[1]['buy'],
				':sale1' => $courses[1]['sale'],
			]);
		}


	}
