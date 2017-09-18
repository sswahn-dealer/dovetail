<?php
/**
 * Contact Route Page Redirect
 *
 */

$app->group('/contact/send', function () {

    $this->get('', 'ContactControllerPageRedirect:get')
         ->setName('contact.get.page.redirect');

});
