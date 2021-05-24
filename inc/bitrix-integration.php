<?php
//Вызываем функцию для перехвата данных
add_action('wpcf7_mail_sent', 'your_wpcf7_mail_sent_function');
function your_wpcf7_mail_sent_function($contact_form)
{
    //подключение к серверу CRM
    define('CRM_HOST', 'kostin.bitrix24.ua'); // Ваш домен CRM системы
    define('CRM_PORT', '443'); // Порт сервера CRM. Установлен по умолчанию
    define('CRM_PATH', '/crm/configs/import/lead.php'); // Путь к компоненту lead.rest
    //авторизация в CRM
    define('CRM_LOGIN', 'marketing.termoderevo@gmail.com'); // Логин пользователя Вашей CRM по управлению лидами
    define('CRM_PASSWORD', '123lead321add'); // Пароль пользователя Вашей CRM по управлению лидами
    //перехват данных из Contact Form 7
    $title = $contact_form->title;
    $posted_data = $contact_form->posted_data;
    if ('Форма в hero' == $title): { //Вместо "Контактная форма 1" необходимо указать название Вашей контактной формы
        $submission = WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();
        //далее мы перехватывает введенные данные в Contact Form 7
        $firstName = $posted_data['your-name-hero']; //перехватываем поле [your-name]
        $myphone = $posted_data['your-tel-hero'];
        $message = $posted_data['info-input-hero']; //перехватываем поле [your-message]
        //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
        $postData = array(
            'TITLE' => '[ukrneon] Форма в hero', // Установить значение свое значение
            'NAME' => $firstName,
            'PHONE_WORK' => $myphone,
            'COMMENTS' => $message
        );
        //передача данных из Contact Form 7 в Bitrix24
        if (defined('CRM_AUTH')) {
            $postData['AUTH'] = CRM_AUTH;
        } else {
            $postData['LOGIN'] = CRM_LOGIN;
            $postData['PASSWORD'] = CRM_PASSWORD;
        }
        $fp = fsockopen("ssl://" . CRM_HOST, CRM_PORT, $errno, $errstr, 30);
        if ($fp) {
            $strPostData = '';
            foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&') . $key . '=' . urlencode($value);
            $str = "POST " . CRM_PATH . " HTTP/1.0\r\n";
            $str .= "Host: " . CRM_HOST . "\r\n";
            $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $str .= "Content-Length: " . strlen($strPostData) . "\r\n";
            $str .= "Connection: close\r\n\r\n";
            $str .= $strPostData;
            fwrite($fp, $str);
            $result = '';
            while (!feof($fp)) {
                $result .= fgets($fp, 128);
            }
            fclose($fp);
            $response = explode("\r\n\r\n", $result);
            $output = '<pre>' . print_r($response[1], 1) . '</pre>';
        } else {
            echo 'Connection Failed! ' . $errstr . ' (' . $errno . ')';
        }
    };
    elseif ('Форма в поисках подрядчика' == $title): {
        $submission = WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();
        //далее мы перехватывает введенные данные в Contact Form 7
        $firstName = $posted_data['your-name-look']; //перехватываем поле [your-name]
        $myphone = $posted_data['your-tel-look'];
        $message = $posted_data['info-input-look']; //перехватываем поле [your-message]
        //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
        $postData = array(
            'TITLE' => '[ukrneon] Форма в поисках подрядчика', // Установить значение свое значение
            'NAME' => $firstName,
            'PHONE_WORK' => $myphone,
            'COMMENTS' => $message
        );
        //передача данных из Contact Form 7 в Bitrix24
        if (defined('CRM_AUTH')) {
            $postData['AUTH'] = CRM_AUTH;
        } else {
            $postData['LOGIN'] = CRM_LOGIN;
            $postData['PASSWORD'] = CRM_PASSWORD;
        }
        $fp = fsockopen("ssl://" . CRM_HOST, CRM_PORT, $errno, $errstr, 30);
        if ($fp) {
            $strPostData = '';
            foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&') . $key . '=' . urlencode($value);
            $str = "POST " . CRM_PATH . " HTTP/1.0\r\n";
            $str .= "Host: " . CRM_HOST . "\r\n";
            $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $str .= "Content-Length: " . strlen($strPostData) . "\r\n";
            $str .= "Connection: close\r\n\r\n";
            $str .= $strPostData;
            fwrite($fp, $str);
            $result = '';
            while (!feof($fp)) {
                $result .= fgets($fp, 128);
            }
            fclose($fp);
            $response = explode("\r\n\r\n", $result);
            $output = '<pre>' . print_r($response[1], 1) . '</pre>';
        } else {
            echo 'Connection Failed! ' . $errstr . ' (' . $errno . ')';
        }
    };
    elseif ('Форма партнерство' == $title): {
        $submission = WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();
        //далее мы перехватывает введенные данные в Contact Form 7
        $firstName = $posted_data['your-name-partnership']; //перехватываем поле [your-name]
        $myphone = $posted_data['your-tel-partnership'];
        $message = $posted_data['info-input-partnership']; //перехватываем поле [your-message]
        //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
        $postData = array(
            'TITLE' => '[ukrneon] Форма партнерство', // Установить значение свое значение
            'NAME' => $firstName,
            'PHONE_WORK' => $myphone,
            'COMMENTS' => $message
        );
        //передача данных из Contact Form 7 в Bitrix24
        if (defined('CRM_AUTH')) {
            $postData['AUTH'] = CRM_AUTH;
        } else {
            $postData['LOGIN'] = CRM_LOGIN;
            $postData['PASSWORD'] = CRM_PASSWORD;
        }
        $fp = fsockopen("ssl://" . CRM_HOST, CRM_PORT, $errno, $errstr, 30);
        if ($fp) {
            $strPostData = '';
            foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&') . $key . '=' . urlencode($value);
            $str = "POST " . CRM_PATH . " HTTP/1.0\r\n";
            $str .= "Host: " . CRM_HOST . "\r\n";
            $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $str .= "Content-Length: " . strlen($strPostData) . "\r\n";
            $str .= "Connection: close\r\n\r\n";
            $str .= $strPostData;
            fwrite($fp, $str);
            $result = '';
            while (!feof($fp)) {
                $result .= fgets($fp, 128);
            }
            fclose($fp);
            $response = explode("\r\n\r\n", $result);
            $output = '<pre>' . print_r($response[1], 1) . '</pre>';
        } else {
            echo 'Connection Failed! ' . $errstr . ' (' . $errno . ')';
        }
    };
    elseif ('Остались вопросы' == $title): {
        $submission = WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();
        //далее мы перехватывает введенные данные в Contact Form 7
        $firstName = $posted_data['your-name-footer']; //перехватываем поле [your-name]
        $myphone = $posted_data['your-tel-footer'];
        $message = $posted_data['info-input-footer']; //перехватываем поле [your-message]
        //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
        $postData = array(
            'TITLE' => '[ukrneon] Остались вопросы', // Установить значение свое значение
            'NAME' => $firstName,
            'PHONE_WORK' => $myphone,
            'COMMENTS' => $message
        );
        //передача данных из Contact Form 7 в Bitrix24
        if (defined('CRM_AUTH')) {
            $postData['AUTH'] = CRM_AUTH;
        } else {
            $postData['LOGIN'] = CRM_LOGIN;
            $postData['PASSWORD'] = CRM_PASSWORD;
        }
        $fp = fsockopen("ssl://" . CRM_HOST, CRM_PORT, $errno, $errstr, 30);
        if ($fp) {
            $strPostData = '';
            foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&') . $key . '=' . urlencode($value);
            $str = "POST " . CRM_PATH . " HTTP/1.0\r\n";
            $str .= "Host: " . CRM_HOST . "\r\n";
            $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $str .= "Content-Length: " . strlen($strPostData) . "\r\n";
            $str .= "Connection: close\r\n\r\n";
            $str .= $strPostData;
            fwrite($fp, $str);
            $result = '';
            while (!feof($fp)) {
                $result .= fgets($fp, 128);
            }
            fclose($fp);
            $response = explode("\r\n\r\n", $result);
            $output = '<pre>' . print_r($response[1], 1) . '</pre>';
        } else {
            echo 'Connection Failed! ' . $errstr . ' (' . $errno . ')';
        }
    };
    elseif ('Форма в модальном окне' == $title): {
        $submission = WPCF7_Submission::get_instance();
        $posted_data = $submission->get_posted_data();
        //далее мы перехватывает введенные данные в Contact Form 7
        $firstName = $posted_data['your-name-complex']; //перехватываем поле [your-name]
        $myphone = $posted_data['your-tel-complex'];
        $message = $posted_data['info-input-complex']; //перехватываем поле [your-message]
        //сопостановление полей Bitrix24 с полученными данными из Contact Form 7
        $postData = array(
            'TITLE' => '[ukrneon] Форма в модальном окне', // Установить значение свое значение
            'NAME' => $firstName,
            'PHONE_WORK' => $myphone,
            'COMMENTS' => $message
        );
        //передача данных из Contact Form 7 в Bitrix24
        if (defined('CRM_AUTH')) {
            $postData['AUTH'] = CRM_AUTH;
        } else {
            $postData['LOGIN'] = CRM_LOGIN;
            $postData['PASSWORD'] = CRM_PASSWORD;
        }
        $fp = fsockopen("ssl://" . CRM_HOST, CRM_PORT, $errno, $errstr, 30);
        if ($fp) {
            $strPostData = '';
            foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&') . $key . '=' . urlencode($value);
            $str = "POST " . CRM_PATH . " HTTP/1.0\r\n";
            $str .= "Host: " . CRM_HOST . "\r\n";
            $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $str .= "Content-Length: " . strlen($strPostData) . "\r\n";
            $str .= "Connection: close\r\n\r\n";
            $str .= $strPostData;
            fwrite($fp, $str);
            $result = '';
            while (!feof($fp)) {
                $result .= fgets($fp, 128);
            }
            fclose($fp);
            $response = explode("\r\n\r\n", $result);
            $output = '<pre>' . print_r($response[1], 1) . '</pre>';
        } else {
            echo 'Connection Failed! ' . $errstr . ' (' . $errno . ')';
        }
    };
    endif;
}