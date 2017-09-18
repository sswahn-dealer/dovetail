<?php
/**
 * Login Route Page
 *
 */

$app->group('/login', function () {

    $this->get('', 'PageController:get')
         ->setName('login.get.page');

});
