<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ALL);
ini_set('display_errors', '1');
class App extends CI_Controller {
  
  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/app
   *	- or -  
   * 		http://example.com/index.php/app/index
   *	- or -
   * Since this controller is set as the default controller in 
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  
  public function __construct()
  {
    parent::__construct();
    $this->load->library('javascript');
    $this->load->helper('url');
  }

  public function _make($result='')
  {
    $this->load->model('App_model');
    //load data
    $data['tasks'] = $this->App_model->get_tasks();
    $data['title'] = "Welcome to Expertise";
    $data['library_src'] = $this->jquery->script();
    $data['script_head'] = $this->jquery->_compile();

    //Load views
    $this->load->view('header', $data);
    if ($result != '')
    {
      $data['result'] = $result;
      $this->load->view('result', $data);
    }
    $this->load->view("app", $data);
    $this->load->view("footer");
  }

  public function index()
  {
    $this->_make();
  }

  public function create()
  {
    $data['title'] = 'Add Domain of interest';

    //Load views
    $this->load->view('header', $data);
    $this->load->view("create", $data);
    $this->load->view("footer");
  }
  
  //show the 
  public function created()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('App_model');
    
    $data['title'] = 'Welcome to Expertise';
    
    //Set validation rules
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('hours','Hours', 'required');
    
    //if the rules do not validate against the data coming in
    if ($this->form_validation->run() === FALSE)
    {
      $this->_make("failed");
    }
    else
    {
      //update the db
      $this->App_model->set_task();
      
      $this->_make('success');
    }
  }

  public function modify($id)
  {
    $this->load->model('App_model');
    $data['current'] = $this->App_model->get_task($id);
    $data['title'] = 'modify row';

    //Load views
    $this->load->view('header', $data);
    $this->load->view("modify", $data);
    $this->load->view("footer");
  }

  public function modified()
  {
    // Load needed stuff
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('App_model');
    
    //updating, therefore we need an ID
    $this->form_validation->set_rules('hours','Hours', 'required');
    $this->form_validation->set_rules('currenthours','Current Hours', 'required');
    $this->form_validation->set_rules('id', 'ID', 'required');
    
    if ($this->form_validation->run() === FALSE)
    {
      $this->_make("failed");
    }
    else
    {
      $this->App_model->update_task();
      $this->_make('success');
    }
  }

  public function delete($id)
  {   
    // Load needed stuff
    $this->load->model('App_model');
    
     //load data
    $data['title'] = "Welcome to Expertise";
    
    if ($id != '') {
      $this->App_model->delete_task($id);
    }
  }
}

/* End of file app.php */
/* Location: ./application/controllers/app.php */