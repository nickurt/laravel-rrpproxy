## Laravel RrpProxy
[![Build Status](https://github.com/nickurt/laravel-rrpproxy/workflows/tests/badge.svg)](https://github.com/nickurt/laravel-rrpproxy/actions)
[![Total Downloads](https://poser.pugx.org/nickurt/laravel-rrpproxy/d/total.svg)](https://packagist.org/packages/nickurt/laravel-plesk)
[![Latest Stable Version](https://poser.pugx.org/nickurt/laravel-rrpproxy/v/stable.svg)](https://packagist.org/packages/nickurt/laravel-plesk)
[![MIT Licensed](https://poser.pugx.org/nickurt/laravel-rrpproxy/license.svg)](LICENSE.md)

### Table of contents
- [Installation](#installation)
- [Usage](#usage)
- [Tests](#tests)
### Installation
Install this package with composer:
```
composer require nickurt/laravel-rrpproxy
```
Copy the config files for the RrpProxy-plugin
```
php artisan vendor:publish --provider="nickurt\RrpProxy\ServiceProvider" --tag="config"
```
Add the RrpProxy credentials to your .env file
```
RRPPROXY_DEFAULT_USERNAME=
RRPPROXY_DEFAULT_PASSWORD=
```
### Usage
#### Dependency injection [e.g. by using multiple connections]
```php
// Route
Route::get('/rrpproxy/{rrpproxy}/customers', ['as' => 'rrpproxy/customers', 'uses' => 'CustomersController@getIndex']);

Route::bind('rrpproxy', function ($value, $route) {
    app('RrpProxy')->connection($value);

    return app('RrpProxy');
});

// CustomersController
public function getIndex(RrpProxy $rrpProxy)
{
    $customers = $rrpProxy->contacts()->queryContactList([
        'limit' => 20,
        'wide' => 1,
    ]);

    //
}
```
#### Account
```php
\RrpProxy::account()->activateAppendix(array $params)
\RrpProxy::account()->modifyRegistrar(array $params)
\RrpProxy::account()->modifyRegistrarCurrency(array $params)
\RrpProxy::account()->pushObject(array $params)
\RrpProxy::account()->queryAppendixList(array $params)
\RrpProxy::account()->queryRegistrarStatisticList(array $params)
\RrpProxy::account()->statusAccount(array $params)
\RrpProxy::account()->statusRegistrar(array $params)
```
#### Aftermarket
```php
\RrpProxy::aftermarket()->addAftermarketAccount(array $params)
\RrpProxy::aftermarket()->addAftermarketDomain(array $params)
\RrpProxy::aftermarket()->aftermarketBid(array $params)
\RrpProxy::aftermarket()->buyDomain(array $params)
\RrpProxy::aftermarket()->deleteAftermarketAccount(array $params)
\RrpProxy::aftermarket()->deleteAftermarketDomain(array $params)
\RrpProxy::aftermarket()->modifyAftermarketAccount(array $params)
\RrpProxy::aftermarket()->modifyAftermarketDomain(array $params)
\RrpProxy::aftermarket()->queryAftermarketAccountList(array $params)
\RrpProxy::aftermarket()->queryAftermarketBid(array $params)
\RrpProxy::aftermarket()->queryAftermarketBidList(array $params)
\RrpProxy::aftermarket()->queryAftermarketDomainList(array $params)
\RrpProxy::aftermarket()->queryAftermarketList(array $params)
\RrpProxy::aftermarket()->reserveDomain(array $params)
\RrpProxy::aftermarket()->statusAftermarketAccount(array $params)
\RrpProxy::aftermarket()->statusAftermarketDomain(array $params)
```
#### Application
```php
\RrpProxy::application()->addDomainApplication(array $params)
\RrpProxy::application()->deleteDomainApplication(array $params)
\RrpProxy::application()->modifyDomainApplication(array $params)
\RrpProxy::application()->queryApplicationList(array $params)
\RrpProxy::application()->queryDomainApplicationList(array $params)
\RrpProxy::application()->statusDomainApplication(array $params)
```
#### Certificates
```php
\RrpProxy::certificates()->addCertificate(array $params)
\RrpProxy::certificates()->checkCertificate(array $params)
\RrpProxy::certificates()->deleteCertificate(array $params)
\RrpProxy::certificates()->getCertificateInfo(array $params)
\RrpProxy::certificates()->modifyCertificate(array $params)
\RrpProxy::certificates()->queryCertificateList(array $params)
\RrpProxy::certificates()->reissueCertificate(array $params)
\RrpProxy::certificates()->renewCertificate(array $params)
\RrpProxy::certificates()->statusCertificate(array $params)
```
#### Contacts
```php
\RrpProxy::contacts()->addContact(array $params)
\RrpProxy::contacts()->checkContact(array $params)
\RrpProxy::contacts()->checkContacts(array $params)
\RrpProxy::contacts()->cloneContact(array $params)
\RrpProxy::contacts()->deleteContact(array $params)
\RrpProxy::contacts()->modifyContact(array $params)
\RrpProxy::contacts()->queryContactList(array $params)
\RrpProxy::contacts()->restoreContact(array $params)
\RrpProxy::contacts()->statusContact(array $params)
\RrpProxy::contacts()->statusOwnerChange(array $params)
\RrpProxy::contacts()->statusUnsyncRegistryContact(array $params)
\RrpProxy::contacts()->transferContact(array $params)
```
#### Domains
```php
\RrpProxy::domains()->activateClaimsNotice(array $params)
\RrpProxy::domains()->addDomain(array $params)
\RrpProxy::domains()->checkClaims(array $params)
\RrpProxy::domains()->checkDomain(array $params)
\RrpProxy::domains()->checkDomains(array $params)
\RrpProxy::domains()->deleteDomain(array $params)
\RrpProxy::domains()->domainPrice(array $params)
\RrpProxy::domains()->getZone(array $params)
\RrpProxy::domains()->getZoneInfo(array $params)
\RrpProxy::domains()->modifyDomain(array $params)
\RrpProxy::domains()->parkDomain(array $params)
\RrpProxy::domains()->pushDomain(array $params)
\RrpProxy::domains()->queryActiveServiceList(array $params)
\RrpProxy::domains()->queryClaimsNoticeList(array $params)
\RrpProxy::domains()->queryDomainExpireList(array $params)
\RrpProxy::domains()->queryDomainHistoryList(array $params)
\RrpProxy::domains()->queryDomainList(array $params)
\RrpProxy::domains()->queryDomainListByContact(array $params)
\RrpProxy::domains()->queryDomainRenewList(array $params)
\RrpProxy::domains()->queryIDNTagList(array $params)
\RrpProxy::domains()->queryRegisteredPremiumDomainList(array $params)
\RrpProxy::domains()->queryTrusteeDomainList(array $params)
\RrpProxy::domains()->renewDomain(array $params)
\RrpProxy::domains()->requestDomainPin(array $params)
\RrpProxy::domains()->resendNotification(array $params)
\RrpProxy::domains()->restoreDomain(array $params)
\RrpProxy::domains()->setDomainPinLock(array $params)
\RrpProxy::domains()->setDomainRenewalMode(array $params)
\RrpProxy::domains()->setDomainTransferMode(array $params)
\RrpProxy::domains()->statusClaimsNotice(array $params)
\RrpProxy::domains()->statusDomain(array $params)
\RrpProxy::domains()->statusDomainHistory(array $params)
\RrpProxy::domains()->tradeDomain(array $params)
```
#### Dynamic DNS
```php
\RrpProxy::dynamicdns()->addDynamicDns(array $params)
\RrpProxy::dynamicdns()->deleteDynamicDns(array $params)
\RrpProxy::dynamicdns()->modifyDynamicDns(array $params)
\RrpProxy::dynamicdns()->queryDynamicDNSList(array $params)
\RrpProxy::dynamicdns()->statusDynamicDns(array $params)
\RrpProxy::dynamicdns()->updateDynamicDns(array $params)
```
#### Events
```php
\RrpProxy::events()->deleteEvent(array $params)
\RrpProxy::events()->queryEventList(array $params)
\RrpProxy::events()->statusEvent(array $params)
```
#### Finances
```php
\RrpProxy::finances()->chargeCreditcard(array $params)
\RrpProxy::finances()->convertCurrency(array $params)
\RrpProxy::finances()->queryAccountingList(array $params)
\RrpProxy::finances()->queryAvailablePromotionList(array $params)
\RrpProxy::finances()->queryExchangeRates(array $params)
\RrpProxy::finances()->queryPremiumDomainList(array $params)
\RrpProxy::finances()->queryPriceHistoryList(array $params)
\RrpProxy::finances()->queryServiceList(array $params)
\RrpProxy::finances()->queryUpcomingAccountingList(array $params)
\RrpProxy::finances()->queryZoneList(array $params)
\RrpProxy::finances()->servicePrice(array $params)
```
#### Hosting
```php
\RrpProxy::hosting()->addWebhost(array $params)
\RrpProxy::hosting()->addWebspace(array $params)
\RrpProxy::hosting()->deleteWebhost(array $params)
\RrpProxy::hosting()->deleteWebspace(array $params)
\RrpProxy::hosting()->modifyPhpIni(array $params)
\RrpProxy::hosting()->modifyWebhostAutocert(array $params)
\RrpProxy::hosting()->modifyWebhostSsl(array $params)
\RrpProxy::hosting()->modifyWebspace(array $params)
\RrpProxy::hosting()->modifyWhost(array $params)
\RrpProxy::hosting()->queryPhpIni(array $params)
\RrpProxy::hosting()->queryWebhostList(array $params)
\RrpProxy::hosting()->queryWebspaceList(array $params)
\RrpProxy::hosting()->renewWebspace(array $params)
\RrpProxy::hosting()->statusWebhost(array $params)
\RrpProxy::hosting()->statusWebspace(array $params)
```
#### Key DNS
```php
\RrpProxy::keydns()->addDnsZone(array $params)
\RrpProxy::keydns()->addMailFwd(array $params)
\RrpProxy::keydns()->addWebFwd(array $params)
\RrpProxy::keydns()->checkDnsZone(array $params)
\RrpProxy::keydns()->deleteDnsZone(array $params)
\RrpProxy::keydns()->deleteMailFwd(array $params)
\RrpProxy::keydns()->deleteWebFwd(array $params)
\RrpProxy::keydns()->exportDnsZone(array $params)
\RrpProxy::keydns()->getDnsZone(array $params)
\RrpProxy::keydns()->importDnsZone(array $params)
\RrpProxy::keydns()->modifyDnsZone(array $params)
\RrpProxy::keydns()->queryDnsZoneList(array $params)
\RrpProxy::keydns()->queryDnsZoneRRList(array $params)
\RrpProxy::keydns()->queryDnsZoneSubdomainList(array $params)
\RrpProxy::keydns()->queryMailFwdList(array $params)
\RrpProxy::keydns()->queryWebFwdList(array $params)
\RrpProxy::keydns()->statusDnsZone(array $params)
```
#### NameServers
```php
\RrpProxy::nameservers()->addNameserver(array $params)
\RrpProxy::nameservers()->checkNameserver(array $params)
\RrpProxy::nameservers()->deleteNameserver(array $params)
\RrpProxy::nameservers()->modifyNameserver(array $params)
\RrpProxy::nameservers()->queryNameserverList(array $params)
\RrpProxy::nameservers()->statusNameserver(array $params)
```
#### Queries
```php
\RrpProxy::queries()->generateList(array $params)
\RrpProxy::queries()->queryCommandSyntax(array $params)
\RrpProxy::queries()->queryDomainPinLockList(array $params)
\RrpProxy::queries()->queryJobList(array $params)
\RrpProxy::queries()->queryMonitoringList(array $params)
\RrpProxy::queries()->queryObjectLogList(array $params)
\RrpProxy::queries()->queryOwnerChangeList(array $params)
\RrpProxy::queries()->queryPriceScaleList(array $params)
\RrpProxy::queries()->queryPromotionList(array $params)
\RrpProxy::queries()->queryPromotionRegistrarList(array $params)
\RrpProxy::queries()->queryRegistrarCommentList(array $params)
\RrpProxy::queries()->queryRegistrarList(array $params)
\RrpProxy::queries()->queryTrusteeLogList(array $params)
\RrpProxy::queries()->queryZonePriceList(array $params)
\RrpProxy::queries()->statusObjectLog(array $params)
```
#### Servers
```php
\RrpProxy::servers()->addServer(array $params)
\RrpProxy::servers()->deleteServer(array $params)
\RrpProxy::servers()->modifyServer(array $params)
\RrpProxy::servers()->queryServerList(array $params)
\RrpProxy::servers()->renewServer(array $params)
\RrpProxy::servers()->statusServer(array $params)
```
#### SMS
```php
\RrpProxy::sms()->chargeMobileAccount(array $params)
\RrpProxy::sms()->createMobileAccount(array $params)
\RrpProxy::sms()->queryMobileAccountList(array $params)
\RrpProxy::sms()->querySMSList(array $params)
\RrpProxy::sms()->sendSMS(array $params)
\RrpProxy::sms()->statusMobileAccount(array $params)
```
#### Trademarks
```php
\RrpProxy::trademarks()->addTrademark(array $params)
\RrpProxy::trademarks()->deleteTrademark(array $params)
\RrpProxy::trademarks()->getTrademarkLabels(array $params)
\RrpProxy::trademarks()->modifyTrademark(array $params)
\RrpProxy::trademarks()->queryTrademarkList(array $params)
\RrpProxy::trademarks()->renewTrademark(array $params)
\RrpProxy::trademarks()->setTrademarkRenewalmode(array $params)
\RrpProxy::trademarks()->statusTrademark(array $params)
\RrpProxy::trademarks()->transferTrademark(array $params)
```
#### Transfers
```php
\RrpProxy::transfers()->activateTransfer(array $params)
\RrpProxy::transfers()->checkDomainTransfer(array $params)
\RrpProxy::transfers()->queryForeignTransferList(array $params)
\RrpProxy::transfers()->queryTransferList(array $params)
\RrpProxy::transfers()->setAuthCode(array $params)
\RrpProxy::transfers()->statusDomainTransfer(array $params)
\RrpProxy::transfers()->transferDomain(array $params)
```
### Tests
```sh
phpunit
```
- - - 
