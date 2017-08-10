<?php
return array (
        
        // STANDARD ERROR CODES
        // =======================================================

        '400' => array (
                'title' => 'Bad Request',
                'message' => '無法處理您的請求'
        ),
        '401' => array (
                'title' => 'Unauthorized',
                'message' => '您要求的頁面需要身份驗證'
        ),

        '403' => array (
                'title' => 'Access Denied',
                'message' => '您的權限不足，無法存取此頁面'
        ),
        
        // http 404 not found
        '404' => array (
                'title' => 'Resource not found',
                'message' => '找不到您要求的頁面'
        ),
        
        // internal server error
        '500' => array (
                'title' => 'Webservice currently unavailable',
                'message' => "發生未知的錯誤，請稍後再嘗試"
        ),
        
        // unknown http method
        '501' => array (
                'title' => 'Not Implemented',
                'message' => '發生未知的錯誤，請稍後再嘗試'
        ),
        
        // http proxy forward error
        '502' => array (
                'title' => 'Webservice currently unavailable',
                'message' => "發生未知的錯誤，請稍後再嘗試"
        ),
        
        // webserver service error
        '503' => array (
                'title' => 'Webservice currently unavailable',
                'message' => "服務維修中，馬上回來"
        ),
        
        // CUSTOM ERROR CODES
        // =======================================================

        // webserver origin error
        '520' => array(
            'title' => 'Origin Error - Unknown Host',
            'message' => 'The requested hostname is not routed. Use only hostnames to access resources.'
        ),
        
        // webserver down error
        '521' => array (
                'title' => 'Webservice currently unavailable',
                'message' => "We've got some trouble with our backend upstream cluster.\nOur service team has been dispatched to bring it back online."
        ),
        
        // maintenance
        '533' => array(
                'title' => 'Scheduled Maintenance',
                'message' => "This site is currently down for maintenance.\nOur service team is working hard to bring it back online soon."                
        )
);