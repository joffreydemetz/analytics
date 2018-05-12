<?php
/**
 * (c) Joffrey Demetz <joffrey.demetz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace JDZ\Analytics;

/**
 * Analytics
 * 
 * @author Joffrey Demetz <joffrey.demetz@gmail.com>
 */
interface TraficInterface 
{
  /**
   * Check the config
   * 
   * @return bool
   */
  public function isActive();
}