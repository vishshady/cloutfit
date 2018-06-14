<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://cloutfitness.dev',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:gcBiCZbBkAQag472+o9wxtodLZVDcyZ8uhKOo5/55GM=',
    'cipher' => 'AES-256-CBC',
    'log' => 'single',
    'log_level' => 'debug',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Laravel\\Tinker\\TinkerServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
      27 => 'Jenssegers\\Agent\\AgentServiceProvider',
      28 => 'Collective\\Html\\HtmlServiceProvider',
      29 => 'Barryvdh\\LaravelIdeHelper\\IdeHelperServiceProvider',
      30 => 'Zizaco\\Entrust\\EntrustServiceProvider',
      31 => 'Intervention\\Image\\ImageServiceProvider',
      32 => 'Artdarek\\OAuth\\OAuthServiceProvider',
      33 => 'Barryvdh\\Debugbar\\ServiceProvider',
      34 => 'Spatie\\Backup\\BackupServiceProvider',
      35 => 'Collective\\Html\\HtmlServiceProvider',
      36 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
      37 => 'Cviebrock\\EloquentSluggable\\ServiceProvider',
      38 => 'Yajra\\Datatables\\DatatablesServiceProvider',
      39 => 'Barryvdh\\DomPDF\\ServiceProvider',
      40 => 'PragmaRX\\Tracker\\Vendor\\Laravel\\ServiceProvider',
      41 => 'SimpleSoftwareIO\\QrCode\\QrCodeServiceProvider',
      42 => 'Sentry\\SentryLaravel\\SentryLaravelServiceProvider',
      43 => 'Froiden\\LaravelInstaller\\Providers\\LaravelInstallerServiceProvider',
      44 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Agent' => 'Jenssegers\\Agent\\Facades\\Agent',
      'Form' => 'Collective\\Html\\FormFacade',
      'HTML' => 'Collective\\Html\\HtmlFacade',
      'Entrust' => 'Zizaco\\Entrust\\EntrustFacade',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'OAuth' => 'Artdarek\\OAuth\\Facade\\OAuth',
      'Debugbar' => 'Barryvdh\\Debugbar\\Facade',
      'Input' => 'Illuminate\\Support\\Facades\\Input',
      'Excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
      'Tracker' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Facade',
      'QrCode' => 'SimpleSoftwareIO\\QrCode\\Facades\\QrCode',
      'Datatables' => 'Yajra\\Datatables\\Facades\\Datatables',
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
      'Sentry' => 'Sentry\\SentryLaravel\\SentryFacade',
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
      'admin' => 
      array (
        'driver' => 'session',
        'provider' => 'admin',
      ),
      'merchant' => 
      array (
        'driver' => 'session',
        'provider' => 'merchant',
      ),
      'customer' => 
      array (
        'driver' => 'session',
        'provider' => 'customer',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
      'admin' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\Admin',
      ),
      'merchant' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\Merchant',
      ),
      'customer' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\GymClient',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'null',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'array',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:/xampp/htdocs/laravel/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'laravel',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'cloutfit_gym_mng',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'cloutfit_gym_mng',
        'username' => 'cloutfit_vishwas',
        'password' => 'Chelsea@123',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => false,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'fitsigma_op',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'fitsigma_op',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
    ),
  ),
  'entrust' => 
  array (
    'role' => 'App\\Models\\Role',
    'roles_table' => 'roles',
    'permission' => 'App\\Models\\Permission',
    'permissions_table' => 'permissions',
    'permission_role_table' => 'permission_role',
    'role_user_table' => 'role_user',
    'user_foreign_key' => 'user_id',
    'role_foreign_key' => 'role_id',
  ),
  'filesystems' => 
  array (
    'default' => 's3',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:/xampp/htdocs/laravel/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:/xampp/htdocs/laravel/storage/app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => '',
        'bucket' => '',
      ),
    ),
  ),
  'ide-helper' => 
  array (
    'filename' => '_ide_helper',
    'format' => 'php',
    'include_fluent' => false,
    'write_model_magic_where' => true,
    'include_helpers' => false,
    'helper_files' => 
    array (
      0 => 'C:/xampp/htdocs/laravel/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
    ),
    'model_locations' => 
    array (
      0 => 'app',
    ),
    'extra' => 
    array (
      'Eloquent' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'Illuminate\\Database\\Query\\Builder',
      ),
      'Session' => 
      array (
        0 => 'Illuminate\\Session\\Store',
      ),
    ),
    'magic' => 
    array (
      'Log' => 
      array (
        'debug' => 'Monolog\\Logger::addDebug',
        'info' => 'Monolog\\Logger::addInfo',
        'notice' => 'Monolog\\Logger::addNotice',
        'warning' => 'Monolog\\Logger::addWarning',
        'error' => 'Monolog\\Logger::addError',
        'critical' => 'Monolog\\Logger::addCritical',
        'alert' => 'Monolog\\Logger::addAlert',
        'emergency' => 'Monolog\\Logger::addEmergency',
      ),
    ),
    'interfaces' => 
    array (
    ),
    'custom_db_types' => 
    array (
    ),
    'model_camel_case_properties' => false,
    'type_overrides' => 
    array (
      'integer' => 'int',
      'boolean' => 'bool',
    ),
  ),
  'installer' => 
  array (
    'requirements' => 
    array (
      0 => 'openssl',
      1 => 'pdo',
      2 => 'mbstring',
      3 => 'tokenizer',
    ),
    'permissions' => 
    array (
      'storage/app/' => '775',
      'storage/framework/' => '775',
      'storage/logs/' => '775',
      'bootstrap/cache/' => '775',
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.mailgun.org',
    'port' => 587,
    'from' => 
    array (
      'address' => 'support@fitsigma.com',
      'name' => 'Fitsigma Support',
    ),
    'encryption' => 'tls',
    'username' => NULL,
    'password' => NULL,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:/xampp/htdocs/laravel/resources/views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'database',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
    'facebook' => 
    array (
      'client_id' => '146842422700210',
      'client_secret' => '809fe8ff62cb08aad8bfaf90e4e7bde8',
      'redirect' => 'http://localhost:8000/customer/facebook/callback',
    ),
    'google' => 
    array (
      'client_id' => '258755851892-f5fru1d77dvsdcqckandeeu441aoaqhk.apps.googleusercontent.com',
      'client_secret' => 'Bvx3RO9F0l5ZVZa1f5s7Q07e',
      'redirect' => 'http://127.0.0.1:8000/customer/google/callback',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:/xampp/htdocs/laravel/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
  ),
  'sluggable' => 
  array (
    'source' => NULL,
    'maxLength' => NULL,
    'method' => NULL,
    'separator' => '-',
    'unique' => true,
    'uniqueSuffix' => NULL,
    'includeTrashed' => false,
    'reserved' => NULL,
    'onUpdate' => false,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:/xampp/htdocs/laravel/resources/views',
    ),
    'compiled' => 'C:/xampp/htdocs/laravel/storage/framework/views',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => 'C:/xampp/htdocs/laravel/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => true,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
  ),
  'laravel-backup' => 
  array (
    'backup' => 
    array (
      'name' => 'http://localhost',
      'source' => 
      array (
        'files' => 
        array (
          'include' => 
          array (
            0 => '/Users/DEXTER/htdocs/fitsigma-op/dev',
          ),
          'exclude' => 
          array (
            0 => 'C:/xampp/htdocs/laravel/vendor',
            1 => 'C:/xampp/htdocs/laravel/node_modules',
            2 => 'C:/xampp/htdocs/laravel/storage',
          ),
          'followLinks' => false,
        ),
        'databases' => 
        array (
          0 => 'mysql',
        ),
      ),
      'destination' => 
      array (
        'disks' => 
        array (
          0 => 'local',
        ),
      ),
    ),
    'cleanup' => 
    array (
      'strategy' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
      'defaultStrategy' => 
      array (
        'keepAllBackupsForDays' => 7,
        'keepDailyBackupsForDays' => 16,
        'keepWeeklyBackupsForWeeks' => 8,
        'keepMonthlyBackupsForMonths' => 4,
        'keepYearlyBackupsForYears' => 2,
        'deleteOldestBackupsWhenUsingMoreMegabytesThan' => 5000,
      ),
    ),
    'monitorBackups' => 
    array (
      0 => 
      array (
        'name' => 'http://localhost',
        'disks' => 
        array (
          0 => 'local',
        ),
        'newestBackupsShouldNotBeOlderThanDays' => 1,
        'storageUsedMayNotBeHigherThanMegabytes' => 5000,
      ),
    ),
    'notifications' => 
    array (
      'handler' => 'Spatie\\Backup\\Notifications\\Notifier',
      'events' => 
      array (
        'whenBackupWasSuccessful' => 
        array (
          0 => 'log',
        ),
        'whenCleanupWasSuccessful' => 
        array (
          0 => 'log',
        ),
        'whenHealthyBackupWasFound' => 
        array (
          0 => 'log',
        ),
        'whenBackupHasFailed' => 
        array (
          0 => 'log',
          1 => 'mail',
        ),
        'whenCleanupHasFailed' => 
        array (
          0 => 'log',
          1 => 'mail',
        ),
        'whenUnhealthyBackupWasFound' => 
        array (
          0 => 'log',
          1 => 'mail',
        ),
      ),
      'mail' => 
      array (
        'from' => 'your@email.com',
        'to' => 'your@email.com',
      ),
      'slack' => 
      array (
        'channel' => '#backups',
        'username' => 'Backup bot',
        'icon' => ':robot:',
      ),
      'pushover' => 
      array (
        'token' => NULL,
        'user' => NULL,
        'sounds' => 
        array (
          'success' => 'pushover',
          'error' => 'siren',
        ),
      ),
      'telegram' => 
      array (
        'bot_token' => NULL,
        'chat_id' => NULL,
        'async_requests' => false,
        'disable_web_page_preview' => true,
      ),
    ),
  ),
  'dompdf' => 
  array (
    'show_warnings' => false,
    'orientation' => 'portrait',
    'defines' => 
    array (
      'DOMPDF_FONT_DIR' => 'C:/xampp/htdocs/laravel/storage/fonts/',
      'DOMPDF_FONT_CACHE' => 'C:/xampp/htdocs/laravel/storage/fonts/',
      'DOMPDF_TEMP_DIR' => '/var/folders/sb/fh6xgydn6kdfq0vlzfzslr8m0000gn/T',
      'DOMPDF_CHROOT' => '/Users/DEXTER/htdocs/fitsigma-op/dev',
      'DOMPDF_UNICODE_ENABLED' => true,
      'DOMPDF_ENABLE_FONT_SUBSETTING' => false,
      'DOMPDF_PDF_BACKEND' => 'CPDF',
      'DOMPDF_DEFAULT_MEDIA_TYPE' => 'screen',
      'DOMPDF_DEFAULT_PAPER_SIZE' => 'a4',
      'DOMPDF_DEFAULT_FONT' => 'serif',
      'DOMPDF_DPI' => 96,
      'DOMPDF_ENABLE_PHP' => false,
      'DOMPDF_ENABLE_JAVASCRIPT' => true,
      'DOMPDF_ENABLE_REMOTE' => true,
      'DOMPDF_FONT_HEIGHT_RATIO' => 1.100000000000000088817841970012523233890533447265625,
      'DOMPDF_ENABLE_CSS_FLOAT' => false,
      'DOMPDF_ENABLE_HTML5PARSER' => false,
    ),
  ),
  'tracker' => 
  array (
    'enabled' => false,
    'use_middleware' => false,
    'do_not_track_robots' => false,
    'do_not_track_environments' => 
    array (
    ),
    'do_not_track_routes' => 
    array (
      0 => 'tracker.stats.*',
    ),
    'do_not_track_ips' => 
    array (
      0 => '127.0.0.0/24',
    ),
    'log_enabled' => false,
    'log_sql_queries' => false,
    'connection' => 'tracker',
    'do_not_log_sql_queries_connections' => 
    array (
      0 => 'tracker',
    ),
    'log_sql_queries_bindings' => false,
    'log_events' => false,
    'log_only_events' => 
    array (
    ),
    'id_columns_names' => 
    array (
      0 => 'id',
    ),
    'do_not_log_events' => 
    array (
      0 => 'illuminate.log',
      1 => 'eloquent.*',
      2 => 'router.*',
      3 => 'composing: *',
      4 => 'creating: *',
    ),
    'log_geoip' => false,
    'log_user_agents' => false,
    'log_users' => false,
    'log_devices' => false,
    'log_languages' => false,
    'log_referers' => false,
    'log_paths' => false,
    'log_queries' => false,
    'log_routes' => false,
    'log_exceptions' => false,
    'store_cookie_tracker' => false,
    'tracker_cookie_name' => 'please_change_this_cookie_name',
    'tracker_session_name' => 'tracker_session',
    'user_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\User',
    'session_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Session',
    'log_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Log',
    'path_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Path',
    'query_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Query',
    'query_argument_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\QueryArgument',
    'agent_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Agent',
    'device_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Device',
    'cookie_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Cookie',
    'domain_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Domain',
    'referer_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Referer',
    'referer_search_term_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\RefererSearchTerm',
    'route_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Route',
    'route_path_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\RoutePath',
    'route_path_parameter_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\RoutePathParameter',
    'error_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Error',
    'geoip_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\GeoIp',
    'sql_query_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\SqlQuery',
    'sql_query_binding_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\SqlQueryBinding',
    'sql_query_binding_parameter_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\SqlQueryBindingParameter',
    'sql_query_log_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\SqlQueryLog',
    'connection_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Connection',
    'event_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Event',
    'event_log_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\EventLog',
    'system_class_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\SystemClass',
    'language_model' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Models\\Language',
    'authentication_ioc_binding' => 
    array (
      0 => 'auth',
    ),
    'authenticated_check_method' => 'check',
    'authenticated_user_method' => 'user',
    'authenticated_user_id_column' => 'id',
    'authenticated_user_username_column' => 'email',
    'stats_panel_enabled' => false,
    'stats_routes_before_filter' => '',
    'stats_routes_after_filter' => '',
    'stats_routes_middleware' => '',
    'stats_template_path' => '/templates/sb-admin-2',
    'stats_base_uri' => 'stats',
    'stats_layout' => 'pragmarx/tracker::layout',
    'stats_controllers_namespace' => 'PragmaRX\\Tracker\\Vendor\\Laravel\\Controllers',
  ),
  'excel' => 
  array (
    'cache' => 
    array (
      'enable' => true,
      'driver' => 'memory',
      'settings' => 
      array (
        'memoryCacheSize' => '32MB',
        'cacheTime' => 600,
      ),
      'memcache' => 
      array (
        'host' => 'localhost',
        'port' => 11211,
      ),
      'dir' => 'C:/xampp/htdocs/laravel/storage/cache',
    ),
    'properties' => 
    array (
      'creator' => 'Maatwebsite',
      'lastModifiedBy' => 'Maatwebsite',
      'title' => 'Spreadsheet',
      'description' => 'Default spreadsheet export',
      'subject' => 'Spreadsheet export',
      'keywords' => 'maatwebsite, excel, export',
      'category' => 'Excel',
      'manager' => 'Maatwebsite',
      'company' => 'Maatwebsite',
    ),
    'sheets' => 
    array (
      'pageSetup' => 
      array (
        'orientation' => 'portrait',
        'paperSize' => '9',
        'scale' => '100',
        'fitToPage' => false,
        'fitToHeight' => true,
        'fitToWidth' => true,
        'columnsToRepeatAtLeft' => 
        array (
          0 => '',
          1 => '',
        ),
        'rowsToRepeatAtTop' => 
        array (
          0 => 0,
          1 => 0,
        ),
        'horizontalCentered' => false,
        'verticalCentered' => false,
        'printArea' => NULL,
        'firstPageNumber' => NULL,
      ),
    ),
    'creator' => 'Maatwebsite',
    'csv' => 
    array (
      'delimiter' => ',',
      'enclosure' => '"',
      'line_ending' => '
',
      'use_bom' => false,
    ),
    'export' => 
    array (
      'autosize' => true,
      'autosize-method' => 'approx',
      'generate_heading_by_indices' => true,
      'merged_cell_alignment' => 'left',
      'calculate' => false,
      'includeCharts' => false,
      'sheets' => 
      array (
        'page_margin' => false,
        'nullValue' => NULL,
        'startCell' => 'A1',
        'strictNullComparison' => false,
      ),
      'store' => 
      array (
        'path' => 'C:/xampp/htdocs/laravel/storage/exports',
        'returnInfo' => false,
      ),
      'pdf' => 
      array (
        'driver' => 'DomPDF',
        'drivers' => 
        array (
          'DomPDF' => 
          array (
            'path' => 'C:/xampp/htdocs/laravel/vendor/dompdf/dompdf/',
          ),
          'tcPDF' => 
          array (
            'path' => 'C:/xampp/htdocs/laravel/vendor/tecnick.com/tcpdf/',
          ),
          'mPDF' => 
          array (
            'path' => 'C:/xampp/htdocs/laravel/vendor/mpdf/mpdf/',
          ),
        ),
      ),
    ),
    'filters' => 
    array (
      'registered' => 
      array (
        'chunk' => 'Maatwebsite\\Excel\\Filters\\ChunkReadFilter',
      ),
      'enabled' => 
      array (
      ),
    ),
    'import' => 
    array (
      'heading' => 'slugged',
      'startRow' => 1,
      'separator' => '_',
      'slug_whitelist' => '._',
      'includeCharts' => false,
      'to_ascii' => true,
      'encoding' => 
      array (
        'input' => 'UTF-8',
        'output' => 'UTF-8',
      ),
      'calculate' => true,
      'ignoreEmpty' => false,
      'force_sheets_collection' => false,
      'dates' => 
      array (
        'enabled' => true,
        'format' => false,
        'columns' => 
        array (
        ),
      ),
      'sheets' => 
      array (
        'test' => 
        array (
          'firstname' => 'A2',
        ),
      ),
    ),
    'views' => 
    array (
      'styles' => 
      array (
        'th' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 12,
          ),
        ),
        'strong' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 12,
          ),
        ),
        'b' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 12,
          ),
        ),
        'i' => 
        array (
          'font' => 
          array (
            'italic' => true,
            'size' => 12,
          ),
        ),
        'h1' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 24,
          ),
        ),
        'h2' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 18,
          ),
        ),
        'h3' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 13.5,
          ),
        ),
        'h4' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 12,
          ),
        ),
        'h5' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 10,
          ),
        ),
        'h6' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 7.5,
          ),
        ),
        'a' => 
        array (
          'font' => 
          array (
            'underline' => true,
            'color' => 
            array (
              'argb' => 'FF0000FF',
            ),
          ),
        ),
        'hr' => 
        array (
          'borders' => 
          array (
            'bottom' => 
            array (
              'style' => 'thin',
              'color' => 
              array (
                0 => 'FF000000',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
    ),
    'index_column' => 'DT_Row_Index',
    'fractal' => 
    array (
      'includes' => 'include',
      'serializer' => 'League\\Fractal\\Serializer\\DataArraySerializer',
    ),
    'engines' => 
    array (
      'eloquent' => 'Yajra\\Datatables\\Engines\\EloquentEngine',
      'query' => 'Yajra\\Datatables\\Engines\\QueryBuilderEngine',
      'collection' => 'Yajra\\Datatables\\Engines\\CollectionEngine',
    ),
    'builders' => 
    array (
      'Illuminate\\Database\\Eloquent\\Relations\\Relation' => 'eloquent',
      'Illuminate\\Database\\Eloquent\\Builder' => 'eloquent',
      'Illuminate\\Database\\Query\\Builder' => 'query',
      'Illuminate\\Support\\Collection' => 'collection',
    ),
    'nulls_last_sql' => '%s %s NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
  ),
);
