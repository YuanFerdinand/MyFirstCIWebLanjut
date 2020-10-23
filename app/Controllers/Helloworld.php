<?php namespace App\Controllers;

class Helloworld extends BaseController {

	public function index($name,$npm){

		#echo $this->name;
		echo $name."<br>";
		echo $npm."<br>";
		#echo "Hello Yuan";
	}

	public function show(){

		echo "Yuan Ferdinand"."<br>";
		echo "1817051014";
	}
}