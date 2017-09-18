<?php
/**
 * Homepage Route Page
 *
 */

$app->group('/', function () {

    $this->get('', 'PageController:get')
         ->setName('homepage.get.page');

});
