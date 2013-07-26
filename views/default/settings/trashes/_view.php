<div class="view">

    <h2><?php echo CHtml::encode($data->getAttributeLabel('trashName')); ?>:</h2>
<h2><?php echo CHtml::link(CHtml::encode($data->trashName), array('view', 'trashID' => $data->trashID)); ?></h2>

    <?php
    if (!empty($data->trashImage)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('trashImage')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->trashImage);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
</div>