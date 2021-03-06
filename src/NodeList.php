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
 * NodeList
 *
 * Stores node objects in array.
 */ 
class NodeList
implements NodeListInterface
{
    /**
     * @var array Nodes
     */
    public $nodes = [];

    public function __construct()
    { 
    }

    /**
     * Returns node count
     *
     * @return int
     */
    public function count()
    { 
        return count($this->nodes);
    }

    /**
     * Sets a node
     *
     * @return void
     */
    public function set(NodeInterface $node) 
    {
        array_push($this->nodes, $node);
    }
}