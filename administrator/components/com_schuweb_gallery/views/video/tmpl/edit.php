<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Load the tooltip behavior.
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.keepalive');
JHtml::_('formbehavior.chosen', 'select');
?>
<script type="text/javascript">
    Joomla.submitbutton = function (task) {
        if (task == 'video.cancel' || document.formvalidator.isValid(document.id('video-form'))) {
            Joomla.submitform(task, document.getElementById('video-form'));
        }
    }
</script>

<form action="<?php echo JRoute::_('index.php?option=com_schuweb_gallery&layout=edit&id=' . (int)$this->item->id); ?>"
      method="post" name="adminForm" id="video-form" class="form-validate  form-horizontal">
    <div class="row-fluid">
        <!-- Begin Content -->
        <div class="span10 form-horizontal">
            <fieldset>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details"
                                          data-toggle="tab"><?php echo JText::_('SCHUWEB_GALLERY_DETAILS');?></a>
                    </li>
                    <li><a href="#publishing"
                           data-toggle="tab"><?php echo JText::_('SCHUWEB_GALLERY_PUBLISHING_DETAILS');?></a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Begin Tabs -->
                    <div class="tab-pane active" id="details">
                        <div class="control-group">
                            <div class="control-label">
                                <?php echo $this->form->getLabel("video_id"); ?>
                            </div>
                            <div class="controls">
                                <?php echo $this->form->getInput("video_id"); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="control-label">
                                <?php echo $this->form->getLabel("video_service"); ?>
                            </div>
                            <div class="controls">
                                <?php echo $this->form->getInput("video_service"); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="control-label">
                                <?php echo $this->form->getLabel('id'); ?>
                            </div>
                            <div class="controls">
                                <?php echo $this->form->getInput('id'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="publishing">
                        <?php foreach ($this->form->getFieldset('publish') as $field): ?>
                        <div class="control-group">
                            <div class="control-label">
                                <?php echo $field->label; ?>
                            </div>
                            <div class="controls">
                                <?php echo $field->input; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </fieldset>

            <input type="hidden" name="task" value=""/>
            <?php echo JHtml::_('form.token'); ?>
        </div>
        <!-- Begin Sidebar -->
        <div class="span2">
            <h4><?php echo JText::_('JDETAILS');?></h4>
            <hr/>
            <fieldset class="form-vertical">
                <div class="control-group">
                    <div class="controls">
                        <?php echo $this->form->getValue('name'); ?>
                    </div>
                </div>

                <div class="control-group">
                    <div class="control-label">
                        <?php echo $this->form->getLabel('state'); ?>
                    </div>
                    <div class="controls">
                        <?php echo $this->form->getInput('state'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <div class="control-label">
                        <?php echo $this->form->getLabel('sticky'); ?>
                    </div>
                    <div class="controls">
                        <?php echo $this->form->getInput('sticky'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <div class="control-label">
                        <?php echo $this->form->getLabel('language'); ?>
                    </div>
                    <div class="controls">
                        <?php echo $this->form->getInput('language'); ?>
                    </div>
                </div>
            </fieldset>
        </div>
        <!-- End Sidebar -->
</form>
