<?php
$routes = [
    'metadata',
    'getUser',
    'createSubaccount',
    'getAllSubAccounts',
    'getSubaccountsInformation',
    'getAllSiblingAccounts',
    'updateAccessKey',
    'getTestTrends',
    'getErrorAggregations',
    'buildsAndTestsStatistics',
    'getTestList',
    'startJsUnitTest',
    'getJsUnitTestStatus',
    'getAllJobs',
    'updateJob',
    'deleteJob',
    'stopJob',
    'getJobAssets',
    'getJobAssetFiles',
    'deleteJobAssets',
    'getSauceLabsStatus',
    'getSupportedPlatforms',
    'getAppiumEolDates',
    'uploadFile',
    'getStoredFiles',
    'getUserConcurrency',
    'getUserActivity',
    'getUserAccountUsage',
    'getAllTunnels',
    'getSingleTunnel',
    'getTunnelRunningJobs',
    'deleteTunnel'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

