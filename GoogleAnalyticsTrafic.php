<?php
/**
 * (c) Joffrey Demetz <joffrey.demetz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace JDZ\Analytics;

/**
 * Google Analytics
 * 
 * @author Joffrey Demetz <joffrey.demetz@gmail.com>
 */
class GoogleAnalyticsTrafic extends Trafic 
{
  /**
   * {@inheritDoc}
   */
  public $type = 'GoogleAnalytics';
  
	/**
   * Website complete URL
   * 
   * @var 	string 
   */
  public $website;  
  
	/**
   * Analytics UA
   * 
   * @var 	string 
   */
  public $ua;
  
	/**
   * {@inheritDoc}
   */
  public function __construct(array $properties=[])
  {
    $this->website = '';
    $this->ua      = '';
    
    parent::__construct($properties);
  }
  
	/**
   * {@inheritDoc}
   */
  public function isActive()
  {
    if ( $this->website === '' ){
      return false;
    }
    
    if ( $this->ua === '' ){
      return false;
    }
    
    return true;
  }
}