<?php
/**
 * PhalconSlayer\Framework.
 *
 * @copyright 2015-2016 Daison Carino <daison12006013@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://docs.phalconslayer.com
 */

/**
 */
namespace Clarity\Providers;

use Phalcon\Http\Response\Cookies as BaseCookies;

/**
 *
 */
class Cookies extends ServiceProvider
{
    /**
     * {@inheridoc}.
     */
    protected $alias = 'cookies';

    /**
     * {@inheridoc}.
     */
    protected $shared = true;

    /**
     * {@inheridoc}.
     */
    public function register()
    {
        return new BaseCookies;
    }
}
