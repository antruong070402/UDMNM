<?php
/**
 * Script to set up Pressword homepage
 * Run this file once to configure the homepage
 */

// Include WordPress
require_once('../wp-config.php');

// Check if homepage already exists
$homepage = get_page_by_path('pressword-homepage');

if (!$homepage) {
    // Create new homepage
    $page_data = array(
        'post_title'    => 'Trang chủ Pressword',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'post_name'     => 'pressword-homepage',
        'page_template' => 'front-page.php'
    );
    
    // Insert the page
    $page_id = wp_insert_post($page_data);
    
    if ($page_id) {
        // Set as homepage
        update_option('show_on_front', 'page');
        update_option('page_on_front', $page_id);
        
        // Set the page template
        update_post_meta($page_id, '_wp_page_template', 'front-page.php');
        
        echo "<h2>✅ Thành công!</h2>";
        echo "<p>Trang chủ Pressword đã được tạo và thiết lập thành công!</p>";
        echo "<p><strong>ID trang:</strong> " . $page_id . "</p>";
        echo "<p><strong>URL:</strong> <a href='" . home_url() . "' target='_blank'>" . home_url() . "</a></p>";
        echo "<p><strong>Template:</strong> front-page.php</p>";
        
        echo "<hr>";
        echo "<h3>⚙️ Cài đặt đã thực hiện:</h3>";
        echo "<ul>";
        echo "<li>✅ Tạo trang chủ mới</li>";
        echo "<li>✅ Thiết lập làm trang chủ chính</li>";
        echo "<li>✅ Gán template front-page.php</li>";
        echo "<li>✅ Cấu hình WordPress Settings</li>";
        echo "</ul>";
        
        echo "<hr>";
        echo "<h3>🔗 Links:</h3>";
        echo "<ul>";
        echo "<li><a href='" . home_url() . "' target='_blank'>Xem trang chủ</a></li>";
        echo "<li><a href='" . admin_url('post.php?post=' . $page_id . '&action=edit') . "' target='_blank'>Chỉnh sửa trang</a></li>";
        echo "<li><a href='" . admin_url('options-reading.php') . "' target='_blank'>Cài đặt Reading</a></li>";
        echo "</ul>";
    } else {
        echo "<h2>❌ Lỗi!</h2>";
        echo "<p>Không thể tạo trang chủ. Vui lòng thử lại.</p>";
    }
} else {
    echo "<h2>ℹ️ Thông báo</h2>";
    echo "<p>Trang chủ đã tồn tại!</p>";
    echo "<p><strong>ID trang:</strong> " . $homepage->ID . "</p>";
    echo "<p><strong>URL:</strong> <a href='" . home_url() . "' target='_blank'>" . home_url() . "</a></p>";
    
    // Set as homepage if not already
    $current_homepage = get_option('page_on_front');
    if ($current_homepage != $homepage->ID) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $homepage->ID);
        echo "<p>✅ Đã thiết lập làm trang chủ</p>";
    }
    
    // Update template if needed
    $current_template = get_post_meta($homepage->ID, '_wp_page_template', true);
    if ($current_template !== 'front-page.php') {
        update_post_meta($homepage->ID, '_wp_page_template', 'front-page.php');
        echo "<p>✅ Đã cập nhật template thành front-page.php</p>";
    }
    
    echo "<hr>";
    echo "<h3>🔗 Links:</h3>";
    echo "<ul>";
    echo "<li><a href='" . home_url() . "' target='_blank'>Xem trang chủ</a></li>";
    echo "<li><a href='" . admin_url('post.php?post=' . $homepage->ID . '&action=edit') . "' target='_blank'>Chỉnh sửa trang</a></li>";
    echo "<li><a href='" . admin_url('options-reading.php') . "' target='_blank'>Cài đặt Reading</a></li>";
    echo "</ul>";
}

echo "<hr>";
echo "<p><em>Trang chủ Pressword đã sẵn sàng với thiết kế đẹp và responsive!</em></p>";
?>
