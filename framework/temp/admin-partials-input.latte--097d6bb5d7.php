<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\jsonld\wp-content\plugins\jsonld_for_wordpress/assets//admin/partials/input.latte */
final class Template097d6bb5d7 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<input type="';
		echo LR\Filters::escapeHtmlAttr($type) /* line 1 */;
		echo '" id="';
		echo LR\Filters::escapeHtmlAttr($label_for) /* line 1 */;
		echo '" ';
		echo LR\Filters::escapeHtmlTag(isset($step) ? "step='{$step}'" : null) /* line 1 */;
		echo '>';
	}
}
