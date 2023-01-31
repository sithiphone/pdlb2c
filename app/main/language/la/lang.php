<?php
return [
    'site_title' => '%s - %s',
    'site_copyright' => '&copy; %s %s - ',

    'text_free' => 'ຟຣີ',
    'text_equals' => ' = ',
    'text_plus' => '+',
    'text_minus' => '-',
    'text_minutes' => 'ນາທີ',
    'text_min' => 'min',
    'text_my_account' => 'ບັນຊີຂ້ອຍ',
    'text_information' => 'ຂໍ້ມູນ',
    'text_follow_us' => 'ຕິດຕາມພວກເຮົາໄດ້ທີ່',

    'text_maintenance_enabled' => 'ເປີດການບໍາລຸງຮັກສາ',

    'menu_home' => 'ໜ້າຫຼັກ',
    'menu_menu' => 'ເບິ່ງເມນູ',
    'menu_reservation' => 'ສັ່ງຈອງອາຫານ',
    'menu_login' => 'ເຂົ້າລະບົບ',
    'menu_logout' => 'ອອກລະບົບ',
    'menu_register' => 'ລົງທະບຽນ',
    'menu_my_account' => 'ບັນຊີຂ້ອຍ',
    'menu_account' => 'ຫຼັກ',
    'menu_detail' => 'ແກ້ໄຂລາຍລະອຽດ',
    'menu_address' => 'ທີ່ຢູ່',
    'menu_recent_order' => 'ລາຍການສັ່ງຊື້ຫຼ້າສຸດ',
    'menu_recent_reservation' => 'ລາຍການຈອງຫຼ້າສຸດ',
    'menu_locations' => 'ທີ່ຢູ່ພວກເຮົາ',
    'menu_contact' => 'ຕິດຕໍ່ພວກເຮົາ',
    'menu_admin' => 'Administrator',

    'alert_success' => '%s ສໍາເລັດ.',
    'alert_error' => 'ເກີດຂໍ້ຜິດພາດ, %s.',
    'alert_error_nothing' => 'ເກີດຂໍ້ຜິດພາດ, ບໍ່ມີຫຍັງ %s.',
    'alert_error_try_again' => 'ເກີດຂໍ້ຜິດພາດ, ກະລຸນາລອງໃໝ່ອີກຄັ້ງ.',
    'alert_warning_confirm' => 'ບໍ່ສໍາເລັດ! ເຈົ້າແນ່ໃຈບໍວ່າຈະດໍາເນີນການແທ້?',
    'alert_custom_error' => 'ມີບາງຢ່າງຜິດພາດ ແລະ ບໍ່ສາມາດສະແດງຜົນໄດ້',

    'alert_no_search_query' => 'Please type in a postcode/address to check if we can deliver to you.',
    'alert_info_outdated_browser' => 'You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.',

    'components' => [
        'button_new' => 'Add Component',
        'button_edit' => 'Edit Component',
        'button_delete' => 'Delete Component',
        'button_copy_partial' => 'Override Component Partial',
    ],

    'media_manager' => [
        'text_title' => 'Media Manager',
        'text_heading' => 'Media Manager',
        'text_empty' => 'No files found.',
        'text_read_only' => 'Read Only',
        'text_read_write' => 'Read & Write',
        'text_footer_note' => '%s items selected, %s',
        'text_no_access' => 'No Access',
        'text_items' => 'Items',
        'text_choose' => 'Choose',
        'text_attach' => 'Attach',
        'text_sort_by' => 'Sort By',
        'text_filter_by' => 'Filter By',
        'text_filter_search' => 'Search files and folders...',
        'text_new_folder' => 'New Folder',
        'text_rename_folder' => 'Rename Folder',
        'text_delete_folder' => 'Delete Folder',
        'text_move_folder' => 'Move Folder',
        'text_items_selected' => 'Items Selected',
        'text_folder_name' => 'Folder name',
        'text_file_name' => 'File name',
        'text_copy_destination_folder' => 'Select the destination folder to copy to',
        'text_move_destination_folder' => 'Select the destination folder to move to',

        'button_upload' => 'Upload',
        'button_preview' => 'Preview',
        'button_rename' => 'Rename',
        'button_move' => 'Move',
        'button_copy' => 'Copy',
        'button_delete' => 'Delete',
        'button_cancel' => 'Cancel',

        'label_name' => 'Name',
        'label_date' => 'Date',
        'label_size' => 'Size',
        'label_type' => 'Type',
        'label_path' => 'Path',
        'label_url' => 'URL',
        'label_dimension' => 'Dimension',
        'label_modified_date' => 'Modified Date',
        'label_extension' => 'Extension',
        'label_permission' => 'Permission',
        'label_filter_all' => 'Everything',
        'label_filter_image' => 'Images',
        'label_filter_video' => 'Videos',
        'label_filter_audio' => 'Audios',
        'label_filter_document' => 'Documents',

        'label_attachment_title' => 'Title',
        'label_attachment_description' => 'Description',
        'label_attachment_properties' => 'Custom Properties',
        'label_attachment_property_key' => 'Key',
        'label_attachment_property_value' => 'Value',

        'help_existing_files' => 'Existing file/folder will NOT be replaced',
        'help_attachment_config' => 'Add custom properties for this attachment',

        'alert_file_name_required' => 'Please enter your new file/folder name.',
        'alert_invalid_file_name' => 'Invalid file/folder name',
        'alert_invalid_new_file_name' => 'Invalid new file/folder name',
        'alert_file_exists' => 'File/Folder already exists',
        'alert_file_not_writable' => 'Permission denied: File is not writable.',
        'alert_file_not_found' => 'Permission denied or file not found',
        'alert_extension_not_allowed' => 'File extension is not allowed.',
        'alert_permission' => 'Warning: You do not have permission to %s, contact system administrator.',
        'alert_new_folder_disabled' => 'Creating new folder is disabled, check image/media manager settings.',
        'alert_rename_disabled' => 'Renaming file/folder is disabled, check image/media manager settings.',
        'alert_success_new_folder' => 'Folder created successfully',
        'alert_success_rename' => 'File/Folder renamed successfully',
        'alert_error_upload' => 'Something went wrong when saving the file, please try again.',
        'alert_success_upload' => 'Uploaded Successfully',
        'alert_upload_disabled' => 'Uploading is disabled, check image/media manager settings.',
        'alert_invalid_path' => 'Invalid upload path specified',
        'alert_copy_disabled' => 'Copying file/folder is disabled, check image/media manager settings.',
        'alert_select_copy_folder' => 'Please select the destination, the source and the file/folder you wants to copy.',
        'alert_select_copy_file' => 'Please select the file/folder you want to copy.',
        'alert_select_move_folder' => 'Please select the destination, the source and the file/folder you wants to move.',
        'alert_select_move_file' => 'Please select the file/folder you want to move.',
        'alert_success_copy' => 'File/Folder copied successfully',
        'alert_move_disabled' => 'Moving file/folder is disabled, check image/media manager settings.',
        'alert_success_move' => 'File/Folder moved successfully',
        'alert_delete_disabled' => 'Deleting file/folder is disabled, check image/media manager settings.',
        'alert_select_delete_file' => 'Please select the file/folder you wish to delete.',
        'alert_success_delete' => 'File (s) deleted successfully',
        'alert_select_item_to_attach' => 'Select an item to attach.',
        'alert_only_attach_to_saved' => 'You can only attach media to a saved form.',
        'alert_missing_mediable' => 'You must define a media tag %s within $mediable property in %s to attach a media.', get_called_class(),
    ],

    'home' => [
        'title' => 'Online Order!',
        'text_step_one' => 'Search',
        'text_step_two' => 'Choose',
        'text_step_three' => 'Pay by cash or card',
        'text_step_four' => 'Enjoy',
        'text_step_search' => 'Find and select restaurant that deliver to you by entering your postcode or address.',
        'text_step_choose' => 'Browse hundreds of menus to find the food you like.',
        'text_step_pay' => 'It\'s quick, easy and secure. Pay by Cash on Delivery or PayPal.',
        'text_step_enjoy' => 'Food is prepared & delivered to your door step or ready for pick-up at the restaurant.',
    ],

    'local' => [
        'text_tab_menu' => 'Menu',
        'text_tab_review' => 'Reviews',
        'text_tab_info' => 'Info',
        'text_tab_gallery' => 'Gallery',

        'menus' => [
            'title' => 'Menu',
        ],
        'info' => [
            'title' => 'Info',
        ],
        'gallery' => [
            'title' => 'Gallery',
        ],
        'reviews' => [
            'title' => 'Reviews',
        ],
    ],

    'checkout' => [
        'title' => 'Checkout',
        'success' => [
            'title' => 'Checkout Confirmation',
        ],
    ],

    'reservation' => [
        'title' => 'Reservation',
        'success' => [
            'title' => 'Reservation Confirmation',
        ],
    ],

    'cart' => [
        'title' => 'Cart',
    ],

    'locations' => [
        'title' => 'Locations',
    ],

    'contact' => [
        'title' => 'Contact',
    ],

    'pages' => [
        'title' => 'Pages',
        'text_theme_page' => 'Theme Page',
    ],

    'permissions' => [
        'name' => 'Frontend',
        'media_manager' => 'Upload and manage media contents',
        'themes' => 'Activate, deactivate, configure and modify front-end themes',
    ],

    'account' => [
        'title' => 'Account',

        'login' => [
            'title' => 'Login',
            'text_login' => 'Log In',
            'text_register' => 'Register <small>It\'s easy and always will be.</small>',
            'text_forgot' => 'Forgot password?',
            'text_login_register' => 'Already registered? <a href="%s">Login</a>',

            'button_login' => 'Login',
            'button_register' => 'Register',
        ],

        'register' => [
            'title' => 'Register',
        ],

        'address' => [
            'title' => 'Account',
        ],

        'settings' => [
            'title' => 'Settings',
        ],

        'orders' => [
            'title' => 'Orders',
        ],

        'reservations' => [
            'title' => 'Reservations',
        ],

        'reviews' => [
            'title' => 'Reviews',
        ],

        'inbox' => [
            'title' => 'Inbox',
        ],

        'reset' => [
            'title' => 'Account Password Reset',
            'text_heading' => 'Account Password Reset',
        ],
    ],

    'not_found' => [
        'layout_name' => 'Layout [%s] not found',
        'page_label' => 'Page not found',
        'page_message' => 'The requested page cannot be found',
        'active_theme' => 'Unable to load the active theme',
        'controller_action' => 'Action [%s] is not found in the controller [%s]',
        'layout' => 'The layout [%s] is not found.',
        'component' => 'The component [%s] is not found.',
        'partial' => 'The partial [%s] is not found.',
        'content' => 'The content [%s] is not found.',
        'method' => 'The method [:method] is not found in [:name].',
        'ajax_handler' => 'Ajax handler [%s] is not found.',
    ],

    'settings' => [
        'text_tab_media_manager' => 'Media',
        'text_tab_desc_media_manager' => 'Configure media uploads, copy, rename settings.',
    ],
];
