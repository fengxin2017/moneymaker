<?php


namespace Laras\Crontab;


/**
 * Class Kernel
 * @package Laras\Crontab
 */
abstract class Kernel
{
    /**
     * @var AbstractCrontab[]
     */
    protected $jobs = [];

    /**
     * @param string $crontab
     * @return AbstractCrontab
     */
    protected function job(string $crontab)
    {
        /**@var AbstractCrontab $job */
        $job = new $crontab;
        $this->jobs[] = $job;
        return $job;
    }

    /**
     * @return AbstractCrontab[]
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    abstract public function schedule();
}