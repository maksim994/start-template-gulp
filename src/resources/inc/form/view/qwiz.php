<?php $goal = isset( $goal ) ? $goal : "form5";?>
<form name="qwiz" class="qwiz" encoding="multipart/form-data" role="form" data-toggle="validator" data-goal="<?=$goal;?>">

    <div class="qwiz-progress">
        <div class="qwiz-progress__inner">
            <span class="qwiz-progress__procent">16%</span>
        </div>
    </div>

    <div class="qwiz-step">
        <?php $i = 0; ?>
        <?php foreach ($step as $stepNumber => $steps): ?>
            <?php $i++;?>
            <div id="<?php echo $stepNumber?>" class="qwiz-step__item <?php echo $steps['type'];?>" role="group">
                <?php if( $steps['title'] ): ?>
                    <div class="qwiz-item__title"><?php echo $steps['title'];?></div>
                <?php endif; ?>

                <?php if( $steps['sub-title'] ): ?>
                    <div class="qwiz-item__subtitle"><?php echo $steps['sub-title'];?></div>
                <?php endif; ?>

                <?php switch ($steps['type']) { 
                    case 'answer': ?>
                        <div class="qwiz-answer__container">
                        <?php foreach ($steps['fields'] as $name => $options) : ?>
                            <?php
                                $type = $options["type"];
                                $class__item = "qwiz-answer__item qwiz-answer__item-type-{$type}";
                                ?>

                            <div class="<?php echo $class__item;?>">
                                <?php switch ($type) {
                                    case 'checkbox': ?>
                                        
                                        <div class="qwiz-answer__item-title">
                                            
                                            <label for="<?php echo $stepNumber.'-'.$name?>" class="checkbox-label">
                                                <span class="qwiz-answer__item-images" style="background-image: url(<?php echo $options['images']?>);"></span>
                                                <input
                                                type="<?php echo $type?>"
                                                name="<?php echo $stepNumber?>"
                                                id="<?php echo $stepNumber.'-'.$name?>"
                                                class="hidden input checkbox-btn"
                                                value="<?php echo $options['label'];?>"
                                                tabindex="-1"
                                            >
                                                <span class="checkbox-psevdo"></span>
                                                <?php echo $options['label'];?>
                                            </label>
                                        </div>
                                        <?php break;?>

                                    <?php case 'radio': ?>
                                        
                                        <div class="qwiz-answer__item-title">
                                            <label for="<?php echo $stepNumber.'-'.$name?>" class="radio-label">
                                            <span class="qwiz-answer__item-images" style="background-image: url(<?php echo $options['images']?>);"></span>
                                            <input
                                                type="<?php echo $type?>"
                                                name="<?php echo $stepNumber?>"
                                                id="<?php echo $stepNumber.'-'.$name?>"
                                                class="hidden input radio-btn"
                                                value="<?php echo $options['label'];?>"
                                                tabindex="-1"
                                            >
                                                <span class="radio-psevdo"></span>
                                                <?php echo $options['label'];?>
                                            </label>
                                        </div>
                                        <?php break;?>
                                <?php } ?>
                            </div>
                        <?php endforeach; ?>
                        </div>
                        <?php break;?>

                    <?php case 'form': ?>
                        <div class="qwiz-final">
                            <div class="qwiz-final-images">
                                <img src="<?php echo $steps['images'];?>" alt="">
                            </div>
                            <div class="qwiz-final-form">
                                <?php foreach ($steps['fields'] as $name => $options) {
                                    switch ( $options["type"] ) {
                                        case 'checkbox': ?>
                                            <div class="qwiz-final-check">
                                                <input class="form-check-input" type="checkbox" value="" id="<?php echo $name;?>">
                                                <label class="form-check-label" for="<?php echo $name;?>"><?php echo $options['label'] ?></label>
                                            </div>
                                            <?php break;

                                        case 'hidden': ?>
                                            <input type="hidden" name="<?php echo $name;?>" value="<?echo $options['value'];?>" id="<?=$name;?>">
                                            <?php break;

                                        default: ?>
                                            <div class="qwiz-final-item">
                                                <label for="<?php echo $name;?>" class="qwiz-final-label"><?php echo $options["label"];?></label>
                                                <input 
                                                    type="<?php echo $options["type"];?>" 
                                                    class="qwiz-final-input <?php if ($options["required"]) {echo  'field-validate';}?>" 
                                                    id="<?php echo $name;?>"
                                                    name="my-<?php echo $name;?>"
                                                    placeholder="<?php echo $options["placeholder"];?>"
                                                    <?php //if ($options["required"]) {echo  'required';}?>
                                                >
                                            </div>
                                            <?php break;
                                    }
                                }?>

                                <input type="submit" value="Отправить заявку" class="btn qwiz-final-btn">
                            </div>
                        </div>
                    <?php break;
                } ?>
                
            </div>
        <?php endforeach; ?>
    </div>
    <div class="qwiz__footer">
        <button type="button" class="btn qwiz-btn__prev" data-qwiz-btn="prev">Вернуться на шаг назад</button>
        <button type="button" class="btn qwiz-btn__next" data-qwiz-btn="next">Далее</button>
        <!-- <button type="button" class="btn btn-primary sendBtn d-none" id="send">Send</button> -->
    </div>
</form>