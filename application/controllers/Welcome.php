<?php
/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 */
class Welcome extends Application {

	function __construct() {
		parent::__construct();
	}

        /*
         *  Normal pages
         */
	function index() {

            // this is the view we want shown
            $this->data['pagebody'] = 'homepage';	
            // build the list of authors, to pass on to our view
            $source = $this->quotes->all();
            $authors = array();
            foreach ($source as $record)
            {
                    $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
            }
            $this->data['authors'] = $authors;

            $this->render();
	}
        
        function shucks() {
            // this is the view we want shown
            $this->data['pagebody'] = 'justone'; 
            //this will grab the last quote 
            $record = $this->quotes->get(2); 
            $this->data = array_merge($this->data, $record);
            $this->render();
        }
}