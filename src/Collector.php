<?php 
namespace Kewo\Collector;

use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
class Collector
{
    /**
     * @var SessionManager
     */
    protected $session;

    /**
     * @var Repository $config
     */
    protected $config;

    /**
     * Collector constructor
     * 
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session,Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }

    /**
     * Get a page content
     * 
     * @param string $url
     * @return string
     */
    public function getContent($url='')
    {   
        $config_arr = $this->config->get('collector.options');
        return $url.'<h1>Collector</h1>';
    }

}
?>