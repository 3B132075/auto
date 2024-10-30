<?php
require '../vendor/autoload.php';
// 類別先import進來
use Demo\Hello\Lara;
use Demo\Hello\Someone;

//$lara= new Lara();
//$vincent= new Someone('Vincent');
// 類別未先import進來
//$mary= new \Demo\Hello\Someone('Mary');
//$john= new Demo\Hello\Someone('John');
//$hello= new Demo\HelloWorld();
use Demo\HelloWorld as World; // 類別另取別名
//$world = new World();

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('WISD');
$log->pushHandler(new StreamHandler('E:/wagon160/uwamp/www/auto/log/my.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

use Carbon\Carbon;

printf("Right now is %s ", Carbon::now()->toDateTimeString());
printf("Right now in Vancouver is %s", Carbon::now('America/Vancouver'));  //implicit __toString()
$tomorrow = Carbon::now()->addDay();
$lastWeek = Carbon::now()->subWeek();

$officialDate = Carbon::now()->toRfc2822String();

$howOldAmI = Carbon::createFromDate(1975, 5, 21)->age;

$noonTodayLondonTime = Carbon::createFromTime(12, 0, 0, 'Europe/London');

$internetWillBlowUpOn = Carbon::create(2038, 01, 19, 3, 14, 7, 'GMT');