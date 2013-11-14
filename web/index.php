<?php
require_once __DIR__.'/../vendor/autoload.php';

use CJL\espn\config as Config;
use CJL\espn\espn as Espn;
use CJL\espn\requestInterface;
use Symfony\Component\Yaml\Parser;

$yaml = new Parser();
$configArray = $yaml->parse(file_get_contents(__DIR__ . '/../config/key.yml'));

$config = new Config($configArray);
$request = new Espn($config);


$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), array(
  'twig.options' => array('debug' => true),
  'twig.path' => __DIR__.'/views',
));

$app['debug'] = true;

$app->get('/', function () use ($app) {
  return 'fdsfds';
  // return $app['twig']->render('index.twig');

// $app->get('/hello/{name}', function ($name) use ($app) {
//   return $app['twig']->render('index.twig', array('name', $name));
// });

// $app->run();
});
