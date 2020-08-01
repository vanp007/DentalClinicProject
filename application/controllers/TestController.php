<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class TestController extends CI_Controller{

		 public function setflash()
    {
        // set flash data
        $this->session->set_flashdata('flash_welcome', 'Hey, welcome to the site!');
         
        // mark existing data as flash data
        $this->session->set_userdata('flash_message', 'I am flash message!');
        $this->session->mark_as_flash('flash_message');
         
        redirect('TestController/getflash');
    }
     
    public function getflash() 
    {
        // get flash data
        echo "Flash welcome message: ". $this->session->flashdata('flash_welcome');
        echo '<pre>';
        print_r($this->session->flashdata());
    }

}