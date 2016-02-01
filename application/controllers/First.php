<?php
/*
 * Handles quote requests
 */
class First extends Application {

    /**
     * Handles default route for first
     */
    public function index(){
        
        // Loads view fragment for quotes
        $this->data['pagebody'] = 'justone';
        // Passes the first quote provided by Quotes class 
        $this->data = array_merge($this->data, $this->quotes->First());
        $this->render();
    }
    
    /**
     * handles sleep request (routed)
    */
    public function zzz(){
        
        $this->index();
    }
    
    /**
     * handles show/$id requests
    */ 
    public function gimme($id){
        
        // Loads view fragment for quotes
        $this->data['pagebody'] = 'justone';
        // Passes the first quote provided by Quotes class 
        $this->data = array_merge($this->data, $this->quotes->get($id));
        $this->render();
    }
}
