<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cheatsheet', function () {
    return view('cheatsheet.index');
});

Route::get('/masterbase', function () {
    return view('masterbase.index');
});

Route::get('/packages', function () {
    return view('packages.index');
});

Route::get('/packages/package-detail', function () {
    return view('packages.package-detail');
});

Route::get('/packages/activity-log', function () {
    return view('packages.activity-log');
});

Route::get('/packages/backup', function () {
    return view('packages.backup');
});

Route::get('/packages/sitemap', function () {
    return view('packages.sitemap');
});

Route::get('/packages/tests', function () {
    return view('packages.tests');
});

Route::get('/packages/acl', function () {
    return view('packages.acl');
});

Route::get('/packages/media-manager', function () {
    return view('packages.media-manager');
});


Route::get('/packages/blog', function () {
    return view('packages.blog');
});

Route::get('/packages/cookie-manager', function () {
    return view('packages.cookie-manager');
});

Route::get('/packages/cache-manager', function () {
    return view('packages.cache-manager');
});

Route::get('/packages/page-manager', function () {
    return view('packages.page-manager');
});

Route::get('/packages/menu-manager', function () {
    return view('packages.menu-manager');
});

Route::get('/packages/digital-downloads', function () {
    return view('packages.digital-downloads');
});

Route::get('/packages/ecommerce', function () {
    return view('packages.ecommerce');
});

Route::get('/packages/changelog', function () {
    return view('packages.changelog');
});

Route::get('/packages/testimonials', function () {
    return view('packages.testimonials');
});

Route::get('/packages/newsletter', function () {
    return view('packages.newsletter');
});

Route::get('/packages/security-performance', function () {
    return view('packages.security-performance');
});

Route::get('/packages/maintenance', function () {
    return view('packages.maintenance');
});

Route::get('/packages/portfolio', function () {
    return view('packages.portfolio');
});

Route::get('/packages/settings', function () {
    return view('packages.settings');
});

Route::get('/packages/contact', function () {
    return view('packages.contact');
});

Route::get('/packages/seo', function () {
    return view('packages.seo');
});

Route::get('/packages/pusher', function () {
    return view('packages.pusher');
});

Route::get('/packages/trix-editor', function () {
    return view('packages.trix-editor');
});

Route::get('/packages/auto-publish', function () {
    return view('packages.auto-publish');
});

Route::get('/packages/social-share', function () {
    return view('packages.social-share');
});

Route::get('/packages/social-login', function () {
    return view('packages.social-login');
});

Route::get('/packages/subscriptions', function () {
    return view('packages.subscriptions');
});

Route::get('/packages/rss-feeds', function () {
    return view('packages.rss-feeds');
});

Route::get('/packages/excel-reports', function () {
    return view('packages.excel-reports');
});

Route::get('/packages/google-analytics', function () {
    return view('packages.google-analytics');
});

Route::get('/packages/vendor-updates', function () {
    return view('packages.vendor-updates');
});

Route::get('/packages/landing-pages', function () {
    return view('packages.landing-pages');
});

Route::get('/feature-ideas', function () {
    return view('feature-ideas.index');
});

Route::get('/code-refactor', function () {
    return view('code-refactor.index');
});

Route::get('/study-topics', function () {
    return view('study-topics.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
