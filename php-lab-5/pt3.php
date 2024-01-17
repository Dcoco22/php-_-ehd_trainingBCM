<?php
$html = '
<ul>
<li>Coffee</li>
<li>Tea</li>
<li>Milk</li>
</ul>
';

preg_match_all('/<li>(.*?)<\/li>/', $html, $matches); // gờ rép trong linũ
$textValues = $matches[1];

print_r($textValues);
