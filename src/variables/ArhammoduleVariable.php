<?php
/**
 * arhammodule module for Craft CMS 3.x
 *
 * craft3.x base structures module
 *
 * @link      https://github.com/aanimation
 * @copyright Copyright (c) 2020 aanimation
 */

namespace modules\arhammodule\variables;

use modules\arhammodule\Arhammodule;

use Craft;

/**
 * arhammodule Variable
 *
 * Craft allows modules to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.arhammodule }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    aanimation
 * @package   Arhammodule
 * @since     1.0.1
 */
class ArhammoduleVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.arhammodule.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.arhammodule.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
