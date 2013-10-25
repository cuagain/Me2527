<?php
    class LoginController extends AppController {
        var $uses = array("User");
        public function index() {
            $this->layout = "login";

            if( ! empty( $this->data ) ) {
                $user = $this->data["Login"]["username"];
                $pwd = $this->data["Login"]["password"];

                if( $user == "" || $pwd == ""  ) {
                    $this->Session->setFlash("Please enter Email/Username or Password before.", 'default',array("class" => "alert alert-danger"));  
                    $this->redirect(array("controller" => "login", "action" => "index"));
                }

                $userData = $this->User->find('first', 
                    array(
                        'conditions' => array('User.username' => $user, "User.password" => $pwd),
                        'recursive' => 0
                    ));

                if( empty( $userData ) ) {
                    $this->Session->setFlash("Email/Username or Password does not exists.",'default',array("class" => "alert alert-danger"));  
                    $this->redirect(array("controller" => "login", "action" => "index"));
                }

                $this->Session->write("ss_user",$userData);
                $this->Session->setFlash("Login Successfully.",'default',array("class" => "alert alert-success"));  
                $this->redirect(array("controller" => "dashboard", "action" => "index"));
            }    

        }

        public function logout() {
            $this->Session->delete("ss_user");
            $this->Session->setFlash("Logout Successfully.",'default',array("class" => "alert alert-success"));  
            $this->redirect(array("controller" => "login", "action" => "index"));
        }
}