<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
        <div class="comments-title-box">
            <div class="comments-title-line"></div>
            <span class="comments-title"><?php $this->commentsNum(_t('精彩评论')); ?></span>
        </div>
    <?php $comments->listComments(); ?>
    <?php $comments->pageNav('上一页', '下一页'); ?>
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h3 id="response"><?php _e('发表评论：'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
    			<input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required  placeholder="昵称（必填）"/>
    		</p>
    		<p>
    			<input type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> placeholder="邮箱（用于展示Gravatar头像<?php if ($this->options->commentsRequireMail): ?> 必填<?php endif; ?>） "/>
    		</p>
    		<p>
    			<input type="url" name="url" id="url" class="text" placeholder="网站（http:// <?php if ($this->options->commentsRequireURL): ?> 必填<?php endif; ?>） " value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" required placeholder="不吐不快..."><?php $this->remember('text'); ?></textarea>
            </p>
            <?php
            if(isset($this->options->plugins['activated']['Smilies']))
                Smilies_Plugin::output();
            ?>
    		<p>
                <button type="submit" class="submit"><?php _e('评论'); ?></button>
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
