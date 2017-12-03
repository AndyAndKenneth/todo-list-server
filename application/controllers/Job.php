<?php

/**
 * REST server for todo list manager.
 *
 * ------------------------------------------------------------------------
 */
require APPPATH . '/third_party/restful/libraries/Rest_controller.php';

class Ports extends Rest_Controller {

    function __construct()
    {
        parent::__construct();
    }

    // Handle an incoming GET ... 	returns a list of ports
    function index_get()
    {
        $this->response($this->tasks->all(), 200);
    }

    // Handle an incoming PUT - crUd
    function index_put($key=null)
    {
        $this->response('ok', 200);
    }

    // Handle an incoming POST - Crud
    function index_post($key=null)
    {
        $this->response('ok', 200);
    }

    // Handle an incoming DELETE - cruD
    function index_delete($key=null)
    {
        $this->response('ok', 200);
    }

    // The other REST methods are not handled, since we are not doing maintenance

}
