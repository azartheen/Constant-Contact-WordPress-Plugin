<div class="alignright"><a href="<?php echo esc_url( add_query_arg('refresh', 'campaigns') ); ?>" class="button button-secondary alignright button-small"><?php esc_html_e('Refresh Campaigns', 'ctct'); ?></a></div>

<table class="wp-list-table widefat fixed striped ctct_table" cellspacing="0">
    <thead>
        <tr>
            <th scope="col" id="date" class="manage-column column-primary column-name" style=""><?php esc_html_e('Name', 'ctct'); ?></th>
            <th scope="col" id="status" class="manage-column column-status" style=""><?php esc_html_e('Status', 'ctct'); ?></th>
            <th scope="col" id="contact-count" class="manage-column column-modified-date" style=""><?php esc_html_e('Modified Date', 'ctct'); ?></th>
            <th scope="col" id="view" class="manage-column column-view" style=""><?php esc_html_e('View Campaign', 'ctct'); ?></th>
        </tr>
    </thead>
    <tbody>
<?php

if(empty($Campaigns)) {
    ?>
    <tr><td colspan="4"><h3><?php esc_html_e('No results.', 'ctct'); ?></h3></td></tr>
    <?php
} else {
    foreach ($Campaigns as $result ) {
        $alt = empty( $alt ) ? 'class="alt"' : '';
        ?>
            <tr <?php echo $alt; ?>>
                <td class="manage-column column-title column-primary">
                    <strong><a href="<?php echo esc_url( add_query_arg(array('view' => $result->id), remove_query_arg('add'))); ?>"><?php echo esc_html($result->name); ?></a></strong>
                    <button type="button" class="toggle-row"><span class="screen-reader-text"><?php esc_html_e('Show more details', 'ctct'); ?></span></button>
                </td>
                <td class="manage-column" data-colname="<?php esc_attr_e( 'Status', 'ctct' ); ?>"><?php echo ucwords( strtolower( esc_html( $result->status ) ) ); ?></td>
                <td class="manage-column" data-colname="<?php esc_attr_e( 'Modified Date', 'ctct' ); ?>"><?php echo esc_html( kws_format_date($result->modified_date) ); ?></td>
                <td class="manage-column" data-colname="<?php esc_attr_e( 'View ', 'ctct' ); ?>">
		            <div class="button-group">
                        <a href="https://ui.constantcontact.com/rnavmap/evaluate.rnav/?activepage=ecampaign.view&amp;pageName=ecampaign.view&amp;agent.uid=<?php echo esc_attr( $result->id ); ?>&amp;action=edit" class="button button-secondary" target="_blank" title="<?php printf(esc_html__('View "%s" on ConstantContact.com', 'ctct'), $result->name ); ?>" rel="external"><?php esc_html_e( 'View', 'ctct'); ?> <span class="dashicons dashicons-external"></span></a>
		            </div>
                </td>
            </tr>
        <?php
    }
}
?>
    </tbody>
</table>