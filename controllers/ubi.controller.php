<?php 

class UbiController{

	public function getCountries()
	{
		$url = CurlController::api()."countries?select=*";
		$method = "GET";
		$fields = array();
		$header = array();
		$rs = CurlController::request($url, $method, $fields, $header);
		return $rs->results;
	}

	public function getDepartments()
	{
		$url = CurlController::api()."departments?select=*";
		$method = "GET";
		$fields = array();
		$header = array();
		$rs = CurlController::request($url, $method, $fields, $header);
		return $rs->results;
	}

	public function getProvinces($departmentId, $json = false)
	{
		if ($departmentId != '') 
			$url = CurlController::api()."provinces?linkTo=department_id&equalTo=".$departmentId."&select=*";
		else
			$url = CurlController::api()."provinces?select=*";

		$method = "GET";
		$fields = array();
		$header = array();
		$rs = CurlController::request($url, $method, $fields, $header);

		if ($json) 
		{
			$rsArray = array();
			foreach ($rs->results as $row):
				$rsArray[$row->department_id][] = $row;
			endforeach;
			return json_encode($rsArray);
		}
		else
			return $rs->results;
	}

	public function getDistricts($provinceId, $json = false)
	{
		if ($provinceId != '') 
			$url = CurlController::api()."districts?linkTo=id_province_district&equalTo=".$provinceId."&select=*";
		else
			$url = CurlController::api()."districts?select=*";

		$method = "GET";
		$fields = array();
		$header = array();
		$rs = CurlController::request($url, $method, $fields, $header);

		if ($json) 
		{
			$rsArray = array();
			foreach ($rs->results as $row):
				$rsArray[$row->id_province_district][] = $row;
			endforeach;
			return json_encode($rsArray);
		}
		else
			return $rs->results;
	}
}

