<?php
	require_once 'PDOConnection.php';

	class HistoryCourses
	{
		public function history()
		{
			$pdo = PDOConnection::getPDO();

			//$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
			$sql = 'SELECT * FROM courses_history';
			$dbh = $pdo->prepare($sql);
			$dbh->setFetchMode(PDO::FETCH_ASSOC);
			$dbh->execute();
			$courseHistory = $dbh->fetchAll();
			return $courseHistory;
		}
	}
