<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
       'name' => 'Hola Mundo 🌐',
        'site_url' => 'http://localhost/examples-PHP/code/site/',
      'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
            'student' => 'Student',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.1',
    ];
    $configSubMenu=[
        'name2' => 'Esto es una prueba de un Menu de una pagina',
        'nav_menu2' => [
            'alert' => 'Alert',
        ]
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
/*[
                'name'=> 'Name',
                'group' => 'Group',
                'degree' => 'Degree',
                'school' => 'School'
            ],*/