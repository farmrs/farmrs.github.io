<?php

$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$el_class = $this->getExtraClass($el_class);

$width = wpb_translateColumnWidthToSpan($width);
$width = str_replace("vc_col-xs-","large-", $width );
$width = str_replace("vc_col-sm-","large-", $width );
$width = str_replace("vc_col-md-","large-", $width );
$width = str_replace("vc_col-lg-","large-", $width );
$width = vc_column_offset_class_merge($offset, $width);

$el_class .= ' columns column_container';

$style = $this->buildStyle( $font_color );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
$output .= "\n\t".'<div class="'.$css_class.'"'.$style.'>';
$output .= "\n\t\t".'<div class="wpb_wrapper">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t\t".'</div> '.$this->endBlockComment('.wpb_wrapper');
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";

echo $output;