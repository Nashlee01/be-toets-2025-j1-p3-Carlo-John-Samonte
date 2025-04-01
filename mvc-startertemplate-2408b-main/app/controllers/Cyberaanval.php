<?php

class Cyberaanval extends BaseController
{
    private $cyberaanvalModel;

    public function __construct()
    {
        $this->cyberaanvalModel = $this->model('cyberaanvalModel');
    }

    public function index()
    {
        /**
         * Je roept de method getAllSmartphones aan van de smartphoneModel class
         */
        $results = $this->cyberaanvalModel->getAllCyberaanval();
        
        $data = [
            'title' => 'Top 5 Cyberaanvallen aller tijden',
            'cyberaanval' => $results
        ];

        $this->view('cyberaanval/index', $data);
    }
}