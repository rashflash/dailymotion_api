<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Dailymotion.php';

class MyDM_API {

    public function getVideoList($data_arr) {
        $api = new Dailymotion();

        try {
            $result = $api->get(
                    '/videos', $data_arr
            );

            return $result;
        } catch (DailymotionApiException $e) {
            return array('error' => true, 'msg' => $e->getMessage());
        }
    }

    public function getVideo($id, $fields) {
        $api = new Dailymotion();

        try {

            $result = $api->get(
                    '/video/' . $id, array(
                'fields' => $fields
                    )
            );

            return $result;
        } catch (DailymotionApiException $e) {
            return array('error' => true, 'msg' => $e->getMessage());
        }
    }

    public function getRelatedVideos($id, $data_arr) {
        $api = new Dailymotion();

        try {

            $result = $api->get(
                    '/video/' . $id . '/related', $data_arr
            );

            return $result;
        } catch (DailymotionApiException $e) {
            return array('error' => true, 'msg' => $e->getMessage());
        }
    }

}
