<?php

function sendResponse($status = false, $message = '', $data = '', $code = 404, $auth_data = null, $temp = null, $meta = null)
{
    ini_set('serialize_precision', -1);

    $result = [
        'status'  => $status,
        'code'    => $code,
        'message' => $message,
        'data'    => $data,
    ];
    if($auth_data)
    {
        $result['auth_data'] = $auth_data;
    }
    if($temp)
    {
        $result['temp'] = $temp;
    }
    if($meta)
    {
        $result['meta'] = $meta;
    }
    return response()->json($result)->setStatusCode($code);
}

function sendPhpResponse($status = false, $message = '', $data = '', $code = 404)
{
    return ['status' => $status, 'code' => $code, 'message' => $message, 'data' => $data];
}

function getOfferCategoryData()
{
    $locale = \Illuminate\Support\Facades\App::getLocale();
    if($locale == "ar")
    {
        $title = '% العروض';
    } else
    {
        $title = '% Offers';
    }

    $offer = new \stdClass();
    $offer->id = -1;
    $offer->title = $title;
    $offer->is_active = true;
    $offer->parent_id = null;
    $offer->created_at = null;
    $offer->updated_at = null;
    $offer->children = null;
    return $offer;

}


// function getAuthUserCartItemsCount()
// {
//     $user = auth('api')->user();
//     if($user)
//     {
//         $cart =  $user->orders()->cart()->first();
//         if($cart)
//         {
//             return $cart->items()->count();
//         }
//     }
//     return 0;
// }

