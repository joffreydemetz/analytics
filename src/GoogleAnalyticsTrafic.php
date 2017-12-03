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
 * @author  Joffrey Demetz <joffrey.demetz@gmail.com>
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
   * @var   string 
   */
  public $website;  
  
  /**
   * Analytics UA
   * 
   * @var   string 
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
    return ( $this->website && $this->ua );
  }

  /**
   * {@inheritDoc}
   */
  protected function setProperties(array $properties)
  {
    if ( isset($properties['website']) ){
      $this->setWebsite($properties['website']);
    }
    
    if ( isset($properties['website']) ){
      $this->setUa($properties['website']);
    }
  }
  
  /**
   * Set website
    *
   * @param   string  $value  Website
   */
  private function setWebsite($value)
  {
    $value = (string)$value;
    $value = trim($value);
    $this->website = trim($value);
  }

  /**
   * Set UA
    *
   * @param   string  $value  UA
   */
  private function setUa($value)
  {
    $value = (string)$value;
    $value = trim($value);
    $this->ua = trim($value);
  }
}