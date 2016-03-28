<?php
// Home
Breadcrumbs::register('inicio', function($breadcrumbs)
{
    $breadcrumbs->push('Inicio', route('ventana_educativa'));
});

// Inicio > Prsentacion
Breadcrumbs::register('mresentacion', function($breadcrumbs)
{
    $breadcrumbs->parent('ventana_educativa');
    $breadcrumbs->push('Presentacion', route('presentacion'));
});

// Inicio > Mediateca
Breadcrumbs::register('mediateca', function($breadcrumbs)
{
    $breadcrumbs->parent('inicio');
    $breadcrumbs->push('Mediateca', route('mediateca'));
});

// Home > Blog > [Category]
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Page]
Breadcrumbs::register('page', function($breadcrumbs, $page)
{
    $breadcrumbs->parent('category', $page->category);
    $breadcrumbs->push($page->title, route('page', $page->id));
});