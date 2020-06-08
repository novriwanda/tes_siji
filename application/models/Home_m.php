<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model{

	function curl($url){
	    $ch = curl_init(); 
	    curl_setopt($ch, CURLOPT_URL, $url); 
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	    $output = curl_exec($ch); 
	    curl_close($ch);      
	    return $output;
	}

	function curl_post($url, $data){
	    $ch = curl_init(); 
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	    $output = curl_exec($ch); 
	    curl_close($ch);      
	    return $output;
	}

	function curl_delete($url){
	    $ch = curl_init(); 
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	    $output = curl_exec($ch); 
	    curl_close($ch);      
	    return $output;
	}
}