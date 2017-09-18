<?php
/**
 * Login Route Api
 *
 */

$app->group('/api/v1/login', function () {

    $this->get('', 'LoginControllerApi:get')
         ->setName('login.get.api');
         
    $this->get('/{id}', 'DashboardControllerApi:getOne')
         ->setName('dashboard.get.one.api');
         
    $this->post('', 'DashboardControllerApi:post')
         ->setName('dashboard.post.api');
         
    $this->put('/{id}', 'DashboardControllerApi:put')
         ->setName('dashboard.put.api');

    $this->delete('/{id}', 'DashboardControllerApi:delete')
         ->setName('dashboard.delete.api');
         
});
