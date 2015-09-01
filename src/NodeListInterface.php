<?php
/**
 * RocketPHP (http://rocketphp.io)
 *
 * @package   RocketPHP
 * @link      https://github.com/rocketphp/html
 * @license   http://opensource.org/licenses/MIT MIT
 */

namespace RocketPHP\HTML;

/** 
 * Interface for nodelists
 */
interface NodeListInterface
{
    public function count();
    public function set(NodeInterface $node);
}