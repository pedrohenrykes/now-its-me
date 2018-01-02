<?php

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Recife');

$menuOptions = [

];

function setContent( $page )
{
    if ( !empty( $page ) &&  file_exists( "views/{$page}View.php" ) ) {
        require_once "views/{$page}View.php";
    } else {
        require_once "views/InicialView.php";
    }
}

function setHeader()
{
    global $menuOptions;

    $header = file_get_contents( "resources/app/html/header.html" );

    $menubar = "";
    foreach ( $menuOptions as $page => $title ) {
       $menubar .= '<li><a href="index.php?page='.$page.'">'.$title.'</a></li>';
    }

    $header = str_replace( "{OPTIONS}", $menubar, $header );

    echo $header;
}

function setScripts()
{
    $scripts = file_get_contents( "resources/app/html/scripts.html" );

    $scripts = str_replace( "{TEMPLATE}", "resources/template/", $scripts );
    $scripts = str_replace( "{APP}", "resources/app/", $scripts );

    echo $scripts;
}

function setStyles()
{
    $styles = file_get_contents( "resources/app/html/styles.html" );

    $styles = str_replace( "{TEMPLATE}", "resources/template/", $styles );
    $styles = str_replace( "{APP}", "resources/app/", $styles );

    echo $styles;
}
