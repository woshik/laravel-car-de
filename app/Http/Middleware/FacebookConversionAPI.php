<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\EventRequest;
use FacebookAds\Object\ServerSide\UserData;

class FacebookConversionAPI
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (env('APP_ENV') == "production") {
            $access_token = env('FACEBOOK_CONVERSION_API_ACCESS_TOKEN');
            $pixel_id = env('FACEBOOK_PIXEL_ID');
    
            Api::init(null, null, $access_token);
            $api = Api::instance();
            $api->setLogger(new CurlLogger());
    
            $events = array();
    
            $user_data = (new UserData())
                ->setClientIpAddress($request->ip())
                ->setClientUserAgent($request->header('user-agent'));
    
            $event = (new Event())
                ->setEventName("ViewContent")
                ->setEventTime(time())
                ->setEventSourceUrl($request->fullUrl())
                ->setUserData($user_data)
                ->setActionSource("website");
    
            array_push($events, $event);
    
            $conversion_api_request = (new EventRequest($pixel_id))
                ->setEvents($events);
    
            $conversion_api_request->execute();
        }
        
        return $next($request);
    }
}