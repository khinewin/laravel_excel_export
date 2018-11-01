composer require maatwebsite/excel

'providers' => [
    /*
     * Package Service Providers...
     */
    Maatwebsite\Excel\ExcelServiceProvider::class,
]


'aliases' => [
    ...
    'Excel' => Maatwebsite\Excel\Facades\Excel::class,
]

php artisan vendor:publish


php artisan make:export UsersExport --model=User

php artisan make:import UsersImport --model=User
