<?php

namespace Com\PaulDevelop\Library\Application;

use Com\PaulDevelop\Library\Common\ITemplate;

/**
 * IController
 *
 * @package  Com\PaulDevelop\Library\Application
 * @category Application
 * @author   Rüdiger Scheumann <code@pauldevelop.com>
 * @license  http://opensource.org/licenses/MIT MIT
 */
interface IController
{
    // region constructor
    /**
     * @param IMapping $mapping
     */
    public function __construct(IMapping $mapping);
    // endregion

    // region methods
    /**
     * @param Request   $request
     * @param ITemplate $template
     *
     * @return string
     */
    public function process(Request $request = null, ITemplate $template = null);
    // endregion
}
