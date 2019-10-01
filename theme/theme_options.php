<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', static function () {
    $optionsPage = Container::make('theme_options', __('Cấu hình website', 'gaumap'))
                            ->set_page_file(__('cau-hinh-website', 'gaumap'))
                            ->set_page_menu_position(2)
                            ->set_icon('dashicons-admin-tools')
                            ->set_page_menu_title(__('Tùy chỉnh', 'gaumap'))
                            ->add_tab(__('Cấu hình website', 'gaumap'), [
                                Field::make('separator', 'info_separator_1', __('Ảnh thương hiệu', 'gaumap')),
                                Field::make('image', 'hinh_anh_mac_dinh' . currentLanguage(), __('Ảnh bài viết mặc định', 'gaumap'))->set_width(25),
                                Field::make('image', 'desktop_logo' . currentLanguage(), __('Ảnh logo máy tính', 'gaumap'))->set_width(25),
                                Field::make('image', 'mobile_logo' . currentLanguage(), __('Ảnh logo điện thoại', 'gaumap'))->set_width(25),
                                Field::make('image', 'favicon' . currentLanguage(), __('Ảnh favicon', 'gaumap'))->set_width(25),
                                Field::make('media_gallery', 'main_slider', __('Ảnh slider', 'gaumap')),
                            ])
                            ->add_tab(__('Liên hệ', 'gaumap'), [
                                Field::make('text', 'ten_cong_ty' . currentLanguage(), __('Tên công ty', 'gaumap'))->set_width(50),
                                Field::make('text', 'dia_chi' . currentLanguage(), __('Đia chỉ', 'gaumap'))->set_width(50),
                                Field::make('text', 'email' . currentLanguage(), __('Email', 'gaumap'))->set_width(33.33),
                                Field::make('text', 'dien_thoai' . currentLanguage(), __('Điện thoại', 'gaumap'))->set_width(33.33),
                                Field::make('text', 'zalo' . currentLanguage(), __('Zalo', 'gaumap'))->set_width(33.33),
                                Field::make('text', 'fan_page' . currentLanguage(), __('Fanpage', 'gaumap'))
                                     ->set_width(50),
                                Field::make('text', 'fan_page_id' . currentLanguage(), __('Fanpage ID', 'gaumap'))
                                     ->set_width(50),
                                Field::make('text', 'youtube' . currentLanguage(), __('Youtube', 'gaumap'))
                                     ->set_width(50),
                                Field::make('text', 'skype' . currentLanguage(), __('Skype', 'gaumap'))
                                     ->set_width(50),
                                Field::make('rich_text', 'short_intro' . currentLanguage(), __('Giới thiệu ngắn', 'gaumap')),
                                // Field::make('complex', 'factories' . currentLanguage(), __('Chi nhánh', 'gaumap'))
                                //      ->add_fields([
                                //          Field::make('text', 'ten' . currentLanguage(), __('Tên chi nhánh', 'gaumap')),
                                //          Field::make('text', 'dia_chi' . currentLanguage(), __('Địa chỉ', 'gaumap')),
                                //          Field::make('text', 'dien_thoai' . currentLanguage(), __('Điện thoại', 'gaumap')),
                                //      ]),
                                Field::make('rich_text', 'noi_dung_lien_he' . currentLanguage(), __('Nội dung trang liên hệ', 'gaumap'))
                                     ->set_width(50),
                                Field::make('textarea', 'ban_do_cong_ty' . currentLanguage(), __('Vị trí công ty trên bản đồ', 'gaumap'))->set_width(50),
                            ]);
});