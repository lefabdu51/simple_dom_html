<?php
jimport('html_parse.simple_html_dom');
$url = $form->data['url'];
$balise = $form->data['balise'];
$r = $form->data['typerecherche'];
$html = file_get_html($url);
if (!empty($html)) {
foreach($html->find($balise) as $e)
if ($e) {
if ($r === '0') {
echo $e->outertext;
} else if ($r === '1') {
echo $e->innertext;
} else if ($r === '2') {
echo $e->xmltext;
} else if ($r === '3') {
echo $e->text;
}
echo '<br />';
}
}  ?>
