<?php
namespace AIS;

class AppRoutes
{
    
    /**
     * Static factory method to get appropriate controller for this request.
     * This method does not return.
     *
     * @param string|null $req
     * @return void
     */
    public static function handleRequest($req)
    {
        switch ($req)
        {
            case 'subscription':
                
                break;

            default:
                SUSubscriptionController::loadFormPage();
        }
    }
}