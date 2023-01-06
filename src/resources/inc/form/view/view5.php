<?php $goal = isset( $goal ) ? $goal : "form5";?>
<form name="special_offer" class="<?=$com . ' ' . $form_params['class']; ?>" encoding="multipart/form-data" role="form" data-callibri_parse_form="true" data-toggle="validator" data-goal="<?=$goal;?>">  
    <div class="<?=$com;?>__content">
        <?php if (!empty($title) ) { ?>
            <div class="<?=$com;?>__inner">
                <div class="<?=$com;?>__title title"><?=$title;?></div>
            </div>
        <?php } ?>

        <?php if (!empty($desc) ) { ?>
            <div class="<?=$com;?>__inner">
                <div class="<?=$com;?>__descr desc"><?=$desc;?></div>
            </div>
        <?php } ?>

        <div class="<?=$com;?>__inner">
            <? foreach ($fields as $name => $options) {

                $type = $options["type"];
                $input_class = "{$com}__input c-form__input--{$name}";
                $required = ''; 

                if ( ! $form_params['show_text_error'] ) 
                    $input_class .= ' no-text-error';

                if ( $options["required"] ) 
                    $required = ' aria-required="true" required';

                    switch ($type) {
                        case 'file': ?>
                            <label class="<?=$com;?>__label-foto">
                                <input type="<?=$type;?>" name="<?=$name;?>" id="js-<?=$name;?>" class="<?=$input_class;?>" placeholder="<?=$options["placeholder"];?>" <?=$required;?>>
                                Загрузить файл
                            </label>
                        <?php break;

                        case 'textarea': ?>
                            <textarea type="<?=$type;?>" name="<?=$name;?>" id="<?=$name;?>" class="<?=$input_class;?>" placeholder="<?=$options["placeholder"];?>" <?=$required;?>></textarea>
                        <?php break;

                        case 'select': ?>
                            <select name="<?=$name;?>" class="<?=$com;?>__<?=$type;?>" id="js-<?=$name;?>" <?=$required;?>>
                                <option>Выбрать ...</option>
                                <?php foreach($options["values"] as $value => $text) { ?>
                                    <option placeholder="<?=$value;?>"><?=$text;?></option>
                                <?php } ?>
                            </select>
                        <?php break;

                        case 'hidden': ?>
                            <input type="hidden" name="<?=$name;?>" value="<?=$value;?>" id="<?=$name;?>">
                        <?php break;
                            
                        default: ?>
                        <div class="<?=$com;?>__item">
                            <?php if ( isset($options["label"]) ) { ?>
                                <label class="<?=$com;?>__label"><div class="<?=$com;?>__input-title"> <?=$options["label"]; ?></div>
                            <?php } ?>

                                <input type="<?=$type;?>" name="<?=$name;?>" value="<?=$value;?>" id="<?=$name;?>" class="<?=$input_class;?>" placeholder="<?=$options["placeholder"];?>" <?=$required;?>>
                            
                            <?php if ( isset($options["label"]) ) { ?>
                                </label>
                            <?php } ?>
                        </div>
                        <?php break;
                    }
            } ?>


            <div class="<?=$com;?>__item form_button">
                <button name="web_form_submit" type="submit" class="lk-btn--js btn btn--submit <?=$com;?>__btn <?=$com;?>__btn--tm1"><?=$btn;?></button>
            </div>    
            
            <div class="<?=$com;?>__item">
                <div class="<?=$com;?>__conf">
                    <img src="/img/lock.png" alt="" class="<?=$com;?>__conf-img">
                    Мы гарантируем конфиденциальность данных
                </div>
            </div>
                
            <div id="js-msg-submit" class="h3 d-none <?=$com;?>__msg g-form-msg"></div>
            
    	</div>
    </div>
</form>