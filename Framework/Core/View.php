<?php
class View{

    function create_view($content_view, $template_view, $data = null){
        include 'Core'.$template_view;
    }

}