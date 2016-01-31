<?php
/*
 * Handles Bob Monkhouse's quote
 */
class First extends Application {

    /**
     * Handles default route
     */
    public function index()
    {
        // Loads view fragment for quotes
        $this->data['pagebody'] = 'justone';
        // Passes the first quote provided by Quotes class 
        $this->data = array_merge($this->data, $this->quotes->First());
        $this->render();
    }
}
