<?php
/**
 * (c) Joffrey Demetz <joffrey.demetz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace JDZ\Analytics;

/**
 * Web trafic
 * 
 * @package Analytics
 * @author  Joffrey Demetz <joffrey.demetz@gmail.com>
 */
abstract class Trafic implements TraficInterface 
{
	/**
   * Trafic type
   * 
   * @var 	string 
   */
  public $type;
  
	/**
   * Current trafic instance
   * 
   * @var 	TraficInterface 
   */
  protected static $instance;
  
  /**
   * Get a Trafic instance
   * 
   * @param   array   $properties   Key/Value pairs
   * @return  Trafic instance
   * @throw   TraficException on missing or invalid type   
   */
  public static function getInstance(array $properties)
  {
    if ( !isset($properties['type']) ){
      throw new TraficException('Missing Trafic type');
    }
    
    $type = $properties['type'];
    unset($properties['type']);
    
    if ( !isset($instance) ){
      $Class = __NAMESPACE__ .'\\'.ucfirst($type).'Trafic';
      
      if ( !class_exists($Class) ){
        throw new TraficException('Trafic type not implemented ('.$type.')');
      }
      
      self::$instance = new $Class($properties);
    }
    
    return self::$instance;
  }
  
	/**
   * Constructor
    *
   * @param   array   $properties   Key/Value pairs
   */
  public function __construct(array $properties=[])
  {
    $this->setProperties($properties);
  }
  
	/**
   * Set properties
    *
   * @param   array     $properties   Key/Value pairs
   */
  abstract protected function setProperties(array $properties);
}