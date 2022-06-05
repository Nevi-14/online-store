<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1JPVSq8gaxK1PMe4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4XWxGETmy5uTMpmC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aXYrRl8dg10JX01W',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::loCRKxMLlqVUYkyN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JsCkKO4LlN5SHWdj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YrQGg1eT4ed3UeQg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pCZcscbtXyPOK6Ku',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jw53tcliSN7ScgO8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5voUa6FsvtEgmIgy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LGZtwn5HAfxNe6Uj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5QkkUvAfTgpaUKJT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/task/manager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lb8qDEpsIsaLCQcz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CXol9n1dqcuKUzEQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.details.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upload.file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/download_local' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vruNjyTiXCbcbARB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/show_images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hC3g37Ur5FSj9ti8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/show_company_images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fa5gMv1kNJgF7zgr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ubuaPmTmU4OfDRew',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LgK1N01SExyttmqa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact/title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZAfNbWLEUkz8YwLS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::636IWyp7VKUpGyZU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact/getTitles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SAoVNCEZACrOKoPJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact/storeTitle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VbceIeZUs14DTfjb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/note' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tm6tbbmVpmShed1G',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact/check_email_availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6LLsHUd4LoOCyRCz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/customer/check_user_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VoqOrwAZhJsHIexj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lead' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QYhMuWZcWu8PtLuo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rmVph9TuDOAcDB0W',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lead/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mxuymsjbe7z6jmXl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lead/sort' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FGYHHsJ9AqQpqB1W',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lead/getTitles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cIpfxEe4geGy2F5i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lead/getSources' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lBArVxoNtKTV1FNP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lead/storeSource' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A6cQRAkb2JcStA5t',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lead/getStatuses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zgrzDF78Osk5WZut',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lead/storeStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y5cAATbrqZSh9g1g',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lead/check_email_availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DOPIqLLTcK834Kun',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getCountries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dyies8ryYFKnNWQB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/taxrate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CAHmzAdtMLgSHcME',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/taxrate/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IF0O7bQNxHQRyV1I',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9wnZDVZYEy98W71A',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/currency/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oYBoDbKk0uvLbsDt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/paymentmode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R0ChFkl9RGzuS7H0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/paymentmode/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XPOGaSn9oIZ2uTgm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/general_setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WEXUfqtCpeKJ3VMM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/general_setting/logo/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rUdhPgSdoEs8yqvn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/general_setting/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ff1nKLOuRglKm4um',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/general_setting/terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::goGtPdUPmVrXB4hA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/formfield' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OBj3Ddlu9PupYVNH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/formfield/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9I7CNXUJVcf9ljap',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/create_form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J131VW2R7XbEPhEP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/web_forms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wo8OMsAnl3oTv1tH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/web_form/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bjCpzHmrQ5Nthqk9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gDT2LP8wE6oXBUaH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/smtp/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dG5iIuylZQD8qyn4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/office/smtp/cron_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WFZKTmtvWSRDQ9UE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/productgroup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gJUwiQO1lQnCgw7a',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/productgroup/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4ELebLUxyNkh3yxB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hAJeaINe45CzL1eR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/categories/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pckTQeopQJ9GUR4p',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/subcategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xIadc7XTG3rNEjsm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/subcategories/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MCGYPEmklKDLSQob',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OdMVEnoI0I3dyjhn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2yC98VFPUr8TGCiP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gy0wP6siZWkPoxaX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Pn74D3UCTmpNGWSZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3yQHeXjD4RM0F0PX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0Oi7anHvltFF8zrp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/proposal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DGmeIir9UmZvJWks',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/proposal/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2kHOzWo43xFNZtEo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/proposal/getProduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L1j3f5VZqrZeT78X',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/proposal/getCustomers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9uihPrQxJxSzuogb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/proposal/getLeads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I4vJk4rS8wB1cixz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/proposal/getProposalProducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GrANiJkiU2uTmq2P',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/project' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XnHTeSvZZZ5uVH0W',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/project/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XSZ6eQYdwHzWf4gH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/project/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xkGqRo3RcvsNCrXu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5LANQjGicHOKoCYZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/invoice/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aim03RNBT5CDDbUz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/invoice/confirm_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1Mrw6S9fGuiNsJpT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/invoice/pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uIX0aqplJgnUEnR7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invoice/getProduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uDYjFx4uKMwDLm9k',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invoice/getCustomers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3qCsQhhK4AcE1J0W',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invoice/getInvoiceProducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3ni6iE2A2qsmVCLN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/estimate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o59JWCcOtcZQurmS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/estimate/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::17Aczhczb3h7XCYF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/estimate/getProduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HFwiXJ0E1gAf8Sik',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/estimate/getCustomers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0g3dl1DYB1qMCcBK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/estimate/getestimateProducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0OU75bvXzUoUafmu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/task' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dmbw9shKS9QH5aKO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/task/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cMovQsHh6U2CZorR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/task/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vQXYoB8HBG0i8gYs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/task/getCustomers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::18tJNkZOLRJtvIAN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/task/getLeads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9WuqnDGsGgAL64P8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ak8uE3gbOpN0Yiy2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/media/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3LN02CSDQeKKZ2bk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/media/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cdbgP3sM9asGWrWD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/media/getCustomers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BqdwD9VpnPYWFRRb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/media/getLeads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ac7l5BHWSO4HLlgy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reminder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u1rlNAZEJfk8s39m',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reminder/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uWCGduR4eBHS1G6W',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reminder/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::95qQ0fOiF7BNDo0m',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reminder/getCustomers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LMXyB80TbBqYntHD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reminder/getLeads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::84nSm5vWKmBdiMe1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6mpWfor6EUs3kDOk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/role/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cSkX1soE5qaLCZci',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yGqsjPqm2BAG1gtF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::46v6G1qs4g6waCNt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/password/forgot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kR98mM3PS3eNVFkA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HfcfmYzh0GhyNCHp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SQGRfbMzsVGXscim',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DMtqf4ordFpXxO6b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GHdbXsZIDnUDA6Wl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SPjk9Rf9rw7De6C2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PeLYrwzflMZ3DjYD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/profile/update_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XF1mOBMqZ81Wey4V',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/proposals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ln4yrQW48NNHMmDU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xg9eU3YNndPjBVtP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/estimates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rAWT9NrpIIjKkPGv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cHLZ7rVfEaoz4hpJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client/invoice/pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pqzNAhIc1kurjt46',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/envato' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SLVafGt8Nkib7Yrc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3wpxvEtfiEqv3Whk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/steps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KbnmIvu3Bg4imQdz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M0LcJIuRslwNmr4l',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M535pEbWxekOsWsu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/p(?|assword/reset/([^/]++)(*:34)|ro(?|duct/(?|de(?|tails/(?|edit/([^/]++)(*:81)|destroy/([^/]++)(*:104))|stroy/([^/]++)(*:127))|productgroup/(?|([^/]++)(*:160)|destroy/([^/]++)(*:184))|categories/(?|([^/]++)(*:215)|destroy/([^/]++)(*:239))|subcategories/(?|([^/]++)(*:273)|destroy/([^/]++)(*:297))|edit/([^/]++)(*:319)|update/([^/]++)(*:342))|posal/(?|e(?|mail/([^/]++)(*:377)|dit/([^/]++)(*:397))|create(?:/([^/]++)(?:/([^/]++))?)?(*:440)|update/([^/]++)(*:463)|destroy/([^/]++)(*:487)|proposal_pdf/([^/]++)(*:516))|ject/(?|edit/([^/]++)(*:546)|update/([^/]++)(*:569)|destroy/([^/]++)(*:593))))|/task/(?|manager/(?|create/([^/]++)(*:639)|show/([^/]++)(*:660)|edit/([^/]++)(*:681)|destroy/([^/]++)(*:705))|e(?|mail/([^/]++)(*:731)|dit/([^/]++)(*:751))|update/([^/]++)(*:775)|destroy/([^/]++)(*:799))|/storage/([^/]++)/([^/]++)/([^/]++)(*:843)|/c(?|ustomer/(?|create(?:/([^/]++))?(*:887)|email/([^/]++)(*:909)|show/([^/]++)(*:930)|([^/]++)(*:946)|destroy/([^/]++)(*:970)|contact(?|(*:988)|/(?|([^/]++)(*:1008)|makeContactPrimary/([^/]++)(*:1044)|destroy/([^/]++)(*:1069)))|([^/]++)/(?|notes(*:1097)|proposals(*:1115)|invoices(*:1132)|estimates(*:1150)|tasks(*:1164)|media(*:1178)|reminder(*:1195))|import(?|(*:1214)))|ontact/(?|leadCustomer/([^/]++)(*:1256)|title/(?|([^/]++)(*:1282)|destroy/([^/]++)(*:1307)))|lient/(?|password/reset/([^/]++)(*:1350)|estimate/toInvoice/([^/]++)/([^/]++)(*:1395)|invoice/get_details/([^/]++)(*:1432)))|/api/(?|customer/note/([^/]++)(*:1473)|get(?|States/([^/]++)(*:1503)|Cities/([^/]++)(*:1527))|office/formfield/([^/]++)(*:1562))|/lead/(?|show/([^/]++)(*:1594)|([^/]++)(*:1611)|destroy/([^/]++)(*:1636)|([^/]++)/(?|proposals(*:1666)|tasks(*:1680)|media(*:1694)|reminders(*:1712))|s(?|ource(?|(*:1734)|/(?|([^/]++)(*:1755)|destroy/([^/]++)(*:1780)))|tatus(?|(*:1799)|/(?|([^/]++)(*:1820)|destroy/([^/]++)(*:1845))))|import(?|(*:1866))|webform/([^/]++)(*:1892))|/office/(?|taxrate/(?|([^/]++)(*:1932)|destroy/([^/]++)(*:1957))|currency/(?|([^/]++)(*:1987)|base/([^/]++)(*:2009)|destroy/([^/]++)(*:2034))|paymentmode/(?|([^/]++)(*:2067)|destroy/([^/]++)(*:2092))|general_setting/(?|terms/([^/]++)(*:2135)|([^/]++)(*:2152)|logo/([^/]++)(*:2174))|formfield/(?|([^/]++)(*:2205)|destroy/([^/]++)(*:2230))|web_form/(?|([^/]++)(*:2260)|destroy/([^/]++)(*:2285))|smtp/(?|([^/]++)(*:2311)|destroy/([^/]++)(*:2336)))|/invoice/(?|e(?|mail/([^/]++)(*:2376)|dit/([^/]++)(*:2397))|create(?:/([^/]++)(?:/([^/]++))?)?(*:2441)|update/([^/]++)(*:2465)|destroy/([^/]++)(*:2490)|get_details/([^/]++)(*:2519)|invoice_pdf/([^/]++)(*:2548))|/estimate/(?|toInvoice/([^/]++)(?|(*:2592)|/([^/]++)(*:2610))|e(?|mail/([^/]++)(*:2637)|dit/([^/]++)(*:2658)|stimate_pdf/([^/]++)(*:2687))|create(?:/([^/]++)(?:/([^/]++))?)?(*:2731)|update/([^/]++)(*:2755)|destroy/([^/]++)(*:2780))|/media/(?|edit/([^/]++)(*:2813)|update/([^/]++)(*:2837)|destroy/([^/]++)(*:2862))|/reminder/(?|e(?|mail/([^/]++)(*:2902)|dit/([^/]++)(*:2923))|update(?|/([^/]++)(*:2951)|Notification/([^/]++)(*:2981))|destroy/([^/]++)(*:3007))|/user/(?|([^/]++)(*:3034)|destroy/([^/]++)(*:3059)|import(?|(*:3077))|profile(?|(*:3097)|/(?|([^/]++)(*:3118)|update_password/([^/]++)(*:3151)))|role(?|(*:3169)|/(?|([^/]++)(*:3190)|de(?|fault/([^/]++)(*:3218)|stroy/([^/]++)(*:3241))|permissions(?|(*:3265)|/(?|([^/]++)(*:3286)|roleid(?|(*:3304)|(?:/([^/]++))?(*:3327)))))))|/form/([^/]++)(*:3356))/?$}sDu',
    ),
    3 => 
    array (
      34 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      81 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.details.update',
          ),
          1 => 
          array (
            0 => 'productDetail',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.details.destroy',
          ),
          1 => 
          array (
            0 => 'productDetail',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sjdHCRTanzTBvFAC',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p34T6se6iQ0q0mjw',
          ),
          1 => 
          array (
            0 => 'productGroup',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hc9qabnzxuMbLXiU',
          ),
          1 => 
          array (
            0 => 'productGroup',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hLQcmghX3rYwBqfT',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wcCybyjX5GBMvziA',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3DKVkwWnTE2P1cMk',
          ),
          1 => 
          array (
            0 => 'subcategory',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q2WPjN4gjCRT5A37',
          ),
          1 => 
          array (
            0 => 'subcategory',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.edit',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yLaG5qp3GB0iKoUE',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JDCzLLAaVMHNmQKm',
          ),
          1 => 
          array (
            0 => 'proposal',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PkUnDkbYQfpL0pPo',
          ),
          1 => 
          array (
            0 => 'proposal',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ETqhrghbnhXYIwta',
            'relation' => NULL,
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'relation',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YVQbSarp0Tu1EGQy',
          ),
          1 => 
          array (
            0 => 'proposal',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jG3AYUy0H8lPPtMu',
          ),
          1 => 
          array (
            0 => 'proposal',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      516 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FPaNvn9Be9YZDsS8',
          ),
          1 => 
          array (
            0 => 'proposal',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      546 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WeSTz3VS3N7mQhpF',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kApbGlNFF9Es86oV',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U2EovsEC88axsJQl',
          ),
          1 => 
          array (
            0 => 'project',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PSQLC5Zfq3iJBA4O',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      660 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2eoVwLyzakgkuZU0',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      681 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q8t8pRp2qC8o04Tt',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      705 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eUqRDfcNDsLWprGk',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GKWCr0r7X67jBtQ6',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GptpxCB9aaIgV0rS',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      775 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::le0RMQzeCaRs9fQH',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      799 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a5eLeMRLRtGDbVJy',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      843 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NuEhjnUBINHQAf3P',
          ),
          1 => 
          array (
            0 => 'folder',
            1 => 'subfolder',
            2 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      887 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IHtquLxmeFYCHwW2',
            'lead' => NULL,
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      909 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a9QVv7Q694lzo4Si',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k23ovxNkNxx8dOOC',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      946 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BYS7bqyj911OwLI0',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      970 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rwFokTDQgLeoRHbG',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m67ZeLd6AyPv03Sx',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1008 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vm9UKGpXUkWDlqWd',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1044 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dgMuZGix7JkrlqiM',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1069 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6gMpabaTgNawbqXI',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1097 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mcUQm98zaGSq13QV',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bh4OYvmz3KMqJa0N',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zTPjj8QJisvDXnXP',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K5bqSoxnXi8SEApO',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ex7TN6CME23hanWw',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kO0jaLxG6RmpdLh8',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CnDAGpKuGfOyQQWT',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MTrYE6EsYQIJwcQM',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uytztv1UwiP4pD2T',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1256 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yufexRmTQo7y10Lx',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hq6SktQcDEbZmb2o',
          ),
          1 => 
          array (
            0 => 'contactTitle',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WE0rbIaTfmCxV1fI',
          ),
          1 => 
          array (
            0 => 'contactTitle',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A3hA3Ct3Srlqp1qG',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z56dG44S1T78y0FT',
          ),
          1 => 
          array (
            0 => 'estimate',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1432 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FqLjIgwKTEZNuHMt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1473 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AUpw7N71lxhoM627',
          ),
          1 => 
          array (
            0 => 'note',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.states',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'location.cities',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1562 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SmaSA9dAIhm8hEXS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MeZN9MfuFMR6Dy0e',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3LKXWlc68WxSMiZL',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yuYp1SFHFBrZJ7St',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1666 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lead_proposals',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lead_tasks',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lead_media',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1712 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lead_reminders',
          ),
          1 => 
          array (
            0 => 'lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1734 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qc5RYAYPj3EvNKqE',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NgcQNfZH44I1bSit',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jzajQZ9pIgDGEdhO',
          ),
          1 => 
          array (
            0 => 'leadSource',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1780 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GLA51JyoFyLhsfK0',
          ),
          1 => 
          array (
            0 => 'leadSource',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1799 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SvwYg9D9eQ5RTZxs',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::slsKk2cmlPP8PEoq',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RkZip7Yb8hC0p9im',
          ),
          1 => 
          array (
            0 => 'leadStatus',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ypxSe8mejViv8j3u',
          ),
          1 => 
          array (
            0 => 'leadStatus',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1866 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CqfMyB9eklUOL0Rk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ozr1wr29h2eG42Jz',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::veTO4le8a0L8jSbZ',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1932 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::svhh7k4WYBMRImMj',
          ),
          1 => 
          array (
            0 => 'taxRate',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1957 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OiOdaKT7GErZjtrQ',
          ),
          1 => 
          array (
            0 => 'taxRate',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::McXwhN1fiFxFYgqs',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l7J7KxJ50KPvoHyL',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ij0oAblEN3dJNBAL',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DuUUFtUEOEVTWwFv',
          ),
          1 => 
          array (
            0 => 'paymentMode',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2092 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fxkBWEHEhWAR5Z1m',
          ),
          1 => 
          array (
            0 => 'paymentMode',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UuV2G3gyLdQ1yOYf',
          ),
          1 => 
          array (
            0 => 'terms',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::poZkmyrlQeQRh09s',
          ),
          1 => 
          array (
            0 => 'company_name',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wE1uB1riUd5RVTH5',
          ),
          1 => 
          array (
            0 => 'logo',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cin0GyX2CrK9rBET',
          ),
          1 => 
          array (
            0 => 'formfield',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1qhT24GXcHexFcj9',
          ),
          1 => 
          array (
            0 => 'formfield',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ka9e6DlExDPgXnxU',
          ),
          1 => 
          array (
            0 => 'web_form',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ohmRYTj2H0gDsdDu',
          ),
          1 => 
          array (
            0 => 'web_form',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zugMJzapzIhjn7tW',
          ),
          1 => 
          array (
            0 => 'smtp',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2336 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NUvFht8GSH1F2AcF',
          ),
          1 => 
          array (
            0 => 'smtp',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kvCodAw9V75CeS9X',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SG2z65cb7N9ul5Nn',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2441 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uFe39AXC5mahOR9d',
            'relation' => NULL,
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'relation',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tWsU4wW7CSP0v0Ev',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HUbv0fZqX3h7l2iB',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h8pyGS6xaIfcHS4S',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2548 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rm3ChikEqqtSqUaA',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZRo87bft3DzU1ceS',
          ),
          1 => 
          array (
            0 => 'estimate',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mt4Q8RJvBjUzivJE',
          ),
          1 => 
          array (
            0 => 'estimate',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DZvxJk8TgJBjyYWN',
          ),
          1 => 
          array (
            0 => 'estimate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aUMvwCMjAwYuuCTU',
          ),
          1 => 
          array (
            0 => 'estimate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TDBkAJx3MfYxrybx',
          ),
          1 => 
          array (
            0 => 'estimate',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6FmCAvHS8Wr0m4rB',
            'relation' => NULL,
            'id' => NULL,
          ),
          1 => 
          array (
            0 => 'relation',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vuRUMzX6jpoN8bY1',
          ),
          1 => 
          array (
            0 => 'estimate',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2780 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iRdvK2WrwKYraJO1',
          ),
          1 => 
          array (
            0 => 'estimate',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2813 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WsQtmW7TLivD57KE',
          ),
          1 => 
          array (
            0 => 'media',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2837 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WpYi5eNtjrQBPxVj',
          ),
          1 => 
          array (
            0 => 'media',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CkoaGpZ3cobyaWWA',
          ),
          1 => 
          array (
            0 => 'media',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2902 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wScUl0gGAnCeOUKO',
          ),
          1 => 
          array (
            0 => 'reminder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2923 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8eMf4sO96cGN5NkK',
          ),
          1 => 
          array (
            0 => 'reminder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wbt8buqERF9Kkr4z',
          ),
          1 => 
          array (
            0 => 'reminder',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2981 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aO8ZAcQrb6E4DSeW',
          ),
          1 => 
          array (
            0 => 'reminder',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3007 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z3GjuehN1VGSIcUb',
          ),
          1 => 
          array (
            0 => 'reminder',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I66N3cZ9h3AjnP3G',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hELH97bWiKS9bDau',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3077 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bL9JWnpIqmMSzAsE',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PISCAvYXJzvlwhXv',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3097 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8IVQBxLFX6oCQh1I',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3118 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lf9pBSQIuuB0rVOl',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pQRHw0D46K9EXsKi',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ptQ2y7lBMHEW8lrB',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IS0MHyLfL5XfOTcn',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DgsFBmnLbaMKS0lC',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fPUao9MzVof5JMAR',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3vXeXivOO9MkzJCr',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'post_role_permissions',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kti4Z69fQYzXaP2w',
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d8LlmDPPMQU0EDsv',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissions_role_id',
            'role' => NULL,
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mxf6WtpUJa5pFQkR',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::1JPVSq8gaxK1PMe4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::1JPVSq8gaxK1PMe4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4XWxGETmy5uTMpmC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":289:{@HyA9n+mMRr+wFCxUyJD0nLunY1z+sKoNtlwCkg21ChM=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000077073b850000000032524510";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4XWxGETmy5uTMpmC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aXYrRl8dg10JX01W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":262:{@+yYqyfZMceaWFTl/kjmjnpHjcojlhMB78VOBvLCxj7o=.a:5:{s:3:"use";a:0:{}s:8:"function";s:50:"function () {

 
    return \\view(\'auth.login\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000077073b870000000032524510";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::aXYrRl8dg10JX01W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::loCRKxMLlqVUYkyN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'crm_counter',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":294:{@QbA2H/Tn/8M/Aw7RNXKFkN6C7BV/Q2cTrTAFqxsLuK4=.a:5:{s:3:"use";a:0:{}s:8:"function";s:82:"function(){
    \\session()->put(\'refresh\',true);
    return \\redirect()->back();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000077073b890000000032524510";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::loCRKxMLlqVUYkyN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JsCkKO4LlN5SHWdj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":628:{@kynGAMPu57FyymLia9taveJXPEG/b2Ff+FBzIHC3E5M=.a:5:{s:3:"use";a:0:{}s:8:"function";s:415:"function(\\Illuminate\\Http\\Request $request){
    if (! \\in_array($request->lang_code, \\config(\'constants.LOCALES\'))) {
        \\abort(400);
    }
    \\Illuminate\\Support\\Facades\\App::setLocale($request->lang_code);
    \\session()->put(\'applocale\', $request->lang_code);
    $minutes = 9999;
    \\Illuminate\\Support\\Facades\\Cookie::queue("applocale", $request->lang_code, $minutes);
    return \\redirect()->back();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000077073b8b0000000032524510";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::JsCkKO4LlN5SHWdj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YrQGg1eT4ed3UeQg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::YrQGg1eT4ed3UeQg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pCZcscbtXyPOK6Ku' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::pCZcscbtXyPOK6Ku',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jw53tcliSN7ScgO8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@services',
        'controller' => 'App\\Http\\Controllers\\HomePageController@services',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::jw53tcliSN7ScgO8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5voUa6FsvtEgmIgy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@about',
        'controller' => 'App\\Http\\Controllers\\HomePageController@about',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::5voUa6FsvtEgmIgy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LGZtwn5HAfxNe6Uj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@rates',
        'controller' => 'App\\Http\\Controllers\\HomePageController@rates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::LGZtwn5HAfxNe6Uj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5QkkUvAfTgpaUKJT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@contact',
        'controller' => 'App\\Http\\Controllers\\HomePageController@contact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::5QkkUvAfTgpaUKJT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PSQLC5Zfq3iJBA4O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/manager/create/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-task',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskManagerController@create',
        'controller' => 'App\\Http\\Controllers\\TaskManagerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::PSQLC5Zfq3iJBA4O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lb8qDEpsIsaLCQcz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-task',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskManagerController@index',
        'controller' => 'App\\Http\\Controllers\\TaskManagerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::lb8qDEpsIsaLCQcz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CXol9n1dqcuKUzEQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'task/manager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-task',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskManagerController@store',
        'controller' => 'App\\Http\\Controllers\\TaskManagerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::CXol9n1dqcuKUzEQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2eoVwLyzakgkuZU0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/manager/show/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-task',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskManagerController@show',
        'controller' => 'App\\Http\\Controllers\\TaskManagerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::2eoVwLyzakgkuZU0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Q8t8pRp2qC8o04Tt' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'task/manager/edit/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-task',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskManagerController@update',
        'controller' => 'App\\Http\\Controllers\\TaskManagerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Q8t8pRp2qC8o04Tt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eUqRDfcNDsLWprGk' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'task/manager/destroy/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-task',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskManagerController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaskManagerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::eUqRDfcNDsLWprGk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'product.details.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-task',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductDetailController@store',
        'controller' => 'App\\Http\\Controllers\\ProductDetailController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'product.details.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'product.details.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'product/details/edit/{productDetail}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-task',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductDetailController@update',
        'controller' => 'App\\Http\\Controllers\\ProductDetailController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'product.details.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'product.details.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'product/details/destroy/{productDetail}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-task',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductDetailController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProductDetailController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'product.details.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'upload.file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'file',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'FileUploadController@store',
        'controller' => 'FileUploadController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'upload.file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vruNjyTiXCbcbARB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download_local',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'FileUploadController@download_local',
        'controller' => 'FileUploadController@download_local',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::vruNjyTiXCbcbARB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hC3g37Ur5FSj9ti8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'show_images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductImageController@showImage',
        'controller' => 'App\\Http\\Controllers\\ProductImageController@showImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::hC3g37Ur5FSj9ti8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Fa5gMv1kNJgF7zgr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'show_company_images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@showCompanyImage',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@showCompanyImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Fa5gMv1kNJgF7zgr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NuEhjnUBINHQAf3P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storage/{folder}/{subfolder}/{filename}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":570:{@ku8Jl7fQUex2XXosuogqZwXm/DUnybrZyAcRcOqcxRk=.a:5:{s:3:"use";a:0:{}s:8:"function";s:357:"function ($folder, $subfolder, $filename)
{
    $path = \\storage_path( $folder.\'/\'. $subfolder.\'/\'. $filename);

    if (!\\File::exists($path)) {
        \\abort(404);
    }

    $file = \\File::get($path);
    $type = \\File::mimeType($path);

    $response = \\Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000077073a660000000032524510";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::NuEhjnUBINHQAf3P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IHtquLxmeFYCHwW2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/create/{lead?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@create',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::IHtquLxmeFYCHwW2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::a9QVv7Q694lzo4Si' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/email/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@mailToClient',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@mailToClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::a9QVv7Q694lzo4Si',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ubuaPmTmU4OfDRew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@index',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ubuaPmTmU4OfDRew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LgK1N01SExyttmqa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@store',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::LgK1N01SExyttmqa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::k23ovxNkNxx8dOOC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/show/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@show',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::k23ovxNkNxx8dOOC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BYS7bqyj911OwLI0' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@update',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::BYS7bqyj911OwLI0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rwFokTDQgLeoRHbG' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer/destroy/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@destroy',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::rwFokTDQgLeoRHbG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::m67ZeLd6AyPv03Sx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@storeContact',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@storeContact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::m67ZeLd6AyPv03Sx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Vm9UKGpXUkWDlqWd' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'customer/contact/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@updateContact',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@updateContact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Vm9UKGpXUkWDlqWd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dgMuZGix7JkrlqiM' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'customer/contact/makeContactPrimary/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@makeContactPrimary',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@makeContactPrimary',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::dgMuZGix7JkrlqiM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6gMpabaTgNawbqXI' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer/contact/destroy/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@destroyContact',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@destroyContact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::6gMpabaTgNawbqXI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yufexRmTQo7y10Lx' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'contact/leadCustomer/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@leadToCustomer',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@leadToCustomer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::yufexRmTQo7y10Lx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mcUQm98zaGSq13QV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/notes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactNoteController@index',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactNoteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::mcUQm98zaGSq13QV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bh4OYvmz3KMqJa0N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/proposals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@getProposals',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@getProposals',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::bh4OYvmz3KMqJa0N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zTPjj8QJisvDXnXP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@getInvoices',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@getInvoices',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::zTPjj8QJisvDXnXP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::K5bqSoxnXi8SEApO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/estimates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@getEstimates',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@getEstimates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::K5bqSoxnXi8SEApO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ex7TN6CME23hanWw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@getTasks',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@getTasks',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Ex7TN6CME23hanWw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kO0jaLxG6RmpdLh8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@getMedia',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@getMedia',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::kO0jaLxG6RmpdLh8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CnDAGpKuGfOyQQWT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/reminder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@getReminder',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@getReminder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::CnDAGpKuGfOyQQWT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZAfNbWLEUkz8YwLS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact/title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@index',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ZAfNbWLEUkz8YwLS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::636IWyp7VKUpGyZU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact/title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@store',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::636IWyp7VKUpGyZU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Hq6SktQcDEbZmb2o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact/title/{contactTitle}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@update',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Hq6SktQcDEbZmb2o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WE0rbIaTfmCxV1fI' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'contact/title/destroy/{contactTitle}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::WE0rbIaTfmCxV1fI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MTrYE6EsYQIJwcQM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@import',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@import',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::MTrYE6EsYQIJwcQM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Uytztv1UwiP4pD2T' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@importStore',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@importStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Uytztv1UwiP4pD2T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SAoVNCEZACrOKoPJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/contact/getTitles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@getContactTitles',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@getContactTitles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::SAoVNCEZACrOKoPJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VbceIeZUs14DTfjb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contact/storeTitle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@storeTitle',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactTitleController@storeTitle',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::VbceIeZUs14DTfjb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Tm6tbbmVpmShed1G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/note',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactNoteController@storeNote',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactNoteController@storeNote',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::Tm6tbbmVpmShed1G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AUpw7N71lxhoM627' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/customer/note/{note}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'can:delete-contact',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactNoteController@destroyNote',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactNoteController@destroyNote',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::AUpw7N71lxhoM627',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6LLsHUd4LoOCyRCz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contact/check_email_availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@check_email_availability',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@check_email_availability',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::6LLsHUd4LoOCyRCz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VoqOrwAZhJsHIexj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/customer/check_user_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Contact\\ContactController@check_user_id',
        'controller' => 'App\\Http\\Controllers\\Contact\\ContactController@check_user_id',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::VoqOrwAZhJsHIexj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QYhMuWZcWu8PtLuo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@index',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::QYhMuWZcWu8PtLuo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Mxuymsjbe7z6jmXl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@create',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Mxuymsjbe7z6jmXl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rmVph9TuDOAcDB0W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@store',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::rmVph9TuDOAcDB0W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FGYHHsJ9AqQpqB1W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@sort',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@sort',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::FGYHHsJ9AqQpqB1W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MeZN9MfuFMR6Dy0e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/show/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@show',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::MeZN9MfuFMR6Dy0e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3LKXWlc68WxSMiZL' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'lead/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@update',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::3LKXWlc68WxSMiZL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yuYp1SFHFBrZJ7St' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'lead/destroy/{lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@destroy',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::yuYp1SFHFBrZJ7St',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'lead_proposals' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/{lead}/proposals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@getProposals',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@getProposals',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'lead_proposals',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'lead_tasks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/{lead}/tasks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@getTasks',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@getTasks',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'lead_tasks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'lead_media' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/{lead}/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@getMedia',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@getMedia',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'lead_media',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'lead_reminders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/{lead}/reminders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@getReminders',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@getReminders',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'lead_reminders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qc5RYAYPj3EvNKqE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/source',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@index',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::qc5RYAYPj3EvNKqE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NgcQNfZH44I1bSit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/source',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@store',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::NgcQNfZH44I1bSit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jzajQZ9pIgDGEdhO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/source/{leadSource}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@update',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::jzajQZ9pIgDGEdhO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GLA51JyoFyLhsfK0' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'lead/source/destroy/{leadSource}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::GLA51JyoFyLhsfK0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SvwYg9D9eQ5RTZxs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@index',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::SvwYg9D9eQ5RTZxs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::slsKk2cmlPP8PEoq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@store',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::slsKk2cmlPP8PEoq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RkZip7Yb8hC0p9im' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/status/{leadStatus}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@update',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::RkZip7Yb8hC0p9im',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ypxSe8mejViv8j3u' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'lead/status/destroy/{leadStatus}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@destroy',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ypxSe8mejViv8j3u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CqfMyB9eklUOL0Rk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lead/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@import',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@import',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::CqfMyB9eklUOL0Rk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ozr1wr29h2eG42Jz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-lead',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@importStore',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@importStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ozr1wr29h2eG42Jz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cIpfxEe4geGy2F5i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/lead/getTitles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@getTitles',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@getTitles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::cIpfxEe4geGy2F5i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lBArVxoNtKTV1FNP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/lead/getSources',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@getleadSources',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@getleadSources',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::lBArVxoNtKTV1FNP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::A6cQRAkb2JcStA5t' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lead/storeSource',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@storeSource',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadSourceController@storeSource',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::A6cQRAkb2JcStA5t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zgrzDF78Osk5WZut' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/lead/getStatuses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@getleadStatuses',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@getleadStatuses',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::zgrzDF78Osk5WZut',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Y5cAATbrqZSh9g1g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lead/storeStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@storeStatus',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadStatusController@storeStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::Y5cAATbrqZSh9g1g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DOPIqLLTcK834Kun' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lead/check_email_availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@check_email_availability',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@check_email_availability',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::DOPIqLLTcK834Kun',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dyies8ryYFKnNWQB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getCountries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\LocationController@getCountries',
        'controller' => 'App\\Http\\Controllers\\LocationController@getCountries',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::dyies8ryYFKnNWQB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'location.states' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getStates/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\LocationController@getStates',
        'controller' => 'App\\Http\\Controllers\\LocationController@getStates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'location.states',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'location.cities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getCities/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\LocationController@getCities',
        'controller' => 'App\\Http\\Controllers\\LocationController@getCities',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'location.cities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CAHmzAdtMLgSHcME' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/taxrate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\TaxRateController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\TaxRateController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::CAHmzAdtMLgSHcME',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IF0O7bQNxHQRyV1I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/taxrate/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\TaxRateController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\TaxRateController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::IF0O7bQNxHQRyV1I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::svhh7k4WYBMRImMj' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/taxrate/{taxRate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\TaxRateController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\TaxRateController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::svhh7k4WYBMRImMj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OiOdaKT7GErZjtrQ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'office/taxrate/destroy/{taxRate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\TaxRateController@destroy',
        'controller' => 'App\\Http\\Controllers\\Office\\TaxRateController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::OiOdaKT7GErZjtrQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9wnZDVZYEy98W71A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\CurrencyController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\CurrencyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::9wnZDVZYEy98W71A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oYBoDbKk0uvLbsDt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/currency/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\CurrencyController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\CurrencyController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::oYBoDbKk0uvLbsDt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::McXwhN1fiFxFYgqs' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/currency/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\CurrencyController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\CurrencyController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::McXwhN1fiFxFYgqs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::l7J7KxJ50KPvoHyL' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/currency/base/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\CurrencyController@baseUpdate',
        'controller' => 'App\\Http\\Controllers\\Office\\CurrencyController@baseUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::l7J7KxJ50KPvoHyL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ij0oAblEN3dJNBAL' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'office/currency/destroy/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\CurrencyController@destroy',
        'controller' => 'App\\Http\\Controllers\\Office\\CurrencyController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::ij0oAblEN3dJNBAL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::R0ChFkl9RGzuS7H0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/paymentmode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\PaymentModeController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\PaymentModeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::R0ChFkl9RGzuS7H0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XPOGaSn9oIZ2uTgm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/paymentmode/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\PaymentModeController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\PaymentModeController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::XPOGaSn9oIZ2uTgm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DuUUFtUEOEVTWwFv' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/paymentmode/{paymentMode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\PaymentModeController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\PaymentModeController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::DuUUFtUEOEVTWwFv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fxkBWEHEhWAR5Z1m' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'office/paymentmode/destroy/{paymentMode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\PaymentModeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Office\\PaymentModeController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::fxkBWEHEhWAR5Z1m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WEXUfqtCpeKJ3VMM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/general_setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
          3 => 'password.confirm',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::WEXUfqtCpeKJ3VMM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rUdhPgSdoEs8yqvn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/general_setting/logo/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::rUdhPgSdoEs8yqvn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ff1nKLOuRglKm4um' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/general_setting/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@storeDetails',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@storeDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::ff1nKLOuRglKm4um',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::goGtPdUPmVrXB4hA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/general_setting/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@terms',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@terms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::goGtPdUPmVrXB4hA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UuV2G3gyLdQ1yOYf' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/general_setting/terms/{terms}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@termsUpdate',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@termsUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::UuV2G3gyLdQ1yOYf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::poZkmyrlQeQRh09s' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/general_setting/{company_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@updateDetails',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@updateDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::poZkmyrlQeQRh09s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wE1uB1riUd5RVTH5' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/general_setting/logo/{logo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\GeneralSettingsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::wE1uB1riUd5RVTH5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OBj3Ddlu9PupYVNH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/formfield',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\FormFieldController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\FormFieldController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::OBj3Ddlu9PupYVNH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9I7CNXUJVcf9ljap' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/formfield/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\FormFieldController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\FormFieldController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::9I7CNXUJVcf9ljap',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cin0GyX2CrK9rBET' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/formfield/{formfield}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\FormFieldController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\FormFieldController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::cin0GyX2CrK9rBET',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1qhT24GXcHexFcj9' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'office/formfield/destroy/{formfield}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\FormFieldController@destroy',
        'controller' => 'App\\Http\\Controllers\\Office\\FormFieldController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::1qhT24GXcHexFcj9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::J131VW2R7XbEPhEP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/create_form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\WebFormController@create',
        'controller' => 'App\\Http\\Controllers\\Office\\WebFormController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::J131VW2R7XbEPhEP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wo8OMsAnl3oTv1tH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/web_forms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\WebFormController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\WebFormController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::wo8OMsAnl3oTv1tH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bjCpzHmrQ5Nthqk9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/web_form/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\WebFormController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\WebFormController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::bjCpzHmrQ5Nthqk9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ka9e6DlExDPgXnxU' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/web_form/{web_form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\WebFormController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\WebFormController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::Ka9e6DlExDPgXnxU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ohmRYTj2H0gDsdDu' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'office/web_form/destroy/{web_form}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\WebFormController@destroy',
        'controller' => 'App\\Http\\Controllers\\Office\\WebFormController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::ohmRYTj2H0gDsdDu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gDT2LP8wE6oXBUaH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'office/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-office',
          3 => 'password.confirm',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\SMTPController@index',
        'controller' => 'App\\Http\\Controllers\\Office\\SMTPController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::gDT2LP8wE6oXBUaH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dG5iIuylZQD8qyn4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/smtp/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\SMTPController@store',
        'controller' => 'App\\Http\\Controllers\\Office\\SMTPController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::dG5iIuylZQD8qyn4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WFZKTmtvWSRDQ9UE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'office/smtp/cron_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\SMTPController@setCronStatus',
        'controller' => 'App\\Http\\Controllers\\Office\\SMTPController@setCronStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::WFZKTmtvWSRDQ9UE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zugMJzapzIhjn7tW' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'office/smtp/{smtp}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\SMTPController@update',
        'controller' => 'App\\Http\\Controllers\\Office\\SMTPController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::zugMJzapzIhjn7tW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NUvFht8GSH1F2AcF' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'office/smtp/destroy/{smtp}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-office',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\SMTPController@destroy',
        'controller' => 'App\\Http\\Controllers\\Office\\SMTPController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/office',
        'where' => 
        array (
        ),
        'as' => 'generated::NUvFht8GSH1F2AcF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SmaSA9dAIhm8hEXS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/office/formfield/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Office\\FormFieldController@getFormField',
        'controller' => 'App\\Http\\Controllers\\Office\\FormFieldController@getFormField',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::SmaSA9dAIhm8hEXS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gJUwiQO1lQnCgw7a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/productgroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductGroupController@index',
        'controller' => 'App\\Http\\Controllers\\ProductGroupController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::gJUwiQO1lQnCgw7a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4ELebLUxyNkh3yxB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/productgroup/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductGroupController@store',
        'controller' => 'App\\Http\\Controllers\\ProductGroupController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::4ELebLUxyNkh3yxB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::p34T6se6iQ0q0mjw' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'product/productgroup/{productGroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductGroupController@update',
        'controller' => 'App\\Http\\Controllers\\ProductGroupController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::p34T6se6iQ0q0mjw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Hc9qabnzxuMbLXiU' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'product/productgroup/destroy/{productGroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductGroupController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProductGroupController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::Hc9qabnzxuMbLXiU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hAJeaINe45CzL1eR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@index',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::hAJeaINe45CzL1eR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pckTQeopQJ9GUR4p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/categories/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@store',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::pckTQeopQJ9GUR4p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hLQcmghX3rYwBqfT' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'product/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@update',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::hLQcmghX3rYwBqfT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wcCybyjX5GBMvziA' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'product/categories/destroy/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\CategoriesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::wcCybyjX5GBMvziA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xIadc7XTG3rNEjsm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/subcategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@index',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::xIadc7XTG3rNEjsm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MCGYPEmklKDLSQob' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/subcategories/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@store',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::MCGYPEmklKDLSQob',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3DKVkwWnTE2P1cMk' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'product/subcategories/{subcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@update',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::3DKVkwWnTE2P1cMk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::q2WPjN4gjCRT5A37' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'product/subcategories/destroy/{subcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\SubCategoriesController@destroy',
        'controller' => 'App\\Http\\Controllers\\SubCategoriesController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::q2WPjN4gjCRT5A37',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OdMVEnoI0I3dyjhn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\ProductController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::OdMVEnoI0I3dyjhn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2yC98VFPUr8TGCiP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\ProductController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::2yC98VFPUr8TGCiP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Gy0wP6siZWkPoxaX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\ProductController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::Gy0wP6siZWkPoxaX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'product.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/edit/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\ProductController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'product.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yLaG5qp3GB0iKoUE' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'product/update/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\ProductController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::yLaG5qp3GB0iKoUE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sjdHCRTanzTBvFAC' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'product/destroy/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProductController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::sjdHCRTanzTBvFAC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Pn74D3UCTmpNGWSZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@import',
        'controller' => 'App\\Http\\Controllers\\ProductController@import',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::Pn74D3UCTmpNGWSZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3yQHeXjD4RM0F0PX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-product',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@importStore',
        'controller' => 'App\\Http\\Controllers\\ProductController@importStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/product',
        'where' => 
        array (
        ),
        'as' => 'generated::3yQHeXjD4RM0F0PX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0Oi7anHvltFF8zrp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@getProduct',
        'controller' => 'App\\Http\\Controllers\\ProductController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::0Oi7anHvltFF8zrp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DGmeIir9UmZvJWks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'proposal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@index',
        'controller' => 'App\\Http\\Controllers\\ProposalController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::DGmeIir9UmZvJWks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JDCzLLAaVMHNmQKm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'proposal/email/{proposal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@mailToClient',
        'controller' => 'App\\Http\\Controllers\\ProposalController@mailToClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::JDCzLLAaVMHNmQKm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ETqhrghbnhXYIwta' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'proposal/create/{relation?}/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@create',
        'controller' => 'App\\Http\\Controllers\\ProposalController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::ETqhrghbnhXYIwta',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2kHOzWo43xFNZtEo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'proposal/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@store',
        'controller' => 'App\\Http\\Controllers\\ProposalController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::2kHOzWo43xFNZtEo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PkUnDkbYQfpL0pPo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'proposal/edit/{proposal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@edit',
        'controller' => 'App\\Http\\Controllers\\ProposalController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::PkUnDkbYQfpL0pPo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YVQbSarp0Tu1EGQy' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'proposal/update/{proposal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@update',
        'controller' => 'App\\Http\\Controllers\\ProposalController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::YVQbSarp0Tu1EGQy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jG3AYUy0H8lPPtMu' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'proposal/destroy/{proposal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProposalController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::jG3AYUy0H8lPPtMu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FPaNvn9Be9YZDsS8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'proposal/proposal_pdf/{proposal}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@proposal_pdf',
        'controller' => 'App\\Http\\Controllers\\ProposalController@proposal_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/proposal',
        'where' => 
        array (
        ),
        'as' => 'generated::FPaNvn9Be9YZDsS8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::L1j3f5VZqrZeT78X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/proposal/getProduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@getProduct',
        'controller' => 'App\\Http\\Controllers\\ProposalController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::L1j3f5VZqrZeT78X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9uihPrQxJxSzuogb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/proposal/getCustomers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\ProposalController@getCustomers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::9uihPrQxJxSzuogb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::I4vJk4rS8wB1cixz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/proposal/getLeads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@getLeads',
        'controller' => 'App\\Http\\Controllers\\ProposalController@getLeads',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::I4vJk4rS8wB1cixz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GrANiJkiU2uTmq2P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/proposal/getProposalProducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\ProposalController@getProposalProducts',
        'controller' => 'App\\Http\\Controllers\\ProposalController@getProposalProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::GrANiJkiU2uTmq2P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XnHTeSvZZZ5uVH0W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@index',
        'controller' => 'App\\Http\\Controllers\\ProjectController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::XnHTeSvZZZ5uVH0W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XSZ6eQYdwHzWf4gH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'project/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@create',
        'controller' => 'App\\Http\\Controllers\\ProjectController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::XSZ6eQYdwHzWf4gH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xkGqRo3RcvsNCrXu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'project/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::xkGqRo3RcvsNCrXu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WeSTz3VS3N7mQhpF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'project/edit/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::WeSTz3VS3N7mQhpF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kApbGlNFF9Es86oV' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'project/update/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::kApbGlNFF9Es86oV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::U2EovsEC88axsJQl' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'project/destroy/{project}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::U2EovsEC88axsJQl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5LANQjGicHOKoCYZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::5LANQjGicHOKoCYZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kvCodAw9V75CeS9X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice/email/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@mailToClient',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@mailToClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::kvCodAw9V75CeS9X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uFe39AXC5mahOR9d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice/create/{relation?}/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@create',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::uFe39AXC5mahOR9d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aim03RNBT5CDDbUz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'invoice/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::aim03RNBT5CDDbUz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1Mrw6S9fGuiNsJpT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'invoice/confirm_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@confirm_payment',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@confirm_payment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::1Mrw6S9fGuiNsJpT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SG2z65cb7N9ul5Nn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice/edit/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@edit',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::SG2z65cb7N9ul5Nn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tWsU4wW7CSP0v0Ev' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'invoice/update/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@update',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::tWsU4wW7CSP0v0Ev',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HUbv0fZqX3h7l2iB' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'invoice/destroy/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::HUbv0fZqX3h7l2iB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::h8pyGS6xaIfcHS4S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice/get_details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@get_pay_details',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@get_pay_details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::h8pyGS6xaIfcHS4S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uIX0aqplJgnUEnR7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'invoice/pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@pay_invoice',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@pay_invoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::uIX0aqplJgnUEnR7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Rm3ChikEqqtSqUaA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoice/invoice_pdf/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@invoice_pdf',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@invoice_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::Rm3ChikEqqtSqUaA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uDYjFx4uKMwDLm9k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/invoice/getProduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@getProduct',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::uDYjFx4uKMwDLm9k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3qCsQhhK4AcE1J0W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/invoice/getCustomers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@getCustomers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::3qCsQhhK4AcE1J0W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3ni6iE2A2qsmVCLN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/invoice/getInvoiceProducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\InvoiceController@getInvoiceProducts',
        'controller' => 'App\\Http\\Controllers\\InvoiceController@getInvoiceProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::3ni6iE2A2qsmVCLN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZRo87bft3DzU1ceS' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'estimate/toInvoice/{estimate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@convertToInvoice',
        'controller' => 'App\\Http\\Controllers\\EstimateController@convertToInvoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ZRo87bft3DzU1ceS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::o59JWCcOtcZQurmS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'estimate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@index',
        'controller' => 'App\\Http\\Controllers\\EstimateController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::o59JWCcOtcZQurmS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DZvxJk8TgJBjyYWN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'estimate/email/{estimate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@mailToClient',
        'controller' => 'App\\Http\\Controllers\\EstimateController@mailToClient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::DZvxJk8TgJBjyYWN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6FmCAvHS8Wr0m4rB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'estimate/create/{relation?}/{id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@create',
        'controller' => 'App\\Http\\Controllers\\EstimateController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::6FmCAvHS8Wr0m4rB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::17Aczhczb3h7XCYF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'estimate/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@store',
        'controller' => 'App\\Http\\Controllers\\EstimateController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::17Aczhczb3h7XCYF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aUMvwCMjAwYuuCTU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'estimate/edit/{estimate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@edit',
        'controller' => 'App\\Http\\Controllers\\EstimateController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::aUMvwCMjAwYuuCTU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vuRUMzX6jpoN8bY1' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'estimate/update/{estimate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@update',
        'controller' => 'App\\Http\\Controllers\\EstimateController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::vuRUMzX6jpoN8bY1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mt4Q8RJvBjUzivJE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'estimate/toInvoice/{estimate}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@convertToInvoice',
        'controller' => 'App\\Http\\Controllers\\EstimateController@convertToInvoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::mt4Q8RJvBjUzivJE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iRdvK2WrwKYraJO1' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'estimate/destroy/{estimate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@destroy',
        'controller' => 'App\\Http\\Controllers\\EstimateController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::iRdvK2WrwKYraJO1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TDBkAJx3MfYxrybx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'estimate/estimate_pdf/{estimate}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@estimate_pdf',
        'controller' => 'App\\Http\\Controllers\\EstimateController@estimate_pdf',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/estimate',
        'where' => 
        array (
        ),
        'as' => 'generated::TDBkAJx3MfYxrybx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HFwiXJ0E1gAf8Sik' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/estimate/getProduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@getProduct',
        'controller' => 'App\\Http\\Controllers\\EstimateController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::HFwiXJ0E1gAf8Sik',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0g3dl1DYB1qMCcBK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/estimate/getCustomers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\EstimateController@getCustomers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::0g3dl1DYB1qMCcBK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0OU75bvXzUoUafmu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/estimate/getestimateProducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\EstimateController@getestimateProducts',
        'controller' => 'App\\Http\\Controllers\\EstimateController@getestimateProducts',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::0OU75bvXzUoUafmu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Dmbw9shKS9QH5aKO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@index',
        'controller' => 'App\\Http\\Controllers\\TaskController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::Dmbw9shKS9QH5aKO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GKWCr0r7X67jBtQ6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/email/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@mailToStaff',
        'controller' => 'App\\Http\\Controllers\\TaskController@mailToStaff',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::GKWCr0r7X67jBtQ6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cMovQsHh6U2CZorR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@create',
        'controller' => 'App\\Http\\Controllers\\TaskController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::cMovQsHh6U2CZorR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vQXYoB8HBG0i8gYs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'task/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@store',
        'controller' => 'App\\Http\\Controllers\\TaskController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::vQXYoB8HBG0i8gYs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GptpxCB9aaIgV0rS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/edit/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@edit',
        'controller' => 'App\\Http\\Controllers\\TaskController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::GptpxCB9aaIgV0rS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::le0RMQzeCaRs9fQH' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'task/update/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@update',
        'controller' => 'App\\Http\\Controllers\\TaskController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::le0RMQzeCaRs9fQH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::a5eLeMRLRtGDbVJy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'task/destroy/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaskController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/task',
        'where' => 
        array (
        ),
        'as' => 'generated::a5eLeMRLRtGDbVJy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::18tJNkZOLRJtvIAN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/task/getCustomers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\TaskController@getCustomers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::18tJNkZOLRJtvIAN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9WuqnDGsGgAL64P8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/task/getLeads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@getLeads',
        'controller' => 'App\\Http\\Controllers\\TaskController@getLeads',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::9WuqnDGsGgAL64P8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ak8uE3gbOpN0Yiy2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@index',
        'controller' => 'App\\Http\\Controllers\\MediaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/media',
        'where' => 
        array (
        ),
        'as' => 'generated::Ak8uE3gbOpN0Yiy2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3LN02CSDQeKKZ2bk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'media/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@create',
        'controller' => 'App\\Http\\Controllers\\MediaController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/media',
        'where' => 
        array (
        ),
        'as' => 'generated::3LN02CSDQeKKZ2bk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cdbgP3sM9asGWrWD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'media/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@store',
        'controller' => 'App\\Http\\Controllers\\MediaController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/media',
        'where' => 
        array (
        ),
        'as' => 'generated::cdbgP3sM9asGWrWD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WsQtmW7TLivD57KE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'media/edit/{media}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@edit',
        'controller' => 'App\\Http\\Controllers\\MediaController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/media',
        'where' => 
        array (
        ),
        'as' => 'generated::WsQtmW7TLivD57KE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WpYi5eNtjrQBPxVj' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'media/update/{media}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@update',
        'controller' => 'App\\Http\\Controllers\\MediaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/media',
        'where' => 
        array (
        ),
        'as' => 'generated::WpYi5eNtjrQBPxVj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CkoaGpZ3cobyaWWA' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'media/destroy/{media}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@destroy',
        'controller' => 'App\\Http\\Controllers\\MediaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/media',
        'where' => 
        array (
        ),
        'as' => 'generated::CkoaGpZ3cobyaWWA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BqdwD9VpnPYWFRRb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/media/getCustomers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\MediaController@getCustomers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::BqdwD9VpnPYWFRRb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ac7l5BHWSO4HLlgy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/media/getLeads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\MediaController@getLeads',
        'controller' => 'App\\Http\\Controllers\\MediaController@getLeads',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::ac7l5BHWSO4HLlgy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u1rlNAZEJfk8s39m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reminder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@index',
        'controller' => 'App\\Http\\Controllers\\ReminderController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::u1rlNAZEJfk8s39m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wScUl0gGAnCeOUKO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reminder/email/{reminder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@mailToStaff',
        'controller' => 'App\\Http\\Controllers\\ReminderController@mailToStaff',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::wScUl0gGAnCeOUKO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uWCGduR4eBHS1G6W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reminder/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@create',
        'controller' => 'App\\Http\\Controllers\\ReminderController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::uWCGduR4eBHS1G6W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::95qQ0fOiF7BNDo0m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reminder/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@store',
        'controller' => 'App\\Http\\Controllers\\ReminderController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::95qQ0fOiF7BNDo0m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8eMf4sO96cGN5NkK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reminder/edit/{reminder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@edit',
        'controller' => 'App\\Http\\Controllers\\ReminderController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::8eMf4sO96cGN5NkK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Wbt8buqERF9Kkr4z' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'reminder/update/{reminder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@update',
        'controller' => 'App\\Http\\Controllers\\ReminderController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::Wbt8buqERF9Kkr4z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aO8ZAcQrb6E4DSeW' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'reminder/updateNotification/{reminder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@updateNotification',
        'controller' => 'App\\Http\\Controllers\\ReminderController@updateNotification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::aO8ZAcQrb6E4DSeW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Z3GjuehN1VGSIcUb' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'reminder/destroy/{reminder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@destroy',
        'controller' => 'App\\Http\\Controllers\\ReminderController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/reminder',
        'where' => 
        array (
        ),
        'as' => 'generated::Z3GjuehN1VGSIcUb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LMXyB80TbBqYntHD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reminder/getCustomers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@getCustomers',
        'controller' => 'App\\Http\\Controllers\\ReminderController@getCustomers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::LMXyB80TbBqYntHD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::84nSm5vWKmBdiMe1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reminder/getLeads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\ReminderController@getLeads',
        'controller' => 'App\\Http\\Controllers\\ReminderController@getLeads',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/api',
        'where' => 
        array (
        ),
        'as' => 'generated::84nSm5vWKmBdiMe1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-user',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'users.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6mpWfor6EUs3kDOk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-user',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::6mpWfor6EUs3kDOk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::I66N3cZ9h3AjnP3G' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-user',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::I66N3cZ9h3AjnP3G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hELH97bWiKS9bDau' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/destroy/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-user',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::hELH97bWiKS9bDau',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bL9JWnpIqmMSzAsE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-user',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@import',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@import',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::bL9JWnpIqmMSzAsE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PISCAvYXJzvlwhXv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-user',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@importStore',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@importStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::PISCAvYXJzvlwhXv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8IVQBxLFX6oCQh1I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'password.confirm',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@userProfile',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@userProfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::8IVQBxLFX6oCQh1I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lf9pBSQIuuB0rVOl' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@updatePorfile',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@updatePorfile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::lf9pBSQIuuB0rVOl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pQRHw0D46K9EXsKi' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/update_password/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\UserController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Users\\UserController@updatePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::pQRHw0D46K9EXsKi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ptQ2y7lBMHEW8lrB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:view-role',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Users\\RoleController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ptQ2y7lBMHEW8lrB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cSkX1soE5qaLCZci' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/role/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:create-role',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Users\\RoleController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cSkX1soE5qaLCZci',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IS0MHyLfL5XfOTcn' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-role',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Users\\RoleController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::IS0MHyLfL5XfOTcn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DgsFBmnLbaMKS0lC' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/role/default/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:update-role',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\RoleController@default',
        'controller' => 'App\\Http\\Controllers\\Users\\RoleController@default',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DgsFBmnLbaMKS0lC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fPUao9MzVof5JMAR' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/role/destroy/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:delete-role',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Users\\RoleController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::fPUao9MzVof5JMAR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3vXeXivOO9MkzJCr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/role/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\PermissionsController@index',
        'controller' => 'App\\Http\\Controllers\\Users\\PermissionsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::3vXeXivOO9MkzJCr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'post_role_permissions' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/role/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\PermissionsController@store',
        'controller' => 'App\\Http\\Controllers\\Users\\PermissionsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'post_role_permissions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kti4Z69fQYzXaP2w' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/role/permissions/{module}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\PermissionsController@update',
        'controller' => 'App\\Http\\Controllers\\Users\\PermissionsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::kti4Z69fQYzXaP2w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::d8LlmDPPMQU0EDsv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/role/permissions/roleid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\PermissionsController@permissionsByUser',
        'controller' => 'App\\Http\\Controllers\\Users\\PermissionsController@permissionsByUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::d8LlmDPPMQU0EDsv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'permissions_role_id' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/role/permissions/roleid/{role?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Users\\PermissionsController@getPermissionsByUser',
        'controller' => 'App\\Http\\Controllers\\Users\\PermissionsController@getPermissionsByUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'permissions_role_id',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yGqsjPqm2BAG1gtF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\LoginController@index',
        'controller' => 'App\\Http\\Controllers\\Client\\LoginController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::yGqsjPqm2BAG1gtF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kR98mM3PS3eNVFkA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/password/forgot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\LoginController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Client\\LoginController@forgotPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::kR98mM3PS3eNVFkA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::46v6G1qs4g6waCNt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Client\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::46v6G1qs4g6waCNt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HfcfmYzh0GhyNCHp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\LoginController@forgotPasswordEmail',
        'controller' => 'App\\Http\\Controllers\\Client\\LoginController@forgotPasswordEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::HfcfmYzh0GhyNCHp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::A3hA3Ct3Srlqp1qG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\LoginController@passwordReset',
        'controller' => 'App\\Http\\Controllers\\Client\\LoginController@passwordReset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::A3hA3Ct3Srlqp1qG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SQGRfbMzsVGXscim' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\LoginController@setNewPassword',
        'controller' => 'App\\Http\\Controllers\\Client\\LoginController@setNewPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::SQGRfbMzsVGXscim',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DMtqf4ordFpXxO6b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\HomeController@home',
        'controller' => 'App\\Http\\Controllers\\Client\\HomeController@home',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::DMtqf4ordFpXxO6b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GHdbXsZIDnUDA6Wl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\HomeController@logout',
        'controller' => 'App\\Http\\Controllers\\Client\\HomeController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::GHdbXsZIDnUDA6Wl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SPjk9Rf9rw7De6C2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\HomeController@profile',
        'controller' => 'App\\Http\\Controllers\\Client\\HomeController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::SPjk9Rf9rw7De6C2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PeLYrwzflMZ3DjYD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\HomeController@profileUpdate',
        'controller' => 'App\\Http\\Controllers\\Client\\HomeController@profileUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::PeLYrwzflMZ3DjYD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XF1mOBMqZ81Wey4V' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/profile/update_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\HomeController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Client\\HomeController@updatePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::XF1mOBMqZ81Wey4V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ln4yrQW48NNHMmDU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/proposals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\ProposalController@index',
        'controller' => 'App\\Http\\Controllers\\Client\\ProposalController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::ln4yrQW48NNHMmDU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Xg9eU3YNndPjBVtP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\Client\\InvoiceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::Xg9eU3YNndPjBVtP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rAWT9NrpIIjKkPGv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/estimates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\EstimateController@index',
        'controller' => 'App\\Http\\Controllers\\Client\\EstimateController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::rAWT9NrpIIjKkPGv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::z56dG44S1T78y0FT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/estimate/toInvoice/{estimate}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\EstimateController@convertToInvoice',
        'controller' => 'App\\Http\\Controllers\\Client\\EstimateController@convertToInvoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::z56dG44S1T78y0FT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cHLZ7rVfEaoz4hpJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\MediaController@index',
        'controller' => 'App\\Http\\Controllers\\Client\\MediaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::cHLZ7rVfEaoz4hpJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FqLjIgwKTEZNuHMt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/invoice/get_details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\InvoiceController@get_pay_details',
        'controller' => 'App\\Http\\Controllers\\Client\\InvoiceController@get_pay_details',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::FqLjIgwKTEZNuHMt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pqzNAhIc1kurjt46' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'client/invoice/pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isClient',
        ),
        'uses' => 'App\\Http\\Controllers\\Client\\InvoiceController@pay_invoice',
        'controller' => 'App\\Http\\Controllers\\Client\\InvoiceController@pay_invoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/client',
        'where' => 
        array (
        ),
        'as' => 'generated::pqzNAhIc1kurjt46',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mxf6WtpUJa5pFQkR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'form/{token}',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\Office\\WebFormController@getForm',
        'controller' => 'App\\Http\\Controllers\\Office\\WebFormController@getForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::mxf6WtpUJa5pFQkR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::veTO4le8a0L8jSbZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'lead/webform/{token}',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\Lead\\LeadController@webToLeadForm',
        'controller' => 'App\\Http\\Controllers\\Lead\\LeadController@webToLeadForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::veTO4le8a0L8jSbZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SLVafGt8Nkib7Yrc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'envato',
      'action' => 
      array (
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":255:{@x07mwT6KxU7QJBnSO8qmjoHWWznXinDc7L+ZN/OwGBI=.a:5:{s:3:"use";a:0:{}s:8:"function";s:43:"function(){
    return \\view(\'envato\');
  }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000077073a8f0000000032524510";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::SLVafGt8Nkib7Yrc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3wpxvEtfiEqv3Whk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":870:{@5ElWwnJRRi/Ll+AxS2RLgiudF4GTLAfx6D8YHPDX68c=.a:5:{s:3:"use";a:0:{}s:8:"function";s:657:"function(){

  if (\\file_exists(\\STORAGE_PATH(\'INSTALLED\'))) {
      \\abort(\'403\', \'You have already initialized the installation process, delete the "INSTALLED" file from the app folder and try again.\');
  }else{
      \\file_put_contents(\\BASE_PATH(".env"), "APP_NAME=\'DevPremier CRM\' 
      APP_ENV=local
      APP_KEY=base64:RGNjN09HSjh2WWprU2I3MjQ4eElJR1FSQjZOZkVtODM=
      APP_DEBUG=true
      APP_LOG_LEVEL=debug
      APP_URL=http://localhost:8000");
      $artisan_op = [];
      \\array_push($artisan_op, \'.env generated in the root directory with default content!\');
      
      return \\view(\'installation.install\', \\compact(\'artisan_op\'));
  }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000770735700000000032524510";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::3wpxvEtfiEqv3Whk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KbnmIvu3Bg4imQdz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/steps',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\InstallController@install_steps',
        'controller' => 'App\\Http\\Controllers\\InstallController@install_steps',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::KbnmIvu3Bg4imQdz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::M0LcJIuRslwNmr4l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/submit',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\InstallController@save_install_steps',
        'controller' => 'App\\Http\\Controllers\\InstallController@save_install_steps',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::M0LcJIuRslwNmr4l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::M535pEbWxekOsWsu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/final',
      'action' => 
      array (
        'uses' => 'App\\Http\\Controllers\\InstallController@save_install_final',
        'controller' => 'App\\Http\\Controllers\\InstallController@save_install_final',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::M535pEbWxekOsWsu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
