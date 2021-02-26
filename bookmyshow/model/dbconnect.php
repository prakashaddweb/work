<?php

class dbconnect
{
	function connection()
	{
		$con=new mysqli("localhost","root","root","MovieTicketBooking");
		/*
		if($con->connect_error)
		{
			return "error";
		}
		else
		{
			return "success";
		}
		*/
		return $con;
	}
}

?>