<?php 

class Master extends Controller
{


    public function __construct(){
        return $this->index();
    }

    public function index(){

        $this->setRequest();

        if($this->getRequest() !== false){


            $data = $this->getRequest();
            if(isset($data->action))
            {
                $response = false;
                switch($data->action)
                {
                    case 'Project List';
                        $response = $this->getProjectList(); 
                    break;
                    case 'Create Project';
                        $response = $this->createProject();
                        // error_log('response from db: '.print_r($response, 1));
                    break;
                }
                echo json_encode($response);
            }

        }

    }
}