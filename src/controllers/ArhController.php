<?php
/**
 * arhammodule module for Craft CMS 3.x
 *
 * craft3.x base structures module
 *
 * @link      https://github.com/aanimation
 * @copyright Copyright (c) 2020 aanimation
 */

namespace modules\arhammodule\controllers;

use modules\arhammodule\Arhammodule;

use Craft;
use craft\web\Controller;

/**
 * Arh Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your module’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    aanimation
 * @package   Arhammodule
 * @since     1.0.1
 */
class ArhController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our module's index action URL,
     * e.g.: actions/arhammodule/arh
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the ArhController actionIndex() method';

        return $result;
    }

    /**
     * Handle a request going to our module's actionDoSomething URL,
     * e.g.: actions/arhammodule/arh/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the ArhController actionDoSomething() method';

        return $result;
    }
}
