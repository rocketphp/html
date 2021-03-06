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
 * Node Abstract
 *
 * Core node functionality.
 */
abstract class Node_Abstract
implements NodeInterface
{
    /**
     * @access protected
     * @var    NodeList
     */
    protected $_nodeList;

    /**
     * Constructor
     */
    public function __construct()
    { 
        $this->_nodeList = new NodeList();
    }

    /**
     * Returns output of child nodes
     *
     * @return string HTML
     */
    public function output() 
    {
        $output = "";
        foreach ($this->_nodeList->nodes as $node) {
            $output .= $node->output();
        }
        return $output;
    }

    /**
     * Returns output of node
     *
     * @return string HTML
     */
    public function __toString() 
    {
        return $this->output();
    }
}
