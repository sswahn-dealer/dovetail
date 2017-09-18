<?php
/**
 * Contact Route Page
 *
 */

$app->group('/contact', function () {

    $this->get('[{response}]', 'PageController:get')
         ->setName('contact.get.page');

});
