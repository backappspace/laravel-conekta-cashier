<?php

namespace Backappspace\ConektaCashier;

use Illuminate\Support\ServiceProvider;

class CashierServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Backappspace\ConektaCashier\BillableRepositoryInterface', function () {
            return new EloquentBillableRepository();
        });

        $this->app->singleton('command.conekta.cashier.table', function ($app) {
            return new CashierTableCommand();
        });

        $this->commands('command.conekta.cashier.table');
    }
}
