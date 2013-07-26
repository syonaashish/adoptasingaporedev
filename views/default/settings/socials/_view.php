<div class="view">

    <h2><?php echo CHtml::encode($data->getAttributeLabel('socailName')); ?>:</h2>
<h2><?php echo CHtml::link(CHtml::encode($data->socailName), array('view', 'socialID' => $data->socialID)); ?></h2>

    <?php
    if (!empty($data->icon)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('icon')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->icon);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->body)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('body')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->body);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->headline)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('headline')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->headline);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
</div>