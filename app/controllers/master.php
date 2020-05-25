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
                }
                echo json_encode($response);
            }

        }

    }
}