<?php

namespace Ynab;

use GuzzleHttp\Client as GuzzleClient;
use Psr\Log\InvalidArgumentException;
use Ynab\Api\BudgetsApi;
use Ynab\Api\AccountsApi;
use Ynab\Api\CategoriesApi;
use Ynab\Api\MonthsApi;
use Ynab\Api\PayeeLocationsApi;
use Ynab\Api\PayeesApi;
use Ynab\Api\ScheduledTransactionsApi;
use Ynab\Api\TransactionsApi;

class Client
{
    protected $client;

    protected $configuration;

    public function __construct(Configuration $configuration)
    {
        $this->client = new GuzzleClient();
        $this->configuration = $configuration;
    }

    public function api($endpoint)
    {
        switch ($endpoint) {
            case 'budgets':
                $api = new BudgetsApi($this->client, $this->configuration);
                break;

            case 'accounts':
                $api = new AccountsApi($this->client, $this->configuration);
                break;

            case 'categories':
                $api = new CategoriesApi($this->client, $this->configuration);
                break;

            case 'months':
                $api = new MonthsApi($this->client, $this->configuration);
                break;

            case 'payee_location':
                $api = new PayeeLocationsApi($this->client, $this->configuration);
                break;

            case 'payees':
                $api = new PayeesApi($this->client, $this->configuration);
                break;

            case 'scheduled_transactions':
                $api = new ScheduledTransactionsApi($this->client, $this->configuration);
                break;

            case 'transactions':
                $api = new TransactionsApi($this->client, $this->configuration);
                break;

            default:
                throw new InvalidArgumentException(sprintf('Undefined api endpoint called: "%s"', $endpoint));
        }

        return $api;
    }
}