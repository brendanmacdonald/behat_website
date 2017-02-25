#GUIDE

|Link|What do you want to do?|
|-----|----------|
|[Initial Set-up](#initial-set-up)|If you are the first person on the project to install this framework, please complete the initial set-up steps|
|[Onbording to a project](#onboarding-to-a-project)|If the framework is already part of your project repo, please complete the onboarding steps|
|[Ongoing Update](#ongoing-update)|If you are only updating the framework, please complete the ongoing update steps|
|[Test Execution](#test-execution)|How to run tests?|
|[Test Results](#test-results)|Where to find the test results?|
|[Behat test writing process](#behat-test-writing-process)|How to write new tests?|

## Dependencies
### Composer
This command will download and install Composer as a system-wide command named composer, under /usr/local/bin.
```
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
```

### Java
Java v1.7 is required.

##INITIAL SET-UP

1. Select a location for the framework
--------------------------------------
Create a folder for the Behat framework, anywhere on your machine.


2. Clone this repository.
---------------------------------------------------
```
git clone git@github.com:brendanmacdonald/behat_website.git
cd behat_website
```

3. Create the Behat folder structure
------------------------------------
Run the bootstrap shell script:

```
cd bin && ./cwtest-bootstrap.sh
cd ..
```

5. Update your local configuration
------------------------------------
In your Test folder, edit `Behat/behat.local.yml`. Update:

* the `base_url` to your local site url
* the `drupal_root` value to the path to your local drupal installation.


6. Configure Chrome - Optional Step
-----------------------------------
This is only required if you want to run tests on Chrome. Skip to step 7 if you don't.

(By default, Firefox works out-of-the-box.)

1. Download chromedriver from `http://chromedriver.storage.googleapis.com/index.html?path=2.17/`
2. Save it to `/usr/local/bin`


7. Verify Setup Successful
--------------------------
Navigate to the Behat folder inside your Test folder:

```
cd Behat
```

Execute the following:

```
./run-behat.sh register firefox
```

Selenium will launch and run a test. You should see `1 scenarios (1 passed)` in the terminal window after 15-20 seconds.


##Test Execution

Navigate to the Behat folder inside your Test folder:

```
cd Behat
```

To execute all of the tests, select one of the following options based on the format `./run-behat.sh [tag] [profile]`:

```
./run-behat.sh regression firefox
```

or

```
./run-behat.sh regression chrome
```

##Test Results

The results of all tests will be stored in 
`/Results/Twig_***.html`
and 
`/Results/Behat2_***.html`
and 
`/Results/behat.xml`
