<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Timthumb extends Controller {
    
    public function action_index(){
        
        define('FILE_CACHE_DIRECTORY', Kohana::config('timthumb.file_cache_directory'));
        
        require Kohana::find_file('vendor', 'timthumb/timthumb');
        
        
    }
    
    
}