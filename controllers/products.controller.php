<?php 

class ProductsController{

	public function getSalesRef($productId)
	{
		$url = CurlController::api()."relations?rel=sales,orders&type=sale,order&linkTo=id_product_order,status_sale&equalTo=".$productId.",ok&select=id_sale,id_user_order,date_updated_order";
		$method = "GET";
		$fields = array();
		$header = array();
		$rs = CurlController::request($url, $method, $fields, $header);
		
		$data = array();
		if ($rs) 
		{
			foreach ($rs->results as $row)
			{
				$url = CurlController::api()."users?linkTo=id_user&equalTo=".$row->id_user_order."&select=username_user";
				$method = "GET";
				$fields = array();
				$header = array();
				$user_obj = CurlController::request($url, $method, $fields, $header);
				$data[] = array(
					'user' => $user_obj->results[0]->username_user,
					'datetime' => $row->date_updated_order
				);
			}
		}

		return $data;
	}

}

