<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
   
    public $baseURL = '127.0.0.1/proje1/';

    public $indexPage = '';

    public $uriProtocol = 'REQUEST_URI';

    public $defaultLocale = 'en';
    
    public $negotiateLocale = false;

    public $supportedLocales = ['en'];

    public $appTimezone = 'UTC';

    public $charset = 'UTF-8';

    public $forceGlobalSecureRequests = false;

    public $sessionDriver            = 'CodeIgniter\Session\Handlers\FileHandler';
    public $sessionCookieName        = 'ci_session';
    public $sessionExpiration        = 7200;
    public $sessionSavePath          = WRITEPATH . 'session';
    public $sessionMatchIP           = false;
    public $sessionTimeToUpdate      = 300;
    public $sessionRegenerateDestroy = false;

}