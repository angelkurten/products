<?php

namespace App\Console\Commands;

use App\Usescases\Product\ActivateProductUsecase;
use App\Usescases\Product\AddProductUsecase;
use App\Usescases\Product\DeactivateProductUsecase;
use App\Usescases\Product\RemoveProductUsecase;
use Illuminate\Console\Command;

class ProductsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:manage {id} {action} {stock?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $operations = [
        'ADD' => AddProductUsecase::class,
        'REMOVE' => RemoveProductUsecase::class,
        'ACTIVATE' => ActivateProductUsecase::class,
        'DEACTIVATE' => DeactivateProductUsecase::class,
    ];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $action = strtoupper($this->argument('action'));
        $usecase = $this->getUsecase($action);

        $data = (object) [
            'id' => $this->argument('id'),
            'stock' => $this->argument('stock'),
        ];

        $usecase->handle($data);
    }

    /**
     * @param string $action *
     * @return bool|\Illuminate\Contracts\Foundation\Application|mixed
     */
    private function getUsecase(string $action)
    {
        return array_key_exists($action, $this->operations) ? app($this->operations[$action]) : false;
    }
}
