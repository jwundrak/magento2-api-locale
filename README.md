# Magento2 locale

Magento Issue: [#19908](https://github.com/magento/magento2/issues/19908)

# Installation

1. clone to `**magentoPath**/app/code/Bugs/ApiLocale`
1. `bin/magento module:enable Bugs_ApiLocale`
1. `bin/magento setup:upgrade`
1. Do REST-Request `/rest/**storeCode**/V1/localeTest` (choose a store, where locale != default locale)