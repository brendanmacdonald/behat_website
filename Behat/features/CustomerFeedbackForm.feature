Feature: Contact From
  In order to provide feedback
  As a customer
  I need to be able to open and complete a Contact form


  @contact @javascript
  Scenario: Customer completes all fields with valid data and submits the form
    Given I am on "/register.html"
    And I fill in "name" with "Bob"
    And I fill in "email" with "bob@gmail.com"
    And I fill in "phone" with "02076483910"
    And I select "Feedback" from "subject"
    And I fill in "message" with "This is my sample message."
    And I check "by_email"
    When I press "Submit Message"
    Then I should see "Customer feedback received"

  @contact @javascript
  Scenario: Customer completes all fields with valid data and submits the form (cleaner version)
    Given I visit the Register page
    And I enter the username Mike
    And I enter the email "mike@gmail.com"
    And I enter the phone number 02037683371
    And I select the subject Question
    And I enter the message "This is another sample message."
    And I tick the Email checkbox
    And I tick the Phone checkbox
    When I press "Submit Message"
    Then I should see "Customer feedback received"

  @contact @javascript
  Scenario: Verify the fields on the Register page
    Given I visit the Register page
    Then I verify the fields on the Register page