<?php

namespace nickurt\RrpProxy;

/**
 * @method static \nickurt\RrpProxy\Api\Account account()
 * @method static \nickurt\RrpProxy\Api\Aftermarket aftermarket()
 * @method static \nickurt\RrpProxy\Api\Application application()
 * @method static \nickurt\RrpProxy\Api\Certificates certificates()
 * @method static \nickurt\RrpProxy\Api\Contacts contacts()
 * @method static \nickurt\RrpProxy\Api\Domains domains()
 * @method static \nickurt\RrpProxy\Api\DynamicDns dynamicdns()
 * @method static \nickurt\RrpProxy\Api\Events events()
 * @method static \nickurt\RrpProxy\Api\Finances finances()
 * @method static \nickurt\RrpProxy\Api\Hosting hosting()
 * @method static \nickurt\RrpProxy\Api\KeyDns keydns()
 * @method static \nickurt\RrpProxy\Api\NameServers nameservers()
 * @method static \nickurt\RrpProxy\Api\Queries queries()
 * @method static \nickurt\RrpProxy\Api\Servers servers()
 * @method static \nickurt\RrpProxy\Api\Sms sms()
 * @method static \nickurt\RrpProxy\Api\Trademarks trademarks()
 * @method static \nickurt\RrpProxy\Api\Transfers transfers()
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'RrpProxy';
    }
}
