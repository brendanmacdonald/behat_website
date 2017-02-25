Feature: Login page
  In order to test the Login page
  As a variety of users
  I need to verify the page structure and functionality


#########################################################################################
###  SUCCESSFUL LOGIN
#########################################################################################

  @register @javascript
  Scenario: Verify a successful login
    Given I am on "/register.html"
    And I fill in "name" with "Bob"
    And I fill in "email" with "bob@gmail.com"
    And I fill in "phone" with "02076483910"
    And I select "Feedback" from "subject"
    And I fill in "message" with "This is my sample message."
    And I check "by_email"
    When I press "Submit Message"
    Then I should see "Registration complete"

  @register @javascript
  Scenario: Verify a successful login
    Given I visit the Register page
    And I enter the username Mike
    And I enter the email "mike@gmail.com"
    And I enter the phone number 02037683371
    And I select the subject Question
    And I enter the message "This is another sample message."
    And I tick the Email checkbox
    And I tick the Phone checkbox
    When I press "Submit Message"
    Then I should see "Registration complete"

  @register @javascript
  Scenario: Verify the fields on the Register page
    Given I visit the Register page
    Then I verify the fields on the Register page