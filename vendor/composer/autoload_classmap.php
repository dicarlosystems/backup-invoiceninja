<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Modules\\Backup\\Database\\Seeders\\BackupDatabaseSeeder' => $baseDir . '/Database/Seeders/BackupDatabaseSeeder.php',
    'Modules\\Backup\\Datatables\\BackupDatatable' => $baseDir . '/Datatables/BackupDatatable.php',
    'Modules\\Backup\\Http\\ApiControllers\\BackupApiController' => $baseDir . '/Http/ApiControllers/BackupApiController.php',
    'Modules\\Backup\\Http\\Controllers\\BackupController' => $baseDir . '/Http/Controllers/BackupController.php',
    'Modules\\Backup\\Http\\Requests\\BackupRequest' => $baseDir . '/Http/Requests/BackupRequest.php',
    'Modules\\Backup\\Http\\Requests\\CreateBackupRequest' => $baseDir . '/Http/Requests/CreateBackupRequest.php',
    'Modules\\Backup\\Http\\Requests\\UpdateBackupRequest' => $baseDir . '/Http/Requests/UpdateBackupRequest.php',
    'Modules\\Backup\\Models\\Backup' => $baseDir . '/Models/Backup.php',
    'Modules\\Backup\\Policies\\BackupPolicy' => $baseDir . '/Policies/BackupPolicy.php',
    'Modules\\Backup\\Presenters\\BackupPresenter' => $baseDir . '/Presenters/BackupPresenter.php',
    'Modules\\Backup\\Providers\\BackupServiceProvider' => $baseDir . '/Providers/BackupServiceProvider.php',
    'Modules\\Backup\\Repositories\\BackupRepository' => $baseDir . '/Repositories/BackupRepository.php',
    'Modules\\Backup\\Transformers\\BackupTransformer' => $baseDir . '/Transformers/BackupTransformer.php',
);