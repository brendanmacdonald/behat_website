<?php

/**
 *@file
 * Class LoginContext tests the behaviour of the login page.
 */

namespace CWTest\Context;

use CWTest\Exception\CWContextException;

class RegisterContext extends PageContext  {

  //  Fields.
  const FIELD_NAME = 'name';
  const FIELD_EMAIL = 'email';
  const FIELD_PHONE = 'phone';
  const FIELD_SUBJECT = 'subject';
  const FIELD_MESSAGE = 'message';
  const FIELD_BY_EMAIL = 'by_email';
  const FIELD_BY_PHONE = 'by_phone';

  //  Buttons.
  const BUTTON_SUBMIT_MESSAGE = 'Submit Message';
  const BUTTON_CANCEL = 'Cancel';

  // Strings.
  const STRING_EMAIL = "Email";
  const STRING_PHONE = "Phone";

  /**
   * The path to the Login page.
   * @var string
   */
  private $path = '/register.html';

  /**
   * LoginContext constructor.
   */
  public function __construct() {
    parent::__construct();
  }

  /**
   * @Given I visit the Register page
   */
  public function visitRegisterPage() {
    $this->minkContext->visitPath($this->path);
  }

  /**
   * @Given I enter the username :username
   *
   * @param string $name
   */
  public function iEnterAUsername($name) {
    $this->minkContext->getSession()
      ->getPage()
      ->fillField(self::FIELD_NAME, $name);
  }

  /**
   * @Given I enter the email :email
   *
   * @param string $email
   */
  public function iEnterTheEmail($email) {
    $this->minkContext->getSession()
      ->getPage()
      ->fillField(self::FIELD_EMAIL, $email);
  }

  /**
   * @Given I enter the phone number :number
   *
   * @param string $number
   */
  public function iEnterThePhoneNumber($number) {
    $this->minkContext->getSession()
      ->getPage()
      ->fillField(self::FIELD_PHONE, $number);
  }

  /**
   * @Given I select the subject :subject
   *
   * @param string $subject
   */
  public function iSelectTheSubject($subject) {
    $this->minkContext->getSession()
      ->getPage()
      ->selectFieldOption(self::FIELD_SUBJECT, $subject);
  }

  /**
   * @Given I enter the message :message
   *
   * @param string $message
   */
  public function iEnterTheMessage($message) {
    $this->minkContext->getSession()
      ->getPage()
      ->fillField(self::FIELD_MESSAGE, $message);
  }

  /**
   * @Given I tick the :checkbox checkbox
   *
   * @param string $checkbox
   */
  public function iCheckTheCheckbox($checkbox) {
    if ($checkbox == self::STRING_EMAIL) {
      $this->minkContext->getSession()
        ->getPage()
        ->checkField(self::FIELD_BY_EMAIL);
    }
    if ($checkbox == self::STRING_PHONE) {
      $this->minkContext->getSession()
        ->getPage()
        ->checkField(self::FIELD_BY_PHONE);
    }
  }

  /**
   * @Given I press Submit Message
   */
  public function iPressSubmitMessage() {
    $this->minkContext->getSession()
      ->getPage()
      ->pressButton(self::BUTTON_SUBMIT_MESSAGE);
  }

  /**
   * @Given I am still on the Register page
   */
  public function iAmStillOnTheLoginPage() {
    $current_url = $this->minkContext->getSession()->getCurrentUrl();
    if (strpos($current_url, $this->path) === FALSE) {
      throw new CWContextException("No longer on the Loginpage, but on {$current_url}.");
    }
  }

  /**
   * @Given I verify the fields on the Register page
   */
  public function iVerifyTheFieldsOnTheRegisterPage() {
    $this->verifyField(self::FIELD_NAME);
    $this->verifyField(self::FIELD_EMAIL);
    $this->verifyField(self::FIELD_PHONE);
    $this->verifyField(self::FIELD_SUBJECT);
    $this->verifyField(self::FIELD_MESSAGE);
    $this->verifyField(self::FIELD_BY_EMAIL);
    $this->verifyField(self::FIELD_BY_PHONE);
    $this->verifyButton(self::BUTTON_SUBMIT_MESSAGE);
    $this->verifyButton(self::BUTTON_CANCEL);
  }
}