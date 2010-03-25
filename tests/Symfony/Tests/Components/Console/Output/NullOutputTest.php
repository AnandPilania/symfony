<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Tests\Components\Console\Output;

use Symfony\Components\Console\Output\NullOutput;

class NullOutputTest extends \PHPUnit_Framework_TestCase
{
  public function testConstructor()
  {
    $output = new NullOutput();
    $output->write('foo');
    $this->assertTrue(true, '->write() does nothing');
  }
}
