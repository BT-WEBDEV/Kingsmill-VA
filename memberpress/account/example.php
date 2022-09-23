<?php

function api() {
    $mepr_member_number = get_user_meta($mepr_current_user->ID, "mepr_member_number", true);

    if($mepr_member_number) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.goibsvision.com/WebResAPI/Api/User/GetNewUserTokenFromLogin?authToken=&userName=KMToken&password=kmt0k3n&clubFriendlyName=KingsmillResortGolfClub',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        
        $temp_user_token_response = json_decode($response, true);

        if($temp_user_token_response['IsSuccessStatusCode']) {

            $temp_user_token = $temp_user_token_response['Value'];

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://www.goibsvision.com/WebResAPI/Api/Club/GetWebMembers?authToken=&userToken='.$temp_user_token.'&clubFriendlyName=KingsmillResortGolfClub',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET'
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            $members_list = json_decode($response, true);

            foreach ($members_list['Members'] as $key => $member) {
                if($member['MemberNumber'] == $mepr_member_number) {
                    $mepr_member_id = $member['MemberID'];
                    break;
                } else {
                    $error_status = "Please contact admin to correct your Member Number!";
                }
            }

            if($mepr_member_id) {
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://www.goibsvision.com/WebResAPI/Api/User/GetNewUserTokenByConsoleID?authToken=&userToken='.$temp_user_token.'&clubFriendlyName=KingsmillResortGolfClub&memberID='.$mepr_member_id,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET'
                ));

                $response = curl_exec($curl);

                curl_close($curl);
                $mepr_user_token_response = json_decode($response, true);

                $ezlink_member_login_link = "https://www.goibsvision.com/WebRes/club/KingsmillResortGolfClub/LoginWithToken/".$mepr_user_token_response['Value'];

            } else {
                $error_status = "Member Number not found!";
            }
        }
    } else {
        $error_status = "Please contact admin to add your Member Number!";
    }
}