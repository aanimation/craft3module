<?php
/**
 * arhammodule module for Craft CMS 3.x
 *
 * craft3.x base structures module
 *
 * @link      https://github.com/aanimation
 * @copyright Copyright (c) 2020 aanimation
 */

namespace modules\arhammodule\console\controllers;

use modules\arhammodule\Arhammodule;

use Craft;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Arh Command
 *
 * The first line of this class docblock is displayed as the description
 * of the Console Command in ./craft help
 *
 * Craft can be invoked via commandline console by using the `./craft` command
 * from the project root.
 *
 * Console Commands are just controllers that are invoked to handle console
 * actions. The segment routing is module-name/controller-name/action-name
 *
 * The actionIndex() method is what is executed if no sub-commands are supplied, e.g.:
 *
 * ./craft arhammodule/arh
 *
 * Actions must be in 'kebab-case' so actionDoSomething() maps to 'do-something',
 * and would be invoked via:
 *
 * ./craft arhammodule/arh/do-something
 *
 * @author    aanimation
 * @package   Arhammodule
 * @since     1.0.1
 */
class ArhController extends Controller
{
    // Public Methods
    // =========================================================================

    /**
     * Handle arhammodule/arh console commands
     *
     * The first line of this method docblock is displayed as the description
     * of the Console Command in ./craft help
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'something';

        echo "Welcome to the console ArhController actionIndex() method\n";

        return $result;
    }

    /**
     * Handle arhammodule/arh/do-something console commands
     *
     * The first line of this method docblock is displayed as the description
     * of the Console Command in ./craft help
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'something';

        echo "Welcome to the console ArhController actionDoSomething() method\n";

        return $result;
    }
}
