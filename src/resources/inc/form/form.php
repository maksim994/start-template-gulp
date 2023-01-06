<?php
define("FORM", __DIR__ . DIRECTORY_SEPARATOR);

function form($view = '', $model = 1) {
    if ($model === 'qwiz'){
        $dir =  FORM . 'model/'.$model.'.json';
    } else {
        $dir =  FORM . 'model/model'.$model.'.json';
    }

    $data_form = file_get_contents($dir);
    $data_form = json_decode($data_form, true);

    if(!is_null($data_form)) {
        foreach($data_form as $form_key => $form_val){
            $$form_key = $form_val;
        }
    }

    $form_params = array(
        'compontent' => 'c-form',
        'class' => 'form-validate',
        'show_text_error' => false,
    );

    //$form_class = 'form-validate';

    $com = $form_params['compontent'];

    switch ($view) {
        case 1:
            $form_params['class'] .= ' --white';
            //$com .= '1';
            require FORM . '/view/view.php';
        break;

        case 2:
            $form_params['class'] .= ' --white';
            //$com .= '2';
            require FORM . '/view/view2.php';
        break;

        case 3:
            //$com .= '3';
            require FORM . '/view/view3.php';
        break;

        case 4:
            $com .= '4';
            require FORM . '/view/view4.php';
        break;

        case 5:
            $com .= '5';
            require FORM . '/view/view5.php';
        break;

        case 'qwiz':
            require FORM . '/view/qwiz.php';
            break;
        default: 
            require FORM . '/view/view.php';
        break;
    }
} ?>