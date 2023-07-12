<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Person;
class CheckForBirthday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cwb:birthdayChecked';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is the birthday command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $people = Person::whereMonth('birthday','=',now()->addDays(5)->format('m'))
        ->whereDay('birthday','=',now()->addDays(5)->format('d'))
        ->pluck('firstname','lastname');
        dd($people);

    }
}
