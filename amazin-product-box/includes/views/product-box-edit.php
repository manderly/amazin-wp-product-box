<div class="wrap">
    <h1><?php _e( 'Edit Product Box', 'apb' ); ?></h1>

    <?php
    $item = apb_get_product_box( $_GET['id'] );
    $stripped = stripslashes($item->post_content);
    $content = json_decode($stripped, true);
    ?>

    <form action="" method="post">

        <table class="form-table">
            <tbody>
                <tr class="row-Product Name">
                    <th scope="row">
                        <label for="Product-Name"><?php _e( 'Product-Name', 'apb' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="Product-Name" id="Product-Name" class="regular-text" placeholder="<?php echo esc_attr( '', 'apb' ); ?>" value="<?php echo esc_attr( $item->post_title ); ?>" required="required" />
                        <span class="description"><?php _e('Name help', 'apb' ); ?></span>
                    </td>
                </tr>
                <tr class="row-Tagline">
                    <th scope="row">
                        <label for="Tagline"><?php _e( 'Tagline', 'apb' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="Tagline" id="Tagline" class="regular-text" placeholder="<?php echo esc_attr( '', 'apb' ); ?>" value="<?php echo esc_attr( $content['productTagline'] ); ?>" required="required" />
                        <span class="description"><?php _e('Tagline help', 'apb' ); ?></span>
                    </td>
                </tr>
                <tr class="row-Description">
                    <th scope="row">
                        <label for="Description"><?php _e( 'Description', 'apb' ); ?></label>
                    </th>
                    <td>
                        <textarea name="Description" id="Description"placeholder="<?php echo esc_attr( '', 'apb' ); ?>" rows="5" cols="30" required="required"><?php echo esc_textarea( $content['productDescription'] ); ?></textarea>
                        <p class="description"><?php _e('Description help', 'apb' ); ?></p>
                    </td>
                </tr>
                <tr class="row-URL">
                    <th scope="row">
                        <label for="URL"><?php _e( 'URL', 'apb' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="URL" id="URL" class="regular-text" placeholder="<?php echo esc_attr( '', 'apb' ); ?>" value="<?php echo esc_attr( $content['productUrl'] ); ?>" required="required" />
                        <span class="description"><?php _e('Enter your affiliate link', 'apb' ); ?></span>
                    </td>
                </tr>
                <tr class="row-buttonText">
                    <th scope="row">
                        <label for="Button-Text"><?php _e( 'Button-Text', 'apb' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="Button-Text" id="Button-Text" class="regular-text" placeholder="<?php echo esc_attr( '', 'apb' ); ?>" value="<?php echo esc_attr( $content['productButtonText'] ); ?>" required="required" />
                        <span class="description"><?php _e('Enter your button text', 'apb' ); ?></span>
                    </td>
                </tr>
             </tbody>
        </table>

        <input type="hidden" name="field_id" value="<?php echo $item->ID; ?>">

        <?php wp_nonce_field( '' ); ?>
        <?php submit_button( __( 'Update Product Box', 'apb' ), 'primary', 'submit_product_box' ); ?>

    </form>
</div>