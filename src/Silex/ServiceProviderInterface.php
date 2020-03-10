<?php

namespace Silex;

interface ServiceProviderInterface
{
    public function register(Application $app);
    public function boot(Application $app);
}
