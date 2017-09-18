<?php
/**
 * Dashboard Route Page
 *
 */

$app->group('/dashboard', function () {

    $this->get('', 'PageController:get')
         ->setName('dashboard.get.page');

});
