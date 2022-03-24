<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Models\Plan;

class PlanObserver
{
    /**
     * Handle the Plan "creting" event.
     *
     * @param  \App\Models\Models\\Plan  $plan
     * @return void
     */
    public function creating(Plan $plan)
    {
        $plan->url = Str::kebab($plan->name);
    }

    /**
     * Handle the Plan "updating" event.
     *
     * @param  \App\Models\Models\\Plan  $plan
     * @return void
     */
    public function saving(Plan $plan)
    {
        $plan->url = Str::kebab($plan->name);
    }

}
