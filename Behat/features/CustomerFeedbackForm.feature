Feature: Contact From
  In order to provide feedback
  As a customer
  I need to be able to open and complete a Contact form



  @contact @javascript
  Scenario: Customer completes all fields with valid data and submits the form
    Given I am on "/feedback.html"
    And I fill in "name" with "Bob"
    And I fill in "email" with "bob@gmail.com"
    And I fill in "phone" with "02076483910"
    And I fill in "city" with "London"
    And I select "Complaint" from "feedback"
    And I fill in "message" with "The food was cold, and I will not be back!"
    And I check "by_email"
    When I press "Send"
    Then I should see "Customer feedback received"

  @contact @javascript
  Scenario: Customer completes all fields with valid data and submits the form (cleaner version)
    Given I visit the Feedback page
    And I enter the username Mike
    And I enter the email "mike@gmail.com"
    And I enter the phone number 02037683371
    And I enter a city of London
    And I select the feedback Question
    And I enter the message "What time do you open on Sunday? Please let me know via email."
    And I tick the Email checkbox
    When I press "Send"
    Then I should see "Customer feedback received"

  @contact @javascript
  Scenario: Verify the fields on the Register page
    Given I visit the Feedback page
    Then I verify the fields on the Register page
