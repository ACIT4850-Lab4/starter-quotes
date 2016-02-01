<?php
/*
 * Handles quote requests
 */
class Wise extends Application {

    /**
     * Handles Socrate's quote request
     */
    public function bingo(){
        
        // Loads view fragment for quotes
        $this->data['pagebody'] = 'justone';
        // Passes the first quote provided by Quotes class 
        $this->data = array_merge($this->data, $this->quotes->get(6));
        $this->render();
    }
}
