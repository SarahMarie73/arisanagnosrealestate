<p><?php _e('Please authenticate your subscriber account by clicking the link below.', $this -> plugin_name); ?></p>
<p><a href="<?php echo $Html -> retainquery('method=loginauth&email=' . $email . '&subscriberauth=' . $subscriberauth, $this -> get_managementpost(true)); ?>"><?php _e('Authenticate Email Address Now', $this -> plugin_name); ?></a></p>
<p><?php _e('Once you authenticate, you can manage your subscriptions and additional subscriber information.', $this -> plugin_name); ?></p>