# Laravel5

## Develop Env
### Mac
- URL: [http://laravel.local/](http://laravel.local/)
- Documentroot: /Users/osamu/localhost/laravel/gate/public (XAMPP for mac)

### Lolipop
- [http://laravel5.omnioo.com/](http://laravel5.omnioo.com/)
- /home/users/2/pupu.jp-omnioo/web/laravel5/gate/public (Linux)

### Remote Repositiry
#### Github (public)
- Remote Repositiry: ssh: git@github.com:osamuya/laravel5.git

##### mac
````
#github
Host                    github.com
HostName                github.com
IdentityFile  /Users/osamu/Dropbox/sshkey/osamuya/osamuya.pem
User            git
````
##### Lolipop
````
#github
Host                    github.com
HostName                github.com
IdentityFile    /home/users/2/pupu.jp-omnioo/.ssh/sshkey/osamuya/osamuya.pem
User                    git
````

## Command
### Lolipop
PHPのcliを使う場合。
````
/usr/local/php7.1/bin/php artisan route:list
````
