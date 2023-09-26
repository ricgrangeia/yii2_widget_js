<?php
/**
 * Javascript Inside Views for Yii2
 *
 * First Author: Angel_De_La_Noche
 * https://forum.yiiframework.com/t/javascript-inside-views/63743/3
 *
 * @author Ricardo Grangeia Dias <ricardograngeia@gmail.com>
 * @profile PHP Developer
 */

namespace common\widgets;

final class JS extends yii\base\Widget {

	public int $position = \yii\web\View::POS_READY;

	/**
	 * @return int
	 */
	public function getPosition(): int {

		return $this->position;
	}

	/**
	 * @param int $position
	 */
	public function setPosition( int $position ): void {

		$this->position = $position;
	}

	/**
	 * Starts recording code block.
	 */

	public function init(): void {
		ob_start();
		ob_implicit_flush(false);
	}

	/**
	 * Ends recording code block.
	 * This method stops output buffering and registers result as inline javascript.
	 */

	public function run(): void {

		$code = ob_get_clean();
		$code = preg_replace('/<\/?script[^>]*>/', '', $code);
		$this->view->registerJs($code, $this->position);
	}


}
