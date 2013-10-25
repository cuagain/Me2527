<?php

    App::uses('AppHelper', 'View/Helper');
    App::uses('CakeSession', 'Model/Datasource');

    class FlashHelper extends AppHelper {
        public $helpers = array('Session');

        public function flash($cssClass = 'success', $key = 'flash'){
            $out = false;
            $class = 'message';
            $message = '';
            if (CakeSession::check('Message.' . $key)) {
                $flash = CakeSession::read('Message.' . $key);
                $message = $flash['message'];
                unset($flash['message']);

                if (!empty($flash['params']['class'])) {
                    $class = $flash['params']['class'];
                }
                $out = $message;

                CakeSession::delete('Message.' . $key);
                $out  = ' <div id="flash-msg" class="'.$class.'">';
                $out .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                $out .= $message;
                $out .= '</div>';
            }


            return $out;
        }

    }
