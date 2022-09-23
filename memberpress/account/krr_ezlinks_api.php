<?php
session_start();
class krr_ezlinks_api {

    public $error_status;
    public $ezlink_member_login_link;
    public $temp_user_token;

    function __construct() {
        $_SESSION["error_status"] = "";
        $this->ezlink_member_login_link = "";
        $this->$temp_user_token = "";
    }

    function getTempUserToken() {
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

        return $temp_user_token_response;
        
    }

    function getListOfMembers($mepr_member_number) {
        $temp_user_token_response = $this->getTempUserToken();

        if($temp_user_token_response['IsSuccessStatusCode']) {
            $this->$temp_user_token = $temp_user_token_response['Value'];

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://www.goibsvision.com/WebResAPI/Api/Club/GetWebMembers?authToken=&userToken='.$this->$temp_user_token.'&clubFriendlyName=KingsmillResortGolfClub',
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
                    $_SESSION["error_status"] = "";
                    break;
                } else {
                    if(!$_SESSION["error_status"]) {
                        $_SESSION["error_status"] = "Member Number not found!";
                    }
                }
            }

            return $mepr_member_id;

        } else {
            if(!$_SESSION["error_status"]) {
                $_SESSION["error_status"] = "There is something wrong. Please contact to Admin!";
            }
        }
    }

    function getUserToken($mepr_member_number) {
        $mepr_member_id = $this->getListOfMembers($mepr_member_number);
        
        if($mepr_member_id) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://www.goibsvision.com/WebResAPI/Api/User/GetNewUserTokenByConsoleID?authToken=&userToken='.$this->$temp_user_token.'&clubFriendlyName=KingsmillResortGolfClub&memberID='.$mepr_member_id,
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

            return $ezlink_member_login_link;

            $_SESSION["error_status"] = "";

        } else {
            if(!$_SESSION["error_status"]) {
                $_SESSION["error_status"] = "Member Number not found!";
            }
        }
    }
}