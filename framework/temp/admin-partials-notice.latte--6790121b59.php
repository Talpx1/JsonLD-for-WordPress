<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\jsonld\wp-content\plugins\jsonld_for_wordpress/assets//admin/partials/notice.latte */
final class Template6790121b59 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="notice ';
		echo LR\Filters::escapeHtmlAttr($notice->type() ? 'notice-' . $notice->type() : null) /* line 1 */;
		echo ' ';
		echo LR\Filters::escapeHtmlAttr($notice->isDismissible() ? 'is-dismissible' : null) /* line 1 */;
		echo '">
	<p>';
		echo LR\Filters::escapeHtmlText($notice->text()) /* line 2 */;
		echo '</p>
</div>
';
	}
}
