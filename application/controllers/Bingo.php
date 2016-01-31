<?php
/*
 * Handles quote requests
 */
class Bingo extends Application {

    /**
     * Handles Socrate's quote request
     */
    public function index(){
        
        // Loads view fragment for quotes
        $this->data['pagebody'] = 'justone';
        // Passes the first quote provided by Quotes class 
        $this->data = array_merge($this->data, $this->quotes->get(5));
        $this->render();
    }
}
