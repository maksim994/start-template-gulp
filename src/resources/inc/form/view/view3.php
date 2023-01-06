<?php $goal = isset( $goal ) ? $goal : "form3";?>
<form name="<?php echo $goal; ?>" class="<?=$com . ' ' . $form_params['class']; ?>" encoding="multipart/form-data" role="form" data-callibri_parse_form="true" data-toggle="validator" data-goal="<?=$goal;?>">  
    <div class="<?php echo $com?>__content-top">
        <?php if ( !empty($title) ) :?>
            <div class="<?=$com;?>__title"><?php echo $title;?></div>
        <?php endif; ?>
    </div>
    <div class="<?php echo $com?>__content">
        <?php if ( !empty($desc) ) : ?>
            <div class="<?=$com;?>__descr"><?php echo $desc;?></div>
        <?php endif; ?>        

        <?php foreach ($fields as $name => $options) {

            $type = $options["type"];
            $input_class = "input__{$type} {$com}__input c-form__input--{$name}";
            $required = ''; 

            if ( ! $form_params['show_text_error'] ) 
                $input_class .= ' no-text-error';

            if ( $options["required"] ) 
                $required = ' aria-required="true" required';

                switch ($type) {
                    case 'file': ?>
                        <label class="<?=$com;?>__label-foto">
                            <input type="<?=$type;?>" name="<?=$name;?>" id="js-<?=$name;?>" class="<?=$input_class;?>" placeholder="<?=$options["placeholder"];?>" readonly <?=$required;?>>
                            Загрузить файл
                        </label>
                    <?php break;

                    case 'textarea': ?>
                        <textarea type="<?=$type;?>" name="<?=$name;?>" id="<?=$name;?>" class="<?=$input_class;?>" placeholder="<?=$options["placeholder"];?>" <?=$required;?>></textarea>
                    <?php break;

                    case 'checkbox': ?>
                        <div class="<?=$com;?>__item <?php echo $com.'__'.$type;?>" >
                            <input type="<?=$type;?>" name="<?=$name;?>" value="<?=$value;?>" id="<?=$name;?>" class="<?=$input_class;?>" placeholder="<?=$options["placeholder"];?>" <?=$required;?>>
                            <label class="<?=$com;?>__label"><?=$options["label"]; ?></label>
                        </div>
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

            <div class="<?=$com;?>__item c-form__item-button">
                <button name="web_form_submit" type="submit" class="lk-btn--js btn--submit <?=$com;?>__btn"><?=$btn;?></button>
            </div>
    </div>   
    <div class="<?=$com;?>__conf">
        <div class="<?=$com;?>__conf-icon">
            <svg stroke-width="" stroke="" fill="#DD9957" width="15" height="15">
                <use xlink:href="img/sprite.svg#lock"></use>
            </svg>
        </div>
        <div class="<?=$com;?>__conf--text">Мы гарантируем конфиденциальность данных</div>
    </div>
</form>