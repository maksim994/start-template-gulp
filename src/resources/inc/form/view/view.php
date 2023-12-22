<?php $goal = isset( $goal ) ? $goal : "form";?>
<form name="<?php echo $goal; ?>" class="<?=$com . ' ' . $form_params['class']; ?>" encoding="multipart/form-data" role="form" data-toggle="validator" data-goal="<?=$goal;?>">  
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
            $input_class = "input__{$type} {$com}__input form-control";
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
                     <div class="<?=$com;?>__item">
                        <?php if ( isset($options["label"]) ) { ?>
                            <label for="<?=$goal.'-'.$name;?>" class="<?=$com;?>__label"><?=$options["label"]; ?></label>
                        <?php } ?>
                        
                        <textarea type="<?=$type;?>" name="<?=$name;?>" id="<?=$name;?>" class="<?=$input_class;?>" placeholder="<?=$options["placeholder"];?>" <?=$required;?>></textarea>
                        
                     </div>
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
                            <label for="<?=$goal.'-'.$name;?>" class="<?=$com;?>__label"><?=$options["label"]; ?></label>
                        <?php } ?>

                        <input 
                            type="<?=$type;?>" 
                            name="<?=$name;?>" 
                            value="<?=$options["value"];?>"
                            id="<?=$goal.'-'.$name;?>" 
                            class="<?=$input_class;?>" 
                            placeholder="<?=$options["placeholder"];?>" <?=$required;?>
                        >
                    
                    </div>
                    <?php break;
                }
            } ?>

            <div class="<?=$com;?>__item c-form__item-button">
                <button name="web_form_submit" type="submit" class="lk-btn--js btn--submit <?=$com;?>__btn"><?=$btn;?></button>
            </div>
    </div>   
    <div class="<?=$com;?>__conf d-flex align-items-center justify-content-center">
        <div class="<?=$com;?>__conf-icon">
            <svg width="15" height="15">
                <use xlink:href="#lock"></use>
            </svg>
        </div>
        <div class="<?=$com;?>__conf-text">Мы гарантируем конфиденциальность данных</div>
    </div>
</form>