<?php

namespace WPMailSMTP\Providers;

/**
 * Interface MailerInterface.
 *
 * @since 1.0.0
 */
interface MailerInterface {

	/**
	 * Send the email.
	 *
	 * @since 1.0.0
	 */
	public function send();

	/**
	 * Whether the email is sent or not.
	 * We basically check the response code from a request to provider.
	 * Might not be 100% correct, not guarantees that email is delivered.
	 *
	 * @since 1.0.0
	 *
	 * @return bool
	 */
	public function is_email_sent();

	/**
	 * Whether the mailer supports the current PHP version or not.
	 *
	 * @since 1.0.0
	 *
	 * @return bool
	 */
	public function is_php_compatible();

	/**
	 * Get the email body.
	 *
	 * @since 1.0.0
	 *
	 * @return string|array
	 */
	public function get_body();

	/**
	 * Get the email headers.
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	public function get_headers();

	/**
	 * Get an array of all debug information relevant to the mailer.
	 *
	 * @return array
	 */
	public function get_debug_info();
}
