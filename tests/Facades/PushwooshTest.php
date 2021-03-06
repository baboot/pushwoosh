<?php

/*
 * This file is part of Laravel Pushwoosh.
 *
 * (c) HOY Multimedia AB <info@hoy.se>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Baboot\Tests\Pushwoosh\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Baboot\Pushwoosh\Facades\Pushwoosh;
use Baboot\Pushwoosh\PushwooshManager;
use Baboot\Tests\Pushwoosh\AbstractTestCase;

/**
 * This is the Pushwoosh facade test class.
 *
 * @author Vincent Klaiber <vincent@hoy.se>
 */
class PushwooshTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'pushwoosh';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Pushwoosh::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return PushwooshManager::class;
    }
}
