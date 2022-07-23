<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\jsonld\wp-content\plugins\jsonld_for_wordpress/assets//admin/pages/settings.latte */
final class Templateea38b4f2c1 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="wrap">
    <h1>JsonLD For WordPress: ';
		echo LR\Filters::escapeHtmlText(namespace\__('Settings')) /* line 2 */;
		echo '</h1>
    ';
		echo LR\Filters::escapeHtmlText(build_settings($page_slug)) /* line 3 */;
		echo '
</div>';
	}
}
