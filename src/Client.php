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
use Ynab\Api\UserApi;

class Client
{
    protected $client;

    protected $configuration;

    /**
     * @param String $token
     */
    public function __construct($token)
    {
        $this->client = new GuzzleClient();
        $this->configuration = Configuration::getDefaultConfiguration()
            ->setApiKey('Authorization', $token)
            ->setApiKeyPrefix('Authorization', 'Bearer');
    }

    /**
     * @param $endpoint
     * @return AccountsApi|BudgetsApi|CategoriesApi|MonthsApi|PayeeLocationsApi|PayeesApi|ScheduledTransactionsApi|TransactionsApi|UserApi
     */
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

            case 'user':
                $api = new UserApi($this->client, $this->configuration);
                break;

            default:
                throw new InvalidArgumentException(sprintf('Undefined api endpoint called: "%s"', $endpoint));
        }

        return $api;
    }
}
