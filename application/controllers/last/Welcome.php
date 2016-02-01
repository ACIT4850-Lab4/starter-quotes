<?php
/*
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 */
class Welcome extends Application {

    function __construct()	{
        parent::__construct();
    }

    /*
    *  The normal pages
    */
    function index(){
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';	
        // build the list of authors, to pass on to our view
        $record = $this->quotes->last();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}