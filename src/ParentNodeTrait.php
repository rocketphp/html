<?php
/**
 * RocketPHP (http://rocketphp.io)
 *
 * @package   RocketPHP
 * @link      https://github.com/rocketphp/html
 * @license   http://opensource.org/licenses/MIT MIT
 */

namespace RocketPHP\HTML;

use InvalidArgumentException;

/**
 * Parent Node Trait
 *
 * Provides child node functionality.
 */
trait ParentNodeTrait
{
    /**
     * Sets child node
     *
     * @param  string $name Method name
     * @param  array  $args Method arguments
     *
     * @return Node
     */
    public function __call($name, $args) 
    { 
        if(!empty($args))
            foreach ($args as $key => $value) {
                if(!is_string($value) || $value === "")
                    throw new InvalidArgumentException(
                        "Expected string for node args (e.g. id=\"foo\")", 
                        1
                    );
            }
        if (strpos(HTML::DECLARATIONS.',', "$name,") !== false) { 
            $node = new Declaration($name, $args[0]);
        } else {
            $node = new Element($name, $args);
        }
        return $this->setNode($node);
    }

    /**
     * Checks if node has child nodes
     *
     * @return bool True if child nodes else false
     */
    public function hasChildren() 
    {
        if (!empty($this->_nodeList->nodes))
            return true;
        else
            return false;
    }

    /**
     * Returns child nodes
     *
     * @return array Nodes as array
     */
    public function children() 
    {
        return $this->_nodeList->nodes;
    }
    /**
     * Sets child node
     *
     * @return Node
     */
    public function setNode(NodeInterface $node) 
    {
        $this->_nodeList->set($node);
        return $node;
    }

}
