#第 2 章 Yaf安装/配置

##2.1. Yaf的安装

Yaf只支持PHP5.2及以上的版本. 并支持最新的PHP5.4

Yaf需要SPL的支持. SPL在PHP5中是默认启用的扩展模块.

Yaf需要PCRE的支持. PCRE在PHP5中是默认启用的扩展模块.


##在 Linux 系统下安装

###PHP 5.2+

下载Yaf的最新版本, 解压缩以后, 进入Yaf的源码目录, 依次执行(其中PHP_BIN是PHP的bin目录): 


      $PHP_BIN/phpize
      ./configure --with-php-config=$PHP_BIN/php-config
      make
      make install


