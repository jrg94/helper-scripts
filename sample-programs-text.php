add_filter('the_content', 'add_my_content');
function add_my_content($content) {

$my_custom_text = <<< EOD
	<div>
    <em>FYI: This article is a part of a much larger series known as <a href="https://therenegadecoder.com/code/sample-programs-in-every-language/">Sample Programs in Every Language</a>. In this series, I'm building up an archive of sample programs&mdash;like this one&mdash;with the help of the open source community. All code is included in the <a href="https://github.com/jrg94/sample-programs" target="_blank" rel="noopener">Sample Programs in Every Language GitHub repository</a>.</em>
  </div>
EOD;

if(is_single() && !is_home() && has_term($term = array("hello-world-in-every-language"), $taxonomy = 'series')) {
	$content .= $my_custom_text;
}
return $content;
}
