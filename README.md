[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Sqreen/functions?utm_source=RapidAPIGitHub_SqreenFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# SauceLabs Package
Accelerate your software development and bring your great ideas to market faster with the world's largest automated testing cloud for web and mobile apps.
* Domain: [saucelabs.com](https://saucelabs.com)
* Credentials: username, accessKey

## How to get credentials: 
1. Sign in [saucelabs.com](https://saucelabs.com).
2. Navigate to User Profile -> User Settings section of your Sauce Labs dashboard.
3. Copy Your Username and Access Key.

## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## SauceLabs.getUser
Access basic account information

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.

## SauceLabs.createSubaccount
Create a sub account.

| Field             | Type       | Description
|-------------------|------------|----------
| username          | credentials| Username string
| accessKey         | String     | Your saucelabs access key.
| subAccountUsername| String     | Username of sub-account user
| password          | String     | Password of sub-account user
| name              | String     | Full name of sub-account user
| email             | String     | Email of sub-account user
| concurrency       | Number     | Concurrency limit for the sub-account user

## SauceLabs.getAllSubAccounts
Get a list of sub accounts associated with a parent account.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| from     | Number     | Pagination param
| limit    | Number     | Number of results to return

## SauceLabs.getSubaccountsInformation
Get information about a sub accounts.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.

## SauceLabs.getAllSiblingAccounts
Get a list of sibling accounts associated with provided account.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| page     | Number     | Pagination param
| perPage  | Number     | Number of results to return

## SauceLabs.updateAccessKey
Change access key of your account.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.

## SauceLabs.getTestTrends
Return various test metrics divided into buckets. A bucket contains data grouped by an interval specified in query params.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| start    | DatePicker | Specifies a start point in time from which data is queried.
| end      | DatePicker | Specifies an end point in time to which data is queried.
| interval | String     | Specifies a length of a bucket in the response. Allowed units: d - day, h - hour, m - minute, s - second. Minimal interval is `5s`, i.e. 5 seconds.
| os       | String     | Specifies values for the OS filter.
| browser  | String     | Specifies values for the Browser filter.

## SauceLabs.getErrorAggregations
Aggregate all errors that occurred in a given time range.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| start    | DatePicker | Specifies a start point in time from which data is queried.
| end      | DatePicker | Specifies an end point in time to which data is queried.
| os       | String     | Specifies values for the OS filter.
| browser  | String     | Specifies values for the Browser filter.

## SauceLabs.buildsAndTestsStatistics
Aggregate all tests into builds and tests without build. Maximum number of returned builds is 25.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| start    | DatePicker | Specifies a start point in time from which data is queried.
| end      | DatePicker | Specifies an end point in time to which data is queried.
| os       | String     | Specifies values for the OS filter.
| browser  | String     | Specifies values for the Browser filter.

## SauceLabs.getTestList
This endpoint is useful if one would like to retrieve more results from the above aggregations.

| Field       | Type       | Description
|-------------|------------|----------
| username    | credentials| Username string
| accessKey   | String     | Your saucelabs access key.
| start       | DatePicker | Specifies a start point in time from which data is queried.
| end         | DatePicker | Specifies an end point in time to which data is queried.
| error       | String     | Value of a test error field.
| build       | String     | Value of a test build field.
| from        | Number     | Item position from which data should be returned.
| size        | Number     | Number of items to return.
| missingBuild| String     | Returns only tests without a build.

## SauceLabs.startJsUnitTest
Start your JavaScript unit tests on as many browsers as you like with a single request.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| platforms| List       | An array of desktop platforms.
| url      | String     | Should point to the page that hosts your tests.
| framework| Select     | Can be 'qunit', 'jasmine', 'YUI Test', 'mocha', or 'custom'.

## SauceLabs.getJsUnitTestStatus
Get the status of your JS unit tests.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| jsTests  | List       | An array of job ids which you would like the status of

## SauceLabs.getAllJobs
List recent jobs belonging to a specific user.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| limit    | Number     | Specifies the number of jobs to return.
| skip     | Number      | Skips the specified number of jobs
| full     | Select     | Get full job information, rather than just IDs.
| from     | DatePicker | Get jobs since the specified time
| to       | DatePicker | Get jobs until the specified time

## SauceLabs.updateJob
Edit an existing job.

| Field     | Type       | Description
|-----------|------------|----------
| username  | credentials| Username string
| accessKey | String     | Your saucelabs access key.
| jobId     | String     | Job id
| name      | String     | If specified change the job name
| tags      | List       | If present set tags for job
| public    | String     | Set job visibility
| passed    | Select     | Set whether the job passed or not on the user end
| build     | String     | The build name for this test.
| customData| JSON       | Extra key-value pairs with any info that a user would like to add to the job.

## SauceLabs.deleteJob
Removes the job from the system with all the linked assets.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| jobId    | String     | Job id

## SauceLabs.stopJob
Terminates a running job.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| jobId    | String     | Job id

## SauceLabs.getJobAssets
Get details about the static assets collected for a specific job.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| jobId    | String     | Job id

## SauceLabs.getJobAssetFiles
Download job assets. After a job completes, all assets created during the job are available via this API. These include the screencast recording, logs, and screenshots taken on crucial steps.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| jobId    | String     | Job id
| fileName | String     | File name

## SauceLabs.deleteJobAssets
Delete all the assets captured during a test run. This includes the screencast recording, logs, and all screenshots..

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| jobId    | String     | Job id

## SauceLabs.getSauceLabsStatus
Get the current status of Sauce Labs services.

No arguments.

## SauceLabs.getSupportedPlatforms
Get a list of objects describing all the OS and browser platforms currently supported on Sauce Labs. Choose the automation API you need, bearing in mind that WebDriver and Selenium RC are each compatible with a different set of platforms.

| Field        | Type  | Description
|--------------|-------|----------
| automationApi| Select| Must be: all, appium, webdriver

## SauceLabs.getAppiumEolDates
Get a list of Appium end-of-life dates. Dates are displayed in Unix time.

No arguments.

## SauceLabs.uploadFile
Uploads a file to the temporary sauce storage. The storage will only retain the files for seven days.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| filename | String     | Your file name
| fileData | File       | Link to file

## SauceLabs.getStoredFiles
Check which files are in your temporary storage

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.

## SauceLabs.getUserConcurrency
Get account concurrency limits together with current used concurrency and manual testing minutes.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.

## SauceLabs.getUserActivity
Get currently running job counts broken down by account and job status. Results are grouped by the job status for the requesting user and for its subaccounts.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.

## SauceLabs.getUserAccountUsage
Access historical account usage data. Returns the total number of jobs and VM time used, in seconds grouped by day.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| start    | DatePicker | Usage for dates not smaller then specified.
| end      | DatePicker | Usage for dates not greater then specified.

## SauceLabs.getAllTunnels
Retrieves all running tunnels for a specific user.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.

## SauceLabs.getSingleTunnel
Get information for a tunnel given its ID.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| tunnelId | String     | Tunnel id

## SauceLabs.getTunnelRunningJobs
Get the number of jobs that are running through the tunnel over the past 60 seconds.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| tunnelId | String     | Tunnel id

## SauceLabs.deleteTunnel
Shuts down a tunnel given its ID.

| Field    | Type       | Description
|----------|------------|----------
| username | credentials| Username string
| accessKey| String     | Your saucelabs access key.
| tunnelId | String     | Tunnel id

