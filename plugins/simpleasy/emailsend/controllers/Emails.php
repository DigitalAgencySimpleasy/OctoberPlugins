<?php namespace Simpleasy\Emailsend\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Emails Back-end Controller
 */
class Emails extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Simpleasy.Emailsend', 'emailsend', 'emails');
    }
}