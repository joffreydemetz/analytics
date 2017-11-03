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
 * @author Joffrey Demetz <joffrey.demetz@gmail.com>
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
    $this->siteid          = '';
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
    if ( $this->domain === '' ){
      return false;
    }
    
    if ( $this->siteid === '' ){
      return false;
    }
    
    return true;
  }
}