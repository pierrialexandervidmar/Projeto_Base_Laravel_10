<?php
#php artisan test --parallel | php
#if [ $? -ne 0 ]; then
#    echo "Opa! Deu ruim aqui com algum teste. Arrume antes de continuar... 😉";
#    exit 1;
#fi;

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;

trait CreatesApplication
{
    /**
     * Creates the application.
     */
    public function createApplication(): Application
    {
        $app = require __DIR__ . '/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
