<?php
   
namespace App\Core;

use Philo\Blade\Blade;

class BladeController extends \CI_Controller{

    protected $blade;

    public function __construct(){
        parent::__construct();
        $this->blade = new Blade(VIEWPATH, APPPATH.'/cache/');
    }

    protected function view($view, $data = []){
        echo $this->blade->view()->make($view, $data); 
    }

    public function exists($view)
    {
        return $this->blade->view()->exists($view);
    }

    public function share($key, $value)
    {
        return $this->blade->view()->share($key, $value);
    }

    protected function render($view, $data = [])
    {
        echo $this->blade->view()->make($view, $data)->render();
    }
}   
