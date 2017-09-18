<?php
/**
 * Contact Route Api
 *
 */

$app->group('/api/v1/contact', function () {

    $this->post('', 'UtilityController:send')
         ->setName('contact.post.api');
    
});
