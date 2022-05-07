<?php
/**
 * @copyright Copyright (c) PutYourLightsOn
 */

namespace putyourlightson\blitzrecommendations\console\controllers;

use craft\console\Controller;
use putyourlightson\blitzrecommendations\BlitzRecommendations;
use yii\console\ExitCode;
use yii\helpers\BaseConsole;

/**
 * Allows you to manage recommendations.
 */
class RecommendationsController extends Controller
{
    /**
     * Clears all recommendations.
     *
     * @return int
     */
    public function actionClear(): int
    {
        $this->stdout('Clearing recommendations... ');
        BlitzRecommendations::$plugin->recommendations->clearAll();
        $this->stdout('done' . PHP_EOL, BaseConsole::FG_GREEN);

        return ExitCode::OK;
    }
}
