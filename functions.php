<?php
//サムネイル設定ができるようにする追加機能
//アイキャッチ
add_theme_support('post-thumbnails');

function my_excerpt_length($length) {
    return 10;
    }
    add_filter('excerpt_mblength', 'my_excerpt_length');
?>