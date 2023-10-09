<?php

namespace Manticoresearch;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Class Transport.
 */
class Transport
{
    /**
     * @var Connection
     */
    protected $connection;

    /**
     * @var LoggerInterface|NullLogger
     */
    protected $logger;

    /**
     * Transport constructor.
     */
    public function __construct(Connection $connection = null, LoggerInterface $logger = null)
    {
        if ($connection) {
            $this->connection = $connection;
        }
        $this->logger = $logger ?? new NullLogger();
    }

    /**
     * @return null|Connection
     */
    public function getConnection()
    {
        return $this->connection;
    }

    public function setConnection(Connection $connection): Transport
    {
        $this->connection = $connection;

        return $this;
    }

    /**
     * @param string $transport
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public static function create($transport, Connection $connection, LoggerInterface $logger)
    {
        if (is_string($transport)) {
            $className = "Manticoresearch\\Transport\\{$transport}";
            if (class_exists($className)) {
                $transport = new $className($connection, $logger);
            }
        }
        if ($transport instanceof self) {
            $transport->setConnection($connection);
        } else {
            throw new \Exception('Bad transport');
        }

        return $transport;
    }

    /**
     * @param array $query
     */
    protected function setupURI(string $uri, $query = []): string
    {
        if (!empty($query)) {
            foreach ($query as $k => $v) {
                if (is_bool($v)) {
                    $query[$k] = $v ? 'true' : 'false';
                }
            }
            $uri .= '?' . http_build_query($query);
        }

        return $uri;
    }
}
