<?php
/**
 * (c) Joffrey Demetz <joffrey.demetz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace JDZ\Analytics;

/**
 * Piwik
 * 
 * @package Analytics
 * @author  Joffrey Demetz <joffrey.demetz@gmail.com>
 */
class PiwikTrafic extends Trafic 
{
  /**
   * {@inheritDoc}
   */
  public $type = 'Piwik';
  
	/**
   * Website complete URL
   * 
   * @var 	string 
   */
  public $domain;  
  
	/**
   * Piwik Site ID
   * 
   * @var 	string 
   */
  public $siteid;
  
	/**
   * Tracker file name
   * 
   * @var 	string 
   */
  public $tracker;
  
	/**
   * Set piwik domain cookie
   * 
   * @var 	string 
   */
  public $setCookieDomain;
  
	/**
   * Set piwik domains
   * 
   * @var 	string 
   */
  public $setDomains;
  
	/**
   * {@inheritDoc}
   */
  public function __construct(array $properties=[])
  {
    $this->domain          = '';
    $this->siteid          = 0;
    $this->tracker         = 'piwik.php';
    $this->setCookieDomain = '';
    $this->setDomains      = '';
    
    parent::__construct($properties);
  }
  
	/**
   * {@inheritDoc}
   */
  public function isActive()
  {
    return ( $this->domain && $this->siteid );
  }

	/**
   * {@inheritDoc}
   */
  protected function setProperties(array $properties)
  {
    if ( isset($properties['domain']) ){
      $this->setDomain($properties['domain']);
    }
    
    if ( isset($properties['siteid']) ){
      $this->setSiteid($properties['siteid']);
    }
    
    if ( isset($properties['tracker']) ){
      $this->setTracker($properties['tracker']);
    }
    
    if ( isset($properties['setCookieDomain']) ){
      $this->setCookieDomain($properties['setCookieDomain']);
    }
    
    if ( isset($properties['setDomains']) ){
      $this->setDomains($properties['setDomains']);
    }
  }
  
	/**
   * Set domain
    *
   * @param   string  $value  Domain
   */
  private function setDomain($value)
  {
    $value = (string)$value;
    $value = trim($value);
    $this->domain = $value;
  }
  
	/**
   * Set siteid
    *
   * @param   int  $value  Site Id
   */
  private function setSiteid($value)
  {
    $value = (int)$value;
    $this->siteid = $value;
  }
  
	/**
   * Set tracker
    *
   * @param   string  $value  Tracker
   */
  private function setTracker($value)
  {
    $value = (string)$value;
    $value = trim($value);
    $this->tracker = $value;
  }
  
	/**
   * Set Cookie Domain
    *
   * @param   string  $value  setCookieDomain
   */
  private function setCookieDomain($value)
  {
    $value = (string)$value;
    $value = trim($value);
    $this->setCookieDomain = $value;
  }
  
	/**
   * Set Domains
    *
   * @param   string  $value  setDomains
   */
  private function setDomains($value)
  {
    $value = (string)$value;
    $value = trim($value);
    $this->setDomains = $value;
  }
}