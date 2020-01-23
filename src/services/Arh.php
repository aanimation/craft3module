<?php
/**
 * arhammodule module for Craft CMS 3.x
 *
 * craft3.x base structures module
 *
 * @link      https://github.com/aanimation
 * @copyright Copyright (c) 2020 aanimation
 */

namespace modules\arhammodule\services;

use modules\arhammodule\Arhammodule;

use Craft;
use craft\base\Component;

/**
 * Arh Service
 *
 * All of your module’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other modules can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    aanimation
 * @package   Arhammodule
 * @since     1.0.1
 */
class Arh extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin/module file, call it like this:
     *
     *     Arhammodule::$instance->arh->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
