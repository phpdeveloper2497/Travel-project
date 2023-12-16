<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Options
    |--------------------------------------------------------------------------
    |
    | Here you can define the options that are passed to all NovaTinyMCE
    | fields by default.
    |
    */

    'default_options' => [
        'content_css' => '/vendor/tinymce/skins/ui/oxide/content.min.css',
        'skin_url' => '/vendor/tinymce/skins/ui/oxide',
        'content_css_dark' => '/vendor/tinymce/skins/ui/oxide-dark/content.min.css',
        'skin_url_dark' => '/vendor/tinymce/skins/ui/oxide-dark',
        'path_absolute' => '/',
        'plugins' => [
            'print', 'preview', 'paste', 'editimage', 'importcss', 'searchreplace', 'autolink', 'autosave', 'save', 'directionality', 'code', 'visualblocks', 'visualchars', 'fullscreen', 'image', 'link', 'media', 'template', 'codesample', 'table', 'charmap', 'hr', 'pagebreak', 'nonbreaking', 'anchor', 'insertdatetime', 'advlist', 'lists', 'wordcount', 'textpattern', 'help', 'charmap', 'quickbars', 'emoticons', 'autoresize'
        ],
//        'plugins' => 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        'toolbar' => 'code undo redo | h1 h2 h3 | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        'menubar' => 'file edit view insert format tools table help',
        'toolbar_sticky' => true,
        'autosave_ask_before_unload' => true,
        'image_advtab' => true,
        'image_caption' => true,
        'quickbars_selection_toolbar' => 'bold italic | quicklink h1 h2 h3 blockquote quickimage quicktable',
        'toolbar_mode' => 'sliding',
        'contextmenu' => 'link image table',
        'relative_urls' => false,
        'remove_script_host' => false,
        'use_lfm' => true,
        'use_dark' => true,
        'lfm_url' => 'filemanager',
        "imagetools_cors_hosts" => ['travel.loc', 'yotour.uz'],
        "imagetools_toolbar" => 'rotateleft rotateright | flipv fliph | editimage imageoptions',

        'language_url' => '/languages/ru.js',
        'language' => 'ru'

    ],

];
