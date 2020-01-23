<?php

echo "<pre>";
print_r(ini_get_all());
echo "</pre>";


 /* 
  /etc/php/7.3/fpm/conf.d/10-opcache.ini,
  /etc/php/7.3/fpm/conf.d/10-pdo.ini, 
  /etc/php/7.3/fpm/conf.d/15-xml.ini, 
  /etc/php/7.3/fpm/conf.d/20-calendar.ini, 
  /etc/php/7.3/fpm/conf.d/20-ctype.ini, 
  /etc/php/7.3/fpm/conf.d/20-dom.ini, 
  /etc/php/7.3/fpm/conf.d/20-exif.ini, 
  /etc/php/7.3/fpm/conf.d/20-fileinfo.ini, 
  /etc/php/7.3/fpm/conf.d/20-ftp.ini, 
  /etc/php/7.3/fpm/conf.d/20-gettext.ini, 
  /etc/php/7.3/fpm/conf.d/20-iconv.ini, 
  /etc/php/7.3/fpm/conf.d/20-json.ini, 
  /etc/php/7.3/fpm/conf.d/20-pdo_sqlite.ini, 
  /etc/php/7.3/fpm/conf.d/20-phar.ini, 
  /etc/php/7.3/fpm/conf.d/20-posix.ini, 
  /etc/php/7.3/fpm/conf.d/20-readline.ini, 
  /etc/php/7.3/fpm/conf.d/20-shmop.ini, 
  /etc/php/7.3/fpm/conf.d/20-simplexml.ini, 
  /etc/php/7.3/fpm/conf.d/20-sockets.ini, 
  /etc/php/7.3/fpm/conf.d/20-sqlite3.ini, 
  /etc/php/7.3/fpm/conf.d/20-sysvmsg.ini, 
  /etc/php/7.3/fpm/conf.d/20-sysvsem.ini, 
  /etc/php/7.3/fpm/conf.d/20-sysvshm.ini, 
  /etc/php/7.3/fpm/conf.d/20-tokenizer.ini, 
  /etc/php/7.3/fpm/conf.d/20-wddx.ini, 
  /etc/php/7.3/fpm/conf.d/20-xmlreader.ini, 
  /etc/php/7.3/fpm/conf.d/20-xmlwriter.ini, 
  /etc/php/7.3/fpm/conf.d/20-xsl.ini

unix:///run/php/organizer.sock

  zend_extension = /usr/lib/php/20180731/xdebug.so

nginx version: nginx/1.16.1 (Ubuntu)
built with OpenSSL 1.1.1c  28 May 2019
TLS SNI support enabled
configure arguments: 
--with-cc-opt='-g -O2 -fdebug-prefix-map=/build/nginx-dvyH9w/nginx-1.16.1=. -fstack-protector-strong -Wformat -Werror=format-security -fPIC -Wdate-time -D_FORTIFY_SOURCE=2' 
--with-ld-opt='-Wl,-Bsymbolic-functions -Wl,-z,relro -Wl,-z,now -fPIC' 
--prefix=/usr/share/nginx 
--conf-path=/etc/nginx/nginx.conf 
--http-log-path=/var/log/nginx/access.log 
--error-log-path=/var/log/nginx/error.log 
--lock-path=/var/lock/nginx.lock 
--pid-path=/run/nginx.pid 
--modules-path=/usr/lib/nginx/modules 
--http-client-body-temp-path=/var/lib/nginx/body 
--http-fastcgi-temp-path=/var/lib/nginx/fastcgi 
--http-proxy-temp-path=/var/lib/nginx/proxy 
--http-scgi-temp-path=/var/lib/nginx/scgi 
--http-uwsgi-temp-path=/var/lib/nginx/uwsgi 
--with-debug 
--with-compat 
--with-pcre-jit 
--with-http_ssl_module 
--with-http_stub_status_module 
--with-http_realip_module 
--with-http_auth_request_module 
--with-http_v2_module 
--with-http_dav_module 
--with-http_slice_module 
--with-threads 
--with-http_addition_module 
--with-http_geoip_module=dynamic 
--with-http_gunzip_module 
--with-http_gzip_static_module 
--with-http_image_filter_module=dynamic 
--with-http_sub_module 
--with-http_xslt_module=dynamic 
--with-stream=dynamic 
--with-stream_ssl_module 
--with-mail=dynamic 
--with-mail_ssl_module

  */
