<?php
    namespace Core;
    class Controller{

        public function loadView($viewName,$viewData = array())
        {
            extract($viewData);
            require 'Views/'.$viewName.'.php';
        }
        
        
        public function loadTempleteOne($viewName,$viewData = array())
        {
            require 'Views/templateOne.php';
        }

        public function loadViewInTemplateOne($viewName,$viewData = array())
        {
            extract($viewData);
            require 'Views/'.$viewName.'.php';
        }

    }