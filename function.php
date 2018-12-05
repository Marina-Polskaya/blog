<?php
function printNewPreview($post)
{
		echo "<div class=\"leftLabel\">
				<div class=\"labelMini\">";
				print($post['author']);
				echo "</div>
				<div class=\"labelMini\">";
				print($post['publ_date']);
				echo "</div>
			</div>
			<div class=\"previewBox\">
				<div class=\"leftPrevBox\">
					<div class=\"imageBox\" background=\"";
					// print($post['img']);
				echo "\"></div>
				</div>
				<div class=\"rightPrevBox\">
					<div class=\"headerBox\"><h3>";
					print($post['header']);
					echo "</h3></div>
					<div class=\"textPreview\">";
					print($post['text']);
					echo "</div>
					<button>Читать полностью</button>
				</div>
			</div>";
}

?>