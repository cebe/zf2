<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Application
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

namespace ZendTest\Application\TestAsset;

use Zend\Application\ResourceLoader as BaseResourceLoader;

/**
 * @category   Zend
 * @package    Zend_Application
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class ResourceLoader extends BaseResourceLoader
{
    public function __construct($options = null)
    {
        $this->plugins['zf30'] = 'ZendTest\Application\TestAsset\Resource\Zf30';
        $this->plugins['zf38'] = 'ZendTest\Application\TestAsset\Resource\Zf38';
        $this->plugins['zf38modules'] = 'ZendTest\Application\TestAsset\Resource\Zf38Modules';
        $this->options = $options;
    }
}
