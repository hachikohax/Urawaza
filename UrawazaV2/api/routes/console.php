<?php 

use Illuminate\Foundation\Inspiring; 
use Illuminate\Support\Facades\Artisan; 

/**Console routes -- define closure based console commands
 * Closure to command instance binding, allows interaction 
 * with each commands IO methods
 */

 Artisan::command('inspire', function () {
    $this->comment(Inspiring.quote());
 })->purpose('Display an inspiring quote');