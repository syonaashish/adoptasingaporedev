<div class="view">

    <h2><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id' => $data->id)); ?></h2>

    <?php
    if (!empty($data->content)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo nl2br($data->content);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
</div>