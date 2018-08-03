<?php

/**
 * @file
 * This is the template file for the object page for audio file
 *
 * @TODO: add documentation about file and available variables
 */
?>

<div>
    <div class="page_description"><?php print $variables['lang_desc'];?></div>
    <div class="last_run">Last run at: <?php print $variables['last_run'];?></div>
    <div class='global_totals'>
        <?php foreach ($variables['global_totals'] as $global) :?>
            <div class='gloabl'>
                <div class='cmodel'><?php print $global['cmodel'] ?></div>
                <div class='total'><?php print $global['count'] ?></div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class='instGroup'>
        <?php foreach ($variables['inst_totals'] as $inst => $model_counts) : ?>
        <div class="inst_wrapper <?php print $inst ?>">
            <?php foreach ($model_counts as $itotal) : ?>
                <div class='cmodel_wrapper_inst'>
                    <div class="inst"><?php print $itotal['inst-label'] ?></div>
                    <div class='cmodel'><?php print $itotal['cmodel'] . ' ' ?></div>
                    <div class='total'><?php print $itotal['count'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
    </div>
    <div class='tableStats'>
        <div class='download form-wrapper'>
            <form>
                <?php print drupal_render_children($variables['dlform']); ?>
                <?php echo drupal_render($variables['dlform']['form_build_id']);?>
                <?php echo drupal_render($variables['dlform']['form_id']);?>
                <?php echo drupal_render($variables['dlform']['actions']);?>
                <?php echo drupal_render($variables['dlform']['form_tokens']);?>
            </form>
        </div>
        <div class='filter form-wrapper'>
            <form>
                <?php print drupal_render_children($variables['filter_form']); ?>
                <?php echo drupal_render($variables['filter_form']['form_build_id']);?>
                <?php echo drupal_render($variables['filter_form']['form_id']);?>
                <?php echo drupal_render($variables['filter_form']['actions']);?>
                <?php echo drupal_render($variables['filter_form']['form_tokens']);?>
            </form>
        </div>
        <div class='ics_table_collapse form-wrapper' id='edit-table-results'>
            <legend>
                <span><?php print $variables['lang_table'] ?></span>
            </legend>
            <div class='ics_table_explain'><?php print $variables['lang_table_desc'] ?></div>
            <div>
                <div class='column'>
                    <div class='header'>Institution/Sub-institution</div>
                    <?php foreach  ($variables['latest'] as $record) :?>
                      <div class='row <?php print $record['inst-id']; print $record['cmodel-id'] ?>'><?php print $record['inst-label']; ?></div>
                </div>
                <div class='column'>
                  <div class='header'>Cmodel</div>
                        <div class='row <?php print $record['cmodel-id']; ?>'><?php print $record['cmodel-label']; ?></div>
                  </div>
                <div class='column'>
                    <div class='header'>Count</div>
                                <div class='row <?php print $record['cmodel-id']; print $record['inst-id'] ?>'><?php print $record['count']; ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
