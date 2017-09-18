<?php
/**
 * Dashboard Route Api
 *
 */

$app->group('/api/v1/dashboard', function () {

    $this->get('', 'ApiController:send')
         ->setName('Api.controller.send');
         
    $this->get('{id}', 'DashboardControllerApi:getOne')
         ->setName('dashboard.get.one.api');
       /*  
    $this->post('', 'DashboardControllerApi:post')
         ->setName('dashboard.post.api');
         
    $this->put('/{id}', 'DashboardControllerApi:put')
         ->setName('dashboard.put.api');

    $this->delete('/{id}', 'DashboardControllerApi:delete')
         ->setName('dashboard.delete.api');
    */
});
