<div class="view">

    <h2><?php echo CHtml::encode($data->getAttributeLabel('levelName')); ?>:</h2>
<h2><?php echo CHtml::link(CHtml::encode($data->levelName), array('view', 'levelID' => $data->levelID)); ?></h2>

    <?php
    if (!empty($data->areaType)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('areaType')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->areaType);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->trashItems)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('trashItems')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->trashItems);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->timerCountDown)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('timerCountDown')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->timerCountDown);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->subLevel)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('subLevel')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->subLevel);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->bonusPoint)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('bonusPoint')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->bonusPoint);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
</div>