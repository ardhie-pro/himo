<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/p', 'Home::index');
// admin
$routes->get('/admin', 'Home::admin');
//page1
$routes->get('/page1', 'C_Page::page1');
$routes->post('/aksipage1', 'C_Page::aksipage1');
$routes->get('/updatepage1/(:any)', 'C_Page::updatepage1/$1');
$routes->post('/aksiupdatepage1', 'C_Page::aksiupdatepage1');
$routes->get('/deletepage1/(:any)', 'C_Page::deletepage1/$1');

// page 2
$routes->get('/page2', 'C_Page::page2');
$routes->post('/aksipage2', 'C_Page::aksipage2');
$routes->get('/updatepage2/(:any)', 'C_Page::updatepage2/$1');
$routes->post('/aksiupdatepage2', 'C_Page::aksiupdatepage2');
$routes->get('/deletepage2/(:any)', 'C_Page::deletepage2/$1');

// page 3
$routes->get('/page3', 'C_Page::page3');
$routes->post('/aksipage3', 'C_Page::aksipage3');
$routes->get('/updatepage3/(:any)', 'C_Page::updatepage3/$1');
$routes->post('/aksiupdatepage3', 'C_Page::aksiupdatepage3');
$routes->get('/deletepage3/(:any)', 'C_Page::deletepage3/$1');

// event
$routes->get('/berita', 'C_Berita::berita');
$routes->get('/detailberita/(:any)', 'C_Berita::detailberita/$1');
$routes->get('/event', 'C_Berita::event');
$routes->post('/aksievent', 'C_Berita::aksievent');
$routes->get('/updateevent/(:any)', 'C_Berita::updateevent/$1');
$routes->post('/aksiupdateevent', 'C_Berita::aksiupdateevent');
$routes->get('/deleteevent/(:any)', 'C_Berita::deleteevent/$1');

// page 4
$routes->get('/page4', 'C_Berita::page4');
$routes->post('/aksipage4', 'C_Berita::aksipage4');
$routes->get('/updatepage4/(:any)', 'C_Berita::updatepage4/$1');
$routes->post('/aksiupdatepage4', 'C_Berita::aksiupdatepage4');
$routes->get('/deletepage4/(:any)', 'C_Berita::deletepage4/$1');

// page 5
$routes->get('/page5', 'C_Page::page5');
$routes->post('/aksipage5', 'C_Page::aksipage5');
$routes->get('/updatepage5/(:any)', 'C_Page::updatepage5/$1');
$routes->post('/aksiupdatepage5', 'C_Page::aksiupdatepage5');
$routes->get('/deletepage5/(:any)', 'C_Page::deletepage5/$1');

// gambar 
$routes->get('/gambar', 'C_Page::gambar');
$routes->post('/aksigambar', 'C_Page::aksigambar');
$routes->get('/deletegambar/(:any)', 'C_Page::deletegambar/$1');

// user management
$routes->get('/tambahuser', 'C_User::tambahuser');
$routes->post('/aksiuser', 'C_User::aksiuser');
$routes->get('/updateuser/(:any)', 'C_User::updateuser/$1');
$routes->post('/aksiupdateuser', 'C_User::aksiupdateuser');
$routes->get('/deleteuser/(:any)', 'C_User::deleteuser/$1');

// Login
$routes->get('/login', 'C_Login::login');
$routes->post('/aksilogin', 'C_Login::action');
$routes->get('/logout', 'C_Login::logout');

//home
$routes->get('/', 'Home::home');
$routes->get('/about', 'Home::about');
